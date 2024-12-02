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
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Escpae_room Project</h1>
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
