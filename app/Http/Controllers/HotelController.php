<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Hotel_Img;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;

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
        return view('hotel/index',compact('hotel'));
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
        // $request->validate(([
        //     'ht_filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        // ]));

        // $image = $request->file('ht_filename');
        // $destinationPath = public_path('/images');
        // $imgName = time() . '.' . $image->getClientOriginalExtension();
        // $image->move($destinationPath, $imgName);

        Hotel::create([
            'ht_name' => $request->ht_name,
            'ht_address' => $request->ht_address,
            'ht_description' => $request->ht_description,
            'ht_urlvideo' => $request->ht_urlvideo,
            'ht_fascility' => $request->ht_fascility,
            'ht_accesible' => $request->ht_accesible,
            'ht_accesible_detail' => $request->ht_accesible_detail,
            'ht_price_estimate' => $request->ht_price_estimate,
            'ht_contact' => $request->ht_contact,
            'ht_roomtype' => $request->ht_roomtype,
            'ht_embedmaps' => $request->ht_embedmaps,
            'ht_latitude' => $request->ht_latitude,
            'ht_longitude' => $request->ht_longitude,
            // 'ht_filename' => $imgName,
        ]);
        
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
        $hotel = Hotel::find($id);

        $hotel_img = Hotel_Img::where('ht_id', '=' , $id)->get();

        // dd($hotel, $hotel_img);
        
        return view('/hotel/show', compact('hotel','hotel_img'));
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
        return view('/hotel/edit', compact('hotel','hotel_img'));
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
