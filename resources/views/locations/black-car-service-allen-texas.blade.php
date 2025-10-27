@extends('app')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Black Car Service Allen"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Black Car Service Allen</h1>
                            <p>
                                Travel in comfort with our professional black car service in
                                Allen. Whether you need airport transfers, corporate travel, or
                                luxury rides for a special event, our fleet of sedans, SUVs &
                                executive vehicles is at your service. With licensed chauffeurs
                                & reliable pickups, we deliver stress-free transportation. Book
                                your Allen car service today for comfort & style.
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
                    <h2>Black Car Service Allen</h2>
                    <p>
                        Travel in comfort with our professional black car service in
                        Allen. Whether you need airport transfers, corporate travel, or
                        luxury rides for a special event, our fleet of sedans, SUVs &
                        executive vehicles is at your service. With licensed chauffeurs
                        & reliable pickups, we deliver stress-free transportation. Book
                        your Allen car service today for comfort & style.
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
                        <h2>Dallas Black Cars Limo Service – Serving Allen, TX with Luxury Transportation</h2>
                        <p>
                            Our Allen fleet connects you seamlessly to DFW, Love Field, and Dallas corporate hubs, ensuring style and safety.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans: </strong>Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for executive transfers or private travel.
                    </p>
                    
                    
                      <p>
                        <strong class="strong-c-color">Luxury SUVs : </strong>Escalade ESV, Suburban, Yukon XL, and Navigator for families, groups, or corporate riders.
                    </p>
                    
                    
                      <p>
                        <strong class="strong-c-color">Executive Sprinter Vans: </strong>Mercedes-Benz Sprinters ideal for weddings, sports groups, or corporate meetings in Allen.
                    </p>
                    
                    
                      <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus: </strong>Great for airport shuttles, conferences, and community events. 
                    </p>
                    
                     <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers): </strong>Allen’s choice for larger group trips, sports travel, and conventions.
                    </p>
                    
                    
                    
                    <p class="tagline-bottom">Book our Allen limo service for reliable, luxury group transportation backed by professional chauffeurs.</p>
              
                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="Black Car Service Allen luxury sedan for business travel" />
                </div>
                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Allen – Book Now</a>
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
                    <h5 class="pt-section-title">Elegant Travel Around Allen</h5>
                    <p class="pt-section-description">
                        Our Allen limo service makes every ride comfy, stylish &
                        stress-free. Whether going to
                        <a
                            href="/airport/car-service-dallas-fort-worth-international-airport/"
                            class="internal-links-w">DFW Airport</a>, Love Field, or local events, our pro chauffeurs ensure timely
                        pickups & smooth routes. We serve surrounding areas like
                        Fairview, McKinney & Parker. Luxury sedans are for solo
                        travelers. Spacious SUVs are for families or groups. Each
                        vehicle is clean & well-maintained. Drivers are trained pros who
                        care about safety & comfort.
                    </p>
                    <p class="pt-section-description">
                        From corporate meetings to weddings or special nights out, our
                        <a
                            href="/services/dfw-limo-service/"
                            class="internal-links-w">Allen limousine service</a>
                        ensures you arrive in style. You stay relaxed & ready to enjoy
                        your day or event without worrying about transport.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/luxury-van-rental-dallas-texas.webp"
                        width="522"
                        height="564"
                        alt="Allen airport car service to DFW and Love Field" />
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
                        src="/img/premium-van-rental-dallas-texas.webp"
                        alt="Professional chauffeurs providing Black Car Service Allen" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Reliable Limo Service for Special Occasions
                    </h5>

                    <p class="pt-section-description">
                        Whether it's a birthday, prom, wedding, or
                        <a
                            href="/services/dallas-corporate-transportation/"
                            class="internal-links">corporate event in Allen</a>, our limo service adds elegance to every trip. We serve areas
                        like Wylie, Melissa & Lucas. We offer sleek sedans for
                        executives &
                        <a
                            href="/services/luxury-van-rental-dallas-texas/"
                            class="internal-links">roomy SUVs for groups</a>. Pro chauffeurs plan each ride carefully. They make sure you
                        arrive on time & travel stress-free. Families & business
                        travelers can relax knowing their trip is safe, comfy & smooth.
                        We take care of every detail—from luggage help to the fastest
                        routes. Our Allen car service gives a premium travel experience.
                        It combines convenience, luxury & reliability for every trip.
                    </p>
                    <p class="pt-section-description">
                        Book your Allen limo today & enjoy a smooth, stylish &
                        unforgettable ride for every occasion!
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

