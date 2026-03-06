<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}</title>
    <meta name="description"
        content="{{ $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas. Luxury transportation for airport transfers, corporate events, and special occasions.' }}">
    <meta name="keywords"
        content="{{ $seo['keywords'] ?? 'Dallas black car service, Dallas limo service, luxury car service Dallas, airport transportation Dallas' }}">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}">
    <meta property="og:description"
        content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
    <meta property="og:image" content="{{ $seo['og_image'] ?? asset('assets/new_theme/img/logo.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="{{ $seo['og_title'] ?? $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}">
    <meta name="twitter:description"
        content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
    <meta name="twitter:image" content="{{ $seo['og_image'] ?? asset('assets/new_theme/img/logo.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Old Custom CSS (for form styles) -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material-datetimepicker.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Preload critical JavaScript files -->
    <link rel="preload" href="{{ asset('assets/js/custom.js') }}" as="script">
    <link rel="preload" href="{{ asset('assets/js/jquery.js') }}" as="script">

    <!-- Preload logo image for faster rendering -->
    <link rel="preload" href="{{ asset('assets/new_theme/img/logo.png') }}" as="image">

    <!-- Page banner responsive styles (matches home screen design) -->
    <style>
        @media (max-width: 767px) {

            #hero-banner-container,
            .hero-banner-container {
                min-height: 300px !important;
                height: 300px !important;
                background-size: cover !important;
                background-position: center center !important;
                background-repeat: no-repeat !important;
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
            }

            #hero-banner-container .row,
            .hero-banner-container .row {
                width: 100%;
                margin: 0;
                justify-content: center !important;
                align-items: center !important;
            }

            #home-text-content,
            .banner-text-content {
                justify-content: center !important;
                align-items: center !important;
                text-align: center !important;
            }

            #home-text-content h1,
            .banner-text-content h1 {
                text-align: center !important;
                white-space: nowrap !important;
            }
        }

        @media (min-width: 768px) {

            #hero-banner-container,
            .hero-banner-container {
                min-height: 570px;
            }

            #home-text-content {
                margin-top: 130px;
            }

            .search-form-wrapper-desktop {
                position: absolute;
                width: 100%;
                z-index: 10;
            }
        }

        /* Companies logo marquee - horizontal auto-scroll */
        .companies-logo-marquee {
            overflow: hidden;
            mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
        }
        .companies-logo-track {
            display: flex;
            align-items: center;
            width: max-content;
            animation: companies-logo-scroll 25s linear infinite;
        }
        @keyframes companies-logo-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .companies-logo-marquee .img-holder {
            display: flex;
            justify-content: center;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
            flex-shrink: 0;
        }
        .companies-logo-marquee .img-holder img {
            height: 60px;
            max-width: 90px;
            object-fit: contain;
            object-position: center;
        }
    </style>

    @yield('styles')
</head>

