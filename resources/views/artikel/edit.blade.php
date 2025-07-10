<h1>Edit Artikel</h1>
<form action="{{ route('artikel.update', $artikel->id) }}" method="POST">
    @csrf
    @method('PUT')
    Judul: <input type="text" name="judul" value="{{ $artikel->judul }}"><br><br>
    Isi Artikel: <br>
    <textarea name="content" rows="5" cols="40">{{ $artikel->content }}</textarea><br><br>
    <input type="submit" value="Update">
</form>