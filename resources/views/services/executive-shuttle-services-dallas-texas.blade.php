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
        <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h1 fw-bold mb-15">Executive Shuttle Services in Dallas</h1>
                    <p class="mb-0 text-white font-lg fw-medium justify-class">Reliable and comfortable executive shuttle services for corporate events, conferences, and group travel across Dallas–Fort Worth. Professional chauffeurs and well-maintained vehicles for your team.</p>
                    <p class="text-white font-md d-flex align-items-center mt-3">
                        Call Now: <a href="tel:(214) 897-8056" class="mx-2 fw-bold font-lg theme-color text-underline">(214) 897-8056</a>
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

    <section class="detail-content-section pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                    <h2 class="h2 fw-bold mb-10 text-center">Executive Shuttle & <span class="theme-color br-css-tt">Group Transport in Dallas</span></h2>
                    <p class="font-md">Ideal for corporate events, conferences, team meetings, and group travel. Our executive shuttle services ensure punctual pickups and comfortable rides for your entire team.</p>
                </div>
            </div>
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50 justify-mobile">
                    <h3 class="h5 fw-semibold">Why Choose Our Executive Shuttle Service</h3>
                    <p class="font-md">Built for corporate teams and event organizers who need coordinated group transportation without the hassle of managing multiple vehicles.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li><p class="mb-0"><strong class="br-css-tts">Professional Group Transport:</strong> Sprinter vans and luxury buses for corporate events, conferences, and team travel.</p></li>
                        <li><p class="mb-0"><strong class="br-css-tts">Reliable Scheduling:</strong> On-time pickups and coordinated routes for multiple locations across DFW.</p></li>
                        <li><p class="mb-0"><strong class="br-css-tts">Airport & Event Transfers:</strong> Seamless service for <a href="/services/airport-transfer-dallas/"><b>airport transfers</b></a>, hotels, and venues.</p></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233" class="img-fluid" alt="Executive shuttle service Dallas">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-white">The Smarter Choice for Group Transportation</h2>
                    <p class="font-md text-white justify-mobile">Executive shuttle services in Dallas for corporate teams and event planners who require punctual pickups, transparent pricing, and coordinated group travel.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Pricing" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Upfront Group Pricing</h3>
                        <p class="font-md text-white">Flat, pre-set rates with no surge fees or hidden charges for corporate bookings.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/car-steering.svg') }}" alt="Fleet" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Spacious Vehicles</h3>
                        <p class="font-md text-white">Sprinter vans and luxury buses for groups of all sizes across Dallas–Fort Worth.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-01.svg') }}" alt="Chauffeur" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Professional Chauffeurs</h3>
                        <p class="font-md text-white">Licensed, trained drivers focused on safety and punctuality for your events.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('partials.top-cities')
    @include('partials.testimonials')
    @include('partials.faq')
@endsection
