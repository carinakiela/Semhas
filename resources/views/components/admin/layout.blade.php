<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>{{ $name }}</title>
</head>

<body>
    <div class="bg-[#2476A6] min-h-screen py-2 px-10 w-full">
        <x-admin.header />
        <div class="mt-4 w-full  h-auto flex space-x-14">
            <x-admin.sidebar />
            <div class="w-[72%] flex justify-center items-center">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
