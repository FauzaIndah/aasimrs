@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Jadwal Dokter</h2>
    <form action="{{ route('jadwal_dokter.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Ruangan</label>
            <input type="text" name="ruangan" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
