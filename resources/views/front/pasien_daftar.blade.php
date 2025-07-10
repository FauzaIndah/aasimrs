@extends('front.layout.main_front')
@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Pendaftaran Pasien</h1> 

    <form method="POST" action="{{ route('front.pendaftaran.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nama_pasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" placeholder="Masukkan nama Anda">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda">
        </div>

        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Anda">
        </div>

        <div class="mb-3">
            <label for="handphone" class="form-label">Handphone</label>
            <input type="text" class="form-control" id="handphone" name="handphone" placeholder="Masukkan nomor HP Anda">
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir Anda">
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
        </div>

        <div class="mb-3">
            <label for="jenis_layanan_kesehatan" class="form-label">Jenis Layanan Kesehatan</label>
            <input type="text" class="form-control" id="jenis_layanan_kesehatan" name="jenis_layanan_kesehatan" placeholder="Masukkan jenis layanan kesehatan">
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>

@endsection