<section class="about-us city-pages special-w">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title">
                        Why Choose Us for Allen Transportation
                    </h5>
                    <p class="pt-section-description">
                        Getting around Allen should be simple, reliable, & stress-free,
                        & that’s exactly what we provide. Whether you’re traveling to
                        the airport, heading to a
                        <a
                            href="/services/dallas-corporate-transportation/"
                            class="internal-links-w">business meeting</a>, or planning a special night out, we make every ride smooth,
                        safe, & comfortable.
                    </p>

                    <ul>
                        <li>
                            <strong><a
                                    href="/services/chauffeur-service-dallas-texas/"
                                    class="internal-links-w">Professional Chauffeurs:</a> </strong>Skilled, licensed drivers who know Allen and nearby areas
                            well.
                        </li>
                        <li>
                            <strong>On-Time, Every Time: </strong>Punctual pickups &
                            drop-offs to keep you on schedule.
                        </li>
                        <li>
                            <strong>Flat, Honest Pricing: </strong>No surge rates or
                            hidden costs, just clear fares.
                        </li>
                        <li>
                            <strong>Luxury Vehicles: </strong>Clean, stylish cars with
                            plenty of comfort & luggage space.
                        </li>
                        <li>
                            <strong>Available 24/7: </strong>Day or night, we’re always
                            ready to serve Allen travelers.
                        </li>
                        <li>
                            <strong>Trusted by Families and Executives: </strong>The
                            preferred choice for both personal & business trips.
                        </li>
                        <li>
                            <strong>Complimentary Perks: </strong>Wi-Fi, chargers &
                            bottled water included with every ride.
                        </li>
                    </ul>
                    <p class="pt-section-description">
                        With us, transportation in and around Allen is dependable,
                        comfortable & designed around your needs.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pt-chauffeur-1">
                    <img
                        src="/image/affordable-luxury-dfw-car-service-to-airport.webp"
                        alt="Premier Black Car Service"
                        width="403"
                        height="233" />
                </div>
            </div>
        </div>
    </div>
</section>
<div id="bottomServices-defcitiy icon-h-page airport-pages-icon">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/booking.webp"
                            alt="Luxury SUV for families and group travel in Allen" />
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
                        src="/img/airport-car-service.webp"
                        alt="Premier Black Car Service"
                        width="403"
                        height="233" />
                </div>
            </div>
            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Affordable Black Car Chauffeur Service Allen
                    </h5>

                    <p>
                        Offering premium transportation solutions in Allen & across the
                        Dallas-Fort Worth Metroplex with service to:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities & Local Communities: </strong>We serve Allen,
                            Plano, McKinney, Fairview, Lucas, Parker, Wylie, and Murphy.
                            Our services also extend to Sachse, Rowlett, Richardson,
                            Garland, Frisco, Prosper, and Celina.
                        </li>
                        <li>
                            <strong>Airports Nearby: </strong>DFW International Airport,
                            <a
                                href="/airport/dallas-love-field-black-car-service/"
                                class="internal-links">Dallas Love Field</a>, Addison Airport, McKinney National Airport, Fort Worth
                            Alliance Airport, and Private Jet Terminals.
                        </li>
                        <li>
                            <strong>Business & Lifestyle Districts: </strong>Watters Creek
                            (Allen), Legacy West (Plano), The Star (Frisco), Downtown
                            Dallas, Granite Park (Plano), and Dallas Arts District.
                        </li>
                        <li>
                            <strong>Sports and Event Venues: </strong>Eagle Stadium
                            (Allen), American Airlines Center, AT&amp;T Stadium, Toyota
                            Stadium, Globe Life Field, and Toyota Music Factory.
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
                                                I used Black Car Service Allen for a business trip,
                                                and it was fantastic. The driver was on time,
                                                professional, and personable. The car was very
                                                clean, so it was a relaxing, comfortable ride for
                                                him.
                                            </p>
                                            <p>
                                                <bold>— Michael K.</bold> Allen, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Black Car Service Allen made effortless work of the
                                                airport transfer effortless! The booking process was
                                                seamless, the driver got there incredibly early, and
                                                we just went to the airport without a care.
                                            </p>
                                            <p>
                                                <bold>— Laura P.</bold> Allen, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Travelling with Black Car Service Allen was a
                                                pleasure. The vehicle was full of luxury, the driver
                                                was quite courteous, and everything was time-bound.
                                                Allen is somewhere I will recommend to friends and
                                                family all over.
                                            </p>
                                            <p>
                                                <bold>— Daniel W.</bold> Allen, TX
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