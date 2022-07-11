<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotel_Img;
use App\Models\HotelFascility;
use App\Models\HotelRoomtype;
use Illuminate\Http\Request;

class destinasicontroller extends Controller
{
    public function destinasi()
    {
        return view('destinasi/index');
    }
    
    public function bandung()
    {
        $hotel = Hotel::all();

        $marker = [];

        foreach ($hotel as $ht) {
            $marker[] = array(
                "placeName" => $ht->ht_name,
                "LatLng" => array(
                    "lat" =>$ht->ht_latitude,
                    "lng" =>$ht->ht_longitude
                ),
                "url" =>  route('/hotel/show', $ht->id)
            );
        }

        // dd($hotel, $marker);
        return view('destinasi/bandung',compact('hotel','marker'));
    }
    
    public function asaf()
    {
        $hotel = Hotel::all();

        $marker = [];

        foreach ($hotel as $ht) {
            $marker[] = array(
                "placeName" => $ht->ht_name,
                "LatLng" => array(
                    "lat" =>$ht->ht_latitude,
                    "lng" =>$ht->ht_longitude
                ),
                "url" =>  route('/hotel/show', $ht->id)
            );
        }

        // dd($hotel, $marker);
        return view('destinasi/asaf',compact('hotel','marker'));
    }
}
