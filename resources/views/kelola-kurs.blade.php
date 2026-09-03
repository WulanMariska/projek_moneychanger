@extends('layouts.app')

@section('content')

<div class="min-h-full">

    {{-- CARD UTAMA --}}
    <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5">

        {{-- HEADER CARD --}}
        <div class="flex items-center justify-between mb-4">

            {{-- JUDUL DAFTAR KURS --}}
            <div class="flex items-center gap-3">

                {{-- ICON UANG --}}
                <div class="w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center shrink-0">

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 64 64"
                        width="36"
                        height="36"
                        fill="none"
                        class="text-gray-800 shrink-0"
                    >
                        <rect
                            x="8"
                            y="20"
                            width="48"
                            height="28"
                            rx="3"
                            stroke="currentColor"
                            stroke-width="3"
                        />

                        <circle
                            cx="32"
                            cy="34"
                            r="8"
                            stroke="currentColor"
                            stroke-width="3"
                        />

                        <path
                            d="M14 26h7M43 42h7"
                            stroke="currentColor"
                            stroke-width="3"
                            stroke-linecap="round"
                        />
                    </svg>

                </div>


                {{-- TEKS --}}
                <div>

                    <h2 class="text-lg font-bold text-gray-900 leading-tight">
                        DAFTAR KURS AKTIF
                    </h2>

                    <p class="text-xs text-gray-500 mt-0.5">
                        Kelola seluruh kurs mata uang yang saat ini aktif.
                    </p>

                </div>

            </div>


            {{-- SEARCH --}}
            <div class="relative w-56 shrink-0">

                {{-- ICON SEARCH --}}
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="15"
                    height="15"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    class="absolute left-3 top-1/2 -translate-y-1/2 text-blue-500 pointer-events-none"
                    style="width: 15px; height: 15px;"
                >
                    <circle
                        cx="11"
                        cy="11"
                        r="7"
                    ></circle>

                    <path
                        d="m20 20-3.5-3.5"
                    ></path>
                </svg>


                <input
                    type="text"
                    placeholder="Cari Pelanggan..."
                    class="w-full h-9 rounded-md border border-gray-300 bg-white pl-9 pr-3 text-xs text-gray-700 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-100"
                >

            </div>

        </div>


        {{-- TABEL --}}
        <div class="w-full overflow-x-auto">

            <table class="w-full table-fixed border-separate border-spacing-y-2 text-xs">

                {{-- HEADER TABEL --}}
                <thead>

                    <tr class="bg-blue-100">

                        {{-- MATA UANG --}}
                        <th
                            class="text-left font-bold text-gray-800 px-4 py-3.5 rounded-l-lg"
                            style="width: 34%;"
                        >
                            Mata Uang
                        </th>


                        {{-- KURS BELI --}}
                        <th
                            class="text-center font-bold text-gray-800 px-2 py-3.5"
                            style="width: 16%;"
                        >
                            Kurs Beli
                        </th>


                        {{-- KURS JUAL --}}
                        <th
                            class="text-center font-bold text-gray-800 px-2 py-3.5"
                            style="width: 16%;"
                        >
                            Kurs Jual
                        </th>


                        {{-- UPDATE --}}
                        <th
                            class="text-center font-bold text-gray-800 px-2 py-3.5"
                            style="width: 24%;"
                        >
                            Terakhir di Perbarui
                        </th>


                        {{-- AKSI --}}
                        <th
                            class="text-center font-bold text-gray-800 px-2 py-3.5 rounded-r-lg"
                            style="width: 10%;"
                        >
                            Aksi
                        </th>

                    </tr>

                </thead>


                {{-- ISI TABEL --}}
                <tbody>

                    @foreach ($currencies as $currency)

                        <tr>

                            {{-- MATA UANG --}}
                            <td
                                class="bg-white border border-gray-200 border-r-0 rounded-l-lg px-4 py-2"
                            >

                                <div class="flex items-center gap-3">

                                    {{-- FLAG --}}
                                    <div
                                        class="w-9 h-9 rounded-full bg-gray-100 flex items-center justify-center shrink-0 overflow-hidden"
                                        style="font-size: 20px; line-height: 1;"
                                    >

                                        @switch($currency->code)

                                            @case('USD')
                                                🇺🇸
                                                @break

                                            @case('EUR')
                                                🇪🇺
                                                @break

                                            @case('JPY')
                                                🇯🇵
                                                @break

                                            @case('SGD')
                                                🇸🇬
                                                @break

                                            @case('AUD')
                                                🇦🇺
                                                @break

                                            @default
                                                🌐

                                        @endswitch

                                    </div>


                                    {{-- KODE + NAMA --}}
                                    <div class="min-w-0">

                                        <p class="font-bold text-sm text-gray-900 leading-tight">
                                            {{ $currency->code }}
                                        </p>

                                        <p class="text-[10px] text-gray-500 mt-0.5 truncate">
                                            {{ $currency->name }}
                                        </p>

                                    </div>

                                </div>

                            </td>


                            {{-- KURS BELI --}}
                            <td
                                class="bg-white border-t border-b border-gray-200 px-2 py-2 text-center"
                            >

                                <span class="font-semibold text-gray-800 whitespace-nowrap">
                                    {{ number_format($currency->buy_rate, 2, ',', '.') }}
                                </span>

                            </td>


                            {{-- KURS JUAL --}}
                            <td
                                class="bg-white border-t border-b border-gray-200 px-2 py-2 text-center"
                            >

                                <span class="font-semibold text-gray-800 whitespace-nowrap">
                                    {{ number_format($currency->sell_rate, 2, ',', '.') }}
                                </span>

                            </td>


                            {{-- TERAKHIR DIPERBARUI --}}
                            <td
                                class="bg-white border-t border-b border-gray-200 px-2 py-2 text-center"
                            >

                                <p class="font-semibold text-gray-800 leading-tight whitespace-nowrap">
                                    {{ $currency->updated_at->diffForHumans() }}
                                </p>

                                <p class="text-[9px] text-gray-500 mt-0.5 whitespace-nowrap">
                                    {{ $currency->updated_at->format('d M Y') }}
                                </p>

                            </td>


                            {{-- AKSI --}}
                            <td
                                class="bg-white border border-gray-200 border-l-0 rounded-r-lg px-2 py-2"
                            >

                                <div class="flex items-center justify-center">

                                    <button
                                        type="button"
                                        class="w-7 h-7 flex items-center justify-center rounded-full text-blue-500 hover:bg-blue-50"
                                    >

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2.5"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            style="width: 16px; height: 16px;"
                                        >

                                            <path d="m9 5 7 7-7 7"></path>

                                        </svg>

                                    </button>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>


        {{-- TOMBOL TAMBAH --}}
        <div class="mt-4">

            <a
                href="{{ route('tambah-mata-uang') }}"
                class="inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-5 py-2.5 rounded-md shadow-sm transition"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="14"
                    height="14"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    style="width: 14px; height: 14px;"
                >

                    <path d="M12 5v14"></path>

                    <path d="M5 12h14"></path>

                </svg>

                Tambah Mata Uang

            </a>

        </div>

    </div>

</div>

@endsection