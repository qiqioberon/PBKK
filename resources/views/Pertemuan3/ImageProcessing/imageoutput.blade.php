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

<body>
    <main
        class="font-[LemonMilk] bg-[#212122] flex w-screen h-screen flex-col justify-center items-center gap-[80px] overflow-hidden">
        >

        <div class="w-full flex-col justify-center items-center gap-10 flex">
            <h1 class="text-center text-[#f8f8f9] text-5xl font-medium font-['LEMON MILK'] leading-[90px]">
                HASIL UPLOAD IMAGE</h1>
            <img src={{ Vite::asset('resources/images/ImageProcess/divider-merah.png') }} alt="imageinput" />
        </div>


    </main>
</body>

</html>
