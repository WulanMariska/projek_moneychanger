<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoneyChangerController;


Route::get('/', function () {
    return view('welcome');
});

Route :: get('/ money-changer', [MoneyChangerController::class, 'index']);
