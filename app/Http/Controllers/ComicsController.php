<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class ComicsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy("id", "DESC")->get();

        return view('comics.index',[
            "comics" => $comics
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newComicData = $request->all();

        $newComic = new Comic();
        $newComic -> name = $newComicData['name'];
        $newComic -> email = $newComicData['email'];
        $newComic->fill($newComicData);
        $newComic -> save();

        return redirect()->route('comics.show', $newComic -> id);
        //return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($xComic)
    // {
    //     $aComic = Comic::find($xComic);

    //     return view("comics.show", [
    //         "Comic" => $aComic
    //     ]);
    // }
    // Uguale a ↓↓↓↓↓↓↓↓↓↓↓↓↓↓
    public function show(Comic $xComic)
    {
        return view("comics.show", [
            "comic" => $xComic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


