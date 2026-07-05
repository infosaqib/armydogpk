<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Army Dog Center - Professional Dog Training & Protection')</title>
    <meta name="description" content="@yield('description', 'Professional dog training, protection, and search & rescue services in Pakistan.')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">
    <x-header />

    <main>
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
