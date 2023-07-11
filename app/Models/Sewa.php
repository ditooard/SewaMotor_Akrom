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
        'mulai_sewa',
        'selesai_sewa',
        'keperluan_Sewa',
        'status_sewa',
        'tanggal_kembali'
    ];
    public function penyewa(): HasOne
    {
        return $this->hasOne(Customer::class, 'id', 'id_customer');
    }
    public function barang_sewa(): HasOne{
        return $this->hasOne(Motor::class, 'id', 'id_motor');
    }
}
