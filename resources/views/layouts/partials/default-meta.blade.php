@php
    $defaultTitle = 'Army Dog Center Pakistan | 03457125252, 03336937508';
    $defaultDescription = 'Army Dog Center trains and supplies dogs across Pakistan for home security, tracking, and rescue work, backed by a team on call every day of the year. Call now 03005794720.';

    $metaTitle = View::hasSection('title') ? View::getSection('title') : $defaultTitle;
    $metaDescription = View::hasSection('description') ? View::getSection('description') : $defaultDescription;
@endphp

<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:image" content="@yield('image', asset('images/default-blog.jpeg'))">

<!-- Twitter Meta Tags -->
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="@yield('image', asset('images/default-blog.jpeg'))">