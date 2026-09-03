<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'FX Smart Manager' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        <aside class="w-56 bg-white border-r border-gray-200 flex flex-col">

            {{-- LOGO --}}
            <div class="px-4 py-5 border-b border-gray-100">
                <div class="flex items-center gap-2">

                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">
                            FX
                        </span>
                    </div>

                    <div>
                        <h1 class="text-sm font-bold text-blue-700">
                            FX SMART MANAGER
                        </h1>

                        <p class="text-[8px] text-gray-500">
                            Smart Digital Money Changer
                        </p>
                    </div>

                </div>
            </div>


            {{-- MENU --}}
            <nav class="flex-1 px-3 py-4">

                <p class="text-[10px] font-semibold text-gray-400 uppercase mb-2 px-3">
                    Menu
                </p>


                {{-- DASHBOARD --}}
                <a
                    href="{{ url('/') }}"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-sm font-medium
                    {{ request()->is('/') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}"
                >

                    <span>⌂</span>
                    <span>Dashboard</span>

                </a>


                {{-- KELOLA KURS --}}
                <a
                    href="{{ route('kelola-kurs') }}"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-sm font-medium
                    {{ request()->is('kelola-kurs*') || request()->is('tambah-mata-uang') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}"
                >

                    <span>▣</span>
                    <span>Kelola Kurs</span>

                </a>


                {{-- TRANSAKSI --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-gray-600 hover:bg-gray-50 text-sm"
                >

                    <span>▤</span>
                    <span>Transaksi</span>

                </a>


                {{-- RESERVASI --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-gray-600 hover:bg-gray-50 text-sm"
                >

                    <span>▥</span>
                    <span>Reservasi</span>

                </a>


                {{-- PELANGGAN --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-gray-600 hover:bg-gray-50 text-sm"
                >

                    <span>♙</span>
                    <span>Pelanggan</span>

                </a>


                {{-- ANALYTIC --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-gray-600 hover:bg-gray-50 text-sm"
                >

                    <span>◔</span>
                    <span>Analytic</span>

                </a>


                {{-- LAPORAN --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-gray-600 hover:bg-gray-50 text-sm"
                >

                    <span>▤</span>
                    <span>Laporan</span>

                </a>


                {{-- PENGATURAN --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-3 py-2 mb-1 rounded-lg text-gray-600 hover:bg-gray-50 text-sm"
                >

                    <span>⚙</span>
                    <span>Pengaturan</span>

                </a>

            </nav>


            {{-- USER --}}
            <div class="border-t border-gray-100 p-3">

                <div class="flex items-center gap-2">

                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">

                        <span class="text-blue-600 text-xs font-bold">
                            AU
                        </span>

                    </div>


                    <div class="flex-1 min-w-0">

                        <p class="text-xs font-semibold text-gray-700 truncate">
                            Admin Utama
                        </p>

                        <p class="text-[10px] text-gray-400 truncate">
                            Administrator
                        </p>

                    </div>

                </div>

            </div>

        </aside>


        {{-- MAIN CONTENT --}}
        <main class="flex-1">


            {{-- HEADER --}}
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">


                {{-- BAGIAN KIRI HEADER --}}
                <div class="flex items-center">

                    @if($hidePageHeader ?? false)

                        {{-- HAMBURGER KHUSUS TAMBAH MATA UANG --}}
                        <button
                            type="button"
                            class="w-9 h-9 flex items-center justify-center text-blue-500 hover:bg-blue-50 rounded-lg"
                        >

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="22"
                                height="22"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                            >

                                <path d="M4 6h16"></path>
                                <path d="M4 12h16"></path>
                                <path d="M4 18h16"></path>

                            </svg>

                        </button>

                    @else

                        {{-- HEADER NORMAL --}}
                        <div>

                            <h2 class="text-lg font-semibold text-gray-800">
                                {{ $pageTitle ?? 'Dashboard' }}
                            </h2>

                            <p class="text-xs text-gray-400">
                                Selamat datang kembali, Admin!
                            </p>

                        </div>

                    @endif

                </div>


                {{-- BAGIAN KANAN HEADER --}}
                <div class="flex items-center gap-4">


                    {{-- NOTIFIKASI --}}
                    <button
                        type="button"
                        class="text-gray-500"
                    >
                        🔔
                    </button>


                    {{-- USER --}}
                    <div class="flex items-center gap-2">

                        <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center">

                            <span class="text-blue-600 text-xs font-bold">
                                AU
                            </span>

                        </div>

                        <span class="text-sm font-medium text-gray-700">
                            Admin Utama
                        </span>

                    </div>

                </div>

            </header>


            {{-- PAGE CONTENT --}}
            <section class="p-6">

                @yield('content')

            </section>

        </main>

    </div>

</body>
</html>