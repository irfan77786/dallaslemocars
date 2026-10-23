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
  <link rel="canonical" href="{{ url()->current() }}/" />
  
  
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
    <link rel="shortcut icon" href="/img/favicon.png">

    @php
        $isHome = request()->is('/');
        $needsDataTables = request()->is('dashboard*') || request()->is('users') || request()->is('users/*') || request()->is('invoices*');
        $needsIntlTel = request()->is('user-login*') || request()->is('submit-passengerInfo*') || request()->is('contact-us') || request()->is('get-a-quote') || request()->is('bookRide');
        $needsBookingLibs = !request()->is('dashboard*') && !request()->is('users') && !request()->is('users/*') && !request()->is('invoices*');
        $needsIconFonts = !$isHome;
        $needsSweetAlert = !$isHome || session()->has('success') || session()->has('error') || (isset($errors) && $errors->any());
        // Fewer weights = smaller font CSS/files (theme mainly uses regular/semibold/bold)
        $fontCss = 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap';
        $cssBootstrap = asset('new_assets/css/bootstrap-min.min.css');
        $cssStyle = asset('new_assets/css/style.min.css');
        $cssCustom = asset('assets/css/custom.min.css');
        $hasTurnstile = filled(config('services.turnstile.site_key')) && filled(config('services.turnstile.secret_key'));
    @endphp

    {{-- Early connections for third-party origins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @if($needsIconFonts || $needsIntlTel || $needsSweetAlert)
        <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
        <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    @endif
    <link rel="dns-prefetch" href="https://maps.googleapis.com">
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">

    {{-- LCP / critical image preloads (homepage hero) --}}
    @stack('preload')

    {{-- Layout CSS render-blocking (no extra preload — preload competed with LCP image) --}}
    <link rel="stylesheet" href="{{ $cssBootstrap }}">
    <link rel="stylesheet" href="{{ $cssStyle }}">
    @if($isHome)
        {{-- custom.css is mostly forms/booking polish — load async on homepage only --}}
        <link rel="stylesheet" href="{{ $cssCustom }}" media="print" onload="this.media='all'">
        <noscript><link rel="stylesheet" href="{{ $cssCustom }}"></noscript>
        <style>
            .search-tab-wrap{background:#fff;border-radius:8px;box-shadow:0 0 4px #6e6e6e;padding:30px 16px;width:100%;max-width:450px;margin:auto;position:relative}
            .search-tab-wrap .nav-tabs{display:flex;list-style:none;margin:0;padding:0 0 8px;border:0;position:relative}
            .search-tab-wrap .nav-tabs .nav-item{flex:1}
            .search-tab-wrap .nav-link{display:block;text-align:center;padding:8px 12px;font-size:12px;font-weight:600;color:#232323;border:0}
            .search-tab-wrap .nav-link.active{color:#e52c43}
            .search-tab-wrap .nav-tabs::after{content:"";position:absolute;left:0;bottom:0;width:50%;height:2px;background:#e52c43;transition:left .4s ease}
            .search-tab-wrap .nav-tabs:has(.nav-item:nth-child(2) .nav-link.active)::after{left:50%}
            .floating-bordered-input{position:relative;border:1px solid #c4c4c4;border-radius:4px;padding:0 6px 0 40px;background:#fff;margin-bottom:1.5rem}
            .floating-bordered-input .floating-label{position:absolute;top:-14px;left:7px;background:#fff;padding:0 6px 10px;font-size:10px;color:#3c3b3b}
            .floating-bordered-input .form-control{border:none;box-shadow:none;width:100%;padding:12px 0 20px;margin-top:10px;min-height:46px;background:transparent;font-size:15px}
            .floating-bordered-input .input-icon-left{position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#777;pointer-events:none}
            #hero-banner-container{overflow:hidden;background-color:#0b1c2c;position:relative}
            .hero-lcp-img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center;z-index:0;pointer-events:none}
            .hero-banner-overlay{position:absolute;inset:0;background:rgba(0,0,0,.7);z-index:1;pointer-events:none}
            .only-m{display:none}
            .only-d{display:block}
            @media(max-width:767px){
                .search-form-mobile{background:#fff;display:block;width:100%}
                .search-tab-wrap{box-shadow:none;max-width:100%;padding:30px 1px;float:none}
                #hero-banner-container{min-height:300px!important;height:300px!important;display:flex!important;align-items:center;justify-content:center;margin-left:18px;margin-right:18px}
                .only-m{display:block!important}
                .only-d{display:none!important}
            }
            @media(min-width:768px){
                #hero-banner-container{min-height:570px}
                .search-form-wrapper-desktop{position:absolute;width:100%;z-index:10}
                .search-tab-wrap{float:right;padding:30px 50px}
            }
        </style>
    @else
        <link rel="stylesheet" href="{{ $cssCustom }}">
    @endif

    {{-- Fonts: non-blocking + display=swap --}}
    <link rel="preload" as="style" href="{{ $fontCss }}" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="{{ $fontCss }}" rel="stylesheet">
    </noscript>

    {{-- Non-critical CSS: async (Swiper CSS loaded on demand with its JS) --}}
    @if($needsIntlTel)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.min.css" media="print" onload="this.media='all'">
    @endif
    @if($needsIconFonts)
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" media="print" onload="this.media='all'">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'">
    @endif
    <noscript>
        <link rel="stylesheet" href="{{ asset('new_assets/css/swiper-min.min.css') }}">
        @if($needsIntlTel)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/css/intlTelInput.min.css">
        @endif
        @if($needsIconFonts)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        @endif
    </noscript>

    @if($needsDataTables)
        <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" rel="stylesheet">
    @endif

    @yield('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/page-shell.css') }}?v={{ filemtime(base_path('assets/css/page-shell.css')) }}">
</head>

<body @class(['page-home' => $isHome])>
    @include('partials.icon-sprite')
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
                <div class="col-8 col-lg-3">
                    <div class="logo">
                        <a href="/">
                            <picture>
                                <source srcset="{{ asset('new_assets/assets/black-car-service-dallas-logo.webp') }}" type="image/webp">
                                <img src="{{ asset('new_assets/assets/black-car-service-dallas-logo.png') }}" alt="Black Car Service Dallas"
                                    class="img-fluid" width="360" height="89" decoding="async" fetchpriority="low">
                            </picture>
                        </a>
                    </div>
                </div>
                @if($hideHeaderItems)
                <div class="col-4 col-lg-9 d-flex align-items-center justify-content-end">
                    <a href="tel:+12148978056" class="text-dark fw-semibold text-decoration-none d-inline-flex align-items-center gap-2">
                        <svg class="ic" width="14" height="14" aria-hidden="true"><use href="#ic-phone"></use></svg>
                        <span>+1 214-897-8056</span>
                    </a>
                </div>
                @else
                <div class="col-4 col-lg-9 d-flex align-items-center justify-content-end">
                    <nav class="p-0 custom-navbar navbar navbar-expand-lg position-static">
                        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <svg class="ic" width="28" height="28" aria-hidden="true"><use href="#ic-menu"></use></svg>
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
                        <svg class="ic" width="30" height="30" aria-hidden="true"><use href="#ic-facebook"></use></svg>
                    </a></li>
             <li class="mx-15">
    <a href="https://www.instagram.com/dallaslimoandblackcars/" target="_blank">
        <svg class="ic" width="30" height="30" aria-hidden="true"><use href="#ic-instagram"></use></svg>
    </a>
</li>

             <li class="mx-15">
    <a href="https://www.youtube.com/@dallaslimoandblackcars" target="_blank">
        <svg class="ic" width="30" height="30" aria-hidden="true"><use href="#ic-youtube"></use></svg>
    </a>
</li>

                <li class="mx-15"><a href="https://x.com/DallasBlackLimo">
                        <svg class="ic" width="30" height="30" aria-hidden="true"><use href="#ic-x"></use></svg>
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
                                <svg class="ic" width="19" height="19" aria-hidden="true"><use href="#ic-mail"></use></svg>
                                <a class="single-line-ellipses" href="mailto:info@dallaslimoandblackcars.com"
                                    style="width: 200px;">info@dallaslimoandblackcars.com</a>
                            </li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg class="ic" width="19" height="19" aria-hidden="true"><use href="#ic-phone-line"></use></svg>
                                <a href="tel:+12134526789">+1 214-897-8056</a>
                            </li>
                            <li class="gap-2 d-flex align-items-center">
                                <svg class="ic" width="19" height="19" aria-hidden="true"><use href="#ic-pin-line"></use></svg>
                                <address class="mb-0">
                                    <p class="mb-0">Dallas, TX  75204</p>
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
                        <p class="mb-0 font-sm"><a href="/">Dallas Limo Black Cars</a> © 2026. All rights reserved.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block">
                        <ul class="mb-0 list-unstyled d-flex justify-content-end">
                            <li class="ml-20"><a href="https://www.facebook.com/dallaslimoandblackcars">
                                    <svg class="ic" width="22" height="22" aria-hidden="true"><use href="#ic-facebook"></use></svg>
                                </a></li>
                        <li class="ml-20">
    <a href="https://www.instagram.com/dallaslimoandblackcars/" target="_blank">
        <svg class="ic" width="22" height="22" aria-hidden="true"><use href="#ic-instagram"></use></svg>
    </a>
</li>
                            
                            
                            <li class="ml-20">
    <a href="https://www.youtube.com/@DallasBlackCarsLimoService" target="_blank">
        <svg class="ic" width="22" height="22" aria-hidden="true"><use href="#ic-youtube"></use></svg>
    </a>
</li>
                                
                            <li class="ml-20"><a href="https://x.com/dallasblackcars">
                                    <svg class="ic" width="22" height="22" aria-hidden="true"><use href="#ic-x"></use></svg>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Non-home: load jQuery/booking immediately. Homepage: defer until after LCP / first form use. --}}
    @if(!$isHome)
        <script src="{{ asset('new_assets/js/jquery.min.js') }}"></script>
        @if($needsBookingLibs)
            <script src="{{ asset('assets/js/custom.min.js') }}?v={{ filemtime(public_path('assets/js/custom.min.js')) }}" defer></script>
        @endif
    @endif
    @if($needsDataTables)
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    @endif
    @if(!$isHome)
        <script src="{{ asset('new_assets/js/bootstrap-min.min.js') }}" defer></script>
    @endif
    @if($needsIntlTel)
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js" defer></script>
    @endif
    @if($needsSweetAlert)
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
    @endif

    <script>
        window.__siteBoot = {
            jqSrc: @json(asset('new_assets/js/jquery.min.js')),
            bookingSrc: @json(asset('assets/js/custom.min.js') . '?v=' . filemtime(public_path('assets/js/custom.min.js'))),
            bootstrapSrc: @json(asset('new_assets/js/bootstrap-min.min.js')),
            swiperCss: @json(asset('new_assets/css/swiper-min.min.css')),
            swiperJs: @json(asset('new_assets/js/swiper-min.min.js')),
            customNewJs: @json(asset('new_assets/js/custom_new.min.js') . '?v=' . filemtime(base_path('new_assets/js/custom_new.min.js'))),
            isHome: @json($isHome),
            lazyBootstrap: @json($isHome),
            needsBooking: @json($needsBookingLibs),
            mapsKey: @json($needsBookingLibs ? config('services.google_maps.api_key') : ''),
            dateCss: @json(asset('assets/css/bootstrap-material-datetimepicker.min.css')),
            pickerSrc: @json(asset('assets/js/bootstrap-material-datetimepicker.min.js')),
            momentSrc: 'https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment.min.js',
            iconsHref: 'https://fonts.googleapis.com/icon?family=Material+Icons&display=swap',
            turnstileSrc: @json($hasTurnstile ? 'https://challenges.cloudflare.com/turnstile/v0/api.js' : '')
        };
    </script>
    <script src="{{ asset('assets/js/site-boot.js') }}?v={{ filemtime(base_path('assets/js/site-boot.js')) }}" defer></script>
    <script src="{{ asset('assets/js/search-form.js') }}?v={{ filemtime(base_path('assets/js/search-form.js')) }}" defer></script>
    @yield('scripts')
</body>

</html>
