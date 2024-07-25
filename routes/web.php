<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\cekController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/', [PembayaranController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
});


Route::get('/cek1', function(){
    return '<h1>Hello World</h1>';
})->middleware('auth', 'verified');

Route::get('/cek2', [cekController::class, 'index'])->middleware('auth', 'verified');

require __DIR__.'/auth.php';