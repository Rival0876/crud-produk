<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>

    <h1>Edit Produk</h1>

    @if ($errors->any())
        <div style="color: red;">
            <strong>Whoops!</strong> Ada beberapa masalah input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Produk:</label><br>
        <input type="text" name="nama" value="{{ $produk->nama }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ $produk->deskripsi }}</textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $produk->harga }}"><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('produk.index') }}">Kembali</a>
    </form>

</body>
</html>