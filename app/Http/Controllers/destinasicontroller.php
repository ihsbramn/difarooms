<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotel_Img;
use App\Models\HotelFascility;
use App\Models\HotelRoomtype;
use Carbon\Carbon;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class destinasicontroller extends Controller
{
    public function destinasi()
    {
        return view('destinasi/index');
    }

    public function bandung()
    {
        //getiing hotel data from db
        $hotel = Hotel::simplePaginate(4);

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
        $response_json = file_get_contents($req_url);

        if (false !== $response_json) {
            try {
                $response = json_decode($response_json);
                if ($response->success === true) {
                    // dd($response);
                    $decimal = round($response->result);
                    $usd_idr_rates = (int)$decimal;
                }
            } catch (\Exception $e) {
                $rates = null;
            }
        };

        foreach ($hotel as $ht) {
            $keys[] = array(
                $ht->ht_key,
            );
        };
        $prices = [];

        foreach ($keys as $key) {
            $response = Http::get('https://data.xotelo.com/api/rates?', [
                'hotel_key' => $key[0],
                'chk_in' => $today,
                'chk_out' => $tomorrow,
            ]);
            $prices[] = json_decode($response);
        };

        $idr_rates = [];

        foreach ($prices as $i => $item) {
            if ($prices[$i]->error == null) {
                array_push($idr_rates, [
                    'name' => $prices[$i]->result->rates[0]->name,
                    'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                ]);
            } else {
                array_push($idr_rates, [
                    'name' => null,
                    'rate' => null
                ]);
            }
        }

        return view('destinasi/bandung', compact('hotel', 'idr_rates'));
    }

    public function asaf()
    {
        $hotel = Hotel::all();

        $marker = [];

        foreach ($hotel as $ht) {
            $marker[] = array(
                "placeName" => $ht->ht_name,
                "LatLng" => array(
                    "lat" => $ht->ht_latitude,
                    "lng" => $ht->ht_longitude
                ),
                "url" =>  route('/hotel/show', $ht->id)
            );
        }

        // dd($hotel, $marker);
        return view('destinasi/asaf', compact('hotel', 'marker'));
    }

    public function bedugul(){
        return view('destinasi/bedugul');
    }

    public function floatingmarket(){
        return view('destinasi/floatingmarket');
    }

    public function borobudur(){
        return view('destinasi/borobudur');
    }

    public function rancaupas(){
        return view('destinasi/rancaupas');
    }
    
    public function farmhouse(){
        return view('destinasi/farmhouse');
    }
   
    public function tangkubanprahu(){
        return view('destinasi/tangkubanprahu');
    }
    
    public function gedungsate(){
        return view('destinasi/gedungsate');
    }
    
    public function cartil(){
        return view('destinasi/cartil');
    }
    
    public function braga(){
        return view('destinasi/braga');
    }

    public function aceh(){
        return view('destinasi/aceh');
    }
    
    public function bali(){
        return view('destinasi/bali');
    }
    
    public function batam(){
        return view('destinasi/batam');
    }
    
    public function bogor(){
        return view('destinasi/bogor');
    }
    
    public function jakarta(){
        return view('destinasi/jakarta');
    }
    
    public function kudus(){
        return view('destinasi/kudus');
    }
    
    public function lombok(){
        return view('destinasi/lombok');
    }
    
    public function makassar(){
        return view('destinasi/makassar');
    }
    
    public function malang(){
        return view('destinasi/malang');
    }
    
    public function manado(){
        return view('destinasi/manado');
    }
    
    public function padang(){
        return view('destinasi/padang');
    }
    
    public function palembang(){
        return view('destinasi/palembang');
    }
    
    public function rajaampat(){
        return view('destinasi/rajaampat');
    }
    
    public function semarang(){
        return view('destinasi/semarang');
    }
    
    public function solo(){
        return view('destinasi/solo');
    }
    
    public function surabaya(){
        return view('destinasi/surabaya');
    }
    
    public function yogya(){
        return view('destinasi/yogya');
    }
}
