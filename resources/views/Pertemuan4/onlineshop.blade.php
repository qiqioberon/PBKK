<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/fonts.css')

    <title>MEME SHOP</title>
</head>

<body class="h-full px-24 pt-12 pb-24">


    <nav class="px-24 pt-7 pb-3 w-full flex flex-row justify-between items-center fixed top-0 left-0 right-0 bg-white">
        <h5 class="font-[LemonMilk] font-bold text-3xl text-[#54C4DB]">MEMEMARKET</h5>
        <div class="flex flex-row gap-12 justify-center items-center font-[Poppins]">
            <p>Home</p>
            <p>Shop</p>
            <p>About Us</p>
        </div>
        <button class="flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-5 py-3 hover:bg-[#4e838e]" id="modal-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path
                    d="M3 3.5H5L5.4 5.5M7 13.5H17L21 5.5H5.4M7 13.5L5.4 5.5M7 13.5L4.70711 15.7929C4.07714 16.4229 4.52331 17.5 5.41421 17.5H17M17 17.5C15.8954 17.5 15 18.3954 15 19.5C15 20.6046 15.8954 21.5 17 21.5C18.1046 21.5 19 20.6046 19 19.5C19 18.3954 18.1046 17.5 17 17.5ZM9 19.5C9 20.6046 8.10457 21.5 7 21.5C5.89543 21.5 5 20.6046 5 19.5C5 18.3954 5.89543 17.5 7 17.5C8.10457 17.5 9 18.3954 9 19.5Z"
                    stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h3 class="font-[LemonMilk] font-bold text-lg ">YOUR CART</h3>
        </button>
    </nav>
    <main class="w-full flex flex-col justify-center items-center pt-16 gap-9 main-content">

        <img src={{ Vite::asset('resources/images/Onlineshop/Main/hero.png') }} alt="hero" class="w-full" />
        <div class="flex flex-col gap-1 w-full items-start">
            <h1 class="font-[Poppins] font-bold text-4xl">OUR PRODUCT</h1>
            <p class="font-[Poppins] font-medium text-xl ">Check our best memes on this world</p>
        </div>
        <div class="flex flex-wrap gap-10 w-full justify-center items-center">
            @foreach ($products as $product)
                <div class="card flex flex-col gap-4 items-center justify-center shadow-xl p-6 rounded-xl">
                    {{-- Display product image --}}
                    <div class="image w-[200px] h-[200px]">
                        <img src="{{ Vite::asset($product['image']) }}" alt="{{ $product['name'] }}"
                            class="w-full h-full" />
                    </div>
                    {{-- Display product name --}}
                    <h4 class="font-[Poppins] font-bold text-lg ">{{ $product['name'] }}</h4>
                    {{-- Display product price --}}
                    <h5 class="harga font-[Poppins] font-bold text-base text-[#168F64]">Rp
                        {{ number_format($product['price'], 0, ',', '.') }}/item</h5>

                    {{-- Quantity buttons --}}
                    <div class="plusminus flex flex-row justify-center items-start h-9">
                        <button id="minus"
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
                        <button id="plus"
                            class="px-4 py-1 flex justify-center items-center border rounded-r-lg h-full hover:bg-black/20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.35081 2.45117C6.69338 2.45117 6.9711 2.72888 6.9711 3.07146V6.1729H10.0725C10.4151 6.1729 10.6928 6.45062 10.6928 6.79319C10.6928 7.13577 10.4151 7.41348 10.0725 7.41348H6.9711V10.5149C6.9711 10.8575 6.69338 11.1352 6.35081 11.1352C6.00823 11.1352 5.73052 10.8575 5.73052 10.5149V7.41348H2.62908C2.2865 7.41348 2.00879 7.13577 2.00879 6.79319C2.00879 6.45061 2.2865 6.1729 2.62908 6.1729L5.73052 6.1729V3.07146C5.73052 2.72888 6.00823 2.45117 6.35081 2.45117Z"
                                    fill="#212122" />
                            </svg>
                        </button>
                    </div>

                    {{-- Add to cart button --}}
                    {{-- <form action="{{ route('add.to.cart') }}" method="POST" class="w-full"> --}}

                    <button
                        class="addcart flex flex-row gap-1 px-5 py-2 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg w-full">
                        <p class="font-[Poppins] font-semibold text-xs text-white">Add Cart</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 13 13"
                            fill="none">
                            <path
                                d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                                stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    </form>
                </div>
            @endforeach


        </div>
        <button
            class="addcart flex flex-row gap-4 px-20 py-6 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg w-fit"
            id="send-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 13 13" fill="none">
                <path
                    d="M2.2417 2.26514H3.20771L3.40092 3.23115M4.17373 7.09521H9.00379L10.9358 3.23115H3.40092M4.17373 7.09521L3.40092 3.23115M4.17373 7.09521L3.06624 8.20269C2.76197 8.50697 2.97747 9.02723 3.40778 9.02723H9.00379M9.00379 9.02723C8.47028 9.02723 8.03778 9.45973 8.03778 9.99325C8.03778 10.5268 8.47028 10.9593 9.00379 10.9593C9.53731 10.9593 9.96981 10.5268 9.96981 9.99325C9.96981 9.45973 9.53731 9.02723 9.00379 9.02723ZM5.13974 9.99325C5.13974 10.5268 4.70724 10.9593 4.17373 10.9593C3.64021 10.9593 3.20771 10.5268 3.20771 9.99325C3.20771 9.45973 3.64021 9.02723 4.17373 9.02723C4.70724 9.02723 5.13974 9.45973 5.13974 9.99325Z"
                    stroke="#F9F9FA" stroke-width="0.966014" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <h3 class="font-[LemonMilk] font-bold text-lg text-white">SERIUS ? yakin dek?</h3>
        </button>
        <section>
            <x-checkoutmodal @keydown.window.escape="open = false" x-show="open" @open-modal.window="open = true"
                :show="false" :cart=$cart />
        </section>
    </main>
