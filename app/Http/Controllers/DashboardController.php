<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Motor;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $countPenyewa = Customer::where('status_nik', 'Valid')
            ->where('id_user', '!=', Auth::user()->id)
            ->count();
        $countKendaraan = Sewa::join('motors', 'motors.id', '=', 'sewa.id_motor')
            ->where(function ($query) {
                $query->where('sewa.status_sewa', 'Ditolak')
                    ->orWhere('sewa.status_sewa', 'Kembali');
            })
            ->count();
        $countKendaraanTersewa = Sewa::join('motors', 'motors.id', '=', 'sewa.id_motor')->where('sewa.status_sewa', '=', 'Sewa')
            ->count();
        $countMembership = Customer::where('membership', 'Member')
            ->where('id_user', '!=', Auth::user()->id)
            ->count();
        return view('dashboard', compact('countMembership', 'countKendaraan', 'countKendaraanTersewa', 'countPenyewa'));
    }
}
