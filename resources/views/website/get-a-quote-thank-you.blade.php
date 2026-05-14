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
        <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>
            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h2 fw-bold mb-15">Thank You</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Your quote request was received. Our team will review your trip details and follow up with you soon.</p>
                        <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                            Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a>
                        </p>
                    </div>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => '_form'])
                    </div>
                </div>
            </div>
        </div>
        @include('partials.hero_banner_styles')
    </section>

    <section class="bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 text-center">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20">We received your quote request</h2>
                    <p class="font-base mb-25 mb-md-30">
                        Thank you for contacting Dallas Limo and Black Cars. We have emailed a copy of your request to the address you provided.
                        A member of our team will review your trip details and respond with pricing as soon as possible—usually within one business day.
                    </p>
                    <p class="font-base mb-30 mb-md-40">
                        Need something sooner? Call us anytime at
                        <a href="tel:+12148978056" class="fw-bold theme-color">+1 214-897-8056</a>.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-2 justify-content-center align-items-center">
                        <a href="{{ url('/') }}" class="btn btn-primary fw-bold">Return home</a>
                        <a href="{{ route('get_a_quote') }}" class="btn btn-primary fw-bold sm">Request another quote</a>
                        <a href="{{ route('contact_us') }}" class="btn btn-outline-secondary fw-medium">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.companies_strip')
    @include('partials.testimonials')
    @include('partials.faq')
@endsection
