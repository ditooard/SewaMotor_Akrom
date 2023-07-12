<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Motor;
use App\Models\Sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sewa = Sewa::join('customers', 'sewa.id_customer', '=', 'customers.id')->where('customers.id_user', '=', Auth::user()->id)->get();
        return view('statusSewaCst', compact('sewa'));
    }
    public function riwayatSewa()
    {
        $dataSewa = Sewa::join('customers', 'sewa.id_customer', '=', 'customers.id')
        ->where(function ($query) {
            $query->where('sewa.status_sewa', '=', 'Sewa')
            ->orWhere('sewa.status_sewa', '=', 'Kembali');
        })
        ->where('customers.id_user', '=', Auth::user()->id)
        ->get();
        return view('riwayatSewa', compact('dataSewa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataKendaraan = Motor::join('sewa', 'sewa.id_motor', '=', 'motors.id')
        ->where(function ($query) {
            $query->where('sewa.status_sewa', '!=', 'Booking')
                ->orWhere('sewa.status_sewa', '=', 'Sewa');
        })
            ->get();
        return view('sewa', compact('dataKendaraan'));
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
            'tipe_kendaraan' => 'required',
            'mulai_sewa' => 'required',
            'selesai_sewa' => 'required',
            'keperluan_sewa' => 'required'
        ], [
            'tipe_kendaraan.required' => 'Pilih tipe motor terlebih dahulu',
            'mulai_sewa.required' => 'Masukkan tanggal peminjaman terlebih dahulu',
            'selesai_sewa.required' => 'Masukkan tanggal selesai terlebih dahulu',
            'keperluan_sewa.required' => 'Masukkan alasan peminjaman terlebih dahulu',
        ]);
        $getIDByLog = Customer::where('id_user', '=', Auth::user()->id)->first();
        Sewa::create([
            'id_motor' => $request->tipe_kendaraan,
            'id_customer' => $getIDByLog->id,
            'mulai_sewa' => $request->mulai_sewa,
            'selesai_sewa' => $request->selesai_sewa,
            'keperluan_Sewa' => $request->keperluan_sewa,
            'status_sewa' => 'Booking'
        ]);
        return redirect()->back()->with('success', 'Berhasil melakukan penyewaan');
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
