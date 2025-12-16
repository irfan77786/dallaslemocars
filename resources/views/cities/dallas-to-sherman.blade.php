@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Dallas to Sherman Black Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Dallas to Sherman Black Car Service</h1>
                            <p>
                                Travel comfortably between Dallas & Sherman with our private
                                black car service. Whether youre heading for _business, family
                                visits, or special events, we provide luxury sedans, SUVs, &
                                executive vehicles with professional chauffeurs. Skip the hassle
                                of driving yourself. Book your Dallas to Sherman ride today for
                                safe, reliable & stress-free transportation.
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
                    <h2>Dallas to Sherman Black Car Service</h2>
                    <p>
                        Travel comfortably between Dallas & Sherman with our private
                        black car service. Whether youre heading for _business, family
                        visits, or special events, we provide luxury sedans, SUVs, &
                        executive vehicles with professional chauffeurs. Skip the hassle
                        of driving yourself. Book your Dallas to Sherman ride today for
                        safe, reliable & stress-free transportation.
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

<section class="container-fluid ait">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btom">
                    <div class="btom-bottom">
                        <h2>Dallas Limo And Black Cars Service – Premium Fleet for Dallas to Sherman Travel</h2>
                        <p>
                            For business or leisure, our Dallas to Sherman car service ensures comfort, style, and safety.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans –</strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for executive transfers or private travel.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs –</strong>
                        Escalade, Suburban, and Yukon XL deliver roomy seating and luxury finishes for families or small groups.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans –</strong>
                        Mercedes-Benz Sprinters are great for wedding groups, corporate shuttles, or group transfers to Sherman.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
                        Best for groups attending regional events, conferences, or family gatherings.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
                        Perfect for moving larger groups, school trips, or conventions between Dallas and Sherman.
                    </p>


