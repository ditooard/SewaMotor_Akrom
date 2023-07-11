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
            'foto_kendaraan' => 'required|image|mimes:jpeg,jpg,png|max:2048'
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

        return redirect()->back()->with('success', 'Berhasil menambah kendaraan');
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
        $request->validate([
            'tipe_sewa' => 'required',
            'tipe_kendaraan' => 'required|unique:motors,tipe_kendaraan,' . $id,
            'harga_sewa' => 'required',
            'plat_nomor' => 'required|unique:motors,plat_nomor,' . $id,
            'spesifikasi' => 'required',
            'foto_kendaraan' => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $dataKendaraan = Motor::findOrFail($id);
        $dataKendaraan->update([
            'tipe_sewa' => $request->tipe_sewa,
            'tipe_kendaraan' => $request->tipe_kendaraan,
            'harga_sewa' => $request->harga_sewa,
            'plat_nomor' => $request->plat_nomor,
            'spesifikasi' => $request->spesifikasi
        ]);

        if ($request->hasFile('foto_kendaraan')) {
            $image = $request->file('foto_kendaraan');
            $image_name = $request->tipe_kendaraan . "." . $request->file('foto_kendaraan')->extension();
            $image->move(public_path('image_vehicle'), $image_name);

            if (!empty($dataKendaraan->foto_kendaraan)) {
                unlink(public_path('image_vehicle/' . $dataKendaraan->foto_kendaraan));
            }

            $dataKendaraan->update([
                'foto_kendaraan' => $image_name
            ]);
        }

        return redirect()->back()->with('success', 'Berhasil update kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            // Temukan data yang ingin dihapus berdasarkan ID
            $dataKendaraan = Motor::findOrFail($id);

            // Hapus gambar jika ada
            if (!empty($dataKendaraan->foto_kendaraan)) {
                unlink(public_path('image_vehicle/' . $dataKendaraan->foto_kendaraan));
            }

            // Hapus data
            $dataKendaraan->delete();

            // Setelah berhasil menghapus data, kembalikan respons atau lakukan tindakan lainnya
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan respons dengan pesan error
            return redirect()->back()->with('error', 'Gagal menghapus data karena sudah disewa');
        }
    }
}
