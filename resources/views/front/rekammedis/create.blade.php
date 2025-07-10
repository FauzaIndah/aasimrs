@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Rekam Medis</h2>
    <form action="{{ route('rekammedis.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Poli</label>
            <input type="text" name="poli" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Diaknosa</label>
            <input type="text" name="diaknosa" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Obat</label>
            <input type="text" name="obat" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('rekammedis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
