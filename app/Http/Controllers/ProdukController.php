<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // READ: Menampilkan semua data
    public function index()
    {
        $produks = Produk::latest()->get();
        return view('produk.index', compact('produks'));
    }

    // CREATE: Menampilkan form tambah data
    public function create()
    {
        return view('produk.create');
    }

    // STORE: Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil ditambahkan.');
    }

    // SHOW: Menampilkan detail satu data (opsional, kita skip tampilan detail khusus)
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    // EDIT: Menampilkan form edit data
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    // UPDATE: Mengupdate data di database
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil diupdate.');
    }

    // DELETE: Menghapus data
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
                         ->with('success', 'Produk berhasil dihapus.');
    }
}