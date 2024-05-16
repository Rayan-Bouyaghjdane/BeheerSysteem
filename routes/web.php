<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActiviteitenController;
use App\Http\Controllers\ReserverenController;
use App\Http\Controllers\ReserveringenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/activiteiten', [ActiviteitenController::class, 'index']);

Route::get('/reserveringen', [ReserveringenController::class, 'index'])->name('reserveringen.index');
Route::put('/reserveringen/{reserveringen}', [ReserveringenController::class, 'update'])->name('reserveringen.update.status');

Route::get('/reserveren', [ReserverenController::class, 'index'])->name('reserveren.index');
Route::post('/reserveren/store', [ReserverenController::class, 'store'])->name('reserveren.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