<body>
    @php
    $hideHeaderItems = request()->is('booking/point-to-point')
    || request()->is('booking/point-to-point/*')
    || request()->is('user-login/*/*')
    || request()->is('submit-passengerInfo')
    || request()->is('submit-passengerInfo/*')
    || request()->is('bookRide');
    @endphp
    <header class="py-15 py-lg-20">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-md-3">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/new_theme/img/logo.webp') }}" width="200" height="72"
                                alt="DALLAS LIMOS AND BLACK CAR SERVICE" class="img-fluid d-none d-md-block">
                            <img src="{{ asset('assets/new_theme/img/logo.webp') }}" width="200" height="72"
                                alt="DALLAS LIMOS AND BLACK CAR SERVICE" class="img-fluid d-md-none">
                        </a>
                    </div>
                </div>
                @if($hideHeaderItems)
                <div class="col-6 col-lg-9 d-flex align-items-center justify-content-end">
                    <a href="tel:+12148978056"
                        class="text-dark fw-semibold text-decoration-none d-inline-flex align-items-center gap-2">
                        <i class="fa-solid fa-phone"></i>
                        <span>+1 214-897-8056</span>
                    </a>
                </div>
                @else
                <div class="col-6 col-md-9">
                    <nav class="custom-navbar navbar navbar-expand-lg p-0 position-static">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 18L20 18" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 12L20 12" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 6L20 6" stroke="#000000" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-semibold">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}"
                                        href="/about-us">About us</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}"
                                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Our Service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/services/airport-transfers-dallas">Airport
                                                Transfers</a></li>
                                        <li><a class="dropdown-item" href="/services/chauffeur-service-dallas">Chauffeur
                                                Service</a></li>
                                        <li><a class="dropdown-item"
                                                href="/services/corporate-transportation-dallas">Corporate
                                                Transportation</a></li>
                                        <li><a class="dropdown-item"
                                                href="/services/executive-shuttle-services-dallas">Executive
                                                shuttle
                                                services</a></li>
                                        <li><a class="dropdown-item" href="/services/luxury-van-rental-dallas">Luxury
                                                van
                                                rental</a></li>
                                        <li><a class="dropdown-item"
                                                href="/services/private-car-service-in-dallas">Private
                                                car
                                                service</a></li>
                                        <li><a class="dropdown-item" href="/services/private-aviation-dallas">Private
                                                Aviation/FBO</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('booking') ? 'active' : '' }}"
                                        href="/booking">Book
                                        Now</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('our-fleet') ? 'active' : '' }}"
                                        href="/our-fleet">Our
                                        Fleet</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('fifa-world-cup-2026-car-service-dallas') ? 'active' : '' }}"
                                        href="/fifa-world-cup-2026-car-service-dallas">FIFA
                                        World Cup 26</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHelp" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Help
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownHelp">
                                        <li><a class="dropdown-item" href="/get-a-quote">Get a
                                                quote</a></li>
                                        <li><a class="dropdown-item" href="/contact-us">Contact
                                                us</a></li>
                                        <li><a class="dropdown-item" href="/faqs">FAQs</a></li>
                                        <li><a class="dropdown-item" href="/terms-and-conditions">Terms
                                                &
                                                Conditions</a></li>
                                        <li><a class="dropdown-item" href="/privacy-policy">Privacy
                                                Policy</a></li>
                                        <li><a class="dropdown-item" href="/cancellation-policy">Cancellation
                                                Policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer bg-blue">
        <!-- pt-md-50 pb-md-20 py-lg-50 -->
        <div class="pt-40 pb-10">
            <div class="container">
                <div class="row footer-nav-list">
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Company</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="/booking">Book Now</a></li>
                            <li><a href="/contact-us">Contact us</a></li>
                            <li><a href="/our-fleet">Our Fleet</a></li>
                            <li><a href="/get-a-quote">Get A Quote</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Our Service</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/services/airport-transfer-dallas">Airport
                                    Transfers</a></li>
                            <li><a href="/services/chauffeur-service-dallas">Chauffeur
                                    Service</a></li>
                            <li><a href="/services/private-car-service-dallas">Private
                                    car service</a></li>
                            <li><a href="/services/luxury-mercedes-sprinter-service-dallas-texas">Luxury Sprinter
                                    Service</a></li>
                            <li><a href="/city-to-city-rides">City-to-city-rides</a>
                            </li>
                            <li><a href="/limousine-service-dallas">Limousine
                                    service</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Top Cities</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/black-car-service-allen-tx">Allen</a>
                            </li>
                            <li><a href="/">Dallas</a></li>
                            <li><a href="/black-car-service-fort-worth-tx">Fort
                                    Worth</a></li>
                            <li><a href="/black-car-service-frisco-tx">Frisco</a>
                            </li>
                            <li><a href="/black-car-service-college-station-tx">College Station</a>
                            </li>
                            <li><a href="/black-car-service-oklahoma-city-ok">OKC</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">City-to-City Rides</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/dallas-to-austin-car-service">Dallas -
                                    Austin</a></li>
                            <li><a href="/dallas-to-houston-car-service">Dallas
                                    - Houston</a></li>
                            <li><a href="/dallas-to-college-station-car-service">Dallas -
                                    College Station</a></li>
                            <li><a href="/dallas-to-oklahoma-city-ok">Dallas -
                                    OKC</a></li>
                            <li><a href="/dallas-to-tyler-car-service">Dallas -
                                    Tyler</a></li>
                            <li><a href="/dfw-to-waco-car-service">DFW - Waco</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h4 class="h6 fw-bold mb-10 mb-md-15 text-white">Airports</h4>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/addison-airport-car-service">Addison
                                    Airport (ADS)</a></li>
                            <li><a href="/dfw-car-service">Dallas/Fort Worth
                                    Airport (DFW)</a></li>
                            <li><a href="/love-field-airport-car-service">Dallas
                                    Love Field Airport (DAL)</a></li>
                            <li><a href="/dallas-executive-airport-car-service">Dallas Executive Airport (RBD)</a></li>
                            <li><a href="/signature-flight-support-car-service">Signature
                                    Flight Support (DAL)</a></li>
                            <li><a href="/waco-regional-airport-car-service">Waco
                                    Regional Airport (ACT)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="t-policy">
            <div class="container py-20">
                <a href="/cancellation-policy" class="last-p">Cancellation Policy</a>
                <a href="/terms-and-conditions">Terms &amp; Conditions</a>
                <a href="/privacy-policy">Privacy Policy</a>
            </div>
        </div>

        <div class="footer-area">
            <div class="container py-20">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-12 text-center">
                        <p class="font-sm mb-0"><a href="/">Dallas Black Limo Service</a> © 2026. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Critical Scripts - Load First -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    <!-- Load custom.js immediately after jQuery (contains map functions) -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    {{-- <script>
        (function() {
            function isAirportText(text) {
                if (!text) return false;
                const value = String(text).toLowerCase();
                return value.includes('airport') || value.includes('airfield') || value.includes('terminal');
            }

            function createSuggestionButton(prediction, onSelect) {
                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'suggestion-item';
                button.textContent = prediction.description;
                button.addEventListener('click', function() {
                    onSelect(prediction);
                });
                return button;
            }

            function setupAutocompleteForInput(config, autocompleteService, placesService) {
                const selector = 'input[id^="' + config.inputPrefix + '"]';
                const inputs = document.querySelectorAll(selector);

                inputs.forEach(function(input) {
                    if (input.dataset.autocompleteBound === '1') return;
                    input.dataset.autocompleteBound = '1';

                    const suffix = input.id.slice(config.inputPrefix.length);
                    const suggestionsBox = document.getElementById(config.suggestionsPrefix + suffix);
                    const airportField = document.getElementById(config.airportPrefix + suffix);
                    let debounceTimer = null;

                    if (!suggestionsBox) return;

                    function clearSuggestions() {
                        suggestionsBox.innerHTML = '';
                        suggestionsBox.style.display = 'none';
                    }

                    function showSuggestions() {
                        suggestionsBox.style.display = 'block';
                    }

                    function selectPrediction(prediction) {
                        input.value = prediction.description;
                        if (airportField) {
                            airportField.value = isAirportText(prediction.description) ? '1' : '0';
                        }

                        placesService.getDetails(
                            {
                                placeId: prediction.place_id,
                                fields: ['formatted_address', 'name', 'geometry', 'address_components']
                            },
                            function(place) {
                                if (config.onPlaceResolved) {
                                    config.onPlaceResolved(place || null);
                                }
                            }
                        );

                        clearSuggestions();
                    }

                    input.addEventListener('input', function() {
                        const query = input.value.trim();
                        clearTimeout(debounceTimer);

                        if (airportField && query.length === 0) {
                            airportField.value = '0';
                        }

                        if (query.length < 2) {
                            clearSuggestions();
                            return;
                        }

                        debounceTimer = setTimeout(function() {
                            autocompleteService.getPlacePredictions(
                                {
                                    input: query,
                                    componentRestrictions: { country: 'us' },
                                    types: ['geocode']
                                },
                                function(predictions, status) {
                                    clearSuggestions();

                                    if (status !== google.maps.places.PlacesServiceStatus.OK || !predictions || !predictions.length) {
                                        return;
                                    }

                                    predictions.slice(0, 6).forEach(function(prediction) {
                                        suggestionsBox.appendChild(
                                            createSuggestionButton(prediction, selectPrediction)
                                        );
                                    });

                                    showSuggestions();
                                }
                            );
                        }, 250);
                    });

                    input.addEventListener('focus', function() {
                        if (input.value.trim().length >= 2) {
                            input.dispatchEvent(new Event('input'));
                        }
                    });

                    document.addEventListener('click', function(event) {
                        if (!suggestionsBox.contains(event.target) && event.target !== input) {
                            clearSuggestions();
                        }
                    });
                });
            }

            function bindAutocompleteInputs() {
                if (!window.google || !google.maps || !google.maps.places) return;

                const autocompleteService = new google.maps.places.AutocompleteService();
                const placesService = new google.maps.places.PlacesService(document.createElement('div'));

                const fieldConfigs = [
                    {
                        inputPrefix: 'pickup-location-hourly',
                        suggestionsPrefix: 'pickup-location-hourly-suggestions',
                        airportPrefix: 'is-airport-hourly',
                        onPlaceResolved: function(place) {
                            window.pickupPlaceHourly = place;
                        }
                    },
                    {
                        inputPrefix: 'pickup-location',
                        suggestionsPrefix: 'pickup-suggestions',
                        airportPrefix: 'is-airport',
                        onPlaceResolved: function(place) {
                            window.pickupPlacePoint = place;
                        }
                    },
                    {
                        inputPrefix: 'dropoff-location',
                        suggestionsPrefix: 'dropoff-suggestions',
                        airportPrefix: 'is-airport-dropoff',
                        onPlaceResolved: function(place) {
                            window.dropoffPlacePoint = place;
                        }
                    }
                ];

                fieldConfigs.forEach(function(config) {
                    setupAutocompleteForInput(config, autocompleteService, placesService);
                });
            }

            window.initAutocomplete = function() {
                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', bindAutocompleteInputs, { once: true });
                    return;
                }

                bindAutocompleteInputs();
            };

            document.addEventListener('DOMContentLoaded', function() {
                if (window.google && google.maps && google.maps.places) {
                    bindAutocompleteInputs();
                }
            });
        })();
    </script> --}}

    <!-- Google Maps - Load after custom.js so initAutocomplete can find the functions -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    <!-- Load custom.js immediately after jQuery (contains map functions) -->
    <script src="{{ asset('assets/js/custom.js') }}?v={{ filemtime(public_path('assets/js/custom.js')) }}"></script>

    <!-- Google Maps - Load after custom.js so initAutocomplete can find the functions -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&libraries=places&callback=initAutocomplete">
    </script>

    <!-- Other Scripts - Can be deferred -->
    <script src="{{ asset('assets/js/bootstrap-min.js') }}" defer></script>
    <script src="{{ asset('assets/js/swiper-min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" defer></script>
    <script src="{{ asset('assets/js/slick-min.js') }}" defer></script>
    <script src="{{ asset('assets/js/custom_new.js') }}" defer></script>

    <!-- Date/Time Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment-with-locales.min.js" defer></script>
    <script src="{{ asset('assets/js/bootstrap-material-datetimepicker.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.js" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];

            function gtag() {
            dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-D87H3B4PXN');
            const originalWarn = console.warn;
            console.warn = function(msg, ...args) {
            if (typeof msg === 'string' && msg.includes('google.maps.places.PlacesService') || msg.includes('google.maps.places.AutocompleteService') || msg.includes('google.maps.Marker')) {
                // Suppress this specific warning
                return;
            }
            originalWarn.apply(console, [msg, ...args]);
            };
    </script>
    @yield('scripts')
</body>

</html>