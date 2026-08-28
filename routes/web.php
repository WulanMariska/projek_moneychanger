<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/ money-changer', function ()  {
    return 'Selamat Datang di Money Changer!';
});
