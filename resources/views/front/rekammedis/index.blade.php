@extends('front.layout.main_front')

@section('content')

<div class="container mt-4">
    <h1 class="fw-bold text-success">🩺 rekammedis</h1>
    <p class="text-muted">Informasi hasil pemeriksaan dan pengobatan pasien</p>
    <hr class="border border-success border-2 opacity-75 w-50 mx-auto">

    <a href="{{ route('rekammedis.create') }}" class="btn btn-success mb-3">+ Tambah Pemeriksaan</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Poli</th>
                    <th>Diagnosa</th>
                    <th>Obat</th>
                    <th>Waktu Input</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rekammedis as $index => $item)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $item->{'nama pasien'} }}</td>
                        <td>{{ $item->poli }}</td>
                        <td>{{ $item->diaknosa }}</td>
                        <td>{{ $item->obat }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td class="text-center">
                            <a href="{{ route('rekammedis.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('rekammedis.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Data pemeriksaan belum tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
