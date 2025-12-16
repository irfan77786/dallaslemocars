@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Private Car Service in Dallas"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Private Car Service in Dallas</h1>
                            <p>
                                Experience comfort, reliability, & style with our professional
                                private car service. Whether you need transportation for
                                business, leisure, or special occasions, our luxury sedans,
                                SUVs, & executive vehicles are available _24/7. With licensed
                                chauffeurs & punctual pickups, we make every trip seamless. Book
                                your Dallas private car service today for a stress-free travel
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
                    <h2>Private Car Service in Dallas</h2>
                    <p>
                        Experience comfort, reliability, & style with our professional
                        private car service. Whether you need transportation for
                        business, leisure, or special occasions, our luxury sedans,
                        SUVs, & executive vehicles are available _24/7. With licensed
                        chauffeurs & punctual pickups, we make every trip seamless. Book
                        your Dallas private car service today for a stress-free travel
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
                        <h2>Dallas Limo And Black Cars Service – Luxury Fleet for Private Car Service</h2>
                        <p>
                         <a href="https://dallaslimoandblackcars.com/" class="internal-links">Dallas Limo And Black Cars Service</a> – Luxury Fleet for Private Car Service
Enjoy discretion, privacy, and comfort with our private car service Dallas, designed for individuals, families, and executives.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans:</strong>
                       Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for smooth, quiet rides.
                    </p>

                      <p>
                        <strong class="strong-c-color">Luxury SUVs:</strong>
                        Escalade ESV, Suburban, Yukon XL, and Navigator for group or family private transfers.
                    </p>


                       <p>
                        <strong class="strong-c-color">Executive Sprinter Vans:</strong>
                        Mercedes-Benz Sprinters for private group rides, events, or leisure trips.
                    </p>


                       <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus :</strong>
                   A stylish solution for medium groups seeking private transportation.

                    </p>


                       <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers):</strong>
                        Full-scale private travel for large groups, tours, or sports organizations.
                    </p>
                    <p class="tagline-bottom">Book our Dallas private car service for safe, reliable, and personalized travel.</p>
                    <img
                        src="/images/img/airport-limo-service-dallas.webp"
                        alt="Dallas Private Car Service Luxury Fleet" />
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
                        Professional Dallas Car Service with Dallas Limo And Black Cars
                    </h5>
                    <p class="pt-section-description">
                        Experience comfort, safety & peace of mind with our Dallas Black
                        Cars Limo private car service. We serve Richardson, Addison,
                        Garland, Carrollton & Lakewood, offering quick, dependable rides
                        to DFW Airport &
                        <a
                            href="/airport/dallas-love-field-black-car-service/"
                            class="internal-links-w">Love Field Airport</a>. Choose a sleek business sedan for executive travel or a
                        spacious luxury SUV for family & group trips. Our chauffeurs are
                        punctual and courteous.
                    </p>
                    <p class="pt-section-description">
                        They focus on making your journey smooth & stress-free. From
                        <a
                            href="/services/dallas-airport-transfers/"
                            class="internal-links-w">airport transfers</a>
                        to business meetings or family travel, we ensure every ride is
                        the best & reliable. We also make it truly comfortable. Book
                        your Dallas car service today. Enjoy professional & worry-free
                        travel.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/images/img/airport-pickup-service-dallas.webp"
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
                    <h5 class="pt-section-titles">Areas We Serve</h5>

                    <p class="pt-section-description">
                        Offering private car service across the Dallas-Fort Worth
                        Metroplex with coverage in:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities with Suburb Areas: </strong>Dallas, Plano,
                            McKinney, Frisco, Allen, Irving, Arlington, Carrollton,
                            Southlake, Lewisville, Denton, Prosper, Celina, Wylie, and
                            Garland.
                        </li>
                        <li>
                            <strong>Airports & Terminals: </strong><a
                                href="/airport/car-service-dallas-fort-worth-international-airport/"
                                class="internal-links">DFW International Airport</a>, Dallas Love Field,
                            <a
                                href="/airport/addison-airport-car-service/"
                                class="internal-links">Addison Airport</a>, McKinney National Airport, Fort Worth Alliance Airport, and
                            VIP FBO Terminals.
                        </li>
                        <li>
                            <strong>Work & Entertainment Hub: </strong><a
                                href="#"
                                class="internal-links">Legacy West (Plano)</a>, The Star District (Frisco), Downtown Dallas, Las Colinas
                            (Irving), Dallas Arts District, and Preston Hollow.
                        </li>
                        <li>
                            <strong>Sports & Event Locations: </strong>AT&T Stadium, Globe
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
                        src="/images/img/dallas-executive-black-car.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Private Car Service
                    </h5>

                    <p class="pt-section-description">
                        When you want comfort, privacy, & reliability, our private car
                        service is the perfect solution. Whether it’s for daily travel,
                        a night out, or a business meeting, we make sure your ride is
                        safe, smooth, & tailored to your needs. Every trip with us is
                        designed to give you peace of mind.
                    </p>

                    <ul>
                        <li>
                            <strong class="strong-c-color"><a
                                    href="/services/chauffeur-service-dallas-texas/"
                                    class="internal-links">Licensed and Professional Drivers</a>: </strong>Skilled chauffeurs who respect your privacy & time.
                        </li>
                        <li>
                            <strong class="strong-c-color">On-Time Pickups: </strong>We
                            value your schedule & make sure you never wait.
                        </li>
                        <li>
                            <strong class="strong-c-color">Transparent, Flat Pricing: </strong>No hidden charges or last-minute surprises.
                        </li>
                        <li>
                            <strong class="strong-c-color">Luxury Vehicles: </strong>Clean, stylish cars that combine comfort & class.
                        </li>
                        <li>
                            <strong class="strong-c-color">Available 24/7: </strong>Ready
                            for you at any hour, day, or night.
                        </li>
                        <li>
                            <strong class="strong-c-color">Trusted by Locals and Executives: </strong>A reliable choice for both personal & professional travel.
                        </li>
                        <li>
                            <strong class="strong-c-color">Extra Comforts Included: </strong>Wi-Fi, phone chargers, & bottled water in every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With our
                        <a
                            href="https://dallaslimoandblackcars.com/"
                            class="internal-links">private car service</a>, every journey is comfortable, discreet, & completely
                        worry-free.
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
                                                We tried Dallas Luxury Private Car Service for a
                                                corporate event. All went so well and on time The
                                                car was clean and the driver polite. It was the
                                                sophistication that left me impressed.
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
                                                Our anniversary night was extra special thanks to
                                                the Luxury Private Car Service in Dallas. Classy
                                                ride, comfortable seating, and the driver was very
                                                kind. Would definitely book again for special
                                                occasions.
                                            </p>
                                            <p>
                                                <bold>— Emily J.</bold>, Dallas, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Luxury Private Car Service in Dallas made airport
                                                travel so much easier. No stress, just a peaceful,
                                                stylish ride. The car smelled fresh, and the entire
                                                trip felt first-class. Worth every penny.
                                            </p>
                                            <p>
                                                <bold>— Sarah M. </bold>, Houston, TX
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
