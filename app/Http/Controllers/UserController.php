<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Forum;
use App\Models\Hotel;
use App\Models\Favourites;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function myforum()
    {
        $count = 1;

        // getting logged user
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;

        $forum_user = Forum::where(
            'fr_user_id', '=', $user_id)
            ->get();

        // dd($user_id, $user_name, $forum_user);

        return view('user/myforum' ,compact('forum_user','count'));
    }

    public function myfavourites(){
        $count = 1;

         // getting logged user
        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;

        $fav= Favourites::where(
            'fv_user_id', '=' , $user_id
            )->get();

            // dd($fav);

        return view('user/myfavourites', compact('fav'));
    }

    public function aboutus(){
        
        return view('aboutus');
    }
}
