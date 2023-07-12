<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $dataKendaraan = Motor::take(3)->get();
        return view('welcome', compact('dataKendaraan'));
    }
}
