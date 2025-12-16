@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "City to City Rides"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>City to City Rides</h1>
                            <p>
                                Enjoy smooth, private travel between Dallas & surrounding cities
                                with our luxury black car service. Whether youre heading to Fort
                                Worth, Austin, Houston, or beyond, our professional chauffeurs
                                provide reliable, comfortable & timely transportation. Skip the
                                hassle of flights or rentals. Book your city-to-city ride today
                                and experience first-class service from door to door.
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
                    <h2>City to City Rides</h2>
                    <p>
                        Enjoy smooth, private travel between Dallas & surrounding cities
                        with our luxury black car service. Whether youre heading to Fort
                        Worth, Austin, Houston, or beyond, our professional chauffeurs
                        provide reliable, comfortable & timely transportation. Skip the
                        hassle of flights or rentals. Book your city-to-city ride today
                        and experience first-class service from door to door.
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
                        <h2>Dallas Limo And Black Cars Service – Luxury Fleet for City-to-City Travel</h2>
                        <p>
                            Traveling between Dallas and nearby cities like Austin, Waco, or College Station?
                            Our fleet offers the perfect balance of comfort, style, and long-distance reliability.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans –</strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for private and executive city-to-city rides.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs –</strong>
                        Escalade ESV, Suburban, Yukon XL, and Navigator deliver spacious seating for families, executives, and groups.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans –</strong>
                        Mercedes-Benz Sprinters provide group transfers for business, leisure, or wedding trips.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
                        Perfect for medium-sized groups attending conventions, sporting events, or retreats.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
                        Designed for long-distance travel with larger groups, universities, and sports teams.
                    </p>



<p class="tagline-bottom"> Book city-to-city car service Dallas for a safe, stress-free journey across Texas.</p>



                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="City-to-City Dallas Limo And Black Cars Luxury Fleet" />
                </div>


                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Dallas – Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us city-pages special-w">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title">Areas We Serve</h5>
                    <p class="pt-section-description">
                        Offering reliable city-to-city rides across the Dallas-Fort
                        Worth Metroplex & beyond, connecting major destinations:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities & Neighboring Towns: </strong>We proudly serve
                            Dallas, Denton, Lewisville, The Colony, Little Elm, Prosper,
                            and Celina. Our services also extend to Garland, Mesquite,
                            Rowlett, Murphy, Sachse, Allen, McKinney, and
                            <a
                                href="/locations/black-car-service-plano-texas/"
                                class="internal-links-w">Plano</a>.
                        </li>
                        <li>
                            <strong>Airports & Terminals: </strong><a
                                href="/airport/car-service-dallas-fort-worth-international-airport/"
                                class="internal-links-w">DFW International Airport</a>, Dallas Love Field, Addison Airport, McKinney National
                            Airport, Fort Worth Alliance Airport, and Private FBO
                            Terminals.
                        </li>
                        <li>
                            <strong>Business & Lifestyle Hubs: </strong>Downtown Dallas,
                            Legacy West (Plano), The Star (Frisco), Bishop Arts District,
                            Sundance Square (Fort Worth), and Dallas Design District.
                        </li>
                        <li>
                            <strong>Sports & Event Venues: </strong>AT&T Stadium, Toyota
                            Stadium, American Airlines Center, Cotton Bowl Stadium, Globe
                            Life Field, and Toyota Music Factory.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/about-dallas-black-cars-limo-service.webp"
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
                        src="/image/affordable-luxury-dfw-car-service-to-airport.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Long-Distance Car Service, the Better Between Cities
                    </h5>

                    <p class="pt-section-description">
                        If youre traveling long distances from city to city, we are the
                        car service that delivers both convenience & comfort. We provide
                        full-service long-distance transportation in Frisco, Allen,
                        Plano, and McKinney, as well as to
                        <a
                            href="/airport/car-service-dallas-fort-worth-international-airport/"
                            class="internal-links">DFW Airport</a>
                        & Love Field Airport. Our business sedans are ideal for business
                        travel, while our
                        <a href="/our-fleet/" class="internal-links">luxury SUVs</a> are
                        great for families & groups needing more room. Each trip is
                        scheduled to ensure you reach your destination on time, whether
                        its for a flight, a meeting, or personal travel. Let us take the
                        wheel for your long trips so you can sit back, relax, & enjoy a
                        seamless ride.
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
                        src="/assets/images/professional-chauffeur-service.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for City-to-City Rides
                    </h5>

                    <p class="pt-section-description">
                        Traveling between cities should be easy, comfortable &
                        stress-free. Our city-to-city rides are designed for business
                        travelers, families, & anyone who wants a reliable alternative
                        to flights, buses, or driving themselves. We make the journey
                        just as enjoyable as the destination.
                    </p>

                    <ul>
                        <li>
                            <strong class="strong-c-color">Professional Chauffeurs: </strong>Experienced drivers who value safety and courtesy.
                        </li>
                        <li>
                            <strong class="strong-c-color">On-Time, Every Time: </strong>Reliable pickups & drop-offs to keep your schedule on track.
                        </li>
                        <li>
                            <strong class="strong-c-color">Clear, Flat Rates: </strong>No
                            hidden charges just fair, upfront pricing.
                        </li>
                        <li>
                            <strong class="strong-c-color">Luxury Fleet Options: </strong>Clean, stylish vehicles with plenty of comfort & luggage
                            space.
                        </li>
                        <li>
                            <strong class="strong-c-color">Available 24/7: </strong>Day or
                            night, we’re ready to take you where you need to go.
                        </li>
                        <li>
                            <strong class="strong-c-color">Trusted by Families & Executives: </strong>The top choice for personal & professional travel.
                        </li>
                        <li>
                            <strong class="strong-c-color">Complimentary Comforts: </strong>Wi-Fi, chargers, and bottled water included in every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With us, your city-to-city ride is smooth, private, & always
                        reliable, no matter the distance.
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
                                                <bold>“Corporate Business Travel from DFW
                                                    Airport”</bold><br />
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummyLorem Ipsum is simply dummy
                                                text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's standard dummy, Lorem
                                                Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy
                                            </p>
                                            <p>
                                                <bold>— David L.,</bold> Chicago
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                <bold>“Executive Assistant Booking for a CEO in
                                                    Plano”</bold><br />
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummyLorem Ipsum is simply dummy
                                                text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's standard dummy
                                            </p>
                                            <p>
                                                <bold>— Emily T., Executive Assistant</bold>, Plano
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                <bold>“FBO Pickup and Executive Transportation”</bold><br />
                                                Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummyLorem Ipsum is simply dummy
                                                text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's standard dummyLorem
                                                Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummyLorem Ipsum is simply dummy
                                                text of the printing and typesetting industry. Lorem
                                                Ipsum has been the industry's standard dummy
                                            </p>
                                            <p>
                                                <bold>— Mark R., Senior Operations Manager</bold>,
                                                Fort Worth
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
