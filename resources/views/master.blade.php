<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>{{ $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}</title>
    <meta name="description" content="{{ $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas. Luxury transportation for airport transfers, corporate events, and special occasions.' }}">
    <meta name="keywords" content="{{ $seo['keywords'] ?? 'Dallas black car service, Dallas limo service, luxury car service Dallas, airport transportation Dallas' }}">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}">
    <meta property="og:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
    <meta property="og:image" content="{{ $seo['og_image'] ?? asset('new_assets/assets/black-car-service-dallas-logo.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['og_title'] ?? $seo['title'] ?? 'DALLAS LIMOS AND BLACK CAR SERVICE' }}">
    <meta name="twitter:description" content="{{ $seo['og_description'] ?? $seo['description'] ?? 'Premium black car and limousine service in Dallas, Texas.' }}">
    <meta name="twitter:image" content="{{ $seo['og_image'] ?? asset('new_assets/assets/black-car-service-dallas-logo.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <link rel="stylesheet" href="{{ asset('new_assets/css/swiper-min.css') }}">
    <link rel="stylesheet" href="{{ asset('new_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('new_assets/css/bootstrap-min.css') }}">
    <link rel="stylesheet" href="{{ asset('new_assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="shortcut icon" href="/img/favicon.png">
    <!-- Old Custom CSS (for form styles) -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material-datetimepicker.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Preload critical JavaScript files -->
    <link rel="preload" href="{{ asset('assets/js/custom.js') }}" as="script">
    <link rel="preload" href="{{ asset('new_assets/js/jquery.js') }}" as="script">

    <!-- Preload logo image for faster rendering -->
    <link rel="preload" href="{{ asset('new_assets/assets/black-car-service-dallas-logo.png') }}" as="image">

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
        <div class="ah-container position-relative">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('new_assets/assets/black-car-service-dallas-logo.png') }}" alt="Black Car Service Dallas"
                                class="img-fluid">
                        </a>
                    </div>
                </div>
                @if($hideHeaderItems)
                <div class="col-6 col-lg-9 d-flex align-items-center justify-content-end">
                    <a href="tel:+12148978056" class="text-dark fw-semibold text-decoration-none d-inline-flex align-items-center gap-2">
                        <i class="fa-solid fa-phone"></i>
                        <span>+1 214-897-8056</span>
                    </a>
                </div>
                @else
                <div class="col-6 col-lg-9 d-flex align-items-center justify-content-end">
                    <nav class="p-0 custom-navbar navbar navbar-expand-lg position-static">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 18L20 18" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 12L20 12" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 6L20 6" stroke="#fff" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                        <div class="collapse navbar-collapse ms-auto" id="navbarSupportedContent">
                            <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == '/') active @endif" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'about-us') active @endif"
                                    href="/about-us">
                                    About us
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('services*') ? 'active' : '' }}"
                                        href="#"
                                        id="navbarDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Our Service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item {{ request()->is('services/airport-transfers-dallas') ? 'active' : '' }}"
                                                href="/services/airport-transfers-dallas">Airport
                                                Transfers</a></li>
                                        <li><a class="dropdown-item {{ request()->is('services/chauffeur-service-dallas') ? 'active' : '' }}"
                                                href="/services/chauffeur-service-dallas">Chauffeur
                                                Service</a></li>
                                        <li><a class="dropdown-item {{ request()->is('services/corporate-transportation-dallas') ? 'active' : '' }}"
                                                href="/services/corporate-transportation-dallas">Corporate
                                                Transportation</a></li>
                                        <li><a class="dropdown-item {{ request()->is('services/executive-shuttle-services-dallas') ? 'active' : '' }}"
                                                href="/services/executive-shuttle-services-dallas">Executive
                                                shuttle
                                                services</a></li>
                                        <li><a class="dropdown-item {{ request()->is('services/luxury-van-rental-dallas') ? 'active' : '' }}"
                                                href="/services/luxury-van-rental-dallas">Luxury
                                                van
                                                rental</a></li>
                                        <li><a class="dropdown-item {{ request()->is('services/private-car-service-in-dallas') ? 'active' : '' }}"
                                                href="/services/private-car-service-in-dallas">Private
                                                car
                                                service</a></li>
                                        <li><a class="dropdown-item {{ request()->is('services/private-aviation-dallas') ? 'active' : '' }}"
                                                href="/services/private-aviation-dallas">Private
                                                Aviation/FBO</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle {{ request()->is('airports*') ? 'active' : '' }}"
                                        href="#"
                                        id="navbarDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Airports
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item {{ request()->is('airports/addison-airport-car-service') ? 'active' : '' }}"
                                                href="/airports/addison-airport-car-service"
                                                >Addison
                                                Airport (ADS)</a></li>
                                        <li><a class="dropdown-item {{ request()->is('airports/dfw-car-service') ? 'active' : '' }}"
                                                href="/airports/dfw-car-service"
                                                >Dallas/Fort
                                                Worth
                                                Airport (DFW)</a></li>
                                        <li><a class="dropdown-item {{ request()->is('airports/dallas-love-field-airport-car-service') ? 'active' : '' }}"
                                                href="/airports/dallas-love-field-airport-car-service"
                                                >Dallas Love Field
                                                Airport (DAL)</a></li>
                                        <li><a class="dropdown-item {{ request()->is('airports/mckinney-national-airport-car-service') ? 'active' : '' }}"
                                                href="/airports/mckinney-national-airport-car-service"
                                                >McKinney
                                                National
                                                Airport (TKI)</a></li>
                                        <li><a class="dropdown-item {{ request()->is('airports/waco-regional-airport-car-service') ? 'active' : '' }}"
                                                href="/airports/waco-regional-airport-car-service"
                                                >Waco
                                                Regional
                                                Airport (ACT)</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'our-fleet') active @endif" href="/our-fleet">Fleet
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'fifa-world-cup-2026-car-service-dallas') active @endif" href="/fifa-world-cup-2026-car-service-dallas">FIFA World
                                        Cup 26</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'contact-us') active @endif" href="/contact-us">Contact
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @if(request()->path() == 'book-now') active @endif" href="/book-now/">Book Now
                                    </a>
                                </li>
                                <li class="nav-item d-lg-none">
                                    <a class="nav-link" href="/get-a-quote">Get a quote
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <a href="/get-a-quote" class="btn btn-primary d-none d-xl-block" style="min-width: 100px;">Get a quote</a>
                </div>
                @endif
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer bg-blue">
        <div class="py-30 d-md-none social-network-link">
            <ul class="mb-0 list-unstyled d-flex justify-content-center">
                <li class="mx-15"><a href="https://www.facebook.com/dallaslimoandblackcars">
                        <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path
                                d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z" />
                        </svg>
                    </a></li>
             <li class="mx-15">
    <a href="https://www.instagram.com/dallaslimoandblackcars/" target="_blank">
        <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
            <path fill="#b1b8c3"
                d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/>
        </svg>
    </a>
