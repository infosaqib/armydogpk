<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Army Dog Center Pakistan | 03457125252, 03336937508')</title>
    <meta name="description" content="@yield('description', 'Army Dog Center trains and supplies dogs across Pakistan for home security, tracking, and rescue work, backed by a team on call every day of the year. Call now 03005794720.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="@yield('title', 'Army Dog Center Pakistan | 03457125252, 03336937508')">
    <meta property="og:description" content="@yield('description', 'Army Dog Center trains and supplies dogs across Pakistan for home security, tracking, and rescue work, backed by a team on call every day of the year. Call now 03005794720.')">
    <meta property="og:image" content="@yield('image', asset('images/default-blog.jpeg'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Army Dog Center Pakistan | 03457125252, 03336937508')">
    <meta name="twitter:description" content="@yield('description', 'Army Dog Center trains and supplies dogs across Pakistan for home security, tracking, and rescue work, backed by a team on call every day of the year. Call now 03005794720.')">
    <meta name="twitter:image" content="@yield('image', asset('images/default-blog.jpeg'))">

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
