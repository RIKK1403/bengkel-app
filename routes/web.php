<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DaftarController::class, 'index']);

Route::get('/daftar', [DaftarController::class, 'index'])->name('daftar');
Route::post('/simpan', [DaftarController::class, 'simpan'])->name('daftar.simpan');
Route::post('/daftar/simpan', [DaftarController::class, 'simpan'])->name('daftar.simpan');
Route::get('/berhasil/{id}', [DaftarController::class, 'berhasil'])->name('berhasil');

Route::get('/login', [LoginController::class, 'formLogin'])->name('form.login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {return redirect('/admin/dashboard');});
Route::get('/admin/dashboard', [adminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/edit/{id}', [adminController::class, 'edit'])->name('admin.edit')->middleware('auth');
Route::put('/admin/update/{id}', [adminController::class, 'update'])->name('admin.update')->middleware('auth');
Route::delete('/admin/delete/{id}', [adminController::class, 'destroy'])->name('admin.delete')->middleware('auth');


