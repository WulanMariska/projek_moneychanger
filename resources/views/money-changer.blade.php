@extends('layouts.app')

@section('content')

    <div>
        <h1 class="text-2xl font-bold text-gray-800">
            Daftar Kurs Hari Ini
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            Informasi kurs mata uang yang tersedia
        </p>
    </div>

    <div class="mt-6 space-y-4">

        @foreach ($currencies as $currency)

            <div class="bg-white rounded-xl border border-gray-200 p-5">

                <h2 class="text-lg font-bold text-blue-600">
                    {{ $currency->code }}
                </h2>

                <p class="text-sm text-gray-600 mt-1">
                    {{ $currency->name }}
                </p>

                <div class="mt-4 grid grid-cols-2 gap-4">

                    <div>
                        <p class="text-xs text-gray-400">
                            Kurs Beli
                        </p>

                        <p class="font-semibold text-gray-800">
                            Rp {{ number_format($currency->buy_rate, 2, ',', '.') }}
                        </p>
                    </div>

                    <div>
                        <p class="text-xs text-gray-400">
                            Kurs Jual
                        </p>

                        <p class="font-semibold text-gray-800">
                            Rp {{ number_format($currency->sell_rate, 2, ',', '.') }}
                        </p>
                    </div>

                </div>

            </div>

        @endforeach

    </div>

@endsection