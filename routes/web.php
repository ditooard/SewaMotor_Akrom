<?php

use App\Http\Controllers\Admin\KendaraanController;
use App\Http\Controllers\Admin\SewaController as AdminSewaController;
use App\Http\Controllers\Admin\ValidasiController;
use App\Http\Controllers\Customer\MemberController;
use App\Http\Controllers\Customer\SewaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [LandingPageController::class, 'index'])->name('welcome');
Route::prefix('/admin')->middleware('isAdmin')->group(function () {
    Route::get('/sewaMotor', [AdminSewaController::class, 'statusSewa'])->name('admin.sewaMotor');
    Route::put('/validasiSewa/{id}', [AdminSewaController::class, 'validasiSewa'])->name('validasiSewa');

    Route::get('/daftarPenyewa', [AdminSewaController::class, 'daftarPenyewa'])->name('admin.daftarPenyewa');
    Route::delete('/hapusPenyewa/{id}', [AdminSewaController::class, 'hapusPenyewa'])->name('hapusPenyewa');

    Route::get('/validasiKtp', [ValidasiController::class, 'tampilDataKTP'])->name('admin.validasiKtp');
    Route::put('/setujuiKTP/{id}', [ValidasiController::class, 'setujuiKTP'])->name('setujuiKTP');
    Route::put('/tolakKTP/{id}', [ValidasiController::class, 'tolakKTP'])->name('tolakKTP');

    Route::get('/validasiMember', [ValidasiController::class, 'tampilDataMember'])->name('admin.validasiMember');
    Route::put('/setujuiMember/{id}', [ValidasiController::class, 'setujuiMember'])->name('setujuiMember');
    Route::put('/tolakMember/{id}', [ValidasiController::class, 'tolakMember'])->name('tolakMember');

    Route::get('/inputDataMotor', [KendaraanController::class, 'index'])->name('admin.tampilFormDataMotor');
    Route::post('/inputDataMotor', [KendaraanController::class, 'store'])->name('postDataMotor');
    Route::put('/editDataMotor/{id}', [KendaraanController::class, 'update'])->name('editDataMotor');
    Route::delete('/hapusKendaraan/{id}', [KendaraanController::class, 'destroy'])->name('hapusKendaraan');
    Route::get('/editKtp', [ProfileController::class, 'index'])->name('admin.editKtp');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::put('/editProfile', [ProfileController::class, 'editProfile'])->name('editProfile');
Route::put('/editAkun', [ProfileController::class, 'editAkun'])->name('editAkun');


Route::prefix('/customer')->middleware('isCustomer')->group(function () {
    Route::get('/inputKtp', [ProfileController::class, 'tampilForm'])->name('tampilFormKTP');
    Route::put('/inputKtp', [ProfileController::class, 'inputKTP'])->name('postKTP');

    Route::get('/statusSewaCst', [SewaController::class, 'index'])->name('statusSewaCst');
    Route::get('/create', [SewaController::class, 'create'])->name('createSewa');
    Route::post('/store', [SewaController::class, 'store'])->name('storeSewa');


    Route::get('/membership', [MemberController::class, 'index'])->name('customer.membership');
    Route::post('/ajukanMember', [MemberController::class, 'ajukanMember'])->name('ajukanMember');

    Route::get('/riwayatSewa', [SewaController::class, 'riwayatSewa'])->name('riwayatSewa');

    Route::get('/editKtp', [ProfileController::class, 'index'])->name('customer.editKtp');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
