<?php

use App\Http\Controllers\Admin\KendaraanController;
use App\Http\Controllers\Admin\SewaController as AdminSewaController;
use App\Http\Controllers\Admin\ValidasiController;
use App\Http\Controllers\Customer\MemberController;
use App\Http\Controllers\Customer\SewaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sewaMotor', [AdminSewaController::class, 'statusSewa'])->name('sewaMotor');


Route::get('/daftarPenyewa', [AdminSewaController::class, 'daftarPenyewa']);

Route::get('/validasiKtp', [ValidasiController::class, 'tampilDataKTP']);
Route::put('/setujuiKTP/{id}', [ValidasiController::class, 'setujuiKTP'])->name('setujuiKTP');
Route::put('/tolakKTP/{id}', [ValidasiController::class, 'tolakKTP'])->name('tolakKTP');

Route::get('/validasiMember', [ValidasiController::class, 'tampilDataMember']);
Route::put('/setujuiMember/{id}', [ValidasiController::class, 'setujuiMember'])->name('setujuiMember');
Route::put('/tolakMember/{id}', [ValidasiController::class, 'tolakMember'])->name('tolakMember');

Route::get('/statusSewaCst', [SewaController::class, 'index']);
Route::get('/create', [SewaController::class, 'create'])->name('createSewa');
Route::post('/store', [SewaController::class, 'store'])->name('storeSewa');

Route::get('/riwayatSewa', function () {
    return view('riwayatSewa');
});

Route::get('/membership', [MemberController::class, 'index'])->name('customer.membership');
Route::post('/ajukanMember', [MemberController::class, 'ajukanMember'])->name('ajukanMember');


Route::get('/inputKtp', [ProfileController::class, 'tampilForm'])->name('tampilFormKTP');
Route::put('/inputKtp', [ProfileController::class, 'inputKTP'])->name('postKTP');

Route::get('/inputDataMotor', [KendaraanController::class, 'index'])->name('tampilFormDataMotor');
Route::post('/inputDataMotor', [KendaraanController::class, 'store'])->name('postDataMotor');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
