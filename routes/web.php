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

Route::get('/', [PembayaranController::class, 'home']);

Route::get('/dashboard', [PembayaranController::class, 'payment'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'verified'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'verified'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'verified'])->name('profile.destroy');
    Route::post('/pembayaran', [PembayaranController::class, 'store'])->middleware(['auth', 'verified'])->name('pembayaran.store');
    Route::put('/pembayaran', [PembayaranController::class, 'update'])->middleware(['auth', 'verified'])->name('pembayaran.update');
    Route::get('/dashboard', [PembayaranController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/dashboard/payment', [PembayaranController::class, 'payment'])->middleware(['auth', 'verified'])->name('dashboard.payment');
    Route::get('/dashboard/status', [PembayaranController::class, 'status'])->middleware(['auth', 'verified'])->name('dashboard.status');
    
});

Route::get('/cek1', function(){
    return '<h1>Hello World</h1>';
})->middleware('auth', 'verified');

Route::get('/cek2', [cekController::class, 'index'])->middleware('auth', 'verified');

Route::get('/about', [PembayaranController::class, 'about'])->name('about');
Route::get('/contact', [PembayaranController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';