<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusClassController;
use App\Http\Controllers\OrderController;

Route::get('/', [BusClassController::class, 'index']);
Route::get('/pesan/{id}', [OrderController::class, 'form'])->name('order.form');
Route::post('/pesan', [OrderController::class, 'store'])->name('order.store');
Route::get('/struk/{id}', [OrderController::class, 'struk']);
Route::get('/struk/{id}/pdf', [OrderController::class, 'pdf']);
