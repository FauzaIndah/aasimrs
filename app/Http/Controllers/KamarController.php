<?php

namespace App\Http\Controllers;

use App\Models\KamarModel;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = KamarModel::get();
        return view('front.kamar.index', compact('kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('front.kamar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kamar = new KamarModel();
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->kelas      = $request->kelas;
        $kamar->id_gedung  = $request->id_gedung;
        $kamar->kapasitas  = $request->kapasitas;
        $kamar->save();

        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil ditambahkan');
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
        $kamar = KamarModel::findOrFail($id);
        return view('front.kamar.edit', compact('kamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kamar = KamarModel::findOrFail($id);
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->kelas      = $request->kelas;
        $kamar->id_gedung  = $request->id_gedung;
        $kamar->kapasitas  = $request->kapasitas;
        $kamar->save();

        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = KamarModel::findOrFail($id);
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil dihapus');
    }
}