</li>

             <li class="mx-15">
    <a href="https://www.youtube.com/@dallaslimoandblackcars" target="_blank">
        <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="#b1b8c3"
                d="M549.7 124.1C543.3 100 524.5 81.2 500.4 74.8C456.3 64 288 64 288 64S119.7 64 75.6 74.8C51.5 81.2 32.7 100 26.3 124.1C15.5 168.3 15.5 256 15.5 256S15.5 343.7 26.3 387.9C32.7 412 51.5 430.8 75.6 437.2C119.7 448 288 448 288 448S456.3 448 500.4 437.2C524.5 430.8 543.3 412 549.7 387.9C560.5 343.7 560.5 256 560.5 256S560.5 168.3 549.7 124.1zM232 338.3V173.7L361.8 256L232 338.3z"/>
        </svg>
    </a>
</li>

                <li class="mx-15"><a href="https://x.com/DallasBlackLimo">
                        <svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path
                                d="M523.4 215.7C523.7 220.2 523.7 224.8 523.7 229.3C523.7 368 418.1 527.9 225.1 527.9C165.6 527.9 110.4 510.7 64 480.8C72.4 481.8 80.6 482.1 89.3 482.1C138.4 482.1 183.5 465.5 219.6 437.3C173.5 436.3 134.8 406.1 121.5 364.5C128 365.5 134.5 366.1 141.3 366.1C150.7 366.1 160.1 364.8 168.9 362.5C120.8 352.8 84.8 310.5 84.8 259.5L84.8 258.2C98.8 266 115 270.9 132.2 271.5C103.9 252.7 85.4 220.5 85.4 184.1C85.4 164.6 90.6 146.7 99.7 131.1C151.4 194.8 229 236.4 316.1 240.9C314.5 233.1 313.5 225 313.5 216.9C313.5 159.1 360.3 112 418.4 112C448.6 112 475.9 124.7 495.1 145.1C518.8 140.6 541.6 131.8 561.7 119.8C553.9 144.2 537.3 164.6 515.6 177.6C536.7 175.3 557.2 169.5 576 161.4C561.7 182.2 543.8 200.7 523.4 215.7z" />
                        </svg>
                    </a></li>
                    
                    
            </ul>
        </div>
        <div class="pt-40 pb-10 pt-md-50 pb-md-20 py-lg-50">
            <div class="ah-container">
                <div class="row footer-nav-list">
                    <div class="col-12">
                        <h5 class="mb-10 text-white h4 fw-bold mb-md-3">Company</h5>
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
                        <h5 class="mb-10 text-white h4 fw-bold mb-md-3">Our Service</h5>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/services/airport-transfers-dallas">Airport
                                    Transfers</a></li>
                            <li><a href="/services/chauffeur-service-dallas">Chauffeur
                                    Service</a></li>
                            <li><a href="/services/private-car-service-in-dallas">Private
                                    car service</a></li>
                            <li><a href="/services/luxury-van-rental-dallas">Luxury
                                    van rental</a></li>
                            <li><a href="/city-to-city-rides">City-to-city-rides</a>
                            </li>
                            <li><a href="/limousine-service-dallas">Limousine
                                    service</a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h5 class="mb-10 text-white h4 fw-bold mb-md-3">Popular Cities</h5>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/texas/black-car-service-allen-tx">Allen</a>
                            </li>
                            <li><a href="/">Dallas</a></li>
                            <li><a href="/texas/black-car-service-fort-worth-tx">Fort
                                    Worth</a></li>
                            <li><a href="/texas/black-car-service-frisco-tx">Frisco</a>
                            </li>
                            <li><a href="/texas/black-car-service-anna-tx">Anna</a>
                            </li>
                            <li><a href="/texas/black-car-service-plano-tx">Plano</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h5 class="mb-10 text-white h4 fw-bold mb-md-3">City-to-City Rides</h5>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li><a href="/dallas-to-austin-car-service">Dallas -
                                    Austin</a></li>
                            <li><a href="/dallas-to-college-station-car-service">Dallas -
                                    College Station</a></li>
                            <li><a href="/dallas-to-houston-car-service">Dallas -
                                    Houston</a></li>
                            <li><a href="/dallas-to-sherman-car-service">Dallas -
                                    Sherman</a></li>
                            <li><a href="/dallas-to-tyler-car-service">Dallas -
                                    Tyler</a></li>
                            <li><a href="/dfw-to-waco-car-service">DFW - Waco</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <h5 class="mb-10 text-white h4 fw-bold mb-md-3">Contact Details</h5>
                        <ul class="footer-nav-list-item list-unstyled mb-30 mb-lg-0">
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="19" height="19" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.75 6.375L7.95652 7.67955C9.2429 8.44012 9.7571 8.44012 11.0435 7.67955L13.25 6.375"
                                        stroke="#b1b8c3" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M2.01183 10.1067C2.06086 12.4059 2.08537 13.5554 2.93372 14.4071C3.78206 15.2586 4.96275 15.2882 7.32412 15.3476C8.77948 15.3842 10.2205 15.3842 11.6759 15.3476C14.0373 15.2882 15.2179 15.2586 16.0663 14.4071C16.9147 13.5554 16.9392 12.4059 16.9881 10.1067C17.004 9.36743 17.004 8.63258 16.9881 7.8933C16.9392 5.59415 16.9147 4.44457 16.0663 3.593C15.2179 2.74142 14.0373 2.71176 11.6759 2.65243C10.2205 2.61586 8.77947 2.61586 7.32411 2.65242C4.96275 2.71175 3.78206 2.74141 2.93371 3.59299C2.08537 4.44456 2.06085 5.59414 2.01182 7.8933C1.99605 8.63258 1.99606 9.36743 2.01183 10.1067Z"
                                        stroke="#b1b8c3" stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                                <a class="single-line-ellipses" href="mailto:info@dallaslimoandblackcars.com"
                                    style="width: 200px;">info@dallaslimoandblackcars.com</a>
                            </li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="19" height="19" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.33321 8.9568C2.6222 7.71698 2.27889 6.70461 2.07188 5.67841C1.76571 4.16069 2.46636 2.67811 3.62703 1.7321C4.11759 1.33229 4.67992 1.46889 4.97 1.9893L5.62488 3.16418C6.14397 4.09543 6.4035 4.56104 6.35202 5.05469C6.30055 5.54834 5.95053 5.9504 5.25048 6.75451L3.33321 8.9568ZM3.33321 8.9568C4.77238 11.4662 7.03088 13.726 9.5432 15.1668M9.5432 15.1668C10.783 15.8778 11.7954 16.2211 12.8216 16.4281C14.3393 16.7343 15.8219 16.0337 16.7679 14.873C17.1677 14.3825 17.0311 13.8201 16.5107 13.53L15.3358 12.8751C14.4045 12.356 13.9389 12.0965 13.4453 12.148C12.9516 12.1994 12.5496 12.5495 11.7455 13.2495L9.5432 15.1668Z"
                                        stroke="#b1b8c3" stroke-width="1.5" stroke-linejoin="round" />
                                    <path
                                        d="M11 5.12389C12.0674 5.57718 12.9228 6.43258 13.3761 7.5M11.4905 1.5C14.1434 2.26557 16.2343 4.35639 17 7.00922"
                                        stroke="#b1b8c3" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <a href="tel:+12134526789">+1 214-897-8056</a>
                            </li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg width="19" height="19" viewBox="0 0 19 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.125 8.25C12.125 9.69975 10.9497 10.875 9.5 10.875C8.05025 10.875 6.875 9.69975 6.875 8.25C6.875 6.80025 8.05025 5.625 9.5 5.625C10.9497 5.625 12.125 6.80025 12.125 8.25Z"
                                        stroke="#b1b8c3" stroke-width="1.5" />
                                    <path
                                        d="M9.5 1.5C13.153 1.5 16.25 4.52474 16.25 8.19435C16.25 11.9224 13.1025 14.5385 10.1953 16.3175C9.98338 16.4372 9.74375 16.5 9.5 16.5C9.25625 16.5 9.01662 16.4372 8.80475 16.3175C5.90292 14.5212 2.75 11.9353 2.75 8.19435C2.75 4.52474 5.84708 1.5 9.5 1.5Z"
                                        stroke="#b1b8c3" stroke-width="1.5" />
                                </svg>
                                <address class="mb-0">
                                    <p class="mb-0">Dallas, Texas 75202</p>
                                </address>
                            </li>
                            <li><a href="/cancellation-policy">Cancellation
                                    Policy</a></li>
                            <li><a href="/terms-and-conditions">Terms &
                                    Conditions</a></li>
                            <li><a href="/privacy-policy">Privacy
                                    Policy</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area">
            <div class="py-20 ah-container">
                <div class="row align-items-center">
                    <div class="text-center col-12 col-md-6 text-md-start">
                        <p class="mb-0 font-sm"><a href="/">Dallas Limo and Black Cars</a> © 2026. All rights reserved.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block">
                        <ul class="mb-0 list-unstyled d-flex justify-content-end">
                            <li class="ml-20"><a href="https://www.facebook.com/dallaslimoandblackcars">
                                    <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path fill="#b1b8c3"
                                            d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z" />
                                    </svg>
                                </a></li>
                        <li class="ml-20">
    <a href="https://www.instagram.com/dallaslimoandblackcars/" target="_blank">
        <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
            <path fill="#b1b8c3"
                d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5z"/>
        </svg>
    </a>
