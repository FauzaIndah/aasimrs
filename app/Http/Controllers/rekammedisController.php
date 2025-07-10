<?php

namespace App\Http\Controllers;

use App\Models\rekammedisModel;
use Illuminate\Http\Request;

class rekammedisController extends Controller
{
    /**
     * Tampilkan semua data rekam medis.
     */
    public function index()
    {
        $rekammedis = rekammedisModel::all();
        return view('front.rekammedis.index', compact('rekammedis'));
    }

    /**
     * Tampilkan form untuk menambah data.
     */
    public function create()
    {
        return view('front.rekammedis.create');
    }

    /**
     * Simpan data baru ke database.
     */
    public function store(Request $request)
    {
        $rekammedis = new rekammedisModel();
        $rekammedis->{'nama pasien'} = $request->nama_pasien;
        $rekammedis->poli = $request->poli;
        $rekammedis->diaknosa = $request->diaknosa;
        $rekammedis->obat = $request->obat;
        $rekammedis->save();

        return redirect()->route('rekammedis.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Tampilkan form untuk mengedit data.
     */
    public function edit($id)
    {
        $rekammedis = rekammedisModel::findOrFail($id);
        return view('front.rekammedis.edit', compact('rekammedis'));
    }

    /**
     * Perbarui data yang ada di database.
     */
    public function update(Request $request, $id)
    {
        $rekammedis = rekammedisModel::findOrFail($id);
        $rekammedis->{'nama pasien'} = $request->nama_pasien;
        $rekammedis->poli = $request->poli;
        $rekammedis->diaknosa = $request->diaknosa;
        $rekammedis->obat = $request->obat;
        $rekammedis->save();

        return redirect()->route('rekammedis.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Hapus data dari database.
     */
    public function destroy($id)
    {
        $rekammedis = rekammedisModel::findOrFail($id);
        $rekammedis->delete();

        return redirect()->route('rekammedis.index')->with('success', 'Data berhasil dihapus');
    }
}
