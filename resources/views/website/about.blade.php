@extends('master')

@section('content')
    <section class="home-banner-section">
        <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="h1 fw-bold text-white mb-15">About Dallas Black Limo Service</h1>
                    <p class="font-lg fw-medium text-white mb-0 justify-class">Dallas Black Limo Service is a trusted provider of luxury black car and chauffeur services across Dallas–Fort Worth. We deliver reliable, discreet, and professionally managed transportation for airports, corporate travel, events, and private clients.</p>
                    <p class="font-md text-white d-flex align-items-center mt-3">
                        Call Now: <a href="tel:(214) 897-8056" class="fw-bold font-lg theme-color mx-2 text-underline">(214) 897-8056</a>
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
                    <h2 class="h2 fw-bold mb-10 text-center">Luxury Black Car & Chauffeur<span class="theme-color br-css-tt"> Service You Can Trust in Dallas</span></h2>
                    <p class="font-md">Executives trust us for trained chauffeurs, <a href="/services/airport-transfer-dallas/"><b>on-time airport transfers</b></a>, and consistently reliable black car service across Dallas.</p>
                </div>
            </div>
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50 justify-mobile">
                    <h3 class="h5 fw-semibold">Why Executives Choose Our Dallas Black Car Service</h3>
                    <p class="font-md">Built for executives, corporate teams, and VIP travelers who need transportation done right, without excuses or guesswork.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li><p class="mb-0"><strong class="br-css-tts">Professional Chauffeurs You Can Trust:</strong> Our chauffeurs are background-checked, professionally trained, and chosen for executive travel experience.</p></li>
                        <li><p class="mb-0"><strong class="br-css-tts">Clean, Modern Vehicles Every Time:</strong> Late-model sedans, luxury SUVs, and executive vans are kept clean and comfortable.</p></li>
                        <li><p class="mb-0"><strong class="br-css-tts">Airport Pickups That Match Your Flight:</strong> We use live flight tracking and smart buffer timing at DFW and Love Field.</p></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20">
                    <h2 class="h2 fw-bold mb-10 text-white">The Smarter Choice for Corporate Transportation</h2>
                    <p class="font-md text-white justify-mobile">Professional black car service in Dallas for executives and executive assistants who require punctual pickups, transparent pricing, and zero uncertainty.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Booking" class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="h6 fw-semibold text-white">Upfront Corporate Pricing</h3>
                        <p class="font-md text-white">Flat, pre-set rates with no surge fees or hidden charges.</p>
                    </article>
                </div>
                <!-- ... other items ... -->
            </div>
        </div>
    </section>

    @include('partials.top-cities')
    @include('partials.testimonials')
    @include('partials.faq')
@endsection
