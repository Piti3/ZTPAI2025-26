<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/reservations/{id}', [ReservationController::class, 'show']);
