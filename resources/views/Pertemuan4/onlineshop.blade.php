<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <script src="https://cdn.jsdelivr.net/npm/inferencejs"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @vite('resources/css/fonts.css')

    <title>MEME SHOP</title>
</head>

<body class="h-full px-24 pt-12 pb-24">


    <nav class="px-24 pt-7 pb-3 w-full flex flex-row justify-between items-center fixed top-0 left-0 right-0 bg-white">
        <h5 class="font-[LemonMilk] font-bold text-3xl text-[#54C4DB]">MARKET APALAHHH</h5>
        <div class="flex flex-row gap-4 w-[50%]">
            <input type="file" id="imageSearchingInput" class="hidden" />
            <input
                class="block w-[70%] rounded-md border border-gray-300 focus:border-[#75c4d4] focus:outline-none focus:ring-1 focus:ring-[#4e838e] py-1 px-1.5 text-gray-500 pr-10"
                id="SearchInput" />
            <button class="flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-7 py-3 hover:bg-[#4e838e]" id="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 128 128">
                    <path
                        d="M 52.349609 14.400391 C 42.624609 14.400391 32.9 18.1 25.5 25.5 C 10.7 40.3 10.7 64.399219 25.5 79.199219 C 32.9 86.599219 42.600391 90.300781 52.400391 90.300781 C 62.200391 90.300781 71.900781 86.599219 79.300781 79.199219 C 94.000781 64.399219 93.999219 40.3 79.199219 25.5 C 71.799219 18.1 62.074609 14.400391 52.349609 14.400391 z M 52.300781 20.300781 C 60.500781 20.300781 68.700391 23.399219 74.900391 29.699219 C 87.400391 42.199219 87.4 62.5 75 75 C 62.5 87.5 42.199219 87.5 29.699219 75 C 17.199219 62.5 17.199219 42.199219 29.699219 29.699219 C 35.899219 23.499219 44.100781 20.300781 52.300781 20.300781 z M 52.300781 26.300781 C 45.400781 26.300781 38.9 29 34 34 C 29.3 38.7 26.700391 44.800391 26.400391 51.400391 C 26.300391 53.100391 27.600781 54.4 29.300781 54.5 L 29.400391 54.5 C 31.000391 54.5 32.300391 53.199609 32.400391 51.599609 C 32.600391 46.499609 34.699219 41.799219 38.199219 38.199219 C 41.999219 34.399219 47.000781 32.300781 52.300781 32.300781 C 54.000781 32.300781 55.300781 31.000781 55.300781 29.300781 C 55.300781 27.600781 54.000781 26.300781 52.300781 26.300781 z M 35 64 A 3 3 0 0 0 32 67 A 3 3 0 0 0 35 70 A 3 3 0 0 0 38 67 A 3 3 0 0 0 35 64 z M 83.363281 80.5 C 82.600781 80.5 81.850781 80.800391 81.300781 81.400391 C 80.100781 82.600391 80.100781 84.499609 81.300781 85.599609 L 83.800781 88.099609 C 83.200781 89.299609 82.900391 90.6 82.900391 92 C 82.900391 94.4 83.8 96.700391 85.5 98.400391 L 98.300781 111 C 100.10078 112.8 102.39922 113.69922 104.69922 113.69922 C 106.99922 113.69922 109.29961 112.79961 111.09961 111.09961 C 114.59961 107.59961 114.59961 101.90039 111.09961 98.400391 L 98.300781 85.599609 C 96.600781 83.899609 94.300391 83 91.900391 83 C 90.500391 83 89.2 83.300391 88 83.900391 L 85.5 81.400391 C 84.9 80.800391 84.125781 80.5 83.363281 80.5 z M 91.900391 88.900391 C 92.700391 88.900391 93.5 89.200781 94 89.800781 L 106.69922 102.5 C 107.89922 103.7 107.89922 105.59922 106.69922 106.69922 C 105.49922 107.89922 103.6 107.89922 102.5 106.69922 L 89.800781 94.099609 C 89.200781 93.499609 88.900391 92.700391 88.900391 91.900391 C 88.900391 91.100391 89.200781 90.300781 89.800781 89.800781 C 90.400781 89.200781 91.100391 88.900391 91.900391 88.900391 z">
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

                </div>
            @endforeach


        </div>
        <button
            class="addcart flex flex-row gap-4 px-20 py-6 justify-center items-center bg-[#168F64] hover:bg-[#7cc4ab] rounded-lg w-fit"
            id="send-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 13 13"
                fill="none">
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
    const modalbutton = document.getElementById('modal-button');
    const closemodal = document.querySelector('.close');

    const cart = document.querySelectorAll('.addcart');
    const cartbutton = document.querySelector('.cart-button');
    const minus = document.querySelectorAll('#minus');
    const plus = document.querySelectorAll('#plus');
    const amount = document.querySelectorAll('#amount');

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
                addImagePredictionsToProductContainer();
            })
            .catch(function(error) {
                console.log(error.message);
            });
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
            const matchedVariantName = Object.keys(variantsProduct).find(key =>
                variantsProduct[key].some(variant => variant.includes(targetPrefix))
            );

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

        //console.log("ini adalah result", productResult());

        //menampilkan produk yang terkandung di dalam imagePredictions


        productContainer.innerHTML = '';
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


    // const axios = require("axios");
    // const fs = require("fs");

    // const image = fs.readFileSync("YOUR_IMAGE.jpg", {
    //     encoding: "base64"
    // });

    // axios({
    //         method: "POST",
    //         url: "https://detect.roboflow.com/grocery-gf8x4/2",
    //         params: {
    //             api_key: "oA3su6iHtN60sgLa37vL"
    //         },
    //         data: image,
    //         headers: {
    //             "Content-Type": "application/x-www-form-urlencoded"
    //         }
    //     })
    //     .then(function(response) {
    //         console.log(response.data);
    //     })
    //     .catch(function(error) {
    //         console.log(error.message);
    //     });
    // });

    searchButton.addEventListener('click', () => {

        const searchValue = searchInput.value.toLowerCase();
        const filteredProducts = productarray.filter((product) => product.name.toLowerCase().includes(
            searchValue));
        const productImage = productarray.find((product) => product.name.toLowerCase().includes(
            searchValue)).image;

        productContainer.innerHTML = '';
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






    //console.log(productarray);

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
            // console.log(button.previousElementSibling.previousElementSibling.parentElement
            // .previousElementSibling
            //   .previousElementSibling);
            //  console.log(button.previousElementSibling.innerText);
            let value = parseInt(button.previousElementSibling.innerText);
            value += 1;
            button
                .previousElementSibling.innerText = value;
        });
    });


    // fungsikan addcart untuk reset amount
    cart.forEach(async (button) => {
        button.addEventListener('click', () => {
            let name = button.previousElementSibling.previousElementSibling
                .previousElementSibling
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
</script>

</html>
