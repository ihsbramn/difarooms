<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotel_Img;
use App\Models\HotelFascility;
use App\Models\HotelRoomtype;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use App\Models\Favourites;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use stdClass;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //getting date
        $format = 'yyyy-mm-dd';
        // tomorrow
        $today = Carbon::today()->format('Y-m-d');
        // $today = Carbon::today()->addDays(1)->format('Y-m-d');
        // day after tomorrow
        $tomorrow = Carbon::tomorrow()->format('Y-m-d');
        // $tomorrow = Carbon::tomorrow()->addDays(1)->format('Y-m-d');
        $hotel = Hotel::paginate(10);
        //  main
        $fav = Favourites::all();
        $count = 0;
        $marker = [];
        $prices = [];
        $idr_rates = [];
        $hotel_fascility = HotelFascility::all();
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
                    $ht->ht_name,
                    $ht->ht_address,
                    $ht->ht_latitude,
                    $ht->ht_longitude,
                    route('/hotel/show', $ht->id)
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

        // testing

        // dd($idr_rates);
        // dd($hotel);
        // dd($hotel_fascility);
        // dd($hotel, $marker, $hotel_fascility);

        return view('hotel/index',compact(
            'hotel',
            'marker',
            'hotel_fascility',
            'fav',
            'count',
            'idr_rates',
            'marker'
        ));
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
        $fa_id = HotelFascility::where('ht_id', '=' , $id)->get(['ht_id'])->first();
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
                // dd($usd_idr_rates);
            // convert currency api GET
            // conversion rate from usd ot idr and push to array
            foreach ($rates as $rt){
                $price = (int)$rt->rate * $usd_idr_rates;
                array_push($idr_rate, [
                    'name' => $rt->name,
                    'rate' => $price
                ]);
            };
            //getting hotel url by TripAdvisor
            $url_tripadvisor = $hotel_price->result->hotel_url[0];
            
            
        };

        // $rates = (object)$idr_rate;

        $slice = array_slice($idr_rate,0,4);

        $rates = (object)$slice;

        // testing
        // dd($hotel, $hotel_img, $hotel_fascility, $hotel_roomtype,$rates,$url_tripadvisor,$fa_id);
        

        // dd($hotel_img);

        
        return view('/hotel/show', compact(
            'hotel',
            'hotel_img',
            'hotel_fascility',
            'hotel_roomtype',
            'rates',
            'url_tripadvisor',
            'fa_id'
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
        $hotel_fas = HotelFascility::where('ht_id', '=' , $id)->get();

        // dd($hotel,$hotel_img,$hotel_fas);
        return view('/hotel/edit', compact(
            'hotel',
            'hotel_img',
            'hotel_fas'
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