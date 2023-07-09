<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    public function tampilDataKTP(){
        $dataUser = Customer::all();
        return view('validasiKtp', compact('dataUser'));
    }
    public function tampilDataMember(){
        $dataCustomers = Customer::whereNull('membership')->get();

        return view('validasiMember', compact('dataCustomers'));
    }
}
