<?php

namespace App\Http\Controllers;

use App\Models\HotelRoomtype;
use App\Http\Requests\StoreHotelRoomtypeRequest;
use App\Http\Requests\UpdateHotelRoomtypeRequest;

class HotelRoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHotelRoomtypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelRoomtypeRequest $request)
    {
        $request->validate(([
            'name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));

        $image = $request->file('name');
        $name = rand() . $image->getClientOriginalName();
        $path = $image->storeAs('uploads', $name, 'public');

        HotelRoomtype::create([
            'ht_id' => $request->ht_id,
            'name_roomtype' => $request->name_roomtype,
            'description' => $request->description,
            'name' => $name,
            'path' => '/storage/'.$path,
        ]);

        // dd($request);

        return back()->with('success', 'Roomtypes added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotelRoomtype  $hotelRoomtype
     * @return \Illuminate\Http\Response
     */
    public function show(HotelRoomtype $hotelRoomtype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelRoomtype  $hotelRoomtype
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelRoomtype $hotelRoomtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelRoomtypeRequest  $request
     * @param  \App\Models\HotelRoomtype  $hotelRoomtype
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelRoomtypeRequest $request, HotelRoomtype $hotelRoomtype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelRoomtype  $hotelRoomtype
     * @return \Illuminate\Http\Response
     */
    public function destroy(HotelRoomtype $hotelRoomtype)
    {
        //
    }
}
