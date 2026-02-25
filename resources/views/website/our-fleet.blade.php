@extends('master')

@section('content')
    <main>
        <section class="home-banner-section">
            <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
                 style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
                <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>
                <div class="row" style="pointer-events: none;">
                    <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center text-center text-md-start" style="pointer-events: auto; position: relative; z-index: 0;">
                        <h1 class="h1 fw-bold text-white mb-15">Our Luxury Fleets</h1>
                        <p class="font-lg fw-medium text-white mb-0">Explore our professionally maintained fleet of luxury sedans, black SUVs, Sprinter vans, limousines, and group vehicles.</p>
                        <p class="font-md text-white d-flex align-items-center justify-content-center justify-content-md-start">
                            Call Now: <a href="tel:+12148978056" class="fw-bold font-lg theme-color mx-2 text-underline">(214) 897-8056</a>
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
                        <h2 class="h2 fw-bold mb-10 text-center">Airport Transportation Built <span class="theme-color br-css-tt">Around Executive Expectations</span></h2>
                        <p class="font-md mb-0 justify-mobile">Our airport fleet is built for travelers and executive assistants who need reliable, professional transportation without follow-ups or uncertainty. Executive sedans offer a quiet, composed ride for solo and business travel, while luxury and premium SUVs provide added space for passengers and luggage with a polished, executive-ready presence. Sprinter vans and larger buses support coordinated group airport transfers, corporate arrivals, and event travel. Every vehicle is chauffeur-driven, clean, and selected for schedule awareness—ensuring calm departures, smooth arrivals, and airport transportation handled correctly.</p>
                    </div>
                </div>
                <div class="row luxury-cars-item-holder justify-content-center d-none d-md-flex">
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="text-center luxury-cars-item mx-auto">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/Sedan.webp') }}" alt="Black car service Dallas luxury sedan" class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="fw-semibold h6 mb-3">Premier Sedan</h3>
                            <p class="font-base mb-2">Mercedes S550, BMW 750 or similar</p>
                            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                    </svg>
                                    max 3
                                </li>
                                <li class="px-2"></li>
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                    </svg>
                                    max 3
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="text-center luxury-cars-item mx-auto">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/suv.webp') }}" alt="Luxury SUV black car service Dallas" class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="fw-semibold h6 mb-3">Premier SUV</h3>
                            <p class="font-base mb-2">Chevrolet Suburban or similar</p>
                            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                    </svg>
                                    max 6
                                </li>
                                <li class="px-2"></li>
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                    </svg>
                                    max 6
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="text-center luxury-cars-item mx-auto">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/luxury-suv.webp') }}" alt="Premium SUV black car service Dallas" class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="fw-semibold h6 mb-3">Luxury SUV</h3>
                            <p class="font-base mb-2">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                    </svg>
                                    max 6
                                </li>
                                <li class="px-2"></li>
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                    </svg>
                                    max 6
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="text-center luxury-cars-item mx-auto">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/sprinter.webp') }}" alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="fw-semibold h6 mb-3">Business Sprinter</h3>
                            <p class="font-base mb-2">Mercedes benz Sprinter Van or similar</p>
                            <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                    </svg>
                                    max 12
                                </li>
                                <li class="px-2"></li>
                                <li class="d-flex gap-2 align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                        <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                    </svg>
                                    max 30
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="row d-md-none">
                    <div class="col-12">
                        <div class="luxury-cars-slider-holder">
                            <div>
                                <article class="text-center luxury-cars-slider-item mx-auto">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/Sedan.webp') }}" alt="Black car service Dallas luxury sedan" class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="fw-semibold h5 mb-2">Premier Sedan</h3>
                                    <p class="font-base mb-2">Mercedes S550, BMW 750 or similar</p>
                                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                        <li class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                            </svg>
                                            max 3
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                            </svg>
                                            max 3
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div>
                                <article class="text-center luxury-cars-slider-item mx-auto">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/suv.webp') }}" alt="Luxury SUV black car service Dallas" class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="fw-semibold h5 mb-2">Premier SUV</h3>
                                    <p class="font-base mb-2">Chevrolet Suburban or similar</p>
                                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                        <li class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                            </svg>
                                            max 6
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                            </svg>
                                            max 6
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div>
                                <article class="text-center luxury-cars-slider-item mx-auto">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/luxury-suv.webp') }}" alt="Premium SUV black car service Dallas" class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="fw-semibold h5 mb-2">Luxury SUV</h3>
                                    <p class="font-base mb-2">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                                    <ul class="list-unstyled pl-0 mb-0 d-flex justify-content-center">
                                        <li class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"></path>
                                            </svg>
                                            max 6
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="d-flex gap-2 align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z"></path>
                                            </svg>
                                            max 6
                                        </li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.companies_strip')
        @include('partials.top-cities')
        @include('partials.testimonials')
        @include('partials.faq')
    </main>
@endsection
