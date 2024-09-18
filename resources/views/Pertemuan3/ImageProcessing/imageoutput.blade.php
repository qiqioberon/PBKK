<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/fonts.css')
    <title>Image Output</title>
</head>

<body class="overflow-x-hidden">

    <main class=" font-[LemonMilk] bg-[#212122] w-screen min-h-screen h-full p-20 overflow-hidden">
        <div class=" flex flex-col gap-[80px] overflow-hidden">
            <div class="w-full flex flex-col justify-center items-center gap-10 px-24">
                <div class="flex flex-row gap-3 py-5 items-start w-full">
                    <div class="flex justify-center items-center gap-3">
                        <a href={{ route('input.image') }} class="hover:bg-[#6f6f71] rounded-full p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                                fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.2971 40.0971C22.3599 41.0343 20.8403 41.0343 19.903 40.0971L5.50299 25.6971C4.56573 24.7598 4.56573 23.2402 5.50299 22.3029L19.903 7.90295C20.8403 6.96569 22.3599 6.96569 23.2971 7.90295C24.2344 8.8402 24.2344 10.3598 23.2971 11.2971L12.9942 21.6H40.8001C42.1255 21.6 43.2001 22.6745 43.2001 24C43.2001 25.3255 42.1255 26.4 40.8001 26.4L12.9942 26.4L23.2971 36.7029C24.2344 37.6402 24.2344 39.1598 23.2971 40.0971Z"
                                    fill="#F9F9FA" />
                            </svg>
                        </a>
                        <p class="text-white">KEMBALI KE UPLOAD FOTO</p>
                    </div>
                </div>
                <h1 class="text-center text-[#f8f8f9] text-5xl font-medium leading-[90px]">
                    HASIL UPLOAD IMAGE
                </h1>
                <img src="{{ Vite::asset('resources/images/ImageProcess/divider-merah.png') }}" alt="imageoutput" />
            </div>
            <div class="flex flex-wrap gap-24 w-full items-start justify-center">
                <div class="card flex flex-col w-[45%] items-center justify-center gap-4">
                    <div
                        class="title flex w-full items-start p-4 bg-[#FD6565] border border-[#E5E5E6] rounded-xl justify-between">
                        <h5 class="font-semibold text-xl text-[#212122]">HASIL UPLOAD</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M6 18L18 6M6 6L18 18" stroke="#212122" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div
                        class="image flex w-full h-[500px] p-4 justify-center items-center self-stretch border border-[#E5E5E6] bg-[#F9F9FA]">
                        <img src="{{ asset('images/' . $imageName) }}" alt="imageoutput"
                            class="w-full h-full object-cover" />
                    </div>
                    <div
                        class="download flex w-full items-start p-4 bg-[#E5E5E6] border border-[#E5E5E6] rounded-xl justify-center ">
                        <a href="{{ asset('images/' . $imageName) }}" download="{{ $imageName }}"
                            class="text-[#212122] bg-[#54C4DB] py-2 px-5 flex flex-row gap-3 justify-center items-center rounded-xl border-whites border-2 w-[50%] hover:bg-[#ffe9e9]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M4 16L4 17C4 18.6569 5.34315 20 7 20L17 20C18.6569 20 20 18.6569 20 17L20 16M16 12L12 16M12 16L8 12M12 16L12 4"
                                    stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-base font-medium">Download</p>
                        </a>
                    </div>
                </div>

                <div class="card flex flex-col w-[45%] items-center justify-center gap-4">
                    <div
                        class="title flex w-full items-start p-4 bg-[#FD6565] border border-[#E5E5E6] rounded-xl justify-between">
                        <h5 class="font-semibold text-xl text-[#212122]">HASIL UPLOAD</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M6 18L18 6M6 6L18 18" stroke="#212122" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div
                        class="image flex w-full h-[500px] p-4 justify-center items-center self-stretch border border-[#E5E5E6] bg-[#F9F9FA]">
                        <img src="{{ asset('images/' . $imageName) }}" alt="imageoutput"
                            class="w-full h-full object-cover" />
                    </div>
                    <div
                        class="download flex w-full items-start p-4 bg-[#E5E5E6] border border-[#E5E5E6] rounded-xl justify-center ">
                        <a href="{{ asset('images/' . $imageName) }}" download="{{ $imageName }}"
                            class="text-[#212122] bg-[#54C4DB] py-2 px-5 flex flex-row gap-3 justify-center items-center rounded-xl border-whites border-2 w-[50%] hover:bg-[#ffe9e9]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M4 16L4 17C4 18.6569 5.34315 20 7 20L17 20C18.6569 20 20 18.6569 20 17L20 16M16 12L12 16M12 16L8 12M12 16L12 4"
                                    stroke="#212122" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-base font-medium">Download</p>
                        </a>
                    </div>
                </div>
                <div class="card flex flex-col w-[45%] items-center justify-center gap-4">
                    <div
                        class="title flex w-full items-start p-4 bg-[#FD6565] border border-[#E5E5E6] rounded-xl justify-between">
                        <h5 class="font-semibold text-xl text-[#212122]">HASIL UPLOAD</h5>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path d="M6 18L18 6M6 6L18 18" stroke="#212122" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div
                        class="image flex w-full h-[500px] p-4 justify-center items-center self-stretch border border-[#E5E5E6] bg-[#F9F9FA]">
                        <img src="{{ asset('images/' . $imageName) }}" alt="imageoutput"
                            class="w-full h-full object-cover" />
                    </div>
                    <div
                        class="download flex w-full items-start p-4 bg-[#E5E5E6] border border-[#E5E5E6] rounded-xl justify-center ">
                        <a href="{{ asset('images/' . $imageName) }}" download="{{ $imageName }}"
                            class="text-[#212122] bg-[#54C4DB] py-2 px-5 flex flex-row gap-3 justify-center items-center rounded-xl border-whites border-2 w-[50%] hover:bg-[#ffe9e9]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M4 16L4 17C4 18.6569 5.34315 20 7 20L17 20C18.6569 20 20 18.6569 20 17L20 16M16 12L12 16M12 16L8 12M12 16L12 4"
                                    stroke="#212122" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="text-base font-medium">Download</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>

</body>

</html>
