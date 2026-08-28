<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoneyChangerController extends Controller
{
    public function index()
    {
        return view('money-changer');
    }
}
