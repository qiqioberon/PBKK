<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Toko India QQ</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/fonts.css')

</head>

<body class="antialiased  font-[LemonMilk] overflow-hidden">
    <div class=" ">

        <div class="relative min-h-screen">

            <header class="fixed top-0 w-full h-20 px-8 border-b shadow-sm bg-white flex items-center justify-between">
                <h5 class="font-[LemonMilk] font-bold text-3xl text-[#54C4DB]">TOKO INDIA</h5>
                @if (Route::has('login'))
                    <nav class="flex gap-5 items-center w-1/8">
                        @auth
                            {{-- <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a> --}}
                            <a href="{{ url('/online-shop') }}">
                                <button
                                    class="p-2 px-4 rounded-md bg-[#54C4DB] text-gray-800 font-semibold shadow-lg  hover:text-gray-100  ">
                                    Online Shop
                                </button>
                            </a>
                        @else
                            <a href="{{ route('login') }}">
                                <button
                                    class="p-2 px-4 rounded-md bg-[#54C4DB] text-gray-800 font-semibold shadow-lg  hover:text-gray-100  ">
                                    Login
                                </button>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button
                                        class="p-2 px-4 rounded-md bg-[#54C4DB] text-gray-800 font-semibold shadow-lg  hover:text-gray-100  ">
                                        Register
                                    </button>
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>

            <main class="mt-36 w-full">
                <div class="flex items-center justify-center flex-col">
                    <div class="flex items-center justify-center flex-col">
                        <div
                            class="mb-4 flex items-center border shadow-sm p-4 bg-amber-100 text-amber-700 rounded-full uppercase">
                            <img width="50" height="50" class="h-6 w-6 mr-2"
                                src="https://img.icons8.com/ios/50/medal.png" alt="medal" />
                            No 1 India Shop On PBKK
                        </div>
                        <h1 class="text-3xl md:text-5xl text-center text-neutral-800 mb-6">
                            Toko India membantu Anda
                        </h1>
                        <h1 class="text-3xl md:text-5xl text-center text-neutral-800 mb-6">
                            belanja kebutuhan India
                        </h1>
                        <div
                            class="text-3xl md:text-5xl bg-gradient-to-r from-fuchsia-600 to-pink-600 text-white px-4 p-2 rounded-md pb-4 w-fit">
                            sekaligus lebih mudah dan juga praktis.
                        </div>
                    </div>
                    <div class="text-sm md:text-lg text-neutral-400 mt-4 max-w-xs md:max-w-2xl text-center mx-auto">
                        Belanja kebutuhan harian seperti makanan, sembako, sabun, sampo, dan jajanan ringan dengan mudah
                        di Toko India.
                        Temukan berbagai produk berkualitas dengan harga terjangkau untuk memenuhi kebutuhan Anda
                        sehari-hari.
                    </div>

                    <a href="{{ route('register') }}">
                        <button
                            class="mt-6
                        inline-block px-4 py-2 text-lg font-bold text-center text-white bg-pink-600 border-2
                        border-pink-800 rounded-lg shadow-md transition-all duration-300 cursor-pointer hover:bg-white
                        hover:text-red-500 hover:border-red-500 active:bg-yellow-400 active:shadow-none
                        active:translate-y-4">
                            Mulai Mendaftar di Toko India
                        </button>
                    </a>
                </div>
            </main>

        </div>
    </div>
</body>

</html>
