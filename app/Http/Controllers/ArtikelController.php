<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //menampilkan berita
    $artikels = ArtikelModel::get();
    //($artikels);
    return view('artikel.index', compact('artikels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artikel = new ArtikelModel();
        $artikel -> judul = $request -> judul;
        $artikel -> content = $request -> content;
        $artikel->save();
        return redirect()->back();
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $artikel = ArtikelModel::findOrFail($id);
        return view ('artikel.edit',compact('artikel'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $artikel = ArtikelModel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->content = $request->content;
        $artikel->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = ArtikelModel::findOrFair($id);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
