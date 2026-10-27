<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuotaHarian extends Model
{
    use HasFactory;

    protected $table = 'kuota_harian';
    protected $primaryKey = 'tanggal';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'tanggal',
        'max_kuota',
        'kuota_terpakai',
        'status_kuota',
    ];
}
