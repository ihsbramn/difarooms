<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotel_Img;
use App\Models\HotelFascility;
use App\Models\HotelRoomtype;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use AshAllenDesign\LaravelExchangeRates\ExchangeRate;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        $hotel_fascility = HotelFascility::all();
        // dd($hotel, $marker, $hotel_fascility);

        return view('hotel/index',compact('hotel','marker','hotel_fascility'));
    }

    public function map()
    {
        return view('hotel/map');
    }

    public function admin()
    {
        $hotel = Hotel::all();
        // dd($hotel);
        return view('hotel/admin', compact('hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotel/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelRequest $request)
    {
        
        $request->validate(([
            'ht_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));

        $image = $request->file('ht_thumbnail');
        $imgName = rand() . $image->getClientOriginalName();
        $ht_path = $image->storeAs('uploads', $imgName, 'public');

        Hotel::create([
            'ht_name' => $request->ht_name,
            'ht_key' => $request->ht_key,
            'ht_address' => $request->ht_address,
            'ht_description' => $request->ht_description,
            'ht_urlvideo' => $request->ht_urlvideo,
            // 'ht_fascility' => $request->ht_fascility,
            'ht_accesible' => $request->ht_accesible,
            // 'ht_accesible_detail' => $request->ht_accesible_detail,
            // 'ht_price_estimate' => $request->ht_price_estimate,
            'ht_contact' => $request->ht_contact,
            // 'ht_roomtype' => $request->ht_roomtype,
            'ht_embedmaps' => $request->ht_embedmaps,
            'ht_latitude' => $request->ht_latitude,
            'ht_longitude' => $request->ht_longitude,
            'ht_thumbnail' => $imgName,
            'ht_path' => '/storage/'.$ht_path,
            'ht_author' => $request->ht_author
        ]);
        
        // dd($request);
        return redirect('/hotel/admin')->with('success', 'Sucsess !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //getting spesific id
        $hotel = Hotel::find($id);

        $hotel_img = Hotel_Img::where('ht_id', '=' , $id)->get();
        $hotel_fascility = HotelFascility::where('ht_id', '=' , $id)->get();
        $hotel_roomtype = HotelRoomtype::where('ht_id', '=' , $id)->get();

        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // $today = Carbon::today()->addDays(1)->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');
        // $tomorrow = Carbon::tomorrow()->addDays(1)->format('Y-m-d');

        //hotel rates api GET
        $response = Http::get('https://data.xotelo.com/api/rates?', [
            'hotel_key' => $hotel->ht_key,
            // 'hotel_key' => 'g297704-d301781', //testing 
            'chk_in' => $today,
            'chk_out' => $tomorrow,
        ]);

        $hotel_price = json_decode($response);

        // array for hotel rates
        $idr_rate = [];
        
        // error handler
        if ($hotel_price->result == null) {

            // push null value if api not avail
            array_push($idr_rate, [
                'name' => null,
                'rate' => null
            ]);
            $url_tripadvisor = 'null';

        }else{
            // getting rates data
            $rates = $hotel_price->result->rates;

            // convert currency api GET
            $response_rate_api = Http::get('https://api.apilayer.com/exchangerates_data/convert?',[
                'to' =>'IDR',
                'from' =>'USD',
                'amount' => 1,
                'apikey' => env('IDR_RATE_API_KEY')
            ]);
            
            $convert_currency = json_decode($response_rate_api);
            // dd($convert_currency);
            if ($convert_currency == null) {
                
            }else{
                $usd_idr = $convert_currency->info->rate;
                // convert currency api GET
                // conversion rate from usd ot idr and push to array
                foreach ($rates as $rt){
                    $price = (int)$rt->rate * $usd_idr;
                    array_push($idr_rate, [
                        'name' => $rt->name,
                        'rate' => $price
                    ]);
                };
                $rates = (object)$idr_rate;
                //getting hotel url by TripAdvisor
                $url_tripadvisor = $hotel_price->result->hotel_url[0];
            }
        };

        // testing
        // dd($hotel, $hotel_img, $hotel_fascility, $hotel_roomtype,$rates,$url_tripadvisor);
        
        // dd($idr_rate);
        
        return view('/hotel/show', compact(
            'hotel',
            'hotel_img',
            'hotel_fascility',
            'hotel_roomtype',
            'rates',
            'url_tripadvisor'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $hotel = Hotel::find($id);
        $hotel_img = Hotel_Img::where('ht_id', '=' , $id)->get();

        // dd($hotel,$hotel_img);
        return view('/hotel/edit', compact(
            'hotel',
            'hotel_img'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelRequest  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelRequest $request, $id)
    {
        $input = $request->all();

        $hotel = Hotel::find($id);
        $hotel->update($input);
        
        return redirect('/hotel/admin')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::find($id)->delete();
        return redirect('/hotel/admin')->with('success', 'Success !, Data Telah Dihapus!');
    }
}