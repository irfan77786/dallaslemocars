@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Our Fleet"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Dallas Fleet – Comfort Meets Class</h1>
                            <p>
                                Luxury Vehicles for Every Occasion. First-Class Comfort on Every
                                Mile.
                            </p>
                            <p class="bt-text">24/7 Service Available, Click to Call Now!</p>
                            <div class="bottom-banner-btn" bis_skin_checked="1">
                                <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12148978056" bis_skin_checked="1">Call: 214-897-8056</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 p-0 booking_card_container">
                        @include('partials.search_form')
                    </div>
                </div>

                <!-- Map to display after form input -->
            </div>
        </div>

        <div id="map" style="height: 100%; width: 100%; display: none; border-radius: 15px; overflow: hidden; left:0;z-index: 9 !important; top:0">
            <div class="map-overlay"></div>
        </div>

        <div id="route-info-box" style="
      position: absolute;
      bottom: 20px;
      left: 20px;
      background: white;
      color: black;
      padding: 12px 16px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      font-size: 14px;
      z-index: 999;
      display: none;">
            <div><strong>Distance:</strong> <span id="route-distance">-</span></div>
            <div><strong>Duration:</strong> <span id="route-duration">-</span></div>
        </div>
    </div>
</div>
<div class="hero-mobile">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-banner-text" bis_skin_checked="1">
                    <h2>Dallas Fleet – Comfort Meets Class</h2>
                    <p>
                        Luxury Vehicles for Every Occasion. First-Class Comfort on Every
                        Mile.
                    </p>
                    <p class="bt-text">24/7 Service – Call Now</p>
                    <div class="bottom-banner-btn" bis_skin_checked="1">
                        <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12148978056" bis_skin_checked="1">Call: 214-897-8056</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container-fluid ait fleet-footer-x">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="btom bottom-fleet-tx">
                    <h3>Ride in the Best. Arrive in Style <br />Black Car Service</h3>
                    <p>
                        At Dallas Limo And Black Cars Service, we offer a carefully curated
                        fleet of late-model luxury vehicles designed to provide maximum
                        comfort, safety, and sophistication. Whether you’re heading to
                        <a
                            href="/airport/car-service-dallas-fort-worth-international-airport/"
                            class="internal-links">DFW Airport</a>, planning a corporate event in Frisco, or traveling from
                        <a
                            href="/city-to-city-ride/dallas-to-austin/"
                            class="internal-links">Dallas to Austin</a>, our fleet delivers elegance on demand.
                    </p>
                </div>
            </div>
        </div>

        <div class="container tabs">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-inline tab-list col-md-12">
                        <li id="select-1" class="active fleet-btn">
                            <h3>Business sedan</h3>
                        </li>

                        <li id="select-2" class="fleet-btn">
                            <h3>Luxury SUV</h3>
                        </li>

                        <li id="select-3" class="fleet-btn">
                            <h3>Business SUV</h3>
                        </li>
                        <li id="select-4" class="fleet-btn">
                            <h3>Executive Sprinter</h3>
                        </li>
                        <li id="select-5" class="fleet-btn">
                            <h3>Mini Buses</h3>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tabs-content bar-chart active" id="content-select-1">
                <div class="tab-header col-md-12 text-center">
                    <img src="/image/business-sedan.webp" alt="busines sedan" />
                    <p>
                        <strong>Perfect for:</strong> Business travelers, airport
                        transfers, solo executive rides.
                    </p>

                    <ul>
                        <li>
                            <strong>Models:</strong> Cadillac CT6, Mercedes-Benz S-Class,
                            Audi A8 L.
                        </li>
                        <li><strong>Seating:</strong> Up to 3 passengers.</li>
                        <li>
                            <strong>Amenities:</strong> Leather interior, climate control,
                            USB charging, tinted windows.
                        </li>
                    </ul>
                    <a href="/book-now/">Book Now</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tabs-content bar-chart" id="content-select-2">
                <div class="tab-header col-md-12 text-center">
                    <img src="/image/luxury-suv.webp" alt="luxury suv" />
                    <p>
                        <strong>Perfect for:</strong> Families, groups with luggage,
                        casual business travel.
                    </p>

                    <ul>
                        <li>
                            <strong>Models:</strong> Chevrolet Suburban, GMC Yukon XL.
                        </li>
                        <li><strong>Seating:</strong> Up to 6 passengers.</li>
                        <li>
                            <strong>Use Cases:</strong> DFW Airport transfers, FBO
                            pickups, weekend getaways.
                        </li>
                        <li>
                            <strong>Features:</strong> Spacious interiors, rear climate
                            zones, ample luggage room.
                        </li>
                    </ul>
                    <a href="/book-now/">Book Now</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tabs-content bar-chart" id="content-select-3">
                <div class="tab-header col-md-12 text-center">
                    <img src="/image/business-suv.webp" alt="business suv" />
                    <p>
                        <strong>Perfect for:</strong> VIPs, corporate executives,
                        red-carpet occasions.
                    </p>

                    <ul>
                        <li>
                            <strong>Models:</strong> Cadillac Escalade ESV, Lincoln
                            Navigator L.
                        </li>
                        <li><strong>Seating:</strong> Up to 6 passengers</li>
                        <li>
                            <strong>Use Cases:</strong> Black-tie events, board meetings,
                            high-level transportation
                        </li>
                        <li>
                            <strong>Features:</strong> Premium leather, ambient lighting,
                            extended legroom, premium ride quality.
                        </li>
                    </ul>
                    <a href="/book-now/">Book Now</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tabs-content bar-chart" id="content-select-4">
                <div class="tab-header col-md-12 text-center">
                    <img src="/image/luxury-sprinter.webp" alt="luxury sprinter" />

                    <p>
                        <strong>Perfect for:</strong> Group transportation, corporate
                        shuttles, wedding parties.
                    </p>

                    <p><strong>Configurations:</strong></p>
                    <ul>
                        <li>Executive Style (up to 8 passengers).</li>
                        <li>VIP Style (captain chairs + table, 7–8 passengers).</li>
                        <li>Shuttle Style (up to 13 passengers).</li>
                        <li>
                            <strong>Features:</strong> Privacy shades, surround sound,
                            wood flooring, high roof.
                        </li>
                    </ul>

                    <a href="/book-now/">Book Now</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="tabs-content bar-chart" id="content-select-5">
                <div class="tab-header col-md-12 text-center">
                    <img src="/image/mini-bus.webp" alt="executive sprinter" />
                    <p>
                        <strong>Perfect for:</strong> Conferences, sporting events,
                        employee group transport.
                    </p>

                    <p><strong>Sizes Available:</strong></p>

                    <ul>
                        <li>
                            23–27 passenger (luxury leather, overhead storage, Wi-Fi).
                        </li>
                        <li>
                            31–38 passenger (high capacity, group coordination, rear
                            luggage storage).
                        </li>
                        <li>
                            <strong>Amenities:</strong> PA system, interior lighting,
                            premium seating.
                        </li>
                    </ul>

                    <a href="/book-now/">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-uss">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-chauffeur-1">
                    <img
                        src="/image/affordable-luxury-dfw-car-service-to-airport.webp"
                        alt="Premier Black Car Service"
                        width="403"
                        height="233" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h2 class="pt-section-titles">
                        Why Our Clients Choose Our Fleet
                    </h2>
                    <ul>
                        <li>
                            <a
                                href="/services/chauffeur-service-dallas-texas/"
                                class="internal-links">Professional Chauffeurs</a>
                            (background-checked & trained)
                        </li>
                        <li>Real-Time Flight & Traffic Tracking</li>
                        <li>24/7 Availability Across DFW & North Texas</li>
                        <li>Fleet Maintained to Executive Standards</li>
                        <li>Fully Licensed, Insured & GPS-Monitored</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us testimonials-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 testimonials-sec">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title text-center">
                        What Our Corporate Clients and Executive Assistants Are Saying
                    </h5>

                    <div class="button-prevs text-right">
                        <div class="row">
                            <div class="col-md-8"></div>

                            <div class="col-md-4 testi">
                                <button class="prev">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </button>
                                <button class="next">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="banner-slids">
                        <div class="tns-outer tns-ovh">
                            <button data-action="stop" type="button">
                                <span class="tns-visually-hidden">stop animation</span>stop
                            </button>
                            <div class="tns-inner" id="tns1-iw">
                                <div
                                    class="slider tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1"
                                    style="
                        transform: translateX(-28%);
                        transition-duration: 0.3s;
                      ">
                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                The Cadillac Escalade was spotless, roomy, and ideal
                                                for our Love Field pickup. Our executive was beyond
                                                impressed.
                                            </p>
                                            <p>
                                                <bold>— Janet B.</bold> Uptown Dallas
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Our law firm used their Mercedes VIP Sprinter to
                                                visit three corporate sites in Plano and Frisco. The
                                                captain chairs and onboard Wi-Fi were exactly what
                                                we needed.
                                            </p>
                                            <p>
                                                <bold>— Mark T.</bold> Plano, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                We reserved a 38-passenger mini bus for a group
                                                event at AT&T Stadium. Everyone was comfortable and
                                                on time, and the ride was smooth and professional.
                                            </p>
                                            <p>
                                                <bold>— Allison R.</bold> Arlington, TX
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="wrapper">
    <div class="container">
        <h3 class="text-center">Frequently asked questions</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        What areas do you serve with your fleet?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We serve all of Dallas–Fort Worth, including Frisco, Plano,
                            Irving, Arlington, and airport transfers from DFW
                            International, Dallas Love Field, and private FBOs like
                            Signature Aviation and Million Air.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Which fleet vehicle is best for airport transfers?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            For DFW Airport or Love Field pickups, our Executive Sedans
                            and Premier SUVs (like Suburban or Yukon XL) are most popular
                            for 1–4 passengers with luggage. For groups, a Sprinter Van or
                            Mini Bus may be more suitable.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Can I use your vehicles for out-of-town or long-distance rides?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. Our entire fleet is available for city-to-city travel
                            across Texas, including popular routes like Dallas to Austin,
                            Dallas to Houston, and overnight stays.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Are Sprinters or buses available for corporate or group events?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Absolutely. We offer Mercedes Sprinter Vans for 7–13
                            passengers and Mini Buses for up to 38 guests. These are
                            perfect for meetings, conferences, and team-building retreats
                            in Plano, Downtown Dallas, and event centers.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">How clean and safe are the vehicles?</div>
                    <div class="answercont">
                        <div class="answer">
                            Every vehicle is professionally detailed daily and inspected
                            before every trip. Our fleet meets all luxury car service
                            standards and is fully insured and licensed in Texas.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Can I request specific vehicles like an Escalade or Sprinter
                        VIP?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. While fleet availability depends on demand, we do accept
                            vehicle-specific requests—especially for Cadillac Escalade,
                            Lincoln Navigator, and our VIP Sprinter Van with captain
                            chairs and table.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.faq_section')
<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>

            <div class="col-md-10">
                <h3><span class="main-color">Make Every Mile </span><br>First-Class</h3>
                <a href="/fifa-world-cup-2026-car-service-dallas/" class="bottom-cta-vtb-c">Reserve Your Black Car Today</a>
            </div>
            <div class="col-md-1">
            </div>


        </div>
    </div>
</div>
@section('body-scripts')
<script src="{{ asset('js/industrie-custom.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUqn8Dg3GICSzhyvw7DjXXHkyoGMCoTpM&libraries=places&loading=async&callback=initAutocomplete" async defer></script>
@endsection
@endsection
