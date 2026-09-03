@extends('layouts.app')

@section('content')

<div class="min-h-full">

    {{-- CARD UTAMA --}}
    <div class="bg-white rounded-xl border border-gray-300 shadow-lg p-6">

        {{-- HEADER FORM --}}
        <div class="flex items-start gap-3 mb-7">

            {{-- TOMBOL KEMBALI --}}
            <a
                href="{{ route('kelola-kurs') }}"
                class="w-8 h-8 rounded-full border border-blue-200 flex items-center justify-center text-blue-500 hover:bg-blue-50 transition shrink-0"
            >

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="m15 18-6-6 6-6"></path>
                </svg>

            </a>


            {{-- JUDUL FORM --}}
            <div>

                <h1 class="text-lg font-bold text-gray-900 leading-tight">
                    TAMBAH MATA UANG
                </h1>

                <p class="text-[10px] text-gray-500 mt-0.5">
                    Tambahkan mata uang baru ke sistem
                </p>

            </div>

        </div>


        {{-- FORM --}}
        <form
            action="{{ route('store-mata-uang') }}"
            method="POST"
        >

            @csrf


            {{-- GRID FORM --}}
            {{-- REVISI: JARAK ANTAR KOLOM DIPERLEBAR --}}
            <div class="grid grid-cols-2 gap-x-16 gap-y-5">

                {{-- KODE MATA UANG --}}
                <div>

                    <label
                        for="code"
                        class="block text-xs font-medium text-gray-700 mb-2"
                    >
                        Kode Mata Uang
                    </label>

                    <input
                        type="text"
                        id="code"
                        name="code"
                        value="{{ old('code') }}"
                        placeholder="CONTOH: USD"
                        maxlength="3"
                        class="w-full h-10 rounded-md border border-gray-300 px-3 text-xs text-gray-700 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-100 uppercase"
                    >

                    @error('code')
                        <p class="text-[10px] text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- NAMA MATA UANG --}}
                <div>

                    <label
                        for="name"
                        class="block text-xs font-medium text-gray-700 mb-2"
                    >
                        Nama Mata Uang
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Contoh: US Dollar"
                        class="w-full h-10 rounded-md border border-gray-300 px-3 text-xs text-gray-700 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-100"
                    >

                    @error('name')
                        <p class="text-[10px] text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- NEGARA --}}
                <div>

                    <label
                        for="country"
                        class="block text-xs font-medium text-gray-700 mb-2"
                    >
                        Negara
                    </label>

                    <input
                        type="text"
                        id="country"
                        name="country"
                        value="{{ old('country') }}"
                        placeholder="Contoh: United States"
                        class="w-full h-10 rounded-md border border-gray-300 px-3 text-xs text-gray-700 outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-100"
                    >

                    @error('country')
                        <p class="text-[10px] text-red-500 mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

            </div>


            {{-- STATUS --}}
            <div class="mt-5">

                <p class="text-xs font-medium text-gray-700 mb-2">
                    Status
                </p>

                <div class="flex items-center gap-5">

                    {{-- AKTIF --}}
                    <label class="flex items-center gap-2 cursor-pointer">

                        <input
                            type="radio"
                            name="status"
                            value="1"
                            {{ old('status', '1') == '1' ? 'checked' : '' }}
                            class="w-3.5 h-3.5 text-blue-600 border-gray-300 focus:ring-blue-500"
                        >

                        <span class="text-xs text-gray-700">
                            Aktif
                        </span>

                    </label>


                    {{-- NONAKTIF --}}
                    <label class="flex items-center gap-2 cursor-pointer">

                        <input
                            type="radio"
                            name="status"
                            value="0"
                            {{ old('status') == '0' ? 'checked' : '' }}
                            class="w-3.5 h-3.5 text-blue-600 border-gray-300 focus:ring-blue-500"
                        >

                        <span class="text-xs text-gray-700">
                            Nonaktif
                        </span>

                    </label>

                </div>

                @error('status')
                    <p class="text-[10px] text-red-500 mt-1">
                        {{ $message }}
                    </p>
                @enderror

            </div>


            {{-- TOMBOL SIMPAN --}}
            <div class="flex justify-end mt-10">

                <button
                    type="submit"
                    class="min-w-[165px] h-10 px-6 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-md shadow-sm transition whitespace-nowrap"
                >
                    Simpan Mata Uang
                </button>

            </div>

        </form>

    </div>

</div>

@endsection