</body>

<script>
    const productarray = @json($products);
    //console.log(productarray);
    const modal = document.getElementById('modal');
    const modalbutton = document.getElementById('modal-button');
    const closemodal = document.querySelector('.close');
    const sendcart = document.getElementById('send-cart');



    const cart = document.querySelectorAll('.addcart');
    const cartbutton = document.querySelector('.cart-button');
    const minus = document.querySelectorAll('#minus');
    const plus = document.querySelectorAll('#plus');
    const amount = document.querySelectorAll('#amount');

    let cartArray = [
        //contoh array cart
        // [
        //     'name' => 'Kentang GedaGedi',
        //     'price' => 30000,
        //     'image' => 'resources/images/Onlineshop/Main/kentang.png',
        //     'amount' => 1,
        // ],
        // [
        //     'name' => 'Kentang GedaGedi1',
        //     'price' => 10000,
        //     'image' => 'resources/images/Onlineshop/Main/kentang.png',
        //     'amount' => 1,
        // ],
        // [
        //     'name' => 'Kentang GedaGedi2',
        //     'price' => 20000,
        //     'image' => 'resources/images/Onlineshop/Main/kentang.png',
        //     'amount' => 1,
        // ],
        // [
        //     'name' => 'Kentang GedaGedi3',
        //     'price' => 40000,
        //     'image' => 'resources/images/Onlineshop/Main/kentang.png',
        //     'amount' => 1,
        // ],
        // [
        //     'name' => 'Kentang GedaGedi4',
        //     'price' => 100000,
        //     'image' => 'resources/images/Onlineshop/Main/kentang.png',
        //     'amount' => 1,
        // ],
    ];


    modalbutton.addEventListener('click', async () => {
        modal.classList.toggle('hidden');
        modal.classList.toggle('flex');
        document.querySelector('body').classList.toggle('overflow-y-hidden');
        await axios.post('/online-shop', {
            cart: cartArray
        }).then((response) => {
            console.log(response);
        }).catch((error) => {
            console.log(error);
        });


    });

    sendcart.addEventListener('click', async () => {

    });

    closemodal.addEventListener('click', () => {
        modal.classList.toggle('flex');
        modal.classList.toggle('hidden');
        document.querySelector('body').classList.toggle('overflow-y-hidden');
    });

    // fungsikan plus dan minus untuk mengedit isi dari amount
    minus.forEach((button) => {
        button.addEventListener('click', () => {
            let value = parseInt(button.nextElementSibling.innerText);
            if (value > 1) {
                value -= 1;
                button.nextElementSibling.innerText = value;
            }
        });
    });

    plus.forEach((button) => {
        button.addEventListener('click', () => {
            let value = parseInt(button.previousElementSibling.innerText);
            value += 1;
            button.previousElementSibling.innerText = value;
        });
    });


    // fungsikan addcart untuk reset amount
    cart.forEach(async (button) => {
        button.addEventListener('click', () => {
            let name = button.previousElementSibling.previousElementSibling.previousElementSibling
                .innerText;
            let price = button.previousElementSibling.previousElementSibling.innerText;
            let quantity = parseInt(button.previousElementSibling.innerText);
            let image = productarray.find((product) => product.name === name).image;
            let cartItem = {
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
        });

    });
</script>

</html>
