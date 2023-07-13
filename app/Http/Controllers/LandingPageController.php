<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        $dataKendaraan = Motor::all();
        return view('welcome', compact('dataKendaraan'));
    }
}
