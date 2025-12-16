@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Dallas to College Station Black Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Luxury Chauffeur Service from Dallas to College Station</h1>
                            <p>
                                Enjoy a smooth, private ride from Dallas to College Station with
                                our luxury black car service. Perfect for campus visits, Aggie
                                game days, or business travel, our sedans, SUVs & executive
                                vehicles provide comfort & reliability. With professional
                                chauffeurs & timely service, book your Dallas to College Station
                                ride today for stress-free travel.
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
                    <h2>Luxury Chauffeur Service from Dallas to College Station</h2>
                    <p>
                        Enjoy a smooth, private ride from Dallas to College Station with
                        our luxury black car service. Perfect for campus visits, Aggie
                        game days, or business travel, our sedans, SUVs & executive
                        vehicles provide comfort & reliability. With professional
                        chauffeurs & timely service, book your Dallas to College Station
                        ride today for stress-free travel.
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
                        <h2>
                            Dallas Limo And Black Cars Service – Luxury Rides to College Station
                        </h2>
                        <p>
                         Heading to Texas A&M in College Station? Our fleet makes the journey from Dallas efficient and comfortable.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans: </strong>Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for discreet, chauffeur-driven rides.
                    </p>


              <p>
                        <strong class="strong-c-color">Luxury SUVs: </strong>Escalade, Suburban, and Yukon XL provide comfortable seating for students, families, or professionals.
                    </p>


                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans: </strong>Mercedes-Benz Sprinters are perfect for alumni events, college visits, or group transfers.
                    </p>


                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus: </strong>Designed for student groups, athletic teams, or business delegations visiting College Station.
                    </p>


                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers):</strong> The best option for sports groups, conventions, or large-scale travel between Dallas and College Station.
                    </p>


<p class="tagline-bottom">Book our Dallas to College Station long-distance car service for dependable, luxury group transportation.</p>


                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="luxury Dallas Limo And Black Cars" />
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
                        Premium College Station Rides
                    </h5>
                    <p class="pt-section-description">
                        Travel in style & comfort with our Dallas–College Station limo
                        service. We provide safe & reliable rides for students, parents
                        & <a href="/services/private-car-service-in-dallas-texas/" class="internal-links-w">business travelers</a>. We serve neighborhoods like Addison,
                        Mesquite & Carrollton. Our fleet has luxury sedans for solo
                        travelers & spacious SUVs for families or groups. <a href="/services/chauffeur-service-dallas-texas/" class="internal-links-w">Professional
                        chauffeurs</a> handle navigation, traffic & luggage. You can relax &
                        enjoy your trip. Whether attending a university event, business
                        meeting, or personal visit, we ensure on-time arrivals & a
                        hassle-free ride. Every ride is planned for your comfort &
                        safety. You can focus on what matters most.
                    </p>
                    <p class="pt-section-description">
                        Book your ride today & enjoy the convenience of our
                        <a href="/services/dfw-limo-service/" class="internal-links-w">long-distance limo service</a>.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/dallas-to-college-station-black-car-service.webp"
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
                        Group Travel & Special Events
                    </h5>

                    <p class="pt-section-description">
                        Heading to College Station with friends, colleagues, or family?
                        Our limo service makes group travel simple & comfy. We serve
                        areas like Frisco, Plano & Garland. Roomy SUVs & <a href="/services/luxury-van-rental-dallas-texas/" class="internal-links">luxury vans</a> are
                        available for passengers & luggage. Experienced chauffeurs plan
                        each trip. They choose the best routes & avoid traffic delays.
                        Whether for university events, corporate visits, or family
                        trips, our Dallas–College Station limo service gives smooth,
                        enjoyable rides & on-time arrivals.
                    </p>
                    <p class="pt-section-description">
                        Reserve your group ride now & enjoy stress-free travel with our
                        expert chauffeurs.
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
                        src="/images/img/dallas-airport-transfer-service.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why choose us for Dallas to College Station Car Service
                    </h5>

                    <p>
                        Traveling between Dallas & College Station is simple &
                        stress-free with our reliable <a href="/services/city-to-city-rides/" class="internal-links">city-to-city car service</a>. Whether
                        you’re heading to Texas A&amp;M University for a campus visit,
                        attending a game at Kyle Field, or traveling for business, our
                        private rides ensure comfort & convenience every step of the
                        way.
                    </p>

                    <ul>
                        <li>
                            <strong>Expert Chauffeurs: </strong>Professional drivers who
                            know the Dallas–College Station route well.
                        </li>
                        <li>
                            <strong>Direct Door-to-Door Service: </strong>Avoid the hassle
                            of multiple transfers or unreliable options.
                        </li>
                        <li>
                            <strong>Comfortable Vehicles: </strong>Spacious,
                            well-maintained cars ideal for individuals, families, &
                            groups.
                        </li>
                        <li>
                            <strong>Flexible Departures: </strong>Choose your pickup time
                            to match your schedule.
                        </li>
                        <li>
                            <strong>Clear Pricing: </strong>No surprises, just
                            straightforward, upfront rates.
                        </li>
                        <li>
                            <strong>Onboard Comforts: </strong>Enjoy Wi-Fi, phone
                            chargers, & complimentary bottled water.
                        </li>
                        <li>
                            <strong>Safe & Dependable: </strong>Travel with confidence
                            knowing every detail is taken care of.
                        </li>
                    </ul>

                    <p>
                        With our Dallas to/from College Station service, your journey is
                        smooth, comfortable & efficient, perfect for students,
                        professionals, & Aggie fans alike.
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
                                                <bold>— Olivia R.</bold> Dallas, TX
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
