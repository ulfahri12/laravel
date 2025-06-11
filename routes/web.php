<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Barang\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-v2', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    $data = ['title'=> 'Dashboard'];
    return view('template', $data);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user', [UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('/info', [AuthenticatedSessionController::class, 'info'])->name('info')->middleware('auth');
Route::get('/manage-barang', [BarangController::class, 'index'])->name('manage.barang')->middleware('auth');
Route::get('/manage-barang/tambah', [BarangController::class, 'tambah'])->name('barang.tambah')->middleware('auth');

require __DIR__.'/auth.php';
