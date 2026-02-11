@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Dallas to Tyler Black Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Private Car Transfers Dallas to Tyler TX</h1>
                            <p>
                                Experience a smooth & reliable ride from Dallas to Tyler with
                                our premium black car service. Ideal for business meetings,
                                family visits, or weekend getaways, our luxury sedans & SUVs
                                ensure comfort & style. With professional chauffeurs and on-time
                                service, book your Dallas to Tyler transportation today for a
                                hassle-free travel experience.
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
                    <h2>Private Car Transfers Dallas to Tyler TX</h2>
                    <p>
                        Experience a smooth & reliable ride from Dallas to Tyler with
                        our premium black car service. Ideal for business meetings,
                        family visits, or weekend getaways, our luxury sedans & SUVs
                        ensure comfort & style. With professional chauffeurs and on-time
                        service, book your Dallas to Tyler transportation today for a
                        hassle-free travel experience.
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
                        <h2>Dallas Limo And Black Cars Service – Fleet for Dallas to Tyler Rides</h2>
                        <p>
                            Travel in comfort on your Dallas to Tyler journey with our versatile fleet, designed for executives, families, and groups.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans –</strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for private, chauffeur-driven rides.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs –</strong>
                        Escalade, Suburban, and Yukon XL for spacious family and business transfers.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans –</strong>
                        Mercedes-Benz Sprinters provide group transportation for weddings, retreats, or team travel to Tyler.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
                        Ideal for mid-size groups traveling to conventions, concerts, or family gatherings.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
                        Designed for larger groups including school trips, sports teams, or conventions.
                    </p>



<p class="tagline-bottom">Our Dallas to Tyler long-distance car service guarantees professional chauffeurs and luxury comfort every mile.</p>


                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="Dallas to Tyler car service luxury black car" />
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
                        Comfortable Dallas to Tyler Travel
                    </h5>
                    <p class="pt-section-description">
                        Travel from Dallas to Tyler in style with our <a href="/services/dfw-limo-service/" class="internal-links-w">Dallas–Tyler limo
                            service</a>. Every ride is smooth & stress-free. We serve areas like
                        Irving, Mesquite & Carrollton. Luxury sedans are for solo
                        travelers. Spacious SUVs are for groups. Our professional
                        chauffeurs handle traffic, directions & luggage. You can relax,
                        work, or enjoy the ride. Business trips, family travel, or
                        special events—we cover it all.
                    </p>
                    <p class="pt-section-description">
                        Every ride is planned for comfort & convenience. Arrive in Tyler
                        refreshed & on time, ready for your activities.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/dfw-car-service-airport-transfers.webp"
                        width="522"
                        height="564"
                        alt="Private Chauffeur Car Transfer from Dallas to Tyler TX" />
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
                        src="/img/luxury-car-service-dallas-to-tyler.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Group & Event Transfers
                    </h5>

                    <p class="pt-section-description">
                        Traveling with family, friends, or colleagues? Our Dallas to
                        Tyler limo service has roomy SUVs & luxury vans. Everyone can
                        ride together comfortably. We serve areas like Highland Park,
                        Addison & University Park. Our chauffeurs manage all
                        details—from routes to luggage. Perfect for corporate events,
                        weddings, or leisure trips.
                    </p>
                    <p class="pt-section-description">
                        We provide safe, reliable & stylish transportation. Comfort,
                        punctuality & satisfaction are our focus. Long-distance travel
                        is easy & enjoyable for all passengers.
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
                    alt="Dallas to Tyler Limo Service for Airport and City Rides" />

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
                            alt="Online Portal" />
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
                            alt="Clear-Cut All-Inclusive Pricing" />
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
                            alt="Expert Chauffeurs" />
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
                        src="/img/premium-van-rental-dallas-texas.webp"
                        alt="Corporate Car Transfer Dallas to Tyler Texas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why choose us for Dallas to Tyler Car Service
                    </h5>

                    <p>
                        Travel between Dallas &amp; Tyler with ease using our
                        professional city-to-city car service. Whether you’re heading
                        east for business, visiting family, or exploring the Rose
                        Capital of America, our <a href="/services/private-car-service-in-dallas-texas/" class="internal-links">private rides</a> guarantee comfort, safety,
                        &amp; convenience throughout your journey.
                    </p>

                    <ul>
                        <li>
                            <strong>Expert Drivers: </strong>Courteous chauffeurs with
                            extensive knowledge of the Dallas–Tyler route.
                        </li>
                        <li>
                            <strong>Direct Transfers: </strong>Non-stop, <a href="/services/airport-transfer-dallas/" class="internal-links">door-to-door
                                service</a> without the hassle of shuttles or multiple stops.
                        </li>
                        <li>
                            <strong>Premium Fleet: </strong>Spacious, modern vehicles
                            suitable for solo travelers or groups.
                        </li>
                        <li>
                            <strong>Flexible Scheduling: </strong>Travel on your own time
                            with customizable pickup options.
                        </li>
                        <li>
                            <strong>Upfront Pricing: </strong>No hidden costs, just
                            reliable, transparent rates.
                        </li>
                        <li>
                            <strong>Onboard Comforts: </strong>Enjoy complimentary water,
                            charging ports, &amp; Wi-Fi in select vehicles.
                        </li>
                        <li>
                            <strong>Safe &amp; Reliable: </strong>Every trip is planned
                            with punctuality and passenger safety in mind.
                        </li>
                    </ul>

                    <p>
                        Our Dallas to/from Tyler service is ideal for commuters,
                        corporate travelers, &amp; families seeking a dependable way to
                        connect between the two cities. Relax &amp; enjoy a smooth ride
                        every time.
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
                        transition-duration: 0.3s;">
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

