<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoneyChangerController;


Route::get('/', function () {
    return view('welcome');
});

Route :: get('/ money-changer', [MoneyChangerController::class, 'index']);

Route::get('/kelola-kurs', [MoneyChangerController::class, 'kelolaKurs'])
    ->name('kelola-kurs');

Route::get('/tambah-mata-uang', [MoneyChangerController::class, 'tambahMataUang'])
    ->name('tambah-mata-uang');

Route::post('/tambah-mata-uang', [MoneyChangerController::class, 'storeMataUang'])
    ->name('store-mata-uang');