@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Jadwal Dokter</h2>
    <form action="{{ route('jadwal_dokter.update', $jadwal_dokter->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama_dokter" class="form-control" value="{{ $jadwal_dokter->nama_dokter }}" required>
        </div>
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control" value="{{ $jadwal_dokter->spesialis }}" required>
        </div>
        <div class="mb-3">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" value="{{ $jadwal_dokter->hari }}" required>
        </div>
        <div class="mb-3">
            <label>Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" value="{{ $jadwal_dokter->jam_mulai }}" required>
        </div>
        <div class="mb-3">
            <label>Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" value="{{ $jadwal_dokter->jam_selesai }}" required>
        </div>
        <div class="mb-3">
            <label>Ruangan</label>
            <input type="text" name="ruangan" class="form-control" value="{{ $jadwal_dokter->ruangan }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jadwal_dokter.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
