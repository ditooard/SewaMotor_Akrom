<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SewaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/sewaMotor', [SewaController::class,'index'])->name('sewaMotor');
Route::get('/create', [SewaController::class,'create'])->name('createSewa');
Route::post('/store', [SewaController::class,'store'])->name('storeSewa');

Route::get('/daftarPenyewa', function () {
    return view('daftarPenyewa');
});

Route::get('/statusSewa', function () {
    return view('statusSewa');
});

Route::get('/validasiKtp', function () {
    return view('validasiKtp');
});

Route::get('/member_adm', function () {
    return view('validasiMember');
});

Route::get('/statusSewaCst', function () {
    return view('statusSewaCst');
});

Route::get('/riwayatSewa', function () {
    return view('riwayatSewa');
});

Route::get('/membership', function () {
    return view('membership');
});


Route::get('/inputKtp', function () {
    return view('inputKtp');
});

Route::get('/inputDataMotor', function () {
    return view('inputDataMotor');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
