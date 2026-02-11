@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Dallas to Austin Black Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Dallas to Austin Black Car Service</h1>
                            <p>
                                Travel stress-free between Dallas & Austin with our premium
                                private car service. Skip the long drives & enjoy comfort in a
                                luxury sedan, SUV, or executive vehicle with a professional
                                chauffeur. Whether for business or leisure, we provide punctual,
                                smooth & reliable city-to-city rides. Book your Dallas to Austin
                                car service today.
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
                    <h2>Dallas to Austin Black Car Service</h2>
                    <p>
                        Travel stress-free between Dallas & Austin with our premium
                        private car service. Skip the long drives & enjoy comfort in a
                        luxury sedan, SUV, or executive vehicle with a professional
                        chauffeur. Whether for business or leisure, we provide punctual,
                        smooth & reliable city-to-city rides. Book your Dallas to Austin
                        car service today.
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
                            Dallas Limo And Black Cars Service – Luxury Fleet for Dallas to Austin Rides
                        </h2>
                        <p>
                           Traveling between Dallas and Austin? Our fleet delivers long-distance car service that blends comfort, safety, and executive style.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans:</strong> Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class ensure a smooth, private ride for executives or couples.
                    </p>

                      <p>
                        <strong class="strong-c-color"><a href="/our-fleet/" class="internal-links">Luxury SUVs:</a></strong> Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide spacious seating for families, business teams, or travelers with luggage.
                    </p>


                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans:</strong> Mercedes-Benz Sprinters are ideal for corporate groups, wedding parties, or leisure travelers making the Dallas–Austin trip.
                    </p>


                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus:</strong> The smart choice for medium-to-large groups attending conventions, concerts, or sporting events in Austin.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers):</strong> A premium option for universities, sports teams, or large delegations traveling between Dallas and Austin.
                    </p>


                    <p class="tagline-bottom">Choose our Dallas to Austin car service for reliability, luxury, and a stress-free journey.</p>


                    <img
                        src="/images/img/airport-limo-service-dallas.webp"
                        alt="Dallas to Austin luxury black car service" />
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
                        Dallas to Austin Limo Service Comfortable Long-Distance Travel
                    </h5>
                    <p class="pt-section-description"></p>
                    <p class="pt-section-description">
                        Travel from Dallas to Austin in style & comfort with our private
                        <a href="/services/dfw-limo-service/" class="internal-links-w">long-distance limo service</a>. We serve neighborhoods like Highland
                        Park, Coppell & Addison. We offer sleek luxury sedans for solo
                        travelers. Spacious SUVs are perfect for groups. Our pro
                        chauffeurs handle navigation, traffic & luggage. You can relax,
                        work, or enjoy the ride. Every trip is planned to ensure on-time
                        arrivals. Business meetings, special events, or personal
                        travel—we cover it all. Vehicles are clean & well-maintained.
                        Attentive service makes our Dallas–Austin limo service safe,
                        comfy & stylish. Enjoy a seamless long-distance journey every
                        time.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/images/img/airport-pickup-service-dallas.webp"
                        width="522"
                        height="564"
                        alt="Chauffeur-driven black sedan on Dallas to Austin route" />
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
                        src="/img/chauffeur-service-dallas-to-austin.webp"
                        alt="Private black car transfer from Dallas to Austin" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Reliable Group Limo Service from Dallas to Austin
                    </h5>

                    <p class="pt-section-description">
                        Traveling with family, friends, or colleagues? Our Dallas–Austin
                        limo service has roomy SUVs & luxury vans. Plenty of space for
                        passengers & luggage. We serve areas like University Park,
                        Farmers Branch & Irving. <a href="/services/chauffeur-service-dallas-texas/" class="internal-links">Professional chauffeurs</a> guarantee
                        smooth rides, on-time departures & stress-free trips. Perfect
                        for corporate trips, weekend getaways, or group events. Arrive
                        refreshed & ready. Long-distance travel doesn’t have to be
                        tiring.
                    </p>
                    <p class="pt-section-description">
                        Our Dallas to Austin limo service gives luxurious, reliable &
                        enjoyable rides every time.
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
                    alt="Executive luxury car for Dallas to Austin trip" />

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
                        src="/img/sprinter-van-rental-dallas.webp"
                        alt="Professional chauffeur service from Dallas to Austin" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Your Dallas to Austin Ride
                    </h5>

                    <p class="pt-section-description">
                        Traveling between Dallas & Austin has never been easier. Our
                        premium <a href="/services/city-to-city-rides/" class="internal-links">city-to-city car service</a> offers a comfortable,
                        stress-free way to make the journey, whether you’re heading
                        south for business, a weekend getaway, or to catch a big event
                        in the Texas capital. We make the drive seamless, so you can sit
                        back & relax.
                    </p>
                    <ul>
                        <li>
                            <strong>Professional Chauffeurs: </strong>Experienced drivers
                            who know the Dallas–Austin route inside and out.
                        </li>
                        <li>
                            <strong>Door-to-Door Service: </strong>Skip the hassle of
                            airports, delays, & long lines.
                        </li>
                        <li>
                            <strong>Comfortable Fleet: </strong>Spacious, clean & stylish
                            vehicles for solo travelers, families, or groups.
                        </li>
                        <li>
                            <strong>Flexible Scheduling: </strong>Choose your departure
                            time to fit your agenda.
                        </li>
                        <li>
                            <strong>Transparent Pricing: </strong>No hidden fees, just
                            clear, upfront rates.
                        </li>
                        <li>
                            <strong>Wi-Fi and Amenities: </strong>Stay connected with
                            complimentary Wi-Fi, chargers, & bottled water.
                        </li>
                        <li>
                            <strong>Safe and Reliable: </strong>Focus on your plans while
                            we handle the road.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With our Dallas to Austin service, the trip is no longer a
                        chore; it’s part of the experience.
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
                                                I am used to traveling with the best facilities and
                                                services, and received just that with this service.
                                                The car was also super clean & big, an SUV, a
                                                Cadillac Escalade ESV. My delayed flight was no
                                                issue — pickup adjusted automatically. Smooth ride,
                                                great experience. Perfect for executive travel.
                                            </p>
                                            <p>
                                                <bold>— David L.</bold> Chicago
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                The Black Car Service was prompt, professional, and
                                                smooth. The Cadillac Escalade ESV had plenty of
                                                space for luggage. Despite my flight delay, the
                                                driver adjusted the pickup without any call. Ideal
                                                for executives — highly recommended.
                                            </p>
                                            <p>
                                                <bold>— Emily Ross</bold>, Plano
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                This black car service helped me avoid downtown
                                                parking stress. The Cadillac Escalade ESV had a
                                                premium interior and extra luggage space. The ride
                                                was seamless and professional—excellent service for
                                                corporate needs. I was delighted.
                                            </p>
                                            <p>
                                                <bold>— Mark R. Senior Operations Manager</bold>,
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
