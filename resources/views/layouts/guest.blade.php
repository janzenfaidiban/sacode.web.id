<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{!! config('app.name', 'SaCode Community & Coding School') !!}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/sacode-favicon.png') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('images/sacode-favicon.png') }}" type="image/png">

        <meta name="description" content="SaCode Community & Coding School. A community of Information and Communication Technology Enthusiasts in Papua.">
        <meta name="keywords" content="SaCoe, Papuan Coders, Papua Tech Community, Papua, West Papua">

        <!-- Open Graph Meta Tags (for social media) -->
        <meta property="og:title" content="SaCode Community & Coding School">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://sacode.web.id">
        <meta property="og:image" content="https://sacode.web.id/cover.jpg">
        <meta property="og:description" content="A community of Information and Communication Technology Enthusiasts in Papua.">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="A community of Information and Communication Technology Enthusiasts in Papua.">
        <meta name="twitter:title" content="SaCode Community & Coding School">
        <meta name="twitter:description" content="A community of Information and Communication Technology Enthusiasts in Papua.">
        <meta name="twitter:image" content="https://www.example.com/image.jpg">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <meta name="robots" content="index, follow">
        <meta name="author" content="SaCode Community">

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Alpine.js -->
        {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

        <!-- WP CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/wp-style.css')}}">

        <!-- Styles -->
        @livewireStyles

        <style>
            @keyframes zoom {
                0% { transform: scale(1); }
                50% { transform: scale(1.5); }
                100% { transform: scale(1); }
            }
            .animate-zoom {
                animation: zoom 2s infinite;
            }
        </style>

    </head>
    <body class="bg-white dark:bg-black bg-[url('{{ asset('images/bg-1.png') }}')]">
        <!-- Loading Spinner -->
        <div id="loading" class="fixed inset-0 z-50 flex items-center justify-center bg-white dark:bg-black bg-opacity-75 dark:bg-opacity-75">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/sacode-favicon.png') }}" alt="Loading" class="w-32 h-32 animate-zoom">
            </div>
        </div>

        <x-guest-header />

        <div class="font-sans text-gray-900 antialiased">
            <!-- ========== MAIN CONTENT ========== -->
            <main id="content">
                <div class="mx-auto pt-12 pb-10 px-4 sm:px-6 lg:px-8 md:pt-24">
                    {{ $slot }}
                </div>
            </main>
            <!-- ========== END MAIN CONTENT ========== -->
        </div>

        <x-guest-footer />

        @livewireScripts

        <script>
            window.addEventListener('load', function() {
                setTimeout(function() {
                    document.getElementById('loading').style.display = 'none';
                }, 2000); // 2 seconds delay
            });
        </script>
    </body>
</html>
