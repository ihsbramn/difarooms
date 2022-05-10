<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Requests\StoreForumRequest;
use App\Http\Requests\UpdateForumRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forum = Forum::all();
        // dd($forum);
        return view('forum/index', compact('forum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreForumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForumRequest $request)
    {
        $request->validate(([
            'fr_filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]));

        $image = $request->file('fr_filename');
        $destinationPath = public_path('/images');
        $imgName = time() . '.' . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imgName);

        Forum::create([
            'fr_user_id' => $request->fr_user_id,
            'fr_title' => $request->fr_title,
            'fr_body' => $request->fr_body,
            'fr_filename' => $imgName,
        ]);

        return redirect('/forum')->with('success', 'Forum Telah Terposting!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForumRequest  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateForumRequest $request, Forum $forum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        //
    }
}
