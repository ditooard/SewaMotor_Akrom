<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKendaraan = Motor::all();
        return view('inputDataMotor', compact('dataKendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipe_sewa' => 'required',
            'tipe_kendaraan' => 'required|unique:motors,tipe_kendaraan',
            'harga_sewa' => 'required',
            'plat_nomor' => 'required|unique:motors,plat_nomor',
            'spesifikasi' => 'required',
            'foto_kendaraan' => 'required|image|mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('foto_kendaraan');
        $image_name = $request->tipe_kendaraan . "." . $request->file('foto_kendaraan')->extension();
        $image->move(public_path('image_vehicle'), $image_name);
        Motor::create([
            'tipe_sewa' => $request->tipe_sewa,
            'tipe_kendaraan' => $request->tipe_kendaraan,
            'harga_sewa' => $request->harga_sewa,
            'plat_nomor' => $request->plat_nomor,
            'spesifikasi' => $request->spesifikasi,
            'foto_kendaraan' => $image_name
        ]);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
