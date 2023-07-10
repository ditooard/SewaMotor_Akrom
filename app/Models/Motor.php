<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'tipe_sewa',
        'tipe_kendaraan',
        'harga_sewa',
        'plat_nomor',
        'spesifikasi',
        'foto_kendaraan'
    ];
}
