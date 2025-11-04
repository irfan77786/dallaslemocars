@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Waco Regional Airport Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Professional Chauffeur Service – Waco Regional Airport</h1>
                            <p>
                                Travel comfortably to & from Waco Regional Airport with our
                                professional black car service. We provide luxury sedans, SUVs &
                                executive vehicles with licensed chauffeurs for business or
                                leisure trips. Enjoy on-time pickups, luggage assistance, &
                                stress-free rides across Waco, Dallas, & beyond. Book your Waco
                                Regional Airport car service today for reliable, first-class
                                transportation.
                            </p>
                            <p class="bt-text">24/7 Service Available, Click to Call Now!</p>
                            <div class="bottom-banner-btn" bis_skin_checked="1">
                                <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12143058671" bis_skin_checked="1">Call: +1 214-305-8671</a>
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
                    <h2>Professional Chauffeur Service – Waco Regional Airport</h2>
                    <p>
                        Travel comfortably to & from Waco Regional Airport with our
                        professional black car service. We provide luxury sedans, SUVs &
                        executive vehicles with licensed chauffeurs for business or
                        leisure trips. Enjoy on-time pickups, luggage assistance, &
                        stress-free rides across Waco, Dallas, & beyond. Book your Waco
                        Regional Airport car service today for reliable, first-class
                        transportation.
                    </p>
                    <p class="bt-text">24/7 Service – Call Now</p>
                    <div class="bottom-banner-btn" bis_skin_checked="1">
                        <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12143058671" bis_skin_checked="1">Call: +1 214-305-8671</a>
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
                        <h2>Dallas Black Cars Limo Service – Waco Regional (ACT) Shuttle Service</h2>
                        <p>
                            Traveling from Dallas to Waco ACT Airport or in need of group shuttles? Our fleet is built for long-distance comfort and style.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans –</strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class make long-distance travel to and from ACT stress-free.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs –</strong>
                        Escalade, Suburban, and Yukon XL offer spacious seating for corporate or family travelers.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans –</strong>
                        Mercedes-Benz Sprinters provide reliable transport for wedding groups, students, or corporate transfers to Waco.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
                        Perfect for larger groups commuting between Dallas and Waco for events or airport transfers.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
                        The best option for sports teams, conventions, or large group shuttles between ACT and the Dallas–Fort Worth metroplex.
                    </p>

 <p class="tagline-bottom">Our Waco shuttle service delivers safety, reliability, and luxury for every passenger.</p>
                    <img
                        src="/images/img/airport-limo-service-dallas.webp"
                        alt="Waco Regional Airport ACT shuttle service Dallas black car" />
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
                        Easy Transfers from Dallas to Waco
                    </h5>
                    <p class="pt-section-description">
                        Traveling between Dallas & Waco Regional Airport (ACT) is simple
                        with our private car service. We provide smooth & reliable
                        airport transportation for travelers in Plano, Frisco, &
                        McKinney. We ensure timely rides every time. Whether catching a
                        flight or meeting someone at ACT, our pro chauffeurs make the
                        trip hassle-free & comfy. Choose
                        <a href="/our-fleet/" class="internal-links-w">business sedans</a>
                        for solo or executive travel. Or pick luxury SUVs for families &
                        groups with luggage. Drivers know the best routes, so you can
                        relax, enjoy a safe ride & arrive on time.
                    </p>
                    <p class="pt-section-description">
                        <a style="cursor: pointer;" class="quick-book-link internal-links-w">Book your Dallas to Waco transfer today</a>
                        for a seamless travel experience.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/images/img/dallas-airport-shuttle-car.webp"
                        width="522"
                        height="564"
                        alt="Luxury Sedan for Waco Regional Airport Car Service" />
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
                        src="/img/luxury-car-service-waco-regional-airport.webp"
                        alt="Black SUV transfer to Waco Regional Airport ACT" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Areas We Serve to/from Waco Regional Airport
                    </h5>

                    <p>
                        Offering reliable transportation to and from Waco Regional
                        Airport, covering the Dallas-Fort Worth Metroplex:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities & Local Neighborhoods: </strong>We provide
                            service across Dallas,
                            <a
                                href="/locations/black-car-service-plano-texas/"
                                class="internal-links">Plano</a>, Frisco, McKinney, Allen, and Richardson. Our coverage also
                            includes Carrollton, Southlake, Keller, Flower Mound, Murphy,
                            Rowlett, Garland, Prosper, and Grand Prairie.
                        </li>
                        <li>
                            <strong>Airports & Flight Terminals: </strong><a
                                href="/airport/dallas-love-field-black-car-service/"
                                class="internal-links">Dallas Love Field</a>, DFW International Airport,
                            <a
                                href="/airport/addison-airport-car-service/"
                                class="internal-links">Addison Airport</a>, McKinney National Airport, Fort Worth Alliance Airport, and
                            Private Jet Facilities.
                        </li>
                        <li>
                            <strong>Business & Lifestyle Districts: </strong>Legacy West
                            (Plano), The Star District (Frisco), Downtown Dallas, Las
                            Colinas (Irving), Dallas Arts District, and Granite Park
                            (Plano).
                        </li>
                        <li>
                            <strong>Event & Sports Venues: </strong>AT&T Stadium, Globe
                            Life Field, American Airlines Center, Toyota Stadium, Texas
                            Motor Speedway, and Toyota Music Factory.
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

