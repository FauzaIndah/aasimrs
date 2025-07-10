<h1>Artikel</h1>
<a href="{{ route ('artikel.create') }}"> Tambah Data</a>
<table border="1" cellpadding="8">
    <tr style="background: purple ; color:white;">
            <th>id</th>
            <th>judul</th>
            <th>tanggal</th>
            <th>author</th>
            <th>Kategori</th>
            <th>slug</th>
            <th>konten</th>
            <th>status</th>
            <th>sampul</th>
            <th></th>
        </tr>
        @foreach ($artikels as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->Judul  }}</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                <td>{{ $item->Author }}</td>
                <td>{{ $item->Kategori }}</td>
                <td>{{ $item->Slug }}</td>
                <td>{{ $item->Konten }}</td>
                <td>{{ $item->Status }}</td>
                <td>{{ $item->Sampul }}</td>
                <td>
                    <a href= "{{ route('artikel.edit', $item->id) }}" > Edit</a>
                    <from action="{{ route('artikel.destroy', $item->id) }}" ,method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin Ingin Menghapus?')">Delete</button>
                    </from>
                </td>
            </tr>
        @endforeach
    </tbody>