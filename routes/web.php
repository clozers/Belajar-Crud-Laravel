<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;


Route::get('/wasd', function () {
    return view('welcome');
});

Route::resource('anggota', AnggotaController::class);
Route::get('/', [AnggotaController::class, 'index']);