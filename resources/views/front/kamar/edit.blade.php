@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Data Kamar</h2>
    <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Kamar</label>
            <input type="text" name="nama_kamar" class="form-control" value="{{ $kamar->nama_kamar }}" required>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $kamar->kelas }}" required>
        </div>
        <div class="mb-3">
            <label>Gedung</label>
            <input type="text" name="id_gedung" class="form-control" value="{{ $kamar->id_gedung }}" required>
        </div>
        <div class="mb-3">
            <label>Kapasitas</label>
            <input type="number" name="kapasitas" class="form-control" value="{{ $kamar->kapasitas }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
