<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function daftarPenyewa(){
        $dataPenyewa = Customer::where('status_nik', '=', 'Valid')
        ->get();
        return view('daftarPenyewa', compact('dataPenyewa'));
    }
    public function statusSewa(){
        $dataSewa = Sewa::all();
        return view('statusSewa', compact('dataSewa'));
    }
}
