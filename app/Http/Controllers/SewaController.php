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

    public function create(){
        return view('sewa');
    }
    public function store(Request $request){
        // dd($request->all());
        Sewa::create($request->except(['_token','submit']));
        return redirect('/statusSewaCst');
    }
}
