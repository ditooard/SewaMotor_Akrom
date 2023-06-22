<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    protected $table='sewa';
    protected $fillable = [
        'tipe_sewa',
        'tipe_motor',
        'mulai_sewa',
        'selesai_sewa',
        'jumlah_unit',
        'keperluan_sewa',
    ];
}
