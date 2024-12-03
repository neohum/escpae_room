<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape_room Project</title>

    <!-- Link to Tailwind CSS via CDN for simplicity -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- If you've set up Tailwind locally, you might link to your compiled CSS file instead -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    @livewireStyles
</head>

<body class="text-gray-800 bg-gray-100">

    <nav class="p-4 text-white bg-blue-600">
        <div class="container flex mx-auto ">
            <div>
            <h1 class="text-2xl font-bold">
                <a href="{{ url('/') }}">
                    Escpae_room Project
                </a>
            </h1>
            </div>
            <div class="flex justify-end flex-1 -mx-3">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2  text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                설정화면
            </a>
            
            @else
            <a href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                로그인
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                사용자 등록
            </a>
            @endif
            @endauth
            </div>
        </div>
        <div>

        </div>

    </nav>

    <div class="container p-4 mx-auto mt-4">
        @yield('content')
    </div>

    <footer class="p-4 mt-8 text-white bg-blue-600">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Escape_room Project. All rights reserved.
        </div>
    </footer>

    @livewireScripts

</body>

</html>
