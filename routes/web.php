<?php

use App\Http\Controllers\ActiviteitenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveringenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activiteiten', [ActiviteitenController::class, 'index']);

Route::get('/reserveringen', [ReserveringenController::class, 'index'])->name('reserveringen.index');
Route::put('/reserveringen/{reserveringen}', [ReserveringenController::class, 'update'])->name('reserveringen.update.status');
