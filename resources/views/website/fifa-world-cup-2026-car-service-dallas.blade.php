@extends('master')

@section('content')
    <section class="home-banner-section">
        <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="h1 fw-bold text-white mb-15">FIFA World Cup 2026 Car Service in Dallas</h1>
                    <p class="font-lg fw-medium text-white mb-0">Professional black car and chauffeur service for FIFA World Cup 2026 matches, airport arrivals, hotels, stadium transfers, and VIP travel across Dallas–Fort Worth.</p>
                    <p class="font-md text-white d-flex align-items-center">
                        Call: <a href="tel:(214) 897-8056" class="fw-bold font-lg theme-color mx-2 text-underline">(214) 897-8056</a>
                    </p>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
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
                    <h2 class="h2 fw-bold mb-10 text-center">FIFA World Cup 2026 <span class="theme-color br-css-tt">Chauffeured Fleet in Dallas</span></h2>
                    <p class="font-md mb-0 mobile-justify">Our professionally chauffeured fleet in Dallas is designed for <a href="/booking/"><b>FIFA World Cup 2026 transportation</b></a>, supporting <a href="/services/airport-transfer-dallas/"><b>airport transfers</b></a>, hotel pickups, stadium travel, and group movement across the Dallas–Fort Worth area. We offer luxury sedans, premium and luxury SUVs, Sprinter vans, and minibuses for individual travelers, VIP guests, teams, and large groups. All vehicles are commercially insured, maintained to executive standards, and scheduled in advance to ensure reliable, comfortable, and on-time service during World Cup events in Dallas.</p>
                </div>
            </div>
            <div class="row luxury-cars-item-holder justify-content-center d-none d-md-flex">
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="text-center luxury-cars-item mx-auto">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/Sedan.webp') }}" alt="Black car service Dallas luxury sedan"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="fw-semibold h6 mb-3">Premier Sadan</h3>
                        <p class="font-base mb-2">Mercedes S550, BMW 750 or similar</p>
                        <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="PeopleIcon">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                    </path>
                                </svg>
                                max 3
                            </li>
                            <li class="px-2"></li>
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="LuggageIcon">
                                    <path
                                        d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                    </path>
                                </svg>
                                max 3
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="text-center luxury-cars-item mx-auto">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/suv.webp') }}" alt="Luxury SUV black car service Dallas"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="fw-semibold h6 mb-3">Premier SUV</h3>
                        <p class="font-base mb-2">Chevrolet Suburban or similar</p>
                        <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="PeopleIcon">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                    </path>
                                </svg>
                                max 6
                            </li>
                            <li class="px-2"></li>
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="LuggageIcon">
                                    <path
                                        d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                    </path>
                                </svg>
                                max 6
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="text-center luxury-cars-item mx-auto">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/luxury-suv.webp') }}" alt="Premium SUV black car service Dallas"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="fw-semibold h6 mb-3">Luxury SUV</h3>
                        <p class="font-base mb-2">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                        <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="PeopleIcon">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                    </path>
                                </svg>
                                max 6
                            </li>
                            <li class="px-2"></li>
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="LuggageIcon">
                                    <path
                                        d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                    </path>
                                </svg>
                                max 6
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="text-center luxury-cars-item mx-auto">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/sprinter.webp') }}" alt="Black SUV chauffeur service in Dallas"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="fw-semibold h6 mb-3">Busniess Sprinter</h3>
                        <p class="font-base mb-2">Mercedes benz Sprinter Van or similar</p>
                        <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="PeopleIcon">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                    </path>
                                </svg>
                                max 12
                            </li>
                            <li class="px-2"></li>
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="LuggageIcon">
                                    <path
                                        d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                    </path>
                                </svg>
                                max 30
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-12 col-lg-3 px-30 px-sm-15">
                    <article class="text-center luxury-cars-item mx-auto">
                        <div class="img-holder mb-15">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/mini-bus.webp') }}" alt="Spacious black SUV for Dallas black car service"
                                class="img-fluid" width="750" height="410">
                        </div>
                        <h3 class="fw-semibold h6 mb-3">Mini Bus</h3>
                        <p class="font-base mb-2">24-Seater Mini Bus</p>
                        <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="PeopleIcon">
                                    <path
                                        d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                    </path>
                                </svg>
                                max 24
                            </li>
                            <li class="px-2"></li>
                            <li class="d-flex gap-2 align-items-center">
                                <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                    data-testid="LuggageIcon">
                                    <path
                                        d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                    </path>
                                </svg>
                                max 20
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
            <!-- Mobile Slider -->
            <div class="row d-md-none">
                <div class="col-12">
                    <div class="luxury-cars-slider-holder">
                        <div>
                            <article class="text-center luxury-cars-slider-item mx-auto">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/Sedan.webp') }}" alt="Black car service Dallas luxury sedan"
                                        class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="fw-semibold h5 mb-2">Premier Sadan</h3>
                                <p class="font-base mb-2">Mercedes S550, BMW 750 or similar</p>
                                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path
                                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                            </path>
                                        </svg>
                                        max 3
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path
                                                d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                            </path>
                                        </svg>
                                        max 3
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="text-center luxury-cars-slider-item mx-auto">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/suv.webp') }}" alt="Luxury SUV black car service Dallas"
                                        class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="fw-semibold h5 mb-2">Premier SUV</h3>
                                <p class="font-base mb-2">Chevrolet Suburban or similar</p>
                                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path
                                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                            </path>
                                        </svg>
                                        max 6
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path
                                                d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                            </path>
                                        </svg>
                                        max 6
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="text-center luxury-cars-slider-item mx-auto">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/luxury-suv.webp') }}" alt="Premium SUV black car service Dallas"
                                        class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="fw-semibold h5 mb-2">Luxury SUV</h3>
                                <p class="font-base mb-2">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path
                                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                            </path>
                                        </svg>
                                        max 6
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path
                                                d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                            </path>
                                        </svg>
                                        max 6
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="text-center luxury-cars-slider-item mx-auto">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/sprinter.webp') }}" alt="Black SUV chauffeur service in Dallas"
                                        class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="fw-semibold h5 mb-2">Busniess Sprinter</h3>
                                <p class="font-base mb-2">Mercedes benz Sprinter Van or similar</p>
                                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path
                                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                            </path>
                                        </svg>
                                        max 12
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path
                                                d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                            </path>
                                        </svg>
                                        max 20
                                    </li>
                                </ul>
                            </article>
                        </div>
                        <div>
                            <article class="text-center luxury-cars-slider-item mx-auto">
                                <div class="img-holder mb-15">
                                    <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/mini-bus.webp') }}" alt="Black SUV chauffeur service in Dallas"
                                        class="img-fluid" width="750" height="410">
                                </div>
                                <h3 class="fw-semibold h6 mb-3">Mini Bus</h3>
                                <p class="font-base mb-2">24-Seater Mini Bus</p>
                                <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="PeopleIcon">
                                            <path
                                                d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                            </path>
                                        </svg>
                                        max 24
                                    </li>
                                    <li class="px-2"></li>
                                    <li class="d-flex gap-2 align-items-center">
                                        <svg width="20" height="20" focusable="false" aria-hidden="true"
                                            viewBox="0 0 24 24" data-testid="LuggageIcon">
                                            <path
                                                d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                            </path>
                                        </svg>
                                        max 20
                                    </li>
                                </ul>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-content-section py-20">
        <div class="container">
            <div class="row py-20">
                <div class="col-12 col-md-4 h-100 only-m">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/mercedes-benz-sprinter-service.webp') }}" width="407" height="210" class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                    </div>
                </div>

                <div class="col-12 col-md-8 pr-xl-50">
                    <h3 class="h4 fw-semibold">Mercedes-Benz Sprinter Service for FIFA World Cup 2026</h3>
                    <p class="font-md justify-class">
                        Our Mercedes-Benz <a href="/booking/"><b>Sprinter service for the FIFA World Cup 2026</b></a> is designed for groups that want to travel together with comfort, privacy, and precise scheduling. This option is ideal for fans, corporate guests, media teams, and VIP groups attending matches and official events in the Dallas–Fort Worth area. Executive Sprinter vans offer spacious seating, climate-controlled interiors, and generous luggage capacity, making them perfect for full match-day travel.
                        <br><br>
                        Sprinter service is commonly used for transportation to and from AT&T Stadium, FIFA fan zones, hotels, and airports such as DFW Airport and Dallas Love Field. Professional chauffeurs manage traffic conditions, road closures, and timed arrivals to ensure your group reaches the venue without stress. By traveling in one vehicle, groups avoid parking challenges and rideshare delays. With advance scheduling, clear pricing, and experienced event chauffeurs, our Mercedes-Benz Sprinter service delivers smooth and reliable group transportation throughout the FIFA World Cup 2026 in Dallas.
                    </p>
                    <div class="fifa-btnss sec-btn">
                        <a href="/get-a-quote/">Book Executive Black Car for Match Days</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 h-100 only-d">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/01.webp') }}" width="407" height="210" class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                    </div>
                </div>
            </div>

            <div class="row flex-row-reverse py-20">
                <div class="col-12 col-md-4 h-100 only-m">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/mini-bus-car-service.webp') }}" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>

                <div class="col-12 col-md-8 pr-xl-50 mb-20">
                    <h3 class="h4 fw-semibold">Mini Bus Transportation for FIFA World Cup 2026 in Dallas</h3>
                    <p class="font-md justify-class">
                        Our <a href="/services/chauffeur-service-dallas/"><b>mini bus transportation service for FIFA World Cup 2026 in Dallas</b></a> is built for medium-sized groups that require organized, comfortable, and dependable travel. This service is ideal for fan groups, corporate delegations, tour operators, and hospitality planners coordinating transportation for matches and related events. Mini buses provide ample seating, luggage space, and easy group boarding, keeping everyone together on busy match days.
                        <br><br>
                        Mini bus transportation is frequently used for hotel-to-stadium transfers, airport pickups, fan zone travel, and multi-stop itineraries across Dallas and Arlington. Chauffeurs are experienced in managing event traffic patterns and venue access requirements, helping groups arrive on time despite increased congestion. By using a dedicated mini bus, groups eliminate the need for multiple vehicles or complex coordination. With professional drivers, clear communication, and scheduled pickups, our mini bus service supports smooth, efficient group movement during the FIFA World Cup 2026.
                    </p>
                    <div class="fifa-btnss sec-btn">
                        <a href="/get-a-quote/">Reserve VIP Chauffeur Service</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 h-100 only-d">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/02.webp') }}" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>
            </div>

            <div class="row py-20 d-md-flex">
                <div class="col-12 col-md-4 h-100 only-m">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/charter-bus-service-dallas.webp') }}" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>

                <div class="col-12 col-md-8 pr-xl-50 mb-20">
                    <h3 class="h4 fw-semibold">Charter Bus Service for FIFA World Cup Groups in Dallas</h3>
                    <p class="font-md justify-class">
                        Our <a href="/booking/"><b>charter bus service for FIFA World Cup in Dallas</b></a> is designed for large-scale transportation needs during the tournament. This service is well suited for large fan groups, corporate hospitality programs, sports organizations, and travel agencies managing group arrivals and departures. Charter buses provide comfortable seating, climate control, and sufficient storage for luggage and event gear.
                        <br><br>
                        Charter bus transportation is commonly used for coordinated travel between airports, hotels, AT&T Stadium, and official FIFA venues. Our team plans routes and schedules in advance to account for match-day traffic, security zones, and timed entry windows. Professional chauffeurs handle navigation and logistics, allowing groups to focus on the event experience. With dependable scheduling, transparent pricing, and scalable fleet options, our charter bus service delivers reliable, organized transportation for large groups attending the FIFA World Cup 2026 in Dallas.
                    </p>
                    <div class="fifa-btnss sec-btn">
                        <a href="/get-a-quote/">Request FIFA VIP Transportation</a>
                    </div>
                </div>

                <div class="col-12 col-md-4 h-100 only-d">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/03.webp') }}" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray pt-50 pb-25 pb-md-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-03.svg') }}" alt="Luxury black car transportation for FIFA World Cup 2026 in Dallas" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Book Online or Call</h3>
                        <p class="font-md">Schedule your FIFA World Cup 2026 transportation online or by phone. Choose your pickup time, vehicle type, and locations across Dallas–Fort Worth.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-02.svg') }}" alt="Airport transfer service for FIFA World Cup 2026 travelers in Dallas" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Get Instant Confirmation</h3>
                        <p class="font-md">Get immediate confirmation with complete trip and chauffeur details sent by text or email. Everything is scheduled and documented in advance.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-01.svg') }}" alt="FIFA World Cup 2026 hotel to stadium car service in Dallas" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Meet Your Chauffeur</h3>
                        <p class="font-md">Your chauffeur arrives on time, professionally dressed, and ready to assist with airport, hotel, or stadium transportation—no delays, no confusion.</p>
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
                        <span class="theme-color">Reserve Your Executive Ride </span> <br>in Dallas Fort Worth
                    </h4>
                    <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Corporate Chauffeur Service</a>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-50 pt-sm-60 pt-md-70 pt-lg-80 pb-30 pb-sm-40 pb-md-50 pb-lg-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-15 mb-md-20 mb-lg-30">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Chosen By People At <span class="theme-color">Top Companies</span></h2>
                    <p class="font-md">Chosen by professionals at leading corporations, financial institutions, and luxury hotels, our black car service is trusted for reliability, discretion, and consistent executive standards. Clients rely on us for <a href="/services/airport-transfer-dallas/"><b>airport transfers</b></a>, corporate travel, and high-profile events where punctuality, comfort, and professional presentation matter most.</p>
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

    <section class="detail-content-section py-20">
        <div class="container">
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50">
                    <h3 class="h4 fw-semibold">FIFA World Cup 2026 Car Service in Dallas</h3>
                    <p class="font-md">
                       Our <a href="/booking/"><b>FIFA World Cup 2026 car service in Dallas</b></a> offers reliable, pre-scheduled black car and chauffeur transportation for match days, airport arrivals, hotel pickups, and stadium travel. Designed for international visitors, families, VIP guests, and groups, every ride is planned in advance to avoid traffic delays and event congestion. Professional chauffeurs manage timing, routing, and pickups so you can focus on the World Cup experience.
                    </p>
                    <p class="font-md">Service coverage includes:</p>
                    <ul>
                        <li><a href="/love-field-airport-car-service/"><b>Airport transfers to/from Dallas Love Field Airport</b></a> and DFW International Airport.</li>
                        <li>Hotel pickups from Omni Dallas Hotel and Hyatt Regency Dallas.</li>
                        <li>Stadium transportation to AT&T Stadium.</li>
                        <li>Private sedans, SUVs, Sprinter vans, and minibuses.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/fifa-cup-image.jpg') }}" width="407" height="210" class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse py-20 d-none d-md-flex">
                <div class="col-12 col-md-8 pr-xl-50 mb-20">
                    <h3 class="h4 fw-semibold">Areas We Serve in Dallas</h3>
                    <p class="font-md">
                       Our Dallas car service covers key business districts, hotels, airports, and major event locations, providing dependable transportation for airport arrivals, corporate travel, hotel transfers, and large events such as the FIFA World Cup 2026. All rides are professionally chauffeured, pre-scheduled, and planned with local traffic conditions in mind to ensure timely and comfortable travel.
                    </p>
                    <p class="font-md"> We regularly serve: </p>
                    <ul>
                        <li>Downtown Dallas, Uptown Dallas, Las Colinas, Plano, <a href="/black-car-service-frisco-tx/"><b>Frisco</b></a>, and Arlington.</li>
                        <li>Major hotels including Omni Dallas Hotel, Hyatt Regency Dallas, and nearby luxury accommodations.</li>
                        <li>Airport transportation to and from DFW International Airport and Dallas Love Field.</li>
                        <li>Stadium and event travel to AT&T Stadium.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/fifa-02.jpg') }}" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.testimonials')
    @include('partials.faq')

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
