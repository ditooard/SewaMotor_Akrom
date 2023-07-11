<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
            'id_user',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat',
            'rt_rw',
            'kelurahan',
            'kecamatan',
            'pekerjaan',
            'kewarganegaraan',
            'foto_ktp',
            'membership',
            'status_nik'
    ];

    public function pengguna(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