</li>
                            
                            
                            <li class="ml-20">
    <a href="https://www.youtube.com/@DallasBlackCarsLimoService" target="_blank">
        <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
            <path fill="#b1b8c3"
                d="M549.7 124.1C543.3 100 524.5 81.2 500.4 74.8C456.3 64 288 64 288 64S119.7 64 75.6 74.8C51.5 81.2 32.7 100 26.3 124.1C15.5 168.3 15.5 256 15.5 256S15.5 343.7 26.3 387.9C32.7 412 51.5 430.8 75.6 437.2C119.7 448 288 448 288 448S456.3 448 500.4 437.2C524.5 430.8 543.3 412 549.7 387.9C560.5 343.7 560.5 256 560.5 256S560.5 168.3 549.7 124.1zM232 338.3V173.7L361.8 256L232 338.3z" />
        </svg>
    </a>
</li>
                                
                            <li class="ml-20"><a href="https://x.com/dallasblackcars">
                                    <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 640">
                                        <path fill="#b1b8c3"
                                            d="M523.4 215.7C523.7 220.2 523.7 224.8 523.7 229.3C523.7 368 418.1 527.9 225.1 527.9C165.6 527.9 110.4 510.7 64 480.8C72.4 481.8 80.6 482.1 89.3 482.1C138.4 482.1 183.5 465.5 219.6 437.3C173.5 436.3 134.8 406.1 121.5 364.5C128 365.5 134.5 366.1 141.3 366.1C150.7 366.1 160.1 364.8 168.9 362.5C120.8 352.8 84.8 310.5 84.8 259.5L84.8 258.2C98.8 266 115 270.9 132.2 271.5C103.9 252.7 85.4 220.5 85.4 184.1C85.4 164.6 90.6 146.7 99.7 131.1C151.4 194.8 229 236.4 316.1 240.9C314.5 233.1 313.5 225 313.5 216.9C313.5 159.1 360.3 112 418.4 112C448.6 112 475.9 124.7 495.1 145.1C518.8 140.6 541.6 131.8 561.7 119.8C553.9 144.2 537.3 164.6 515.6 177.6C536.7 175.3 557.2 169.5 576 161.4C561.7 182.2 543.8 200.7 523.4 215.7z" />
                                    </svg>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Critical Scripts - Load First -->
    <script src="{{ asset('new_assets/js/jquery.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>

    <!-- Load custom.js immediately after jQuery (contains map functions) -->
    <script src="{{ asset('assets/js/custom.js') }}?v={{ filemtime(public_path('assets/js/custom.js')) }}"></script>

    <!-- Google Maps - Load after custom.js so initAutocomplete can find the functions -->
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}&libraries=places&callback=initAutocomplete"></script>

    <!-- Other Scripts - Can be deferred -->
    <script src="{{ asset('new_assets/js/bootstrap-min.js') }}" defer></script>
    <script src="{{ asset('new_assets/js/swiper-min.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" defer></script>
    <script src="{{ asset('new_assets/js/slick-min.js') }}" defer></script>
    <script src="{{ asset('new_assets/js/custom_new.js') }}" defer></script>

    <!-- Date/Time Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment-with-locales.min.js" defer></script>
    <script src="{{ asset('assets/js/bootstrap-material-datetimepicker.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.js" defer></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
