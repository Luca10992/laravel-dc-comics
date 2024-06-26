<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $comics = Comic::paginate(12);
        return view('comics.index', compact("comics"));
    }

    public function error()
    {
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic;
        $comic->fill($data);

        $comic->save();
        
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Comic $comic)
    {
        $comics = Comic::all();
        return view("comics.show", compact("comic","comics"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}