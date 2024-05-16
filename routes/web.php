<?php

use App\Http\Controllers\ActiviteitenController;
use App\Http\Controllers\ReserverenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activiteiten', [ActiviteitenController::class, 'index']);

Route::get('/reserveren', [ReserverenController::class, 'index'])->name('reserveren.index');
Route::post('/reserveren/store', [ReserverenController::class, 'store'])->name('reserveren.store');
Route::get('/reservering', [ReserverenController::class, 'reservering']);