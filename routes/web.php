<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('/simpan', [DaftarController::class, 'simpan'])->name('daftar.simpan');
Route::post('/daftar/simpan', [DaftarController::class, 'simpan'])->name('daftar.simpan');
Route::get('/berhasil/{id}', [DaftarController::class, 'berhasil'])->name('berhasil');
Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');

