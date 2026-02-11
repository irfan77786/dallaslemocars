@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "DFW to Waco Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>DFW to Waco Car Service</h1>
                            <p>
                                Enjoy a seamless transfer from Dallas/Fort Worth Airport (DFW)
                                to Waco with our professional black car service. Whether youre
                                travelling for business, heading to Baylor University, or
                                visiting family, our luxury vehicles & expert chauffeurs ensure
                                comfort & reliability. Skip the stress of long drives. Book your
                                DFW to Waco ride for a smooth journey.
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
                    <h2>DFW to Waco Car Service</h2>
                    <p>
                        Enjoy a seamless transfer from Dallas/Fort Worth Airport (DFW)
                        to Waco with our professional black car service. Whether youre
                        travelling for business, heading to Baylor University, or
                        visiting family, our luxury vehicles & expert chauffeurs ensure
                        comfort & reliability. Skip the stress of long drives. Book your
                        DFW to Waco ride for a smooth journey.
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
                        <h2>Dallas Limo And Black Cars Service – Fleet for Dallas to Waco Shuttle Service</h2>
                        <p>
                            Whether it’s for business, leisure, or university events, our Dallas to Waco shuttle service ensures safe and stylish travel.
                            Our chauffeurs deliver dependable long-distance transportation with comfort and professionalism for every passenger.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans: </strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class make executive and private trips seamless.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs: </strong>
                        Escalade, Suburban, and Yukon XL provide reliable, stylish group transport with space for luggage.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans: </strong>
                        Mercedes-Benz Sprinters are ideal for Baylor University events, family transfers, or business trips.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus: </strong>
                        A smart option for group travel, sporting events, or conferences in Waco.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers): </strong>
                        The top choice for conventions, sports teams, or student groups traveling between Dallas and Waco.
                    </p>


<p class="tagline-bottom">Choose our long-distance car service Dallas to Waco
                        for luxury group transportation and professional chauffeurs.</p>



                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="Dallas to Waco black car shuttle service luxury fleet" />
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
                        Smooth Dallas to Waco Transfers
                    </h5>
                    <p class="pt-section-description">
                        Travel between Dallas & Waco Regional Airport in comfort with
                        our DFW to Waco limo service. We serve areas like Coppell,
                        Farmers Branch & Plano. Choose luxury sedans for solo travelers.
                        Spacious SUVs are for families & groups. <a href="/services/chauffeur-service-dallas-texas/" class="internal-links-w">Our professional
                            chauffeurs</a> handle traffic, directions & luggage. You will arrive
                        on time. Vehicles are clean, well-kept & comfy. Business,
                        leisure, or airport trips—we cover it all. Our private car
                        service DFW to Waco makes every ride safe, smooth & enjoyable.
                    </p>
                    <p class="pt-section-description">
                        Book your DFW to Waco transfer today & enjoy stress-free travel
                        with a pro chauffeur.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/dallas-to-waco-black-car-service.webp"
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
                        src="/img/luxury-car-service-dallas-to-waco.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Reliable Group Travel to Waco
                    </h5>

                    <p class="pt-section-description">
                        Our Dallas to Waco <a href="/services/private-car-service-in-dallas-texas/" class="internal-links">private car service</a> is great for families,
                        friends, or business teams. We provide roomy SUVs & luxury vans
                        for passengers & luggage. We serve areas like Highland Park,
                        University Park & Richardson. Drivers carefully plan routes to
                        avoid delays. Meetings, events, or personal trips—we keep
                        safety, comfort & convenience top priority. Travel between DFW &
                        Waco is easy. Experienced chauffeurs & quality vehicles make
                        every ride smooth & reliable.
                    </p>
                    <p class="pt-section-description">
                        <a href="/book-now/" class="internal-links">Reserve your group transfer today</a> & enjoy a hassle-free ride
                        from Dallas to Waco.
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
                        src="/img/chauffeur-service-dallas-to-waco.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why choose us for DFW to Waco Car Service
                    </h5>

                    <p>
                        Traveling between Dallas/Fort Worth International Airport (DFW)
                        &amp; Waco has never been easier. Our private car service
                        provides a stress-free, direct transfer tailored to your
                        schedule. Whether you’re heading to Baylor University, attending
                        business meetings, or visiting Magnolia Market, our service
                        ensures a smooth &amp; comfortable ride.
                    </p>

                    <ul>
                        <li>
                            <strong>Professional Chauffeurs: </strong>Experienced drivers
                            familiar with the DFW–Waco route.
                        </li>
                        <li>
                            <strong>Direct, Door-to-Door Service: </strong>Avoid the
                            hassle of long bus rides or multiple transfers.
                        </li>
                        <li>
                            <strong>Premium Vehicle Selection: </strong>Choose from luxury
                            sedans, SUVs, or spacious vans.
                        </li>
                        <li>
                            <strong>Flexible Pickup Times: </strong>Travel on your
                            schedule, whether it’s an early morning flight or late
                            arrival.
                        </li>
                        <li>
                            <strong>Transparent Pricing: </strong>No hidden fees, just
                            reliable, competitive rates.
                        </li>
                        <li>
                            <strong>Onboard Comforts: </strong>Complimentary bottled
                            water, phone chargers, &amp; Wi-Fi in select vehicles.
                        </li>
                        <li>
                            <strong>Safe &amp; Reliable Travel: </strong>Your safety &amp;
                            punctuality are always our top priorities.
                        </li>
                    </ul>

                    <p>
                        Our DFW to/from Waco car service is perfect for students,
                        families, &amp; business travelers who want a dependable
                        connection between North Texas and Central Texas.
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
