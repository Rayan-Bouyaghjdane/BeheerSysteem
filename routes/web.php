<?php

use App\Http\Controllers\ActiviteitenController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/activiteiten', [ActiviteitenController::class, 'index']);
