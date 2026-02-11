<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{ asset('assets/img/site/dallas-black-car-service-favicon.png') }}">

        {{-- SEO Meta Tags --}}
        <title>{{ $seo['title'] ?? config('app.name', 'Dallas Limo And Black Cars') }}</title>
        <meta name="description" content="{{ $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas. Luxury transportation for airport transfers, corporate events, and special occasions.' }}">
        <meta name="keywords" content="{{ $seo['keywords'] ?? 'Dallas black car service, Dallas limo service, luxury car service Dallas, airport transportation Dallas' }}">
        
        {{-- Open Graph Meta Tags --}}
        <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? config('app.name', 'Dallas Limo And Black Cars') }}">
        <meta property="og:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
        <meta property="og:image" content="{{ $seo['og_image'] ?? asset('img/black-car-service-dallas.webp') }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        
        {{-- Twitter Card Meta Tags --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? config('app.name', 'Dallas Limo And Black Cars') }}">
        <meta name="twitter:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
        <meta name="twitter:image" content="{{ $seo['og_image'] ?? asset('img/black-car-service-dallas.webp') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <!--  Bootstrap css plugins -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
