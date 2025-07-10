@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Kamar</h2>
    <form action="{{ route('kamar.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Kamar</label>
            <input type="text" name="nama_kamar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Gedung</label>
            <input type="text" name="id_gedung" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kapasitas</label>
            <input type="number" name="kapasitas" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
