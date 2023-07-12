<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Sewa;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function daftarPenyewa()
    {
        $dataPenyewa = Customer::where('status_nik', '=', 'Valid')
            ->get();
        return view('daftarPenyewa', compact('dataPenyewa'));
    }
    public function statusSewa()
    {
        $dataSewa = Sewa::all();
        return view('statusSewa', compact('dataSewa'));
    }
    public function validasiSewa(Request $request, $id)
    {
        $setujuiSewaById = Sewa::where('id', '=', $id)->first();

        if ($request->status_sewa == 'Kembali') {
            $request->validate([
                'tanggal_kembali' => 'required'
            ], [
                'tanggal_kembali.required' => 'Anda harus mengisi tanggal kembali terlebih dahulu.'
            ]);

            $setujuiSewaById->update([
                'tanggal_kembali' => $request->tanggal_kembali
            ]);
        } elseif ($request->status_sewa == 'Booking' || $request->status_sewa == 'Sewa' || $request->status_sewa == 'Ditolak') {
            $setujuiSewaById->update([
                'tanggal_kembali' => null
            ]);
        }

        $setujuiSewaById->update([
            'status_sewa' => $request->status_sewa
        ]);

        return redirect()->back()->with('success', 'Berhasil mengubah status penyewaan');
    }

    public function hapusPenyewa($id)
    {
        try {
            // Temukan data yang ingin dihapus berdasarkan ID
            $dataPenyewa = Customer::findOrFail($id);

            // Hapus gambar jika ada
            if (!empty($dataPenyewa->foto_ktp)) {
                unlink(public_path('img/' . $dataPenyewa->foto_ktp));
            }

            // Hapus data
            $dataPenyewa->delete();

            // Setelah berhasil menghapus data, kembalikan respons atau lakukan tindakan lainnya
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan respons dengan pesan error
            return redirect()->back()->with('error', 'Gagal menghapus data karena penyewa telah melakukan penyewaan');
        }
    }
}
