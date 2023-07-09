<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sewa extends Model
{
    use HasFactory;
    protected $table='sewa';
    public $timestamps=false;
    protected $fillable = [
        'id_motor',
        'id_customer',
        'tipe_sewa',
        'tipe_motor',
        'mulai_sewa',
        'selesai_sewa',
        'jumlah_unit',
        'keperluan_sewa',
    ];
    public function penyewa(): HasOne
    {
        return $this->hasOne(Customer::class, 'id', 'id_customer');
    }
}
