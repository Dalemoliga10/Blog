<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'codrers free')</title>
    {{-- Importacion tailwind --}}
    {{-- OTRAS importaciones que hagan falta --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Importacion css--}}
    @stack('css')
</head>
<body>
    <header></header>
    {{-- Esto es una plantilla --}}
    
    {{-- Contenido variable identificado por content --}}
    @yield('content')


    <footer></footer>
</body>