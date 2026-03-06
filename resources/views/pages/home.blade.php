@extends('master')

@section('content')
    <section class="d-md-none">
        <div class="ah-container">
            <div class="search-form-mobile">
                @include('partials.search', ['id_suffix' => '_mobile'])
            </div>
        </div>
    </section>

    <section class="home-banner-section">
        <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h2 fw-bold mb-15">Dallas Black Car Service - On Time, Every Ride</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Book reliable black car transportation for airport transfers, corporate travel, and special events across Dallas-Fort Worth. Our licensed chauffeurs are available 24/7, ensuring punctual pickups and a smooth, stress-free ride to DFW Airport, Love Field, and beyond.</p>
                        <span class="text-white font-base">24/7 Service Available - <strong class="font-lg fw-semibold">Click to Call
                                Now</strong></span>
                        <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                            Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
                                214-897-8056</a>
                        </p>
                    </div>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <!-- Booking Form -->
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="luxury-cars-section bg-gray pb-40 pb-sm-60 py-md-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-15 mb-sm-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-10 text-center">Executive Fleet for <span class="theme-color br-css-tt">Comfort and Privacy</span></h2>
                    <p class="font-md mb-0 justify-mobile">Our fleet supports clients who rely on professional black car and <a href="/services/chauffeur-service-dallas/" class="theme-color"><b>chauffeur service for airport transfers</b></a>, corporate transportation, VIP travel, and group movement. Executive sedans are ideal for individual travelers and business schedules, luxury and premium SUVs provide added space and privacy for airport and VIP travel, and Sprinter vans accommodate corporate teams and group transfers. Every vehicle is professionally chauffeured, commercially insured, and maintained to consistent executive standards for a quiet, reliable experience.</p>
                </div>
            </div>
            @include('partials.fleet_grid')
        </div>
    </section>

    <section class="fifa-main-banner" style="background-image: url('https://dallasblackcarslimoservice.com/img/dallas-fifa-world-cup-black-car-service.webp'); background-position: center top; background-size: cover; background-repeat: no-repeat; min-height: 210px;">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-12 h-100">
                  <a href="/fifa-world-cup-2026-car-service-dallas/" class="d-block w-100 h-100"> </a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fifa-btnss text-center my-4">
                    <a href="/fifa-world-cup-2026-car-service-dallas/" class="btn btn-primary">Visit FIFA World Cup 2026 Page</a>
                </div>
            </div>
        </div>
    </div>

    <section class="detail-content-section pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                    <h2 class="h2 fw-bold mb-10 text-center">Why Choose <span class="theme-color br-css-tt"> Dallas Black Limo Service</span></h2>
                    <p class="font-md">Executives trust us for trained chauffeurs, <a href="/services/airport-transfer-dallas/"><b>on-time airport transfers</b></a>, and consistently reliable black car service across Dallas.</p>
                </div>
            </div>
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50 justify-mobile">
                    <h3 class="h5 fw-semibold">Why Executives Choose Our Dallas Black Car Service</h3>
                    <p class="font-md">Built for executives, corporate teams, and VIP travelers who need transportation done right, without excuses or guesswork.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Professional Chauffeurs You Can Trust:</strong> Our chauffeurs are background-checked, professionally trained, and chosen for executive travel experience. Every ride delivers consistent service, discretion, and polished professionalism.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Clean, Modern Vehicles Every Time:</strong> Late-model sedans, luxury SUVs, and executive vans are kept clean, comfortable, and presentable through scheduled inspections – never outdated, never improvised.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Airport Pickups That Match Your Flight:</strong> We use live flight tracking, smart buffer timing, and route monitoring to protect schedules at DFW and Love Field – even with early landings or long delays.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Live Trip Monitoring for Every Ride:</strong> Each trip is monitored by dispatch from start to finish, with backup vehicles ready to prevent missed pickups, delays, or last-minute issues.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Your Privacy Is Always Protected:</strong> Quiet rides, respectful conduct, and strict confidentiality standards trusted by executives, attorneys, and high-profile clients.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Easy Planning for Corporate Travel:</strong> Designed for executive assistants and <a href="/services/private-car-service-dallas/"><b>corporate planners managing meetings</b></a>, airport travel, roadshows, and multi-stop schedules without surprises.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse py-20 d-none d-md-flex">
                <div class="col-12 col-md-8 pr-xl">
                     <h2 class="h2 fw-bold mb-10">Areas <span class="theme-color">We Serve</span></h2>
                    <p class="font-md">Executive black car service built around how professionals actually move across Dallas–Fort Worth.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Dallas Corporate Hub:</strong> Downtown, Uptown, and key business districts where executive travel demands precision timing and professional presentation.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Airport-First Coverage:</strong> Daily operations to and from <a href="/dfw-car-service/" class="theme-color"><b>DFW International Airport</b></a> and Dallas Love Field with flight-aware dispatch and schedule protection.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">North Dallas Executive Markets:</strong> Plano, Frisco, Richardson, Las Colinas, and surrounding corporate hubs supporting recurring business travel.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Fort Worth & Arlington:</strong> Reliable chauffeured transportation for conventions, corporate meetings, and professional events.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">Major Event & Sports Venues:</strong> Coordinated arrivals and departures at AT&T Stadium, American Airlines Center, Globe Life Field, and Cotton Bowl Stadium.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0">
                                <strong class="br-css-tts">City-to-City Travel Across DFW:</strong> Chauffeur-driven service designed for multi-stop itineraries, executive schedules, and regional travel consistency.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100 d-none d-md-flex">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/areas-we-serve.webp') }}" width="406" height="233" class="img-fluid" alt="Black car service Dallas city transportation">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center flex-row-reverse py-20 d-md-none justify-mobile">
                    <div class="col-12 col-md-6 pr-xl">
                         <h2 class="h2 fw-bold mb-10">Areas <span class="theme-color">We Serve</span></h2>
                        <p class="font-md">Executive black car service built around how professionals actually move across Dallas–Fort Worth.</p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Dallas Corporate Hub:</strong> Downtown, Uptown, and key business districts where executive travel demands precision timing and professional presentation.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Airport-First Coverage:</strong> Daily operations to and from <a href="/dfw-car-service/" class="theme-color"><b>DFW International Airport</b></a> and Dallas Love Field with flight-aware dispatch and schedule protection.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">North Dallas Executive Markets:</strong> Plano, Frisco, Richardson, Las Colinas, and surrounding corporate hubs supporting recurring business travel.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Fort Worth & Arlington:</strong> Reliable chauffeured transportation for conventions, corporate meetings, and professional events.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">Major Event & Sports Venues:</strong> Coordinated arrivals and departures at AT&T Stadium, American Airlines Center, Globe Life Field, and Cotton Bowl Stadium.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">
                                    <strong class="br-css-tts">City-to-City Travel Across DFW:</strong> Chauffeur-driven service designed for multi-stop itineraries, executive schedules, and regional travel consistency.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray pt-40 pb-15 justify-mobile">
        <div class="container">
            <div class="row justify-content-center">
                 <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                     <h2 class="h2 fw-bold mb-10 text-center">Our <span class="theme-color">Services</span></h2>
                    <p class="font-md">Professional black car and chauffeur services designed for executives, corporate teams, and VIP travelers across the Dallas Fort Worth Metroplex. Every service is built around reliability, control, and accountability – never improvisation.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/services/private-aviation-dallas/" class="img-holder mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/private-aviation.webp') }}" alt="Executive black SUV transportation Dallas" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/services/private-aviation-dallas/">Private Aviation & FBO Transportation</a></h3>
                        <p class="font-base">Discreet chauffeur service for private aviation passengers, providing seamless ground transportation to and from Dallas-area FBOs, including Signature Flight Support. Designed for privacy, precision timing, and executive-level professionalism.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/dfw-car-service/" class="img-holder mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/airport-transfers.webp') }}" alt="Black car service Dallas airport transfer" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/dfw-car-service/">Executive Airport Transfers (DFW & DAL)</a></h3>
                        <p class="font-base">Flight-aware black car service for executives and frequent flyers, with monitored pickups, buffer-time dispatching, and professional chauffeurs ensuring on-time arrivals and stress-free departures at Dallas Fort Worth International Airport and Dallas Love Field.
                        </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="/dallas-executive-airport-car-service/" class="img-holder mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/corporate-transportation.webp') }}" alt="DFW Airport black car service pickup" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="/services/corporate-transportation-dallas/">Corporate & Executive Transportation</a></h3>
                        <p class="font-base">Reliable corporate black car service for meetings, roadshows, client transportation, and daily executive travel throughout Dallas business districts. Ideal for executives, executive assistants, and corporate travel coordinators who require consistency and accountability.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-none d-sm-block">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="#" class="img-holder mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/sports-and-entertainment-venues.webp') }}" alt="Premium black sedan with chauffeur in Dallas" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="#">VIP Events & Sports Transportation</a></h3>
                        <p class="font-base">Professional black car service for executives and VIP guests attending high-profile events and major sports venues, including AT&T Stadium, American Airlines Center, Globe Life Field, Toyota Stadium, and Dos Equis Pavilion.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-none d-none d-lg-block">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="#" class="img-holder mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/hourly-as-directed.webp') }}" alt="Premium car service serving Dallas" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="#">Hourly Black Car Service</a></h3>
                        <p class="font-base">Flexible, as-directed chauffeur service for executives who need control over their schedule. Perfect for multi-stop itineraries, extended meetings, site visits, and on-demand transportation with a dedicated professional chauffeur.
                        </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 d-none d-none d-lg-block">
                    <article class="we-serve-item text-md-center mb-30 mb-md-35">
                        <a href="#" class="img-holder mb-15 mx-auto d-block">
                            <img width="407" height="210" loading="lazy" decoding="async"
                                src="{{ asset('assets/new_theme/img/corporate-shuttle-service.webp') }}" alt="Executive black car service Dallas area" class="img-fluid">
                        </a>
                        <h3 class="h6 fw-semibold mb-10"><a href="#">Corporate Shuttle Service</a></h3>
                        <p class="font-base">Scheduled and on-demand corporate shuttle transportation for employees, meetings, conferences, and client movement. Designed for reliability, punctuality, and professional presentation managed with the same standards as executive-level service.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="h4 fw-semibold mb-20">
                        <span class="theme-color">Reliable Corporate Black Car Service Across </span> <br>Dallas–Fort Worth
                    </h4>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Reserve Chauffeur Service Now</a>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-40 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-white">The Smarter Choice for Corporate Transportation</h2>
                    <p class="font-md justify-mobile">Professional black car service in Dallas for executives and executive assistants who require punctual pickups, transparent pricing, and zero uncertainty. Every ride is professionally chauffeured, actively monitored by dispatch, and backed by contingency planning for business-critical travel to DFW, Love Field, and across Dallas.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Booking"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Upfront Corporate Pricing</h3>
                        <p class="font-md text-white"> Flat, pre-set rates with no surge fees or hidden charges -<b> clear invoicing designed for corporate travel approvals and expense reporting.</b></p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/car-steering.svg') }}" alt="Confirmation"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Career Chauffeurs</h3>
                        <p class="font-md text-white"> Professionally trained, background-checked chauffeurs with <b>dedicated executive and airport transfer experience</b>, selected for discretion, punctuality, and consistency.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/dimond.svg') }}" alt="Driver"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Executive-Grade Fleet</h3>
                        <p class="font-md text-white">Late-model sedans and luxury SUVs maintained on a <b>scheduled inspection cycle</b> for quiet comfort, clean presentation, and reliable business travel.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="intercity-ride-section bg-gray pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-center">Top Cities & <span class="theme-color">Top Routes</span></h2>
                    <p class="font-md justify-mobile">Travel across Dallas and nearby cities effortlessly. From busy routes to
                        airport pickups and event destinations, our professional chauffeurs ensure every ride is
                        seamless, comfortable, and tailored to your schedule.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-austin-car-service">
                        <div class="img-holder">
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/austin.webp') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="h6 text-white mb-0">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Austin
                            </h3>
                            <p class="text-white font-sm mb-0">195 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 54m</p>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-houston-car-service">
                        <div class="img-holder">
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/houston.webp') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="h6 text-white mb-0">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Houston
                            </h3>
                            <p class="text-white font-sm mb-0">239 miles &nbsp;&nbsp;|&nbsp;&nbsp; 3h 29m</p>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-college-station-car-service">
                        <div class="img-holder">
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/college-station.webp') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="h6 text-white mb-0">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                College Station
                            </h3>
                            <p class="text-white font-sm mb-0">181 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 44m</p>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/black-car-service-oklahoma-city-ok">
                        <div class="img-holder">
                            <img loading="lazy" width="416" height="199" decoding="async" src="{{ asset('assets/new_theme/img/oklahoma-city.webp') }}"
                                alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="h6 text-white mb-0">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                OKC
                            </h3>
                            <p class="text-white font-sm mb-0">206 miles &nbsp;&nbsp;|&nbsp;&nbsp; 3h 07m</p>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dallas-to-tyler-car-service">
                        <div class="img-holder">
                            <img loading="lazy" width="416" height="199" decoding="async" src="{{ asset('assets/new_theme/img/tyler.webp') }}"
                                alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="h6 text-white mb-0">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Tyler
                            </h3>
                            <p class="text-white font-sm mb-0">116 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 10min</p>
                        </div>
                        </a>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="top-cities-item mb-20 mb-sm-25 mb-md-30">
                        <a href="/dfw-to-waco-car-service">
                        <div class="img-holder">
                            <img loading="lazy" width="416" height="199" decoding="async"
                                src="{{ asset('assets/new_theme/img/waco.webp') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="h6 text-white mb-0">DFW
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Waco
                            </h3>
                            <p class="text-white font-sm mb-0">93.8 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1h 23m</p>
                        </div>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonial-section bg-blue py-40">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-10">
                    <h2 class="h2 fw-bold text-white">Trusted by Corporate Teams and Executive Assistants</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div>
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                       As an executive assistant, I need airport transportation frequently. Flights are tracked and drivers arrive on time always, making them my first choice.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white"> - Emily Carter, Executive Assistant</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Dallas, TX</span>
                            </div>
                        </div>

                        <div>
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                        We use them every week for Dallas area corporate travel, including airport runs. Same standards every ride – no surprises, no follow-ups.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white"> - James Sasser, Managing Partner</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Fort Worth, TX</span>
                            </div>
                        </div>

                        <div>
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                        Early departures or delayed arrivals – they adjust without calls or confusion, which is why we trust them for executive transportation in Dallas.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- David Ramirez, VP of Operations</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Plano, TX</span>
                            </div>
                        </div>

                        <div>
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                       We booked a car from DAL to Plano for a client visit. The pickup was on time, the driver was professional, and everything went exactly as scheduled.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- Michael Turner, Corporate Client</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Dallas, TX</span>
                            </div>
                        </div>

                        <div>
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                    We booked a car for a family ride with our 16 month old. The driver was professional, and the ride felt safe and comfortable throughout.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- Rachel Moore</cite>
                                <span class="location fw-semibold font-lg text-center d-block">New York City, NY</span>
                            </div>
                        </div>

                        <div>
                            <div class="testimonial-slider-item">
                                <blockquote class="mb-20 mb-md-30">
                                    <p class="font-lg fw-medium text-center text-white">
                                      It was my first time in Dallas, and I booked their service for a game at AT&T Stadium. The ride was comfortable, and getting around was completely stress-free.
                                    </p>
                                </blockquote>
                                <cite class="name fw-semibold font-lg text-center d-block text-white">- David Ramirez, Amelia C.</cite>
                                <span class="location fw-semibold font-lg text-center d-block">Philadelphia, PA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-content-section py-20">
        <div class="container">
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50">
                    <h3 class="h4 fw-semibold">Reliable Black Car Service for Business Travel</h3>
                    <p class="font-md justify-class">
                       When business travel in Dallas must stay on schedule, our black car service keeps every detail professionally managed from start to finish. Designed for executives, corporate teams, and assistant-booked travel, each ride is chauffeured by trained professionals and actively monitored by dispatch in real time. Routes and timing are planned to support on-time executive transportation, corporate meetings, and airport transfers throughout Dallas, including service to <a href="/dfw-car-service/"><b>DFW International Airport</b></a> and Dallas Love Field. Trips are coordinated using real arrival data, live traffic conditions, and curbside access requirements to avoid delays. Whether managing back-to-back meetings, client visits, or early-morning departures, transportation remains calm, predictable, and aligned with business priorities.
                    </p>
                    <p class="font-md justify-mobile">
                        The result is dependable <a href="/services/chauffeur-service-dallas/"><b>corporate travel</b></a> with clear standards, consistent chauffeurs, and active ride oversight—so professionals can focus on work instead of logistics.
                    </p>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async"
                            src="{{ asset('assets/new_theme/img/dfw-and-love-field-airport-transportation.webp') }}" width="407" height="210"
                            class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse py-20 d-none d-md-flex">
                <div class="col-12 col-md-8 pr-xl-50 mb-20">
                    <h3 class="h4 fw-semibold">Dallas Corporate Black Car Service Powered by Professional Chauffeur Service</h3>
                    <p class="font-md justify-class">
                       Our Dallas corporate black car service is built around a professional chauffeur service designed specifically for executives and the assistants who manage complex, time-sensitive schedules. Every trip is handled by trained chauffeurs who follow strict service standards and understand the demands of business travel. From scheduled airport transfers to <a href="/services/chauffeur-service-dallas/"><b>hourly as-directed chauffeur service</b></a>, transportation is coordinated with clear pickup timing and active oversight. Travel to DFW Airport and <a href="/love-field-airport-car-service/"><b>Dallas Love Field Airport</b></a> is planned using real flight data, traffic conditions, and curbside access requirements to avoid delays. Whether arranging private car service for executives, luxury van rental for corporate teams, or city-to-city rides between Dallas and nearby business hubs, our professional chauffeur service keeps every movement organized and predictable. The result is corporate transportation that stays calm, controlled, and easy to manage—allowing business travelers to focus on meetings and decisions, not logistics.
                    </p>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/group-and-event-transfers.webp') }}"
                            width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray py-30 d-md-none">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="h4 fw-semibold mb-20">
                            <span class="theme-color">Reserve Your Executive Ride </span> <br>in Dallas Fort Worth
                        </h4>
                        <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Corporate Chauffeur Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center flex-row-reverse py-20 d-md-none justify-mobile">
                <div class="col-12 col-md-6 pr-xl-50 mb-20">
                   <h3 class="h4 fw-semibold">Dallas Corporate Black Car Service Powered by Professional Chauffeur Service</h3>
                    <p class="font-md justify-class">
                       Our Dallas corporate black car service is built around a professional chauffeur service designed specifically for executives and the assistants who manage complex, time-sensitive schedules. Every trip is handled by trained chauffeurs who follow strict service standards and understand the demands of business travel. From scheduled airport transfers to hourly as-directed chauffeur service, transportation is coordinated with clear pickup timing and active oversight. Travel to DFW International Airport and Dallas Love Field is planned using real flight data, traffic conditions, and curbside access requirements to avoid delays. Whether arranging private car service for executives, luxury van rental for corporate teams, or city-to-city rides between Dallas and nearby business hubs, our professional chauffeur service keeps every movement organized and predictable. The result is corporate transportation that stays calm, controlled, and easy to manage—allowing business travelers to focus on meetings and decisions, not logistics.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray py-40">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                    <h2 class="h2 fw-bold text-center">Smart, Secure & Seamless <span class="theme-color">Corporate Travel</span></h2>
                </div>
                <div class="col-12 col-md-6">
                    <p class="font-md">Experience professional corporate travel designed for executives and business
                        teams. Our service ensures efficiency, comfort, and security for all your business
                        transportation needs. Key benefits include:</p>
                    <ul class="list-unstyled custom-unorder-list no-bullets pr-lg-80 mb-20 mb-md-0">
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                                <strong class="br-css-tt">Professional Chauffeurs:</strong>
                                Experienced, courteous, and discreet drivers providing safe and reliable rides.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                                <strong class="br-css-tt">Luxury Fleet:</strong>
                                <a href="/our-fleet/" class="theme-color"><b>Well-maintained sedans, SUVs, and vans</b></a> offering comfort and style for executive
                                travel.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                                <strong class="br-css-tt">Punctual & Reliable:</strong>
                                On-time pickups and drop-offs to keep your business schedule seamless.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                                <strong class="br-css-tt">Customizable Routes:</strong>
                                Flexible itineraries with multi-stop options to meet all corporate requirements.</p>
                        </li>
                        <li class="d-flex gap-2">
                            <span class="theme-color font-md">✔</span>
                            <p class="mb-0">
                                <strong class="br-css-tt">Confidential & Secure:</strong>
                                Privacy-focused transportation for executives, VIP clients, and sensitive meetings.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <form class="news-letter-form mx-auto me-md-0 px-15 py-25" action="" method="post">
                        @csrf
                        <div class="text-center">
                            <h3 class="font-md fw-bold mb-0">Need Corporate Support?</h3>
                            <p class="font-sm">Fill out the form and our team will take care of the rest</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="full_name" class="form-label mb-1 fw-medium">Full Name</label>
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="">
                            </div>
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="Email" class="form-label mb-1 fw-medium">Email</label>
                                <input type="email" class="form-control" name="email" id="Email" placeholder="name@example.com">
                            </div>
                            <div class="col-12 mb-15">
                                <label for="contact_no" class="form-label mb-1 fw-medium">Contact No</label>
                                <input id="contact_no" name="contact_no" type="tel" class="form-control">
                            </div>
                            <div class="col-12 mb-15">
                                <label for="message" class="form-label mb-1 fw-medium">Message</label>
                                <textarea name="message" id="message" class="form-control"></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-center ">Chosen by People at <span class="theme-color br-css-tt">Top Companies</span></h2>
                    <p class="font-md justify-mobile">Executives rely on our black car service Dallas for on-time, comfortable transportation that keeps their schedules on track, making business trips and corporate events effortless and stress-free.</p>
                </div>
                <div class="col-12">
                    <div class="companies-logo-marquee">
                        <div class="companies-logo-track">
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                            <div class="py-10 px-15">
                                <span class="img-holder">
                                    <img loading="lazy" width="90" height="60" decoding="async"
                                        src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="Logo" class="img-fluid">
                                </span>
                            </div>
                            @endforeach
                            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                            <div class="py-10 px-15">
                                <span class="img-holder">
                                    <img loading="lazy" width="90" height="60" decoding="async"
                                        src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="" class="img-fluid">
                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="h4 fw-semibold mb-20">
                        <span class="theme-color">Luxury Transportation for</span> <br>Business, Events & VIP Travel
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Ride in Minutes</a>
                </div>
            </div>
        </div>
    </div>

    <section class="faqs-section py-40">
        <div class="container">
            <div class="row">
                 <div class="col-12 text-center mb-20">
                    <h2 class="h2 fw-bold">Frequently Asked <span class="theme-color br-css-tt">Questions</span></h2>
                </div>
            </div>
            <div class="row" id="faqAccordion">
                <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                aria-expanded="false" aria-controls="collapseOne">
                                Do you provide FBO pickups (Signature, Atlantic, Million Air, etc.)?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide professional FBO pickup and drop-off service at all major private aviation terminals across Dallas–Fort Worth, including Signature Flight Support, Atlantic Aviation, and Million Air. Chauffeur arrivals are coordinated discreetly around flight timing and FBO protocols to ensure smooth, on-time transfers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingTwo">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Do you offer corporate accounts and monthly invoicing?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We offer corporate accounts with consolidated monthly invoicing for companies, executive assistants, and travel managers. Billing is itemized and structured for clear reporting, internal tracking, and ongoing executive travel throughout the Dallas–Fort Worth area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingThree">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Do you offer hourly as-directed service for executives and roadshows?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide hourly as-directed black car service for executives and roadshows, supporting flexible, multi-stop itineraries. Chauffeurs remain on standby while dispatch actively monitors timing and routing to support assistant-managed schedules, meetings, and investor roadshow logistics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingFour">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                How early will the driver arrive before my pickup time?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">For most Dallas–Fort Worth pickups, chauffeurs arrive 10–15 minutes early. This arrival buffer supports smooth loading, schedule protection, and reliable on-time departures for airport transfers, corporate meetings, and executive appointments.</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-12 col-md-6 accordion-holder accordion">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingFive">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                Can I request a specific driver?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. You may request a preferred chauffeur when available, particularly for recurring corporate travel or airport transportation in Dallas–Fort Worth. Advance requests help maintain consistency, familiarity, and efficient pickups for executives and executive assistants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingSix">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix">
                                Do you offer VIP airport service for executives?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide VIP airport service at Dallas Fort Worth International Airport and Dallas Love Field. Service includes discreet coordination, real-time flight monitoring, and schedule-focused handling designed for senior executives and visiting leaders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingSeven">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                aria-expanded="false" aria-controls="collapseSeven">
                                How much wait time is included for DFW airport pickups?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Included wait time depends on your reservation type and arrival details. Grace periods are designed to accommodate deplaning and baggage claim at DFW, with trips monitored in real time to support smooth coordination in the event of early arrivals or delays.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="headingEight">
                            <button
                                class="h6 accordion-button px-0 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                aria-expanded="false" aria-controls="collapseEight">
                                Do you provide round-trip service to AT&T Stadium?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <p class="font-base">Yes. We provide round-trip chauffeur service to major Dallas–Fort Worth venues, including AT&T Stadium. Drop-off and return pickup planning is coordinated in advance to simplify arrival, post-event departures, and overall event transportation logistics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray py-30 d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="h4 fw-semibold mb-20">
                       Arrive With Confidence <br><span class="theme-color">Book Your Chauffeur Now</span>
                    </h3>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Chauffeur Today</a>
                </div>
            </div>
        </div>
    </div>
@endsection
