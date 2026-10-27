<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::with(['pelanggan', 'admin', 'komposisiBuket', 'pembayaran'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $pesanan
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_pelanggan' => 'required|exists:pelanggan,id_pelanggan',
            'jenis_pesanan' => 'required|string',
            'tgl_waktu_delivery_pickup' => 'required|date',
            'lokasi_kirim' => 'required|string',
            'total_pesanan' => 'required|numeric',
        ]);

        $pesanan = Pesanan::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Pesanan berhasil dibuat',
            'data' => $pesanan
        ], 201);
    }
}