<div id="bottomServices-defcitiy icon-h-page airport-pages-icon">
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
                        src="/img/chauffeur-service-waco-regional-airport.webp"
                        alt="Professional chauffeur driving to Waco Regional Airport" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Waco Regional Airport (ACT) Transfers
                    </h5>

                    <p class="pt-section-description">
                        Traveling through Waco Regional Airport (ACT) should be simple
                        and stress-free. Whether you’re flying for business or leisure,
                        we make sure your
                        <a
                            href="/services/dallas-airport-transfers/"
                            class="internal-links">airport transfer</a>
                        is smooth, reliable, & comfortable from start to finish.
                    </p>

                    <ul>
                        <li>
                            <strong>Professional Chauffeurs: </strong><a
                                href="/services/chauffeur-service-dallas-texas/"
                                class="internal-links">Licensed, courteous drivers</a>
                            who put your safety first.
                        </li>
                        <li>
                            <strong>Always On Time: </strong>Flight monitoring for
                            accurate pickups and drop-offs.
                        </li>
                        <li>
                            <strong>Flat, Fair Rates: </strong>No hidden fees just clear &
                            transparent pricing.
                        </li>
                        <li>
                            <strong>Luxury Vehicles: </strong>Clean, stylish cars with
                            plenty of space for luggage.
                        </li>
                        <li>
                            <strong>24/7 Availability: </strong>Service anytime, day or
                            night, to fit your flight schedule.
                        </li>
                        <li>
                            <strong>Trusted by Travelers and Executives: </strong>The
                            go-to choice for families, VIPs, & business flyers.
                        </li>
                        <li>
                            <strong>Complimentary Perks: </strong>Free Wi-Fi, phone
                            chargers, & bottled water with every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With us, your Waco Regional Airport transfer is dependable,
                        comfortable, & completely stress-free.
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
                                                The airport transfer was seamless thanks to the
                                                Mercedes-Benz S-Class. The flight change last minute
                                                went smoothly. Got just the right look with the
                                                privacy partition, expensive interior trim. Classy,
                                                top-notch, and trouble-free. Recommended for all
                                                executive or private events.
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
                                                The Mercedes-Benz S-Class was ideal for my road show
                                                transfer. Last-minute flight change? Handled
                                                perfectly. The privacy partition ensured client
                                                conversations stayed private. The premium interior
                                                made a strong impression. Seamless, stylish, and
                                                professional. Highly recommend for corporate travel.
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
                                                Timing is key when you're a wedding planner. The
                                                airport transfer was made oh so easy with the
                                                Mercedes-Benz S-Class. Accommodated a last-minute
                                                flight change. The privacy partition and elegant
                                                interior impressed my clients. Extremely satisfied —
                                                highly recommend for professional event travel.
                                            </p>
                                            <p>
                                                <bold>— Emily J.</bold> San Antonio, TX
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