<div class="wrapper">
    <div class="container">
        <h3 class="text-center">Frequently asked questions</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Do you offer rides from Dallas to Tyler?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. We provide luxury transportation from Dallas to Tyler,
                            Texas, serving Plano, Frisco, McKinney, Allen, Garland,
                            Richardson, &amp; surrounding North Texas suburbs. Our
                            professional, licensed and insured chauffeurs ensure safe,
                            on-time, &amp; comfortable travel for corporate, VIP, or
                            private trips. Book your Dallas to/from Tyler ride today!
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">Can I book a same-day return trip?</div>
                    <div class="answercont">
                        <div class="answer">
                            Absolutely. You can schedule same-day return trips from Dallas
                            to Tyler for maximum convenience. Whether it’s for corporate
                            meetings, executive travel, or VIP events, our team ensures
                            punctual and reliable service every time. Reserve your
                            same-day trip now!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">What vehicle choices are available?</div>
                    <div class="answercont">
                        <div class="answer">
                            <p>
                                Our Dallas to/from Tyler fleet offers a wide range of luxury
                                vehicles to suit every need:
                            </p>
                            <ul>
                                <li>
                                    <strong>Sedans:</strong> Perfect for solo or business
                                    travel
                                </li>
                                <li>
                                    <strong>SUVs:</strong> Ideal for families or small groups
                                </li>
                                <li>
                                    <strong>Vans:</strong> Comfortable for larger groups
                                </li>
                                <li>
                                    <strong>Limousines:</strong> Luxury and style for VIP
                                    events
                                </li>
                            </ul>
                            <p>
                                All vehicles are fully licensed, insured, &amp; equipped
                                with modern amenities like Wi-Fi, climate control, and
                                spacious seating.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Do you provide corporate transfers to Tyler?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. We specialize in Dallas to/from Tyler corporate
                            transfers, covering executive meetings, conferences, and
                            special events. Our service includes Plano, Frisco, McKinney,
                            Allen, Garland, Richardson, &amp; surrounding North Texas
                            areas, ensuring your team travels safely, on time, and in
                            style. Schedule your corporate transfer today!
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">How long does the ride from Dallas to Tyler usually take?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            <p>
                                The drive from Dallas to Tyler typically takes around 1 hour 30 minutes, depending on traffic and pickup location.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Do you provide airport pickup for passengers traveling to Tyler?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Absolutely. We offer DFW and Dallas Love Field airport pickups with direct transfers to Tyler.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


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
