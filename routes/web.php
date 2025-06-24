<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [DaftarController::class, 'index']);
