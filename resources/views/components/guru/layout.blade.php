<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>{{$title}}</title>
</head>

<body>
    <div class="min-h-screen w-full md:h-screen">
        <div class="h-[15%] w-full bg-[#BAE5FF] flex items-center  px-2 md:px-6 ">
            <div class="w-[80%] flex justify-start md:justify-center">
                <nav class=" text-2xl font-extrabold md:flex md:space-x-16">
                    <a href="/informasi-guru" class="hidden md:flex">Informasi Guru</a>
                    <a href="/presensi" class="hidden md:flex">Presensi</a>
                    <a href="/presensi-kelas">Presensi Kelas</a>
                    <a href="/bantuan"class="hidden md:flex">Bantuan</a>
                    <a href="/unduh" class="hidden md:flex">Unduh</a>
                </nav>
            </div>
            <div class="w-[20%] flex justify-end">
                <div class=" w-[4rem] h-[4rem]  flex justify-center items-center bg-white rounded-full md:w-[5.6rem] md:h-[5.6rem]">
                    <img src="/img/logo2.png" alt="logo" class="w-[2rem] h-[3rem] md:w-[3rem] md:h-[4rem] ">
                </div>
            </div>
        </div>

        <div class="bg-[#2476A6] h-[85%] p-2 md:py-4 md:px-10">
            <div class="bg-white w-full h-full rounded-lg flex justify-center p-2">
                {{ $slot }}
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
