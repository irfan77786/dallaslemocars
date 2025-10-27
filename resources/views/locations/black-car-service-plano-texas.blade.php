@extends('app')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Black Car Service Plano"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Black Car Service Plano</h1>
                            <p>
                                Discover a smarter way to travel in Plano with our luxury car
                                service. Perfect for business meetings, evenings out, or airport
                                connections, we combine style with convenience. Our professional
                                chauffeurs ensure a smooth, timely ride in premium vehicles.
                                Upgrade your Plano transportation experience: Reserve your
                                private black car today
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
                    <h2>Black Car Service Plano</h2>
                    <p>
                        Discover a smarter way to travel in Plano with our luxury car
                        service. Perfect for business meetings, evenings out, or airport
                        connections, we combine style with convenience. Our professional
                        chauffeurs ensure a smooth, timely ride in premium vehicles.
                        Upgrade your Plano transportation experience: Reserve your
                        private black car today
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
                        <h2>
                            Dallas Black Cars Limo Service – Luxury Fleet Serving Plano
                        </h2>
                        <p>
                        From corporate headquarters to DFW transfers, our Plano fleet is built for executives, families, and groups alike.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans:</strong>  Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for discreet, private car service Plano.

                    </p>
               
               
                             <p>
                        <strong class="strong-c-color">Luxury SUVs:</strong> Escalade ESV, Suburban, Yukon XL, and Navigator for airport rides, corporate meetings, or family travel.
                    </p>
                    
                           <p>
                        <strong class="strong-c-color">Executive Sprinter Vans:</strong> Mercedes-Benz Sprinters for team travel, weddings, or executive transportation.
                    </p>
                    
                           <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus:</strong> Perfect for community events, conventions, or small corporate shuttles.
                    </p>
                           <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers):</strong> Large-scale travel solutions for Plano businesses, schools, or group tours.
                    </p>
                    
                    
               <p class="tagline-bottom">Trust our Plano black car service for premium comfort, safety, and seamless travel.</p>
               

                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="Black Car Service Plano luxury sedan for business travel" />
                </div>
                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Plano – Book Now</a>
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
                        Luxurious Travel Around Plano
                    </h5>
                    <p class="pt-section-description">
                        Experience first-class comfort & style with our
                        <a href="/services/dfw-limo-service/" class="internal-links-w">Plano limo service</a>. We serve areas like West Plano, Legacy & Prestonwood. We
                        offer sleek business sedans for executives.
                    </p>
                    <p class="pt-section-description">
                        Roomy luxury SUVs are great for families or groups. Going to DFW
                        Airport,
                        <a
                            href="/airport/car-service-dallas-fort-worth-international-airport/"
                            class="internal-links-w">Love Field</a>, corporate events, or social occasions? Our pro chauffeurs
                        ensure smooth & stress-free rides. Every
                        <a href="/our-fleet/" class="internal-links-w">vehicle is well-maintained</a>
                        for safety, comfort & elegance. From weddings to business
                        meetings, our Plano luxury transport lets you relax & enjoy the
                        ride. Every trip is seamless, stylish & made just for you.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/images/img/dallas-executive-black-car.webp"
                        width="522"
                        height="564"
                        alt="Plano airport car service to DFW and Love Field" />
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
                        src="/img/love-field-airport-ride-luxury.webp"
                        alt="Professional chauffeurs providing Black Car Service Plano" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Airport & Corporate Transfers
                    </h5>

                    <p class="pt-section-description">
                        Our Plano airport limo & corporate car service gives reliable,
                        efficient & stylish rides. We serve
                        <a
                            href="/services/executive-shuttle-services-dallas-texas/"
                            class="internal-links">business travelers & groups</a>
                        in areas like The Shops at Legacy, McDermott & Plano East.
                        Luxury sedans are for solo trips. Spacious SUVs work for groups.
                        Pro chauffeurs handle traffic, routes & luggage. We make sure
                        you arrive on time at DFW Airport, Love Field, or corporate
                        appointments.
                    </p>

                    <p class="pt-section-description">
                        With a focus on professionalism, comfort & style, our executive
                        car service in Plano ensures a travel experience made for
                        convenience & luxury.
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
            <div class="col-md-12">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title">
                        Areas We Serve to/from Plano, TX
                    </h5>

                    <p>
                        Providing reliable transportation services in Plano & throughout
                        the Dallas-Fort Worth Metroplex, covering:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities & Surrounding Neighborhoods</strong> We serve
                            Plano, Allen, Frisco, McKinney, Richardson, Garland, Murphy,
                            Wylie & Sachse. Our coverage also extends to Little Elm, The
                            Colony, Prosper, Celina, Dallas & Carrollton.
                        </li>
                        <li>
                            <strong>Airports & Flight Terminals</strong> DFW International
                            Airport, Dallas Love Field, Addison Airport, McKinney National
                            Airport, Fort Worth Alliance Airport, and
                            <a
                                href="/airport/waco-regional-airport/"
                                class="internal-links-w">Private FBO Terminals</a>.
                        </li>
                        <li>
                            <strong>Corporate & Lifestyle Districts</strong> Legacy West
                            (Plano), Downtown Dallas, The Star District (Frisco), Las
                            Colinas (Irving), Uptown Dallas, and Dallas Arts District.
                        </li>
                        <li>
                            <strong>Sports & Event Venues</strong> AT&T Stadium, Globe
                            Life Field, American Airlines Center, Toyota Stadium, PGA
                            Frisco, and Toyota Music Factory.
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>
<div id="bottomServices-defcitiy icon-h-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/booking.webp"
                            alt="Luxury SUV service Plano for families and groups
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
                    <img src="/img/sprinter-van-rental-dallas.webp" width="522" height="564" alt="Reliable black car service near Dallas">
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Plano Transportation
                    </h5>

                    <p class="pt-section-description">
                        When it comes to getting around Plano, you need a service that
                        blends reliability, comfort, & professionalism. Whether you’re
                        heading to the airport, a
                        <a
                            href="/services/dallas-corporate-transportation/"
                            class="internal-links">business meeting</a>, or enjoying a night out in town, we deliver a transportation
                        experience that’s tailored to your lifestyle.
                    </p>

                    <ul>
                        <li>
                            <strong>Expert Chauffeurs: </strong>Skilled drivers familiar
                            with Plano & nearby areas.
                        </li>
                        <li>
                            <strong>On-Time Service: </strong>We value your time with
                            punctual pickups & drop-offs.
                        </li>
                        <li>
                            <strong>Transparent Pricing: </strong>Flat, upfront rates
                            without hidden fees or surprises.
                        </li>
                        <li>
                            <strong>Premium Fleet: </strong>Clean, comfortable, & stylish
                            vehicles for any occasion.
                        </li>
                        <li>
                            <strong>Round-the-Clock Rides: </strong>Available 24/7 to fit
                            your schedule.
                        </li>
                        <li>
                            <strong>Trusted by Many: </strong>A reliable choice for
                            professionals, families, & visitors.
                        </li>
                        <li>
                            <strong>Added Amenities: </strong>Complimentary Wi-Fi, phone
                            chargers, & bottled water for your convenience.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With us, traveling in Plano is more than just reaching your
                        destination; it’s about enjoying a
                        <a style="cursor: pointer;" class="quick-book-link internal-links">seamless, safe, & dependable journey</a>
                        every single time.
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
                                                I have used Black Car Service Plano a few times and
                                                have always had them arrive on time and have
                                                provided clean, comfortable cars with friendly and
                                                professional drivers.
                                            </p>
                                            <p>
                                                <bold>— Lauren D.</bold> Plano, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                My whole experience with Black Car Service Plano was
                                                great from the time I booked to the driver knowing
                                                the fastest route. They provided a very dependable
                                                service.
                                            </p>
                                            <p>
                                                <bold>— Katherine R.</bold> Plano, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Black Car Service Plano is my first choice for any
                                                of my business trips. They keep the cars spotless
                                                and always provide great service. I highly recommend
                                                Black Car Service Plano.
                                            </p>
                                            <p>
                                                <bold>— Danielle P.</bold> Plano, TX
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