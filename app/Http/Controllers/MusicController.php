<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller

{
    /**
     * Display a listing of the resource.
     * 
     * @return\Illuminate\Response
     */
    public function index()
    {
    
        $musics = Music::orderBy('created_at', 'DESC')->get();

        return view('pages.music.index', compact('musics'));

    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.music.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Music::create($request->all());

        return redirect()->route('music.index')->with('success', 'Music added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $music = Music::findOrFail($id);

        return view('pages.music.show', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
