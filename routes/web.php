<?php

use App\Http\Controllers\ActiviteitenController;
use App\Http\Controllers\ReserverenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveringenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activiteiten', [ActiviteitenController::class, 'index']);

Route::get('/reserveringen', [ReserveringenController::class, 'index'])->name('reserveringen.index');
Route::put('/reserveringen/{reserveringen}', [ReserveringenController::class, 'update'])->name('reserveringen.update.status');

Route::get('/reserveren', [ReserverenController::class, 'index'])->name('reserveren.index');
Route::post('/reserveren/store', [ReserverenController::class, 'store'])->name('reserveren.store');

