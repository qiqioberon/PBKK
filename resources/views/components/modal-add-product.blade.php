<div x-show="open"
    class="fixed top-0 z-40 h-screen inset-0 bg-black bg-opacity-50 justify-center pt-20 pb-20 overflow-y-auto group-aria-hidden hidden"
    id="modaladdproduct">
    <div class="w-[60%] h-fit p-16 bg-[#212122] justify-center items-center rounded-2xl flex flex-col gap-8 "
        id="insideAddProductModal">
        <div class="flex items-center w-[80%] flex-col gap-4 justify-center">
            <div class="flex flex-row justify-end w-full">
                <button class="hover:bg-black/20 rounded-lg closeAddProduct" @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                        fill="none">
                        <path d="M36 12L12 36M12 12L36 36" stroke="#f8f8f9" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <h3 class="font-bold text-base text-[#f8f8f9]">UPLOAD PRODUCT DISINI</h3>
            <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data"
                class="w-full flex gap-4 flex-col">
                @csrf
                <div class="flex p-9 flex-col border border-dashed rounded-md border-[#F9F9FA] w-full gap-4 justify-center items-center drop-area"
                    id="drop-area">
                    <img src="" alt="Preview" class="hidden imagepreview relative z-50"
                        id="imagepreviewproduct" />
                    <!-- Elemen untuk preview -->
                    <div class="w-full flex flex-col justify-center items-center gap-4 calonhidden">
                        <div class="flex flex-row gap-2 justify-center items-center">
                            <div class="rounded-full p-1 border border-[#f8f8f9]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9"
                                    fill="none">
                                    <path
                                        d="M6.02334 3.93998C5.96001 3.93998 5.89668 3.91665 5.84668 3.86665L4.00001 2.01998L2.15334 3.86665C2.05668 3.96331 1.89668 3.96331 1.80001 3.86665C1.70334 3.76998 1.70334 3.60998 1.80001 3.51331L3.82334 1.48998C3.92001 1.39331 4.08001 1.39331 4.17668 1.48998L6.20001 3.51331C6.29668 3.60998 6.29668 3.76998 6.20001 3.86665C6.15334 3.91665 6.08668 3.93998 6.02334 3.93998Z"
                                        fill="#F9F9FA" />
                                    <path
                                        d="M4 7.58333C3.86333 7.58333 3.75 7.46999 3.75 7.33333V1.72333C3.75 1.58666 3.86333 1.47333 4 1.47333C4.13667 1.47333 4.25 1.58666 4.25 1.72333V7.33333C4.25 7.46999 4.13667 7.58333 4 7.58333Z"
                                        fill="#F9F9FA" />
                                </svg>
                            </div>
                            <p class="text-[#f8f8f9] text-xs text-center font-light">Drag and drop atau click to upload
                            </p>
                        </div>

                        <h5 class="text-[#f8f8f9] text-base text-center font-medium">Or</h5>
                        <input type="file" id="image-input" name="image" accept="image/*" style="display: none;"
                            class="bg-[#69696944]">
                        @error('image')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        <button id="button-upload"
                            class=" text-[#808080] py-3 px-5 flex justify-center items-center rounded-xl border-[#545977] border-2 w-[40%] hover:border-[#a0a7cc] hover:text-white">Upload
                            Dari Komputer</button>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="name" class="text-[#f8f8f9] font-bold text-base">Nama Produk</label>
                    <input type="text" name="name" id="name"
                        class="w-full bg-[#69696944] border border-[#F9F9FA] rounded-md p-2 text-white">
                    @error('name')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex w-full justify-center items-center">
                    <button
                        class="flex justify-center items-center px-3 py-1 rounded-xl bg-[#FD6565] border border-[#212122] w-[50%] hover:bg-[#ffe9e9]">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const dropArea = document.getElementById('drop-area');
    const imageInput = document.getElementById('image-input');
    const preview = document.getElementById('imagepreviewproduct');
    const buttonUpload = document.getElementById('button-upload');
    const calonhidden = document.querySelector('.calonhidden');
    const closemodalAddProduct = document.querySelector('.closeAddProduct');

    closemodalAddProduct.addEventListener('click', () => {
        document.getElementById('modaladdproduct').classList.toggle('flex');
        document.getElementById('modaladdproduct').classList.toggle('hidden');
        document.querySelector('body').classList.remove('overflow-y-hidden');
    });

    dropArea.addEventListener('dragover', (event) => {
        event.preventDefault();
        dropArea.style.backgroundColor = '#69696944';
        dropArea.classList.add('active');
    });

    dropArea.addEventListener('dragleave', (event) => {
        event.preventDefault();
        dropArea.style.backgroundColor = '#212122';
        dropArea.classList.remove('active');
    });

    dropArea.addEventListener('drop', (event) => {
        event.preventDefault();
        const file = event.dataTransfer.files[0];
        if (file) {
            imageInput.files = event.dataTransfer.files;
            const reader = new FileReader();
            reader.onload = () => {
                preview.src = reader.result; // Set sumber gambar
                preview.classList.remove('hidden'); // Tampilkan gambar
                calonhidden.classList.add('hidden'); // Sembunyikan konten upload
            };
            reader.readAsDataURL(file);
        }
    });

    buttonUpload.addEventListener('click', (event) => {
        event.preventDefault();
        imageInput.click();
    });

    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = () => {
                preview.src = reader.result; // Set sumber gambar
                preview.classList.remove('hidden'); // Tampilkan gambar
                calonhidden.classList.add('hidden'); // Sembunyikan konten upload
            };
            reader.readAsDataURL(file);
        }
    });
</script>
