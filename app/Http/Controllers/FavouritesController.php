<?php

namespace App\Http\Controllers;

use App\Models\Favourites;
use App\Http\Requests\StoreFavouritesRequest;
use App\Http\Requests\UpdateFavouritesRequest;

class FavouritesController extends Controller
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
     * @param  \App\Http\Requests\StoreFavouritesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFavouritesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function show(Favourites $favourites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function edit(Favourites $favourites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFavouritesRequest  $request
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFavouritesRequest $request, Favourites $favourites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favourites  $favourites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favourites $favourites)
    {
        //
    }
}
