<h1>Tambah Data Artikel</h1>
<form action="{{ route('artikel.store') }}" method="POST">
    @csrf
    Judul <input type="text" name="judul"><br>
    Isi Artikel: <br>
    <textarea name="content" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Simpan">
</form>
