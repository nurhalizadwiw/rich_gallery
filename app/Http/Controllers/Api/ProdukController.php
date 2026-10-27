<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('relasiKategori')->get();
        return response()->json([
            'status' => 'success',
            'data' => $produk
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|numeric',
            'tipe_produk' => 'required|string',
            'jumlah_stok' => 'required|integer',
        ]);

        $produk = Produk::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Produk berhasil ditambahkan',
            'data' => $produk
        ], 201);
    }
}
