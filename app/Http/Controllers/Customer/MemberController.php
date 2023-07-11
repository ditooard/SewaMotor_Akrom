<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(){
        $dataUser = Customer::where('id_user', '=', Auth::user()->id)->select('membership')->first();
        return view('membership', compact('dataUser'));
    }
    public function ajukanMember(){
        $ajukanMemberByAuth = Customer::where('id_user', '=', Auth::user()->id)->first();
        $ajukanMemberByAuth->update([
            'membership' => 'Proses'
        ]);
        return redirect()->back();
    }
}
