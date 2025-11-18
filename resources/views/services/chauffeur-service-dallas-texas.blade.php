@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Dallas Chauffeur Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Dallas Chauffeur Service</h1>
                            <p>
                                Enjoy comfort, style, & professionalism with our private
                                chauffeur service. Whether it’s a business trip, special event,
                                or airport transfer, our licensed chauffeurs provide reliable,
                                on-time service across Dallas. Travel in luxury sedans, SUVs, or
                                executive vehicles designed for convenience & safety. Book your
                                Dallas chauffeur service today for a first-class travel
                                experience.
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
                    <h2>Dallas Chauffeur Service</h2>
                    <p>
                        Enjoy comfort, style, & professionalism with our private
                        chauffeur service. Whether it’s a business trip, special event,
                        or airport transfer, our licensed chauffeurs provide reliable,
                        on-time service across Dallas. Travel in luxury sedans, SUVs, or
                        executive vehicles designed for convenience & safety. Book your
                        Dallas chauffeur service today for a first-class travel
                        experience.
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
                        <h2>Dallas Black Cars Limo Service – Professional Chauffeur Fleet</h2>
                        <p>
                            Our chauffeur-driven fleet is the gold standard for
                            <a href="/services/dallas-corporate-transportation/" class="internal-links">corporate limo service Dallas</a>,
                            executive transfers, and VIP transportation. Whether you’re traveling across
                            Plano, <a href="/locations/black-car-service-frisco-texas/" class="internal-links">Frisco</a>, or McKinney,
                            our luxury rides ensure professionalism, comfort, and class.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans –</strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for discreet, executive-style travel.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs –</strong>
                        Escalade ESV, Suburban, Yukon XL, and Navigator with ample room for passengers and luggage.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans –</strong>
                        Mercedes-Benz Sprinters designed for executive meetings on the go or small group travel.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
                        A flexible solution for mid-sized corporate groups, business events, or VIP shuttles.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
                        Premium coaches with reclining seats and Wi-Fi for conferences, seminars, or corporate retreats.
                    </p>



<p class="tagline-bottom">Choose our chauffeur service in Dallas for punctuality, professionalism, and absolute comfort.</p>



                    <img
                        src="/images/img/private-car-service-dallas.webp"
                        alt="Professional chauffeur service Dallas luxury black car fleet" />
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
                        Your Professional Chauffeur Service
                    </h5>
                    <p class="pt-section-description">
                        Our pro chauffeur service makes every ride smooth, reliable &
                        stress-free. Whether you’re traveling from Frisco, Allen,
                        <a
                            href="/locations/black-car-service-plano-texas/"
                            class="internal-links-w">Plano</a>, or McKinney, we provide trusted transfers to/from DFW Airport
                        & Love Field Airport.
                    </p>
                    <p class="pt-section-description">
                        Business travelers can enjoy a polished ride in our Biz Sedan,
                        while people needing more space can pick our
                        <a href="/our-fleet/" class="internal-links-w">Luxury SUV</a>
                        for max comfort & ease. Our skilled drivers handle traffic,
                        navigation & parking so you stay focused on what’s important.
                        With us, your safety & comfort always come first. Book your pro
                        ride today & arrive on time—relaxed & in style.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/love-field-airport-ride-luxury.webp"
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

                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c">Travel in Comfort – Book Now</a>
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
                        src="/img/sprinter-van-rental-dallas.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">Areas We Serve</h5>

                    <p>
                        Providing chauffeur services across the Dallas-Fort Worth
                        Metroplex with access to:
                    </p>
                    <ul>
                        <li>
                            <strong>Local Cities & Neighbourhoods: </strong>Dallas,
                            Frisco, McKinney, Allen, Plano, Garland, Richardson,
                            Carrollton, Denton, Southlake, Keller, Trophy Club,
                            Lewisville, Mesquite, and Wylie, too.
                        </li>
                        <li>
                            <strong>Major Airports: </strong><a
                                href="/airport/car-service-dallas-fort-worth-international-airport/"
                                class="internal-links">DFW International Airport</a>, Dallas Love Field, Addison Airport, McKinney National
                            Airport & Fort Worth Alliance Airport, not to mention Private
                            Jet Facilities.
                        </li>
                        <li>
                            <strong>Corporate & Lifestyle Hubs: </strong>Legacy West
                            (Plano), The Star – Frisco, Downtown Dallas, Las Colinas
                            (Irving), The Dallas Arts District, and Granite Park – Plano.
                        </li>
                        <li>
                            <strong>Event & Sports Venues: </strong>AT&T Stadium, Globe
                            Life Field, American Airlines Center, PGA Frisco, and Toyota
                            Stadium, as well as Texas Motor Speedway.
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
                        src="/images/img/airport-pickup-service-dallas.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Chauffeur Service
                    </h5>

                    <p class="pt-section-description">
                        A private chauffeur is more than a driver—it’s about style,
                        comfort, & peace of mind. Our chauffeur service is designed for
                        clients who want luxury travel with a personal touch. From
                        business trips to special occasions, we make every ride
                        effortless.
                    </p>

                    <ul>
                        <li>
                            <strong class="strong-c-color">Experienced Chauffeurs: </strong>Skilled, licensed, & trained for top-class service.
                        </li>
                        <li>
                            <strong class="strong-c-color">Punctual & Reliable: </strong>We value your time & always arrive on schedule.
                        </li>
                        <li>
                            <strong class="strong-c-color">Transparent Pricing: </strong>No surprises, just fair, flat rates.
                        </li>
                        <li>
                            <strong class="strong-c-color">Luxury Vehicles: </strong>Spotless, stylish, & comfortable cars for any occasion.
                        </li>
                        <li>
                            <strong class="strong-c-color">Available Anytime: </strong>24/7 service to fit your lifestyle & travel plans.
                        </li>
                        <li>
                            <strong class="strong-c-color">Preferred by
                                <a
                                    href="/services/dallas-corporate-transportation/"
                                    class="internal-links">VIPs and Executives</a>: </strong>Trusted by clients who demand excellence.
                        </li>
                        <li>
                            <strong class="strong-c-color">Added Comforts: </strong>Free
                            Wi-Fi, phone chargers, & bottled water on every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With our chauffeur service, every trip is smooth, private, &
                        tailored just for you.
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
                                                It was a magnificent Chauffeur Service in Dallas.
                                                The chauffer was courteous & professional. I felt
                                                comfortable & safe inside neat environment
                                                throughout the ride Neither steam or stress whenever
                                                you decide to go on a trip, DO yourself a favor, use
                                                this service.
                                            </p>
                                            <p>
                                                <bold>— Victoria H.</bold> Dallas, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Tried a few services, and this one in Dallas is
                                                clearly outstanding. The car was so clean and nice,
                                                the driver opened the door and about my
                                                satisfaction. I want to use it more and more!
                                            </p>
                                            <p>
                                                <bold>— Samantha B.</bold> Plano, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                It was the right decision to book a Chauffeur
                                                Service in Dallas for the evening of the
                                                anniversary. A chic car, polite chauffeur, no fuss
                                                during the trip. Thank you for a lovely evening!
                                            </p>
                                            <p>
                                                <bold>— Danielle P.</bold> Dallas, TX
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
