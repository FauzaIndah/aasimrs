@extends('front.layout.main_front')

@section('content')

<div class="container mt-4">
    <h1 class="fw-bold text-success">💊 DATA OBAT</h1>
    <p class="text-muted">Informasi daftar obat yang tersedia di farmasi</p>
    <hr class="border border-success border-2 opacity-75 w-50 mx-auto">

    <a href="{{ route('farmasi.create') }}" class="btn btn-success mb-3">+ Tambah Data Obat</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Kategori</th>
                    <th>Dosis</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kadaluarsa</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($farmasi as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->nama_obat }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->dosis }}</td>
                        <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="text-center">{{ $item->stok }}</td>
                        <td>{{ $item->tanggal_kadaluarsa }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td class="text-center">
                            <a href="{{ route('farmasi.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('farmasi.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Data obat belum tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
