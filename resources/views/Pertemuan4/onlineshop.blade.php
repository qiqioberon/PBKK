<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/inferencejs"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/fonts.css')

    <title>TOKO INDIA PBKK</title>
</head>

<body class="h-full px-24 pt-12 pb-24">

    <nav
        class ="px-24 pt-7 pb-3 w-full flex flex-row justify-between
    items-center fixed top-0 left-0 right-0 bg-white">
        <h5 class="font-[LemonMilk] font-bold text-2xl text-[#54C4DB]">ApoorvShop</h5>
        <div class="flex flex-row gap-4 w-[50%]">
            <input type="file" id="imageSearchingInput" class="hidden" />
            <input
                class="block w-[70%] rounded-md border border-gray-300 focus:border-[#75c4d4] focus:outline-none focus:ring-1 focus:ring-[#4e838e] py-1 px-1.5 text-gray-500 pr-10"
                id="SearchInput" />
            <button class="flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-7 py-3 hover:bg-[#4e838e]" id="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 128 128">
                    <path d=" M 52.349609 14.400391 C 42.624609 14.400391 32.9 18.1 25.5 25.5 C 10.7 40.3 10.7 64.399219 25.5
    79.199219 C 32.9 86.599219 42.600391 90.300781 52.400391 90.300781 C 62.200391 90.300781 71.900781 86.599219
    79.300781 79.199219 C 94.000781 64.399219 93.999219 40.3 79.199219 25.5 C 71.799219 18.1 62.074609 14.400391
    52.349609 14.400391 z M 52.300781 20.300781 C 60.500781 20.300781 68.700391 23.399219 74.900391 29.699219 C
    87.400391 42.199219 87.4 62.5 75 75 C 62.5 87.5 42.199219 87.5 29.699219 75 C 17.199219 62.5 17.199219 42.199219
    29.699219 29.699219 C 35.899219 23.499219 44.100781 20.300781 52.300781 20.300781 z M 52.300781 26.300781 C
    45.400781 26.300781 38.9 29 34 34 C 29.3 38.7 26.700391 44.800391 26.400391 51.400391 C 26.300391 53.100391
    27.600781 54.4 29.300781 54.5 L 29.400391 54.5 C 31.000391 54.5 32.300391 53.199609 32.400391 51.599609 C 32.600391
    46.499609 34.699219 41.799219 38.199219 38.199219 C 41.999219 34.399219 47.000781 32.300781 52.300781 32.300781 C
    54.000781 32.300781 55.300781 31.000781 55.300781 29.300781 C 55.300781 27.600781 54.000781 26.300781 52.300781
    26.300781 z M 35 64 A 3 3 0 0 0 32 67 A 3 3 0 0 0 35 70 A 3 3 0 0 0 38 67 A 3 3 0 0 0 35 64 z M 83.363281 80.5 C
    82.600781 80.5 81.850781 80.800391 81.300781 81.400391 C 80.100781 82.600391 80.100781 84.499609 81.300781 85.599609
    L 83.800781 88.099609 C 83.200781 89.299609 82.900391 90.6 82.900391 92 C 82.900391 94.4 83.8 96.700391 85.5
    98.400391 L 98.300781 111 C 100.10078 112.8 102.39922 113.69922 104.69922 113.69922 C 106.99922 113.69922 109.29961
    112.79961 111.09961 111.09961 C 114.59961 107.59961 114.59961 101.90039 111.09961 98.400391 L 98.300781 85.599609 C
    96.600781 83.899609 94.300391 83 91.900391 83 C 90.500391 83 89.2 83.300391 88 83.900391 L 85.5 81.400391 C 84.9
    80.800391 84.125781 80.5 83.363281 80.5 z M 91.900391 88.900391 C 92.700391 88.900391 93.5 89.200781 94 89.800781 L
    106.69922 102.5 C 107.89922 103.7 107.89922 105.59922 106.69922 106.69922 C 105.49922 107.89922 103.6 107.89922
    102.5 106.69922 L 89.800781 94.099609 C 89.200781 93.499609 88.900391 92.700391 88.900391 91.900391 C 88.900391
    91.100391 89.200781 90.300781 89.800781 89.800781 C 90.400781 89.200781 91.100391 88.900391 91.900391 88.900391 z">
                    </path>
                </svg>
            </button>
            <button class="flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-4 py-3 hover:bg-[#4e838e]" id="upload-image">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                    height="30px" width="30px" version="1.1" id="Capa_1" viewBox="0 0 330.591 330.591"
                    xml:space="preserve">
                    <g>
                        <g>
                            <path
                                d="M52.575,320.395c-0.693,0-1.391-0.015-2.09-0.043c-12.979-0.54-25.361-6.071-34.865-15.576    c-9.504-9.504-15.035-21.886-15.576-34.864c-0.549-13.213,4.115-25.456,13.133-34.475L221.581,27.033    c11.523-11.523,27.197-17.483,44.096-16.78c16.676,0.693,32.594,7.81,44.822,20.037c12.228,12.229,19.346,28.147,20.037,44.823    c0.703,16.911-5.256,32.571-16.781,44.096L156.711,276.255c-2.928,2.927-7.676,2.928-10.607,0c-2.928-2.93-2.928-7.678,0-10.608    l157.045-157.047c8.523-8.522,12.928-20.194,12.4-32.865c-0.537-12.906-6.098-25.279-15.658-34.84    c-9.559-9.56-21.932-15.119-34.838-15.656c-12.67-0.533-24.344,3.876-32.865,12.399L23.784,246.044    c-12.596,12.594-11.498,34.184,2.443,48.125c6.836,6.837,15.672,10.813,24.881,11.195c8.975,0.349,17.229-2.734,23.244-8.752    l169.441-169.439c7.422-7.422,6.691-20.229-1.629-28.549c-4.113-4.114-9.414-6.505-14.924-6.733    c-5.289-0.212-10.115,1.595-13.625,5.106L95.536,215.08c-2.93,2.927-7.678,2.928-10.607,0c-2.93-2.93-2.93-7.678,0-10.607    L203.008,86.39c6.512-6.512,15.322-9.9,24.855-9.486c9.281,0.385,18.127,4.332,24.906,11.114    c14.17,14.167,14.9,36.49,1.631,49.762L84.959,307.22C76.418,315.76,64.985,320.395,52.575,320.395z" />
                        </g>
                    </g>
                </svg>
            </button>
            <img src={{ Vite::asset('resources/images/ImageProcess/sampleImage.png') }} alt="upload"
                class="hidden imagepreview" id="imagepreview" />
        </div>
        <button class="flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-5 py-3 hover:bg-[#4e838e]"
            @if (Auth::user()->is_admin == 0) id="modal-button" @else id="modal-add-product" @endif>
            @if (Auth::user()->is_admin == 0)
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                    fill="none">
                    <path
                        d="M3 3.5H5L5.4 5.5M7 13.5H17L21 5.5H5.4M7 13.5L5.4 5.5M7 13.5L4.70711 15.7929C4.07714 16.4229 4.52331 17.5 5.41421 17.5H17M17 17.5C15.8954 17.5 15 18.3954 15 19.5C15 20.6046 15.8954 21.5 17 21.5C18.1046 21.5 19 20.6046 19 19.5C19 18.3954 18.1046 17.5 17 17.5ZM9 19.5C9 20.6046 8.10457 21.5 7 21.5C5.89543 21.5 5 20.6046 5 19.5C5 18.3954 5.89543 17.5 7 17.5C8.10457 17.5 9 18.3954 9 19.5Z"
                        stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="roundgi" />
                </svg>
                <h3 class="font-[LemonMilk] font-bold text-lg ">YOUR CART</h3>
            @else
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                    fill="none">
                    <path
                        d="M3 3.5H5L5.4 5.5M7 13.5H17L21 5.5H5.4M7 13.5L5.4 5.5M7 13.5L4.70711 15.7929C4.07714 16.4229 4.52331 17.5 5.41421 17.5H17M17 17.5C15.8954 17.5 15 18.3954 15 19.5C15 20.6046 15.8954 21.5 17 21.5C18.1046 21.5 19 20.6046 19 19.5C19 18.3954 18.1046 17.5 17 17.5ZM9 19.5C9 20.6046 8.10457 21.5 7 21.5C5.89543 21.5 5 20.6046 5 19.5C5 18.3954 5.89543 17.5 7 17.5C8.10457 17.5 9 18.3954 9 19.5Z"
                        stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h3 class="font-[LemonMilk] font-bold text-md ">ADD PRODUCT</h3>
            @endif
        </button>


        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="70">
                <x-slot name="trigger">
                    <button
                        class="font-[LemonMilk] font-semibold inline-flex items-center px-5  py-3.5 border border-transparent text-sm leading-4 rounded-md bg-[#76e8ff] hover:bg-[#4e838e] text-slate-900  hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center sm:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>
    <main class="w-full flex flex-col justify-center items-center pt-16 gap-9 main-content">

        {{-- <img src={{ Vite::asset('resources/images/Onlineshop/Main/hero.png') }} alt="hero" class="w-full" /> --}}
        <div class="flex flex-col gap-1 w-full items-start">
            <h1 class="font-[Poppins] font-bold text-4xl">OUR PRODUCT</h1>
            <p class="font-[Poppins] font-medium text-xl ">Check our best product on this world</p>
        </div>
        <div class="flex flex-wrap gap-10 w-full justify-center items-center" id="product-container">
            @foreach ($products as $product)
                <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                    {{-- Display product image --}}
                    <div class="image w-[200px] h-[200px]">
                        <img src="{{ Vite::asset($product->image) }}" alt="{{ $product->name }}"
                            class="w-full h-full" />
                    </div>
                    {{-- Display product name --}}
                    <h4 class="font-[Poppins] font-bold text-lg ">{{ $product->name }}</h4>
                    {{-- Display product price --}}
                    <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp
                        {{ number_format($product->price, 0, ',', '.') }}/item</h5>

                    {{-- Quantity buttons --}}
                    <div class="plusminus flex flex-row justify-center items-start h-9">
                        <button id="minus"
                            class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                viewBox="0 0 14 13" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                        <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                            <p class="font-[Poppins] font-medium text-xs">1</p>
                        </div>
                        <button id="plus"
                            class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                viewBox="0 0 13 13" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                    </div>

                    {{-- Add to cart button --}}
                    <button
                        class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg w-full"
                        data-item-id="{{ $product->item_id }}">
                        <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                            fill="none">
                            <path
                                d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                                stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>

                </div>
            @endforeach
        </div>


        <section>
            <style>
                .modal-loading {

                    /* border: 0;
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;*/
                    --hue: 223;
                    --bg: hsl(var(--hue), 10%, 90%);
                    --fg: hsl(var(--hue), 10%, 10%);
                    --primary: hsl(var(--hue), 90%, 55%);
                    font-size: calc(16px + (20 - 16) * (100vw - 320px) / (1280 - 320));
                    --trans-dur: 0.3s;
                    background-color: var(--bg);
                    color: var(--fg);
                    font: 1em/1.5 "DM Sans", sans-serif;
                    height: 100vh;
                    display: grid;
                    place-items: center;
                    transition:
                        background-color var(--trans-dur),
                        color var(--trans-dur);
                }

                .preloader {
                    --hue: 223;
                    --bg: #6cd3e7;
                    --fg: #6cd3e7;
                    --primary: #6cd3e7;
                    font-size: calc(16px + (20 - 16) * (100vw - 320px) / (1280 - 320));
                    --trans-dur: 0.3s;
                    text-align: center;
                    max-width: 20em;
                    width: 100%;
                }

                .preloader__text {
                    position: relative;
                    height: 1.5em;
                }

                .preloader__msg {
                    animation: msg 0.3s 13.7s linear forwards;
                    position: absolute;
                    width: 100%;
                }

                .preloader__msg--last {
                    animation-direction: reverse;
                    animation-delay: 14s;
                    visibility: hidden;
                }

                .cart {
                    display: block;
                    margin: 0 auto 1.5em auto;
                    width: 8em;
                    height: 8em;
                }

                .cart__lines,
                .cart__top,
                .cart__wheel1,
                .cart__wheel2,
                .cart__wheel-stroke {
                    animation: cartLines 2s ease-in-out infinite;
                }

                .cart__lines {
                    stroke: var(--primary);
                }

                .cart__top {
                    animation-name: cartTop;
                }

                .cart__wheel1 {
                    animation-name: cartWheel1;
                    transform: rotate(-0.25turn);
                    transform-origin: 43px 111px;
                }

                .cart__wheel2 {
                    animation-name: cartWheel2;
                    transform: rotate(0.25turn);
                    transform-origin: 102px 111px;
                }

                .cart__wheel-stroke {
                    animation-name: cartWheelStroke
                }

                .cart__track {
                    stroke: hsla(var(--hue), 10%, 10%, 0.1);
                    transition: stroke var(--trans-dur);
                }

                /* Dark theme */
                @media (prefers-color-scheme: dark) {
                    :root {
                        --bg: hsl(var(--hue), 10%, 10%);
                        --fg: hsl(var(--hue), 10%, 90%);
                    }

                    .cart__track {
                        stroke: hsla(var(--hue), 10%, 90%, 0.1);
                    }
                }

                /* Animations */
                @keyframes msg {
                    from {
                        opacity: 1;
                        visibility: visible;
                    }

                    99.9% {
                        opacity: 0;
                        visibility: visible;
                    }

                    to {
                        opacity: 0;
                        visibility: hidden;
                    }
                }

                @keyframes cartLines {

                    from,
                    to {
                        opacity: 0;
                    }

                    8%,
                    92% {
                        opacity: 1;
                    }
                }

                @keyframes cartTop {
                    from {
                        stroke-dashoffset: -338;
                    }

                    50% {
                        stroke-dashoffset: 0;
                    }

                    to {
                        stroke-dashoffset: 338;
                    }
                }

                @keyframes cartWheel1 {
                    from {
                        transform: rotate(-0.25turn);
                    }

                    to {
                        transform: rotate(2.75turn);
                    }
                }

                @keyframes cartWheel2 {
                    from {
                        transform: rotate(0.25turn);
                    }

                    to {
                        transform: rotate(3.25turn);
                    }
                }

                @keyframes cartWheelStroke {

                    from,
                    to {
                        stroke-dashoffset: 81.68;
                    }

                    50% {
                        stroke-dashoffset: 40.84;
                    }
                }

                /* From Uiverse.io by bociKond */
                .loader {
                    /* color of choise */
                    --clr: #6cd3e7;
                    /* loading time of choice */
                    --load-time: 5s;
                    outline: 5px solid var(--clr);
                    outline-offset: 5px;
                    position: relative;
                    overflow: hidden;
                    border-radius: 5rem;
                    /* width: 10rem; */
                    /* height: 2rem; */
                    padding: 1rem 8rem;
                    /* use either padding or width + height*/
                    /* I prefer the padding one */
                    /* rotate: -90deg; */
                    /* rotate if you want/need vertical loader */
                }

                .loader::after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: var(--clr);
                    z-index: 2;
                    animation: loading var(--load-time) ease-in-out infinite;
                }

                @keyframes loading {
                    0% {
                        width: 0%;
                    }

                    100% {
                        width: 100%;
                    }
                }
            </style>
            <div id="modal-loading"
                class="fixed top-0 z-40 h-screen inset-0 bg-black bg-opacity-80 hidden justify-center items-center">
                <div
                    class="w-fit px-20 py-20 h-fit p-8 bg-white rounded-2xl flex flex-col gap-8 justify-center items-center">
                    <div class="preloader">
                        <svg class="cart" role="img" aria-label="Shopping cart line animation"
                            viewBox="0 0 128 128" width="128px" height="128px" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="8">
                                <g class="cart__track" stroke="hsla(0,10%,10%,0.1)">
                                    <polyline points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80" />
                                    <circle cx="43" cy="111" r="13" />
                                    <circle cx="102" cy="111" r="13" />
                                </g>
                                <g class="cart__lines" stroke="currentColor">
                                    <polyline class="cart__top"
                                        points="4,4 21,4 26,22 124,22 112,64 35,64 39,80 106,80"
                                        stroke-dasharray="338 338" stroke-dashoffset="-338" />
                                    <g class="cart__wheel1" transform="rotate(-90,43,111)">
                                        <circle class="cart__wheel-stroke" cx="43" cy="111" r="13"
                                            stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                                    </g>
                                    <g class="cart__wheel2" transform="rotate(90,102,111)">
                                        <circle class="cart__wheel-stroke" cx="102" cy="111" r="13"
                                            stroke-dasharray="81.68 81.68" stroke-dashoffset="81.68" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <div class="preloader__text">
                            <p class="preloader__msg">Bringing you the goods…</p>
                            <p class="preloader__msg preloader__msg--last">Please wait a second</p>
                        </div>
                    </div>
                    <div class="loader"></div>
                </div>
            </div>

            </div>
            <x-checkoutmodal @keydown.window.escape="open = false" x-show="open" @open-modal.window="open = true"
                :show="false" :cart=$cart id="cart-container" />

            <x-modal-add-product @keydown.window.escape="open = false" x-show="open"
                @open-modal.window="open = true" id="add-product-container" />

        </section>
    </main>
