<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/fonts.css')
    <title>Input Image</title>
</head>

<body>
    <main
        class="font-[LemonMilk] bg-[#212122] flex w-screen h-screen flex-col justify-center items-center gap-[80px] overflow-hidden">
        <div class="w-full flex-col justify-center items-center gap-10 flex">
            <h1 class="text-center text-[#f8f8f9] text-5xl font-medium font-['LEMON MILK'] leading-[90px]">
                PROGRAM<br />UPLOAD IMAGE SEDERHANA</h1>
            <img src={{ Vite::asset('resources/images/ImageProcess/divider-merah.png') }} alt="imageinput" />
        </div>
        <div class="flex items-start w-[50%] flex-col gap-4">
            <h3 class="font-bold text-base text-[#f8f8f9]">UPLOAD FOTO DISINI</h3>
            <div
                class="flex p-9 flex-col border border-dashed rounded-md border-[#F9F9FA] w-full gap-4 justify-center items-center">
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
                    <p class="text-[#f8f8f9] text-xs text-center font-light">Drag and drop atau click to upload</p>
                </div>

                <h5 class="text-[#f8f8f9] text-base text-center font-medium">Or</h5>
                <button
                    class=" text-[#808080] py-3 px-5 flex justify-center items-center rounded-xl border-[#545977] border-2 w-[40%] hover:border-[#a0a7cc] hover:text-white">Upload
                    Dari Komputer</button>
            </div>
            <div class="flex w-full justify-center items-center">
                <button
                    class="flex justify-center items-center px-3 py-1 rounded-xl bg-[#FD6565] border border-[#212122] w-[50%] hover:bg-[#ffe9e9]">Kirim</button>
            </div>
        </div>

    </main>

</body>

</html>
