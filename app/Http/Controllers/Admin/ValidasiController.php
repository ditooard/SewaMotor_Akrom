<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidasiController extends Controller
{
    public function tampilDataKTP()
    {
        $dataUser = Customer::whereNotIn('id_user', [Auth::user()->id])->get();
        return view('validasiKtp', compact('dataUser'));
    }
    public function tampilDataMember()
    {
        $dataCustomers = Customer::whereNull('membership')->whereNotIn('id_user', [Auth::user()->id])->get();

        return view('validasiMember', compact('dataCustomers'));
    }
}
