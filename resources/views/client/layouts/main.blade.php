<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Page Title --}}
    <title>@yield('title', 'Famify Creative')</title>

    {{-- Meta Tags --}}
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('og_title')">
    <meta property="og:description" content="@yield('og_description')">
    <meta property="og:image" content="@yield('og_image', asset('assets/myImage/android-chrome-512x512.png'))">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">

    {{-- Schema --}}
    @stack('schema')

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/myImage/android-chrome-512x512.png') }}">
</head>


<body>

    {{-- Header --}}
    @include('client.layouts.includes.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('client.layouts.includes.footer')

    {{-- Scripts --}}
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-script.js') }}"></script>
    <script src="{{ asset('assets/js/submit-form.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/video_embedded.js') }}"></script>

</body>

</html>
