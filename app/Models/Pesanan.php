<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_pelanggan',
        'id_admin',
        'jenis_pesanan',
        'budget_buket',
        'tema_pilihan',
        'catatan_pelanggan',
        'tgl_waktu_delivery_pickup',
        'lokasi_kirim',
        'ongkir_doi',
        'total_pesanan',
        'status_pembayaran',
        'status_pesanan',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    public function komposisiBuket()
    {
        return $this->hasMany(KomposisiBuket::class, 'id_pesanan', 'id_pesanan');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pesanan', 'id_pesanan');
    }
}
