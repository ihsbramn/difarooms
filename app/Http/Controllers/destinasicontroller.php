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
        $hotel = Hotel::get();

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');


        $count = 0;
        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            // dd($marker);

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);

        }

        return view('destinasi/bandung', compact('hotel', 'idr_rates'));
    }

    public function asaf()
    {
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }

        return view('destinasi/asaf', compact('hotel', 'idr_rates'));
    }

    public function bedugul(){
        return view('destinasi/bedugul');
    }

    public function floatingmarket(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/floatingmarket', compact('hotel', 'idr_rates'));
    }

    public function borobudur(){
        return view('destinasi/borobudur');
    }

    public function rancaupas(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/rancaupas', compact('hotel', 'idr_rates'));
    }
    
    public function farmhouse(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/farmhouse', compact('idr_rates', 'hotel'));
    }
   
    public function tangkubanprahu(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/tangkubanprahu', compact('hotel', 'idr_rates'));
    }
    
    public function gedungsate(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/gedungsate', compact('hotel', 'idr_rates'));
    }
    
    public function cartil(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/cartil', compact('hotel', 'idr_rates'));
    }
    
    public function braga(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/braga', compact('hotel','idr_rates'));
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
    
    public function pulaukomodo(){
        return view('destinasi/pulaukomodo');
    }
    
    public function bunaken(){
        return view('destinasi/bunaken');
    }
    
    public function gilitrawangan(){
        return view('destinasi/gilitrawangan');
    }
    
    public function kap(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/kap', compact('hotel','idr_rates'));
    }
    
    public function zoo(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/zoo', compact('hotel','idr_rates'));
    }
    
    public function museumgeo(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/museumgeo', compact('hotel','idr_rates'));
    }
    
    public function tamanlalin(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/tamanlalin', compact('hotel','idr_rates'));
    }
    
    public function tsm(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/tsm', compact('hotel','idr_rates'));
    }
    
    public function msb(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/msb', compact('hotel','idr_rates'));
    }
    
    public function bcw(){
        $hotel = Hotel::all();

        $marker = [];

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');

        $prices = [];
        $idr_rates = [];

        // getting idr rates
        $req_url = 'https://api.exchangerate.host/convert?from=USD&to=IDR';
                $response_json = file_get_contents($req_url);
                
                if(false !== $response_json) {
                    try {
                        $response = json_decode($response_json);
                        if($response->success === true) {
                            // dd($response);
                            $decimal = round($response->result);
                            $usd_idr_rates = (int)$decimal;
                        }
                    } catch(\Exception $e) {
                            $rates = null;
                    } 
                };  
                
        if ($hotel->isNotEmpty()) {

            foreach ($hotel as $ht) {
                $marker[] = array(
                    "placeName" => $ht->ht_name,
                    "LatLng" => array(
                        "lat" =>$ht->ht_latitude,
                        "lng" =>$ht->ht_longitude
                    ),
                    "url" =>  route('/hotel/show', $ht->id)
                );
            };

            foreach ($hotel as $ht) {
                $keys[] = array(
                    $ht->ht_key,
                );
            };
            
            foreach ($keys as $key){
                $response = Http::get('https://data.xotelo.com/api/rates?', [
                    'hotel_key' => $key[0],
                    'chk_in' => $today,
                    'chk_out' => $tomorrow,
                ]);  
                $prices[] = json_decode($response);
                
            };
            foreach ($prices as $i => $item){
                if ($prices[$i]->error == null) {
                    array_push($idr_rates, [
                        'name' => $prices[$i]->result->rates[0]->name, 
                        'rate' => $prices[$i]->result->rates[0]->rate * $usd_idr_rates
                    ]);
                }else{
                    array_push($idr_rates, [
                        'name' => null, 
                        'rate' => null
                    ]);
                }
            }

        }elseif($hotel->isEmpty()){

            array_push($idr_rates, [
                    'name' => null, 
                    'rate' => null
                ]);
        }
        return view('destinasi/bcw', compact('hotel','idr_rates'));
    }
}
