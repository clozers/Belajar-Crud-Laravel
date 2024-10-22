<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('anggota', AnggotaController::class);

