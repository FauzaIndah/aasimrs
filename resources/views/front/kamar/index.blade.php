@extends('front.layout.main_front')

@section('content')

<div class="container mt-4">
    <h1 class="fw-bold text-success">🛏️ DATA KAMAR</h1>
    <p class="text-muted">Informasi daftar kamar yang tersedia</p>
    <hr class="border border-success border-2 opacity-75 w-50 mx-auto">

    <a href="{{ route('kamar.create') }}" class="btn btn-success mb-3">+ Tambah Data Kamar</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Kamar</th>
                    <th>Kelas</th>
                    <th>Gedung</th>
                    <th>Kapasitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kamar as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->nama_kamar }}</td>
                        <td>{{ $item->kelas }}</td>
                        <td>{{ $item->id_gedung }}</td>
                        <td class="text-center">{{ $item->kapasitas }}</td>
                        <td class="text-center">
                            <a href="{{ route('kamar.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('kamar.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data kamar belum tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
