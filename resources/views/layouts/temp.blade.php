<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <header>@include('layouts.includes.header')</header>
    <main>@yield('content')</main>
    @include('layouts.includes.adres')
    <footer>@include('layouts.includes.footer')</footer>
</body>

</html>
