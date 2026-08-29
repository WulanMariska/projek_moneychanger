<?php

namespace App\Http\Controllers;

use App\Models\Currency;

class MoneyChangerController extends Controller
{
    public function index()
    {
        $currencies =  Currency::all();
        return view('money-changer', compact ('currencies'));
    }
}
