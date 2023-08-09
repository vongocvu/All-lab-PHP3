<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"
        href="https://w7.pngwing.com/pngs/308/74/png-transparent-computer-icons-setting-icon-cdr-svg-setting-icon.png"
        type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    @livewireStyles
</head>

<body class="flex flex-col w-full h-[100vh]">
    <header class="w-full bg-green-700 ">
        <div class="font-bold h-[150px] text-2xl flex justify-center items-center text-white">HEADER</div>
    </header>
    <main class="flex-1 flex flex-col  overflow-y-scroll">
        <nav class=" w-full h-[50px] bg-yellow-500 flex justify-center items-center sticky top-[0px]">
            <div class="font-bold text-2xl text-white">NAVBAR</div>
        </nav>
        <div class="flex-1 flex">
            <aside class="w-[80%] flex-1">
                {{-- {{ $main }} --}}
                @yield('content')
            </aside>
            <aside class="w-[20%] bg-red-500 flex justify-center items-center">
                <div class="font-bold text-white text-2xl">
                    MENU
                </div>
            </aside>
        </div>
    </main>
    <footer class="w-full h-[50px] bg-purple-600 flex justify-center items-center text-white">
        <div class="font-bold text-2xl">Footer</div>
    </footer>

    @livewireScripts
</body>

</html>