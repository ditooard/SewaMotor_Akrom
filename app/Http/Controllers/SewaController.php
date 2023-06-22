<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function index(){
        $sewa = Sewa::all();
        return view('statusSewa',compact(['sewa']));
    }
}
