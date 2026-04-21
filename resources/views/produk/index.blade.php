<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Produk</title>
</head>
<body>

    <h1>Daftar Produk</h1>

    <!-- Pesan Sukses -->
    @if ($message = Session::get('success'))
        <p style="color: green;">{{ $message }}</p>
    @endif

    <a href="{{ route('produk.create') }}">Tambah Produk Baru</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach ($produks as $produk)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $produk->nama }}</td>
            <td>{{ $produk->deskripsi }}</td>
            <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
            <td>
                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
                    <a href="{{ route('produk.edit', $produk->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>