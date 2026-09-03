<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class MoneyChangerController extends Controller
{
    public function index()
    {
        $currencies = Currency::all();

        return view('money-changer', compact('currencies'));
    }

    public function kelolaKurs()
    {
        $currencies = Currency::all();

        return view('kelola-kurs', [
            'currencies' => $currencies,
            'pageTitle' => 'Kelola Kurs',
        ]);
    }

        public function tambahMataUang()
        {
            return view('tambah-mata-uang', [
                'hidePageHeader' => true,
            ]);
        }   

    public function storeMataUang(Request $request)
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'size:3', 'unique:currencies,code'],
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'status' => ['required', 'boolean'],
        ]);

        Currency::create([
            'code' => strtoupper($validated['code']),
            'name' => $validated['name'],
            'country' => $validated['country'],
            'status' => $validated['status'],
            'buy_rate' => 0,
            'sell_rate' => 0,
        ]);

        return redirect()
            ->route('kelola-kurs')
            ->with('success', 'Mata uang berhasil ditambahkan.');
    }
}