</body>

<script>
    //console.log("aaa");


    const searchButton = document.getElementById('search-button');
    const uploadImage = document.getElementById('upload-image');
    const productContainer = document.getElementById('product-container');
    const searchInput = document.getElementById('SearchInput');
    const imageSearchingInput = document.getElementById('imageSearchingInput');
    const imagePreview = document.getElementById('imagepreview');
    let imagePredictions = [];
    const variantsProduct = @json($variants);
    const productarray = @json($products);

    const modal = document.getElementById('modal');
    const modaladdproduct = document.getElementById('modaladdproduct');
    const modalbutton = document.getElementById('modal-button');
    const modaladdproductbutton = document.getElementById('modal-add-product');
    const closemodal = document.querySelector('.close');
    const cart = document.querySelectorAll('.addcart');
    // const cartbutton = document.querySelector('.cart-button');
    const minusButtons = document.querySelectorAll('#minus');
    const plusButtons = document.querySelectorAll('#plus');
    const amount = document.querySelectorAll('#amount');
    const cartButtons = document.querySelectorAll('.addcart');



    function showModal(imagePredictions) {
        const modalLoading = document.getElementById('modal-loading');
        modalLoading.classList.remove('hidden'); // Tampilkan modalLoading
        modalLoading.classList.add('flex'); // Pastikan flex layout aktif

        // Setelah 10 detik atau jika imagePrediction ada, sembunyikan modalLoading
        if (imagePredictions.length > 0) {
            modalLoading.classList.remove('flex');
            modalLoading.classList.add('hidden');
        } else {
            setTimeout(() => {
                modalLoading.classList.remove('flex');
                modalLoading.classList.add('hidden');
            }, 5000); // 10 detik dalam milidetik
        }

        // setTimeout(() => {
        //     modalLoading.classList.remove('flex');
        //     modalLoading.classList.add('hidden');
        // }, 10000); // 10 detik dalam milidetik

    }

    cartButtons.forEach(button => {
        button.addEventListener('click', async (e) => {
            const itemId = e.currentTarget.getAttribute('data-item-id');
            const amountElement = e.currentTarget.previousElementSibling.querySelector('#amount');
            const quantity = parseInt(amountElement.innerText);

            const cartItem = {
                item_id: itemId,
                quantity: quantity
            };

            console.log(JSON.stringify(cartItem));

            try {
                const response = await fetch('/add-to-cart', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    },
                    body: JSON.stringify(cartItem),
                });
                if (response.status === 200) {
                    const data = await response.json();
                    console.log(data); //  Akan mencetak response sebagai teks
                    updateCartUI();
                }
            } catch (error) {
                console.error(error);
            }
        });
    });

    // const inferEngine = new InferenceEngine();
    uploadImage.addEventListener('click', () => {
        imageSearchingInput.click();
    });


    imageSearchingInput.addEventListener('change', async () => {
        imagePredictions = [];
        const file = imageSearchingInput.files[0];

        const loadImageBase64 = (file) => {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => resolve(reader.result);
                reader.onerror = (error) => reject(error);
            });
        }

        const image = await loadImageBase64(file);


        axios({
                method: "POST",
                url: "https://detect.roboflow.com/ezycart-nbumi/5",
                params: {
                    api_key: "oA3su6iHtN60sgLa37vL"
                },
                data: image,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(function(response) {
                console.log(response.data.predictions);
                imagePredictions = response.data.predictions;
                // console.log(`Image predictions 1: ${imagePredictions}`);
                // addImagePredictionsToProductContainer();
            })
            .catch(function(error) {
                console.log(error.message);
            });

        axios({
                method: "POST",
                url: "https://detect.roboflow.com/ezycart-nbumi/1",
                params: {
                    api_key: "oA3su6iHtN60sgLa37vL"
                },
                data: image,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(function(response) {
                console.log(response.data.predictions);
                // imagePredictions = response.data.predictions;
                console.log(`Image predictions 2: ${imagePredictions}`);
                // cek jika imagePredictions sama maka tidak ditambahkan, jika beda maka tambahkan hasil prediksi ke dalam imagePredictions
                response.data.predictions.forEach((prediction) => {
                    if (!imagePredictions.some((imagePrediction) => imagePrediction.class ===
                            prediction.class)) {
                        imagePredictions.push(prediction);
                    }
                });
                // addImagePredictionsToProductContainer();
            })
            .catch(function(error) {
                console.log(error.message);
            });


        axios({
                method: "POST",
                url: "https://detect.roboflow.com/lanjutan-ezy-cart-pbkk/2",
                params: {
                    api_key: "oA3su6iHtN60sgLa37vL"
                },
                data: image,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(function(response) {
                console.log(response.data.predictions);
                // imagePredictions = response.data.predictions;
                // cek jika imagePredictions sama maka tidak ditambahkan, jika beda maka tambahkan hasil prediksi ke dalam imagePredictions
                response.data.predictions.forEach((prediction) => {
                    if (!imagePredictions.some((imagePrediction) => imagePrediction.class ===
                            prediction.class)) {
                        imagePredictions.push(prediction);
                    }
                });
                // addImagePredictionsToProductContainer();
            })
            .catch(function(error) {
                console.log(error.message);
            });


        axios({
                method: "POST",
                url: "https://detect.roboflow.com/lanjutan-ezy-cart-pbkk/4",
                params: {
                    api_key: "oA3su6iHtN60sgLa37vL"
                },
                data: image,
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                }
            })
            .then(function(response) {
                console.log(response.data.predictions);
                // imagePredictions = response.data.predictions;
                // cek jika imagePredictions sama maka tidak ditambahkan, jika beda maka tambahkan hasil prediksi ke dalam imagePredictions
                response.data.predictions.forEach((prediction) => {
                    if (!imagePredictions.some((imagePrediction) => imagePrediction.class ===
                            prediction.class)) {
                        imagePredictions.push(prediction);
                    }
                });
                addImagePredictionsToProductContainer();
            })
            .catch(function(error) {
                console.log(error.message);
            });


        showModal(imagePredictions);
    });



    // imageSearchingInput.addEventListener('change', async () => {
    //     imagePredictions = [];
    //     const file = imageSearchingInput.files[0];

    //     const configuration = {
    //         scoreThreshold: 0.5,
    //         iouThreshold: 0.5,
    //         maxNumBoxes: 20
    //     };

    //     const workerId = await inferEngine.startWorker("ezycart-nbumi", "5",
    //         "oA3su6iHtN60sgLa37vL", [
    //             configuration
    //         ]);
    //     const image = await inferEngine.loadImage(file);
    //     console.log(image);

    // });



    function addImagePredictionsToProductContainer() {
        event.preventDefault();
        const productResult = [];


        //mengecek dan mengumpulkan semua produk berdasarkan kategori atau variant yang terkandug di dalam imagePredictions
        imagePredictions.forEach((prediction) => {
            const targetPrefix = prediction.class;
            console.log(targetPrefix);

            var matchedVariantName;

            // Iterate over each product variant
            Object.keys(variantsProduct).forEach(productKey => {
                console.log(`Checking product: ${productKey}`);

                if (targetPrefix === productKey) {
                    console.log(`Match found for product: ${productKey}`);
                    matchedVariantName = productKey;
                } else
                    // Iterate over each variant in the product
                    variantsProduct[productKey].forEach(variant => {
                        console.log(variant.image_front);
                        // Compare the target string with image_back, image_front, and image_side if it exists
                        if (variant.image_back && variant.image_back === targetPrefix) {
                            console.log(`Match found for image_back in product: ${productKey}`);
                            matchedVariantName = productKey;
                        }
                        if (variant.image_front && variant.image_front === targetPrefix) {
                            console.log(`Match found for image_front in product: ${productKey}`);
                            matchedVariantName = productKey;

                        }
                        if (variant.image_side && variant.image_side === targetPrefix) {
                            console.log(`Match found for image_side in product: ${productKey}`);
                            matchedVariantName = productKey;

                        }
                    });
            });

            if (matchedVariantName) {
                const productToAdd = productarray.find((product) =>
                    product.image.includes(matchedVariantName)
                );
                if (productToAdd && !productResult.some(product => product.image === productToAdd.image)) {
                    productResult.push(productToAdd);

                    console.log(productResult);
                }

            }
        });

        productContainer.innerHTML = '';
        if (productResult.length === 0) {
            productContainer.innerHTML = '<h1 class="font-[Poppins] font-bold text-4xl">No Product Found</h1>';
        }
        //console.log("ini adalah result", productResult());

        //menampilkan produk yang terkandung di dalam imagePredictions


        productResult.forEach((product) => {
            const productImagePath = `{{ Vite::asset('${product.image}') }}`;

            productContainer.innerHTML += `
                           <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                    {{-- Display product image --}}
                    <div class="image w-[200px] h-[200px]">
                        <img src="${productImagePath}" alt="${product.name}"
                            class="w-full h-full" />
                    </div>
                    {{-- Display product name --}}
                    <h4 class="font-[Poppins] font-bold text-lg ">${product.name}</h4>
                    {{-- Display product price --}}
                    <h5 class="harga font
    -[Poppins] font-bold text-base text-[#168F64]">Rp
                        ${product.price}/item</h5>

                    {{-- Quantity buttons --}}
                    <div class="plusminus flex flex-row justify-center items-start h-9">
                        <button id="minusOn"
                            class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                        <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                            <p class="font-[Poppins] font-medium text-xs">1</p>
                        </div>
                        <button id="plusOn"
                            class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577
                                    10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                    </div>
                        <button
                            class="addcartOn flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg w-full">
                            <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                                fill="none">
                                <path
                                    d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.
                            </svg>
                        </button>
                    </div>
                `;
        });
    }

    searchButton.addEventListener('click', () => {

        const searchValue = searchInput.value.toLowerCase();
        const filteredProducts = productarray.filter((product) => product.name.toLowerCase().includes(
            searchValue));

        productContainer.innerHTML = '';
        if (filteredProducts.length === 0) {
            productContainer.innerHTML = '<h1 class="font-[Poppins] font-bold text-4xl">No Product Found</h1>';
        }
        const productImage = productarray.find((product) => product.name.toLowerCase().includes(
            searchValue)).image;

        filteredProducts.forEach((product) => {
            const productImagePath = `{{ Vite::asset('${product.image}') }}`;

            productContainer.innerHTML += `
                           <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                    {{-- Display product image --}}
                    <div class="image w-[200px] h-[200px]">
                        <img src="${productImagePath}" alt="${product.name}"
                            class="w-full h-full" />
                    </div>
                    {{-- Display product name --}}
                    <h4 class="font-[Poppins] font-bold text-lg ">${product.name}</h4>
                    {{-- Display product price --}}
                    <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp
                        ${product.price}/item</h5>

                    {{-- Quantity buttons --}}
                    <div class="plusminus flex flex-row justify-center items-start h-9">
                        <button id="minusOn"
                            class="px-4 py-1 flex justify-center items-center border rounded-l-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.67578 6.79314C2.67578 6.45056 2.95349 6.17285 3.29607 6.17285L10.7395 6.17285C11.0821 6.17285 11.3598 6.45056 11.3598 6.79314C11.3598 7.13572 11.0821 7.41343 10.7395 7.41343L3.29607 7.41343C2.95349 7.41343 2.67578 7.13572 2.67578 6.79314Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                        <div id="amount" class="px-4 py-1 flex justify-center items-center border h-full">
                            <p class="font-[Poppins] font-medium text-xs">1</p>
                        </div>
                        <button id="plusOn"
                            class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                    </div>
                     <button
                        class="addcartOn flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg w-full">
                        <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                            fill="none">
                            <path
                                d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                                stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>

                </div>
               
        `;
        });

    });

    let cartArray = [];


    if (modalbutton)
        modalbutton.addEventListener('click', () => {
            modal.classList.toggle('hidden');
            modal.classList.toggle('flex');
            document.querySelector('body').classList.toggle('overflow-y-hidden');
            updateCartUI(); // Update the cart when the modal is opened
        });


    if (modaladdproductbutton)
        modaladdproductbutton.addEventListener('click', () => {
            modaladdproduct.classList.toggle('hidden');
            modaladdproduct.classList.toggle('flex');
            document.querySelector('body').classList.toggle('overflow-y-hidden');
            updateCartUI(); // Update the cart when the modal is opened
        });


    closemodal.addEventListener('click', () => {
        modal.classList.toggle('flex');
        modal.classList.toggle('hidden');
        document.querySelector('body').classList.toggle('overflow-y-hidden');
    });

    minusButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const amountElement = e.currentTarget.nextElementSibling;
            let value = parseInt(amountElement.innerText);
            if (value > 1) {
                value -= 1;
                amountElement.innerText = value;
            }
        });
    });

    // Handle plus button click to increase quantity
    plusButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            console.log("AAA");
            const amountElement = e.currentTarget.previousElementSibling;
            let value = parseInt(amountElement.innerText);
            value += 1;
            amountElement.innerText = value;
        });
    });


    // fungsikan addcart untuk reset amount
    // cart.forEach(async (button) => {
    //     button.addEventListener('click', async() => {

    //         try {
    //             let name = button.previousElementSibling.previousElementSibling
    //                 .previousElementSibling
    //                 .innerText;
    //             let price = button.previousElementSibling.previousElementSibling.innerText;
    //             let quantity = parseInt(button.previousElementSibling.innerText);
    //             let product = productarray.find((product) => product.name === name);

    //             const cartItem = {
    //                 item_id: product.id,
    //                 quantity: quantity
    //             }

    //             const response = await fetch('/add-to-cart', {
    //                 method: 'POST',
    //                 headers: {
    //                     'Content-Type': 'application/json',
    //                     'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    //                 },
    //                 body: JSON.stringify(cartItem)
    //             });
    //             if (response.status === 200) {
    //                 console.log(response.data);
    //             }
    //             UpdateCartUI();
    //         } catch (error) {
    //             console.log(error);
    //         }
    //     });

    // });

    // Attach an event listener to the productContainer for any clicks
    productContainer.addEventListener('click', (event) => {
        // Check if the clicked element is the plus button
        if (event.target.closest('#plusOn')) {
            const amountElement = event.target.closest('.plusminus').querySelector('#amount p');
            let amount = parseInt(amountElement.innerText);
            amountElement.innerText = amount + 1; // Increment the amount
        }

        // Check if the clicked element is the minus button
        if (event.target.closest('#minusOn')) {
            const amountElement = event.target.closest('.plusminus').querySelector('#amount p');
            let amount = parseInt(amountElement.innerText);
            if (amount > 1) {
                amountElement.innerText = amount - 1; // Decrement the amount
            }

        }

        // Check if the clicked element is the add to cart button
        if (event.target.closest('.addcartOn')) {
            const productElement = event.target.closest('.card');
            const name = productElement.querySelector('h4').innerText;
            const price = productElement.querySelector('h5').innerText;
            const quantity = parseInt(productElement.querySelector('#amount p').innerText);
            const image = productElement.querySelector('.image img').src;

            const cartItem = {
                'name': name,
                'price': price,
                'quantity': quantity,
                'image': image,
            };

            if (cartArray.length == 0) {
                cartArray.push(cartItem);
            } else {
                let itemFound = false; // Flag untuk cek apakah item ditemukan

                cartArray.forEach((item) => {
                    if (item.name === name) {
                        if (item.quantity != quantity) {
                            item.quantity = quantity;
                        }
                        itemFound = true; // Item ditemukan
                        return;
                    }
                });

                if (!itemFound) {
                    cartArray.push(cartItem); // Jika item tidak ditemukan, push ke array
                }
            }

            console.log(cartArray);
        }
    });

    var cart_items_names = [];

    async function updateCartUI() {
        try {
            const response = await fetch('get-cart'); // Mengambil data cart dari server
            const cart_items = await response.json(); // Mengubah response menjadi JSON
            cart_items_names = cart_items.product;
            console.log(cart_items.product[2].image);

            const cartContainer = document.getElementById(
                'cart-container-items'); // Element container di dalam modal
            cartContainer.innerHTML = ''; // Bersihkan container sebelum memasukkan item baru

            if (cart_items_names.length > 0) {
                cart_items_names.forEach((item, index) => {
                    // Membuat elemen HTML untuk setiap item di cart
                    const cartItem = `
                    <div class="card w-full items-center justify-center px-5 py-3 flex flex-row bg-[#EAEAEA] rounded-xl">
                        <div class="w-[50%] flex flex-row gap-3 items-center">
                            <div class="image w-[15%]">
                                <img src="{{ Vite::asset('${item.image}') }}" alt="{{ $product->name }}" class="w-full h-full" />
                            </div>
                            <p class="font-[Poppins] font-normals text-2xl ">${item.name}</p>
                        </div>
                        <div class="w-[50%] flex flex-row justify-between items-center">
                            <p class="font-[Poppins] font-normals text-2xl ">${item.price}</p>
                            <div class="quantity-control flex items-center gap-2">
                                <button class="decrease-quantity" onclick="updateQuantity(${index}, 'decrease')">−</button>
                                <p class="font-[Poppins] font-normals text-2xl" id="quantity-${index}">${item.quantity}</p>
                                <button class="increase-quantity" onclick="updateQuantity(${index}, 'increase')">+</button>
                            </div>
                            <p class="font-[Poppins] font-normals text-2xl" id="subtotal-${index}">Rp ${(item.price * item.quantity).toLocaleString()}</p>
                        </div>
                    </div>
                `;
                    cartContainer.innerHTML += cartItem; // Masukkan item ke dalam container
                });
            } else {
                cartContainer.innerHTML = '<p>Your cart is empty.</p>';
            }

        } catch (error) {
            console.error('Error fetching cart data:', error);
        }
    }

    function updateQuantity(index, action) {
        const quantityElement = document.getElementById(`quantity-${index}`);
        let quantity = parseInt(quantityElement.innerText);

        if (action === 'increase') {
            quantity += 1;
        } else if (action === 'decrease' && quantity > 0) {
            quantity -= 1;
        }

        quantityElement.innerText = quantity;

        // Update subtotal
        const price = cart_items_names[index].price;
        const subtotalElement = document.getElementById(`subtotal-${index}`);
        subtotalElement.innerText = `Rp ${(price * quantity).toLocaleString()}`;

        // Update the cart_items_names with new quantity
        cart_items_names[index].quantity = quantity;
    }

    // Function to update the cart (send updated quantities to the server)
    async function updateCart() {
        try {
            console.log(cart_items_names);
            const response = await fetch('/update-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify(cart_items_names)
            });
            if (response.status === 200) {
                const data = await response.json();
                console.log(data); //  Akan mencetak response sebagai teks
                updateCartUI();
            }

        } catch (error) {
            console.error('Error updating cart:', error);
        }
    }
</script>

</html>
