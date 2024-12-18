<div x-show="open"
    class="fixed top-0 z-40 h-screen inset-0 bg-black bg-opacity-50 justify-center pt-20 pb-20 overflow-y-auto  {{ $show ? 'flex' : 'hidden' }}"
    id="modal">
    <div class="w-[60%] h-fit p-16 bg-white justify-start items-start rounded-2xl flex flex-col gap-8 ">
        <div class="flex flex-row justify-between w-full">
            <h1 class="font-[Poppins] font-bold text-5xl">Checkouts</h1>
            <button class="hover:bg-black/20 rounded-lg close" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path d="M36 12L12 36M12 12L36 36" stroke="#1E1E1E" stroke-width="4" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <div class="flex w-full flex-row gap-0">
            <div class="w-[50%] justify-start flex">
                <h3 class="font-[Poppins] text-2xl font-semibold">Item</h3>
            </div>
            <div class="w-[50%] flex flex-row justify-between font-semibold">
                <h3 class="font-[Poppins] text-2xl">Price</h3>
                <h3 class="font-[Poppins] text-2xl">Quantity</h3>
                <h3 class="font-[Poppins] text-2xl">Subtotal</h3>
            </div>
        </div>

        <!-- Container untuk item cart yang akan di-insert dari updateCartUI -->
        <div id="cart-container-items" class="flex w-full flex-col gap-3">
            <!-- Items akan di-update di sini -->
        </div>

        <!-- Update Cart Button -->
        <div class="w-full flex justify-center items-center mt-5">
            <button id="update-cart-button" class="w-fit flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-5 py-3 hover:bg-[#4e838e]" onclick="updateCart()">
                <h3 class="font-[LemonMilk] font-bold text-lg">UPDATE CART</h3>
            </button>
        </div>

        <div class="grandtotal flex flex-col gap-8 py-10 bg-[#EAEAEA] w-full rounded-2xl justify-center">
            <div class="w-full flex justify-center items-center">
                <button class="w-fit flex flex-row gap-2 rounded-xl bg-[#76E8FF] px-5 py-3 hover:bg-[#4e838e]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25"
                        fill="none">
                        <path
                            d="M3 3.5H5L5.4 5.5M7 13.5H17L21 5.5H5.4M7 13.5L5.4 5.5M7 13.5L4.70711 15.7929C4.07714 16.4229 4.52331 17.5 5.41421 17.5H17M17 17.5C15.8954 17.5 15 18.3954 15 19.5C15 20.6046 15.8954 21.5 17 21.5C18.1046 21.5 19 20.6046 19 19.5C19 18.3954 18.1046 17.5 17 17.5ZM9 19.5C9 20.6046 8.10457 21.5 7 21.5C5.89543 21.5 5 20.6046 5 19.5C5 18.3954 5.89543 17.5 7 17.5C8.10457 17.5 9 18.3954 9 19.5Z"
                            stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <h3 class="font-[LemonMilk] font-bold text-lg ">PROCEED TO CHECKOUT</h3>
                </button>
            </div>
        </div>
    </div>
</div>

