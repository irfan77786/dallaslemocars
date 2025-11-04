@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "FIFA World Cup 2026 Car Service in Dallas"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Dallas Black Car Service for FIFA World Cup 2026</h1>
                            <p>Luxury Transportation for Every Match in Dallas–Fort Worth</p>
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
                    <h2>Dallas Black Car Service for FIFA World Cup 2026</h2>
                    <p>Luxury Transportation for Every Match in Dallas–Fort Worth</p>
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
                            Our Premier Fleet – Ride in Comfort and Style with Dallas Car Service
                        </h2>
                        <p>
                            The FIFA World Cup 2026 is coming to Dallas, and the city is
                            ready to welcome fans from across the globe. AT&T Stadium in
                            Arlington will host nine matches, including a semi-final on
                            Tuesday, July 14, 2026.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color"><a href="/our-fleet/" class="internal-links">Luxury Sedans</a>:</strong>
                      Mercedes S-Class, Cadillac CT6 — perfect for individuals or small VIP groups.

                    </p>
                    <p>
                        <strong class="strong-c-color">Premium SUVs:</strong> Cadillac Escalade, Chevrolet Suburban, GMC Yukon XL — spacious and upscale.

                    </p>
                    <p>
                        <strong class="strong-c-color">Mercedes Sprinters:</strong>
                        Executive & VIP layouts for small groups wanting luxury comfort.
                    </p>
                    <p>
                        <strong class="strong-c-color">Mini Bus (23–27 Passenger):</strong>
                        Leather seating, Wi-Fi, climate control for mid-size groups.
                    </p>
                    <p>
                        <strong class="strong-c-color">Mini Bus (31–38 Passenger):</strong>
                        Perfect for large fan groups or tour groups.
                    </p>

                    <p>
                        <strong class="strong-c-color">Motor Coach (50+ Passenger):</strong>
                        For corporate hospitality and large delegations.
                    </p>

                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="luxury black car service dallas" />
                </div>
                <div class="btom-btn">
                    <a href="/book-now/">Ride in Dallas – Book Now</a>
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
                    <h5 class="pt-section-title">
                        Why Choose Us for FIFA 2026 Transportation
                    </h5>
                    <ul>
                        <li>
                            <a
                                href="/services/chauffeur-service-dallas-texas/"
                                class="internal-links-w">Professional Chauffeurs</a>
                            – Courteous, experienced, and trained for high-profile events.
                        </li>
                        <li>
                            On-Time Guarantee – We track traffic patterns and game-day
                            road closures.
                        </li>
                        <li>
                            Luxury Fleet Options – From sedans to motor coaches, we have
                            the right vehicle for your group.
                        </li>
                        <li>
                            Airport & Hotel Transfers – Serving DFW, Love Field, and
                            private FBO terminals.
                        </li>
                        <li>
                            <a
                                href="/services/executive-shuttle-services-dallas-texas/"
                                class="internal-links-w">Group Travel Specialists</a>
                            – Perfect for fan clubs, media teams, and corporate
                            hospitality.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/luxury-fifa-world-cup-2026-car-service.webp"
                        width="522"
                        height="564"
                        alt="FIFA World Cup 2026 Dallas car service" />
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

                <a href="/book-now/" class="bottom-cta-vtb-c">Travel in Comfort – Book Now</a>
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
                        src="/img/fifa-world-cup-2026-car-service-dallas.webp"
                        alt="FIFA World Cup 2026 Car service"
                        width="522"
                        height="564" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        FIFA 2026 Dallas Match Schedule AT&T Stadium
                    </h5>

                    <ul>
                        <li>
                            <strong class="strong-c-color">Sun, June 14</strong> – Group
                            Stage (Match 11)
                        </li>
                        <li>
                            <strong class="strong-c-color">Wed, June 17</strong> – Group
                            Stage (Match 22)
                        </li>
                        <li>
                            <strong class="strong-c-color">Mon, June 22</strong> – Group
                            Stage (Match 43)
                        </li>
                        <li>
                            <strong class="strong-c-color">Thu, June 25</strong> – Group
                            Stage (Match 57)
                        </li>
                        <li>
                            <strong class="strong-c-color">Sat, June 27</strong> – Group
                            Stage (Match 70)
                        </li>
                        <li>
                            <strong class="strong-c-color">Tue, June 30</strong> – Round
                            of 32 (Match 78)
                        </li>
                        <li>
                            <strong class="strong-c-color">Fri, July 3</strong> – Round of
                            32 (Match 88)
                        </li>
                        <li>
                            <strong class="strong-c-color">Mon, July 6</strong> – Round of
                            16 (Match 93)
                        </li>
                        <li>
                            <strong class="strong-c-color">Tue, July 14</strong> –
                            Semi-Final (Match 101)
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
                        src="/img/black-car-service-fifa-world-cup.webp"
                        alt="concerts and sporting events"
                        width="522"
                        height="564" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">Areas We Serve</h5>

                    <p class="pt-section-description">
                        Full coverage across Dallas–Fort Worth Metroplex, including:
                    </p>
                    <ul>
                        <li>
                            <a
                                href="https://dallasblackcarslimoservice.com/"
                                class="internal-links">Dallas</a>
                        </li>
                        <li>Arlington</li>
                        <li>Fort Worth</li>
                        <li>Frisco</li>
                        <li>
                            <a
                                href="/locations/black-car-service-plano-texas/"
                                class="internal-links">Plano</a>
                        </li>
                        <li>Irving</li>
                        <li>Addison</li>
                        <li>McKinney</li>
                        <li>Southlake</li>
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
                <a href="/book-now/" class="bottom-cta-vtb-c">Book your ride now</a>
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
                        What Past Clients Say – Soccer Tournaments at AT&T Stadium
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
                                                We booked Dallas Black Cars for the Gold Cup finals
                                                at AT&T Stadium — our group of 30 arrived together,
                                                on time, and in comfort. First-class experience!
                                            </p>
                                            <p>
                                                <bold>— Carlos M.</bold> Mexico City
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Our corporate guests flew in for the Concacaf
                                                Nations League and Dallas Black Cars handled
                                                everything from airport pickups to post-match
                                                transfers. Outstanding service!
                                            </p>
                                            <p>
                                                <bold>— David L.</bold>Houston
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                We used the motor coach for our fan club during a
                                                previous international friendly. Comfortable ride,
                                                great driver, and no stress with traffic or parking.
                                            </p>
                                            <p>
                                                <bold>— Sofia R.</bold> Fort Worth
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
        <h3 class="text-center">FAQs – FIFA World Cup Transportation</h3>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Can I book transportation for multiple matches?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. We offer single-day, multi-day, and full-tournament
                            booking packages for FIFA 2026 in Dallas.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Do you provide direct service to AT&T Stadium in Arlington?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Absolutely. Our chauffeurs know the best VIP drop-off and
                            pick-up locations for quick stadium access.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        What’s the best vehicle for a group of 25 fans?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Our Mini Bus (23–27 Passenger) is the most popular choice for
                            mid-sized groups traveling together.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Can you handle last-minute reservations during the World Cup?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We can, subject to availability. However, due to high demand
                            during FIFA 2026, we recommend booking early.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Do you provide airport transfers for international fans?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. We offer private pick-ups from DFW, Love Field, and FBO
                            terminals, with flight tracking to adjust for delays.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Are there custom packages for corporate and VIP clients?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. We create tailored transportation plans, including luxury
                            sedans, Sprinters, and motor coaches for hospitality groups.
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
