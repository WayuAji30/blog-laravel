@props(['title', 'description', 'image'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head prefix="og: https://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ isset($title) ? $title . '' : ''}}</title>
    <meta property="og:title" content="{{ isset($title) ? $title . '' : ''}}" />
    <meta property="og:type" content="website.blog" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ isset($image) ? $image . '' : '/logo.png'}}" />
    <meta property="og:description" content="{{ isset($description) ? $description . '' : ''}}" />
    <meta property="og:site_name" content="QuickNews" />
    <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    @include('layouts.partials.header')

    @yield('hero')

    <main class="container mx-auto px-5 flex flex-grow">
        {{ $slot }}
    </main>

    @include('layouts.partials.footer')

    @stack('modals')

    @livewireScripts
</body>

</html>