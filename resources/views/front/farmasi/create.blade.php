@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Obat</h2>
    <form action="{{ route('farmasi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Obat</label>
            <input type="text" name="nama_obat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Dosis</label>
            <input type="text" name="dosis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Kadaluarsa</label>
            <input type="date" name="tanggal_kadaluarsa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('farmasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
