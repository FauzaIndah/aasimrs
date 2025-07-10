@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Data Obat</h2>
    <form action="{{ route('farmasi.update', $farmasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" value="{{ $farmasi->nama_obat }}" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ $farmasi->kategori }}" required>
        </div>
        <div class="mb-3">
            <label>Dosis</label>
            <input type="text" name="dosis" class="form-control" value="{{ $farmasi->dosis }}" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="{{ $farmasi->harga }}" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $farmasi->stok }}" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Kadaluarsa</label>
            <input type="date" name="tanggal_kadaluarsa" class="form-control" value="{{ $farmasi->tanggal_kadaluarsa }}" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3">{{ $farmasi->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('farmasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
