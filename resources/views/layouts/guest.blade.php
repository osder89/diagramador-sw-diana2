<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        /* Estilo para el contenedor */
        .Oni {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: url('https://dinahosting.com/blog/cont/uploads/2018/06/lenguajes-de-programaci%C3%B3n-1-1.jpg');
            background-size: cover;
            background-position: center;
        }
        .transparente {
            /* min-height: 100vh; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(128, 128, 128, 0.5); /* Fondo gris semi transparente */
        }
        .image-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    @livewireStyles
</head>

<body class="Oni">

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>
