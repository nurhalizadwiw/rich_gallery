<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomposisiBuket extends Model
{
    use HasFactory;

    protected $table = 'komposisi_buket';
    protected $primaryKey = 'id_komposisi';

    protected $fillable = [
        'id_pesanan',
        'jenis_bunga_material',
        'jumlah',
        'alokasi_unit',
        'subtotal',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'id_pesanan', 'id_pesanan');
    }
}
