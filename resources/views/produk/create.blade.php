<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
</head>
<body>

    <h1>Tambah Produk Baru</h1>

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

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf

        <label>Nama Produk:</label><br>
        <input type="text" name="nama" placeholder="Nama Produk"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" placeholder="Harga"><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('produk.index') }}">Kembali</a>
    </form>

</body>
</html>