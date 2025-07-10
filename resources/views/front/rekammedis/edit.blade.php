@extends('front.layout.main_front')

@section('content')
<div class="container mt-4">
    <h2>Edit Data Rekam Medis</h2>
    <form action="{{ route('rekammedis.update', $rekammedis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Pasien</label>
            <input type="text" name="nama_pasien" class="form-control" value="{{ $rekammedis->{'nama pasien'} }}" required>
        </div>

        <div class="mb-3">
            <label>Poli</label>
            <input type="text" name="poli" class="form-control" value="{{ $rekammedis->poli }}" required>
        </div>

        <div class="mb-3">
            <label>Diaknosa</label>
            <input type="text" name="diaknosa" class="form-control" value="{{ $rekammedis->diaknosa }}" required>
        </div>

        <div class="mb-3">
            <label>Obat</label>
            <input type="text" name="obat" class="form-control" value="{{ $rekammedis->obat }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('rekammedis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