<p class="tagline-bottom">Trust our luxury chauffeur service Dallas for punctual, reliable long-distance rides to Sherman.</p>


                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="Dallas to Sherman car service luxury black car" />
                </div>

                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Dallas – Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title">
                        Professional Dallas–Sherman
                        Limo Rides
                    </h5>
                    <p class="pt-section-description">
                        Travel from Dallas to Sherman in style & comfort with our
                        <a href="/services/dfw-limo-service/" class="internal-links-w">Dallas–Sherman limo service</a>. We provide safe, reliable & on-time
                        rides for every occasion. We serve areas like Highland Park,
                        Farmers Branch & Coppell. Our fleet has luxury sedans for solo
                        travelers & roomy SUVs for families or groups. Going to business
                        meetings, events, or airports? Our chauffeurs handle traffic,
                        directions & luggage. This makes your trip smooth, stress-free &
                        enjoyable.
                    </p>
                    <p class="pt-section-description">
                        All vehicles are clean & well-kept for work or leisure trips.
                        Traveling to Sherman is easy. Our focus on safety, comfort &
                        on-time service gives every passenger a pleasant & reliable
                        ride.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/dallas-to-sherman-black-car-service.webp"
                        width="522"
                        height="564"
                        alt="Reliable black car service near Dallas" />
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <h5>
                    <span class="main-color">Going to the airport,</span> a business
                    meeting, or the big game?
                </h5>

                <p class="bottom-cta-content">
                    Your private chauffeur is ready for DFW Airport, Plano business
                    districts, Legacy West, or AT&amp;T Stadium game days.
                </p>

                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="#">Travel in Comfort – Book Now</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<section class="about-uss city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-chauffeur-1">
                    <img
                        src="/images/img/airport-pickup-service-dallas.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why choose us for Dallas to Sherman Car Service
                    </h5>

                    <p>
                        Traveling between Dallas &amp; Sherman has never been easier
                        with our dependable <a href="" class="internal-links">city-to-city car service</a>. Whether you’re
                        heading north for business, visiting family, or attending local
                        events, our private rides provide comfort, safety, &amp;
                        convenience for every trip.
                    </p>

                    <ul>
                        <li>
                            <strong>Professional Drivers: </strong>Experienced chauffeurs
                            familiar with the Dallas–Sherman route.
                        </li>
                        <li>
                            <strong>Direct &amp; Reliable: </strong>Enjoy seamless
                            door-to-door travel without the stress of traffic or parking.
                        </li>
                        <li>
                            <strong>Comfortable Fleet: </strong>Clean, modern vehicles
                            designed for both individuals &amp; groups.
                        </li>
                        <li>
                            <strong>Flexible Scheduling: </strong>Choose your preferred
                            pickup time for total convenience.
                        </li>
                        <li>
                            <strong>Transparent Rates: </strong>Fair, upfront pricing with
                            no hidden fees.
                        </li>
                        <li>
                            <strong>Added Comforts: </strong>Complimentary water, charging
                            ports, &amp; Wi-Fi available in select vehicles.
                        </li>
                        <li>
                            <strong>Safe Travel: </strong>Every ride is focused on
                            reliability, punctuality, &amp; passenger care.
                        </li>
                    </ul>

                    <p>
                        Our Dallas to/from Sherman service is the perfect solution for
                        commuters, business travelers, or anyone who values a smooth
                        &amp; stress-free ride. Sit back, relax, &amp; enjoy the
                        journey.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <img
                    src="/img/fifa-world-cup-2026-car-service-dallas.jpg"
                    alt="fifa world cup 2026 car service dallas" />

                <a
                    href="/fifa-world-cup-2026-car-service-dallas/"
                    class="bottom-cta-vtb-c">Visit our fifa world cup 2026 page</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<div id="bottomServices-defcitiy icon-h-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/booking.webp"
                            alt="Online Portal
 " />
                    </span>

                    <div class="serviceHeadings">
                        <h3>Book Online or Call</h3>

                        <p>Use our form or call to schedule your ride.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/conformation.webp"
                            alt="Clear-Cut All-Inclusive Pricing
 " />
                    </span>

                    <div class="serviceHeadings">
                        <h3>Get Instant Confirmation</h3>

                        <p>Receive driver and trip details via text or email.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/chauffeur.webp"
                            alt="Expert Chauffeurs
 " />
                    </span>

                    <div class="serviceHeadings">
                        <h3>Meet Your Chauffeur</h3>

                        <p>On-time, professional, and ready to assist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-uss city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/luxury-car-service-dallas-to-sherman.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">Areas We Serve</h5>

                    <p>
                        Providing seamless transportation to and from Dallas/Fort Worth
                        International Airport (DFW), serving the entire Metroplex:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities &amp; Regional Communities </strong> We proudly
                            serve major cities like Dallas and Fort Worth, along with
                            Plano,
                            <a href="https://dallaslimoandblackcars.com/locations/black-car-service-frisco-texas/" class="internal-links">Frisco</a>, McKinney, and Allen. Our network also extends to Southlake,
                            Keller, Flower Mound, Carrollton, Richardson, Denton, Garland,
                            Mesquite, and The Colony.
                        </li>
                        <li>
                            <strong>Airports &amp; Aviation Access </strong>DFW International
                            Airport,
                            <a href="https://dallaslimoandblackcars.com/airport/dallas-love-field-black-car-service/" class="internal-links">Dallas Love Field</a>, Addison Airport, McKinney National Airport, Fort Worth
                            Alliance Airport, and VIP FBO Terminals.
                        </li>
                        <li>
                            <strong>Corporate &amp; Lifestyle Zones: </strong>Legacy West
                            (Plano), The Star (Frisco), Downtown Dallas, Las Colinas
                            (Irving), Dallas Arts District, and Preston Hollow.
                        </li>
                        <li>
                            <strong>Sports &amp; Entertainment Venues: </strong>AT&amp;T Stadium,
                            Globe Life Field, American Airlines Center, Toyota Stadium,
                            PGA Frisco, and Toyota Music Factory.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <h5>
                    <span class="main-color">Don’t leave</span><br />your next trip to
                    chance
                </h5>
                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="#">Book your ride now</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<section class="about-us testimonials-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 testimonials-sec">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title text-center">
                        What Our Corporate Clients and
                        <span class="main-color">Executive Assistants Are Saying</span>
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
                                                I used Black Car Service for a business trip, and it
                                                was fantastic. The driver was on time, professional,
                                                and personable. The car was very clean, so it was a
                                                relaxing, comfortable ride for him.
                                            </p>
                                            <p>
                                                <bold>— Nicole A.</bold> Dallas, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Black Car Service made effortless work of the
                                                airport transfer effortless! The booking process was
                                                seamless, the driver got there incredibly early, and
                                                we just went to the airport without a care.
                                            </p>
                                            <p>
                                                <bold>— Olivia R.</bold> Addison, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Travelling with Black Car Service was a pleasure.
                                                The vehicle was full of luxury, the driver was quite
                                                courteous, and everything was time-bound. Allen is
                                                somewhere I will recommend to friends and family all
                                                over.
                                            </p>
                                            <p>
                                                <bold>— Emily J.</bold> Plano, TX
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
