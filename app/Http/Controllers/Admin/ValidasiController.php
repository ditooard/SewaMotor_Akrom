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
        $dataCustomers = Customer::whereNotIn('id_user', [Auth::user()->id])->get();

        return view('validasiMember', compact('dataCustomers'));
    }

    public function setujuiKTP($id){
        $setujuiKTPByID = Customer::where('id_user', '=', $id)->first();
        $setujuiKTPByID->update([
            'status_nik' => 'Valid'
        ]);
        return redirect()->back();
    }
    public function tolakKTP($id){
        $tolakKTPByID = Customer::where('id_user', '=', $id)->first();
        $tolakKTPByID->update([
            'status_nik' => 'Tidak_Valid'
        ]);
        return redirect()->back();
    }
    public function setujuiMember($id){
        $setujuiKTPByID = Customer::where('id_user', '=', $id)->first();
        $setujuiKTPByID->update([
            'membership' => 'Member'
        ]);
        return redirect()->back();
    }
    public function tolakMember($id){
        $tolakKTPByID = Customer::where('id_user', '=', $id)->first();
        $tolakKTPByID->update([
            'membership' => 'Non_Member'
        ]);
        return redirect()->back();
    }
}
