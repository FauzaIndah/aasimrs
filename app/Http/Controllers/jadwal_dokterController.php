<?php

namespace App\Http\Controllers;

use App\Models\jadwal_dokterModel;
use Illuminate\Http\Request;

class jadwal_dokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $jadwal_dokter = jadwal_dokterModel::get();
        return view('front.jadwal_dokter.index', compact('jadwal_dokter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front.jadwal_dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jadwal_dokter = new jadwal_dokterModel();
        $jadwal_dokter->nama_dokter  = $request->nama_dokter;
        $jadwal_dokter->spesialis    = $request->spesialis;
        $jadwal_dokter->hari         = $request->hari;
        $jadwal_dokter->jam_mulai    = $request->jam_mulai;
        $jadwal_dokter->jam_selesai  = $request->jam_selesai;
        $jadwal_dokter->ruangan      = $request->ruangan;
        $jadwal_dokter->save();
        
        return redirect()->route('jadwal_dokter.index');
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
        $jadwal_dokter = jadwal_dokterModel::findOrFail($id);
        return view('front.jadwal_dokter.edit', compact('jadwal_dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jadwal_dokter = jadwal_dokterModel::findOrFail($id);
        $jadwal_dokter->nama_dokter  = $request->nama_dokter;
        $jadwal_dokter->spesialis    = $request->spesialis;
        $jadwal_dokter->hari         = $request->hari;
        $jadwal_dokter->jam_mulai    = $request->jam_mulai;
        $jadwal_dokter->jam_selesai  = $request->jam_selesai;
        $jadwal_dokter->ruangan      = $request->ruangan;
        $jadwal_dokter->save();

        return redirect()->route('jadwal_dokter.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jadwal_dokter = jadwal_dokterModel::findOrFail($id);
        $jadwal_dokter->delete();
         
        return redirect()->route('jadwal_dokter.index')->with('success', 'Data berhasil dihapus');
    }
}
