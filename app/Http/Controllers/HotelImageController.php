<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel_Img;

class HotelImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
        ]);

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads', $name, 'public');

                Hotel_Img::create([
                    'ht_id' => $request->ht_id,
                    'name' => $name,
                    'path' => '/storage/'.$path
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully');
    }
}
