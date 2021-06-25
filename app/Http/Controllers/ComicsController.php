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
        $comics = Comic::orderBy("id", "ASC")->get();

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
        // $newComic -> name = $newComicData['name'];
        // $newComic -> email = $newComicData['email'];
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
    // public function show($comic)
    // {
    //     $aComic = Comic::find($comic);

    //     return view("comics.show", [
    //         "Comic" => $aComic
    //     ]);
    // }
    // Uguale a ↓↓↓↓↓↓↓↓↓↓↓↓↓↓
    public function show(Comic $comic)
    {

        if(is_null($comic)){
            abort(404);
        }

        return view("comics.show", [
            "comic" => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        if(is_null($comic)){
            abort(404);
        }

        return view ("comics.edit",[
            "comic" => $comic
        ]);
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
        $comic = Comic::findOrFail($id); // se non trova fa un abort(404)
        $formData = $request->all();

        $request->validate([
            'title'=> 'required'
        ]);

        $comic -> update($formData);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id); // se non trova fa un abort(404)
        $comic -> delete();

        return redirect()->route('comics.index');
    }
}


