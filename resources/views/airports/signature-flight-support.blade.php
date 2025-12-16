@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Dallas Love Field Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Dallas Love Field Signature Flight Support Car Service</h1>
                            <p>
                                Arrive in style at Signature Flight Support in Dallas Love Field
                                with our premium black car service. We specialize in private
                                aviation transfers, offering luxury sedans, SUVs, & executive
                                vehicles with professional chauffeurs. Enjoy on-time pickups,
                                luggage assistance, & stress-free travel. Book your Signature
                                Flight Support car service today for seamless, first-class
                                transportation.
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
                    <h2>Dallas Love Field Signature Flight Support Car Service</h2>
                    <p>
                        Arrive in style at Signature Flight Support in Dallas Love Field
                        with our premium black car service. We specialize in private
                        aviation transfers, offering luxury sedans, SUVs, & executive
                        vehicles with professional chauffeurs. Enjoy on-time pickups,
                        luggage assistance, & stress-free travel. Book your Signature
                        Flight Support car service today for seamless, first-class
                        transportation.
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
                        <h2>Fleet for Signature Flight Support Private Aviation Clients</h2>
                        <p>
                            Dallas Limo And Black Cars Service specializes in
                            <a
                                href="/airport/signature-flight-support/"
                                class="internal-links">Signature Flight Support black car service</a>,
                            providing luxury travel from private aviation terminals.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans –</strong>
                        Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class are perfect for executives arriving at Signature FBO.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury SUVs –</strong>
                        Cadillac Escalade, Chevy Suburban, and GMC Yukon XL deliver private transfers with space and elegance.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans –</strong>
                        Mercedes-Benz Sprinters are the trusted choice for business groups and families flying private.
                    </p>

                    <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
                        Ideal for groups requiring shuttle service from Signature Flight Support terminals.
                    </p>

                    <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
                        Designed for corporate aviation groups, conventions, and sports delegations.
                    </p>


                     <p class="tagline-bottom">With chauffeur service in Dallas customized for private aviation, we ensure privacy, punctuality, and five-star comfort.</p>

                    <img
                        src="/images/img/private-car-service-dallas.webp"
                        alt="Professional chauffeur service for Signature Flight Support private jet travelers" />
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
                    <h5 class="pt-section-title">Premium Private Jet Transfers</h5>
                    <p class="pt-section-description">
                        Experience smooth travel with our Signature Flight Support
                        transfers. We serve
                        <a
                            href="/services/dallas-corporate-transportation/"
                            class="internal-links-w">Highland Park</a>, Uptown Dallas & Addison. We offer sleek business sedans for
                        execs & luxury SUVs for bigger groups. Our pro chauffeurs give
                        punctual, discreet & comfy service for every arrival &
                        departure. Flying for business or leisure? We make your trip
                        easy.
                    </p>
                    <p class="pt-section-description">
                        From the moment you step off your private jet, our private jet
                        car service gives the luxury & care you expect at Signature
                        Flight Support.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/airport-car-service.webp"
                        width="522"
                        height="564"
                        alt="Dallas Love Field Signature Flight Support executive car service" />
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
                        src="/images/img/business-travel-car-service-dallas.webp"
                        alt="Luxury SUV transfer at Signature Flight Support Dallas airport" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Areas We Serve to/from Signature Flight Support
                    </h5>

                    <p>
                        Offering reliable transportation to and from Signature Flight
                        Support, covering the Dallas-Fort Worth Metroplex:
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
                            alt="Private jet ground transportation Signature Flight Support Dallas
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
                        src="/img/signature-flight-support-black-car-service-dallas.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Signature Flight Support (DAL) Transfers
                    </h5>

                    <p class="pt-section-description">
                        Flying private should be all about ease, comfort, &
                        reliability—and that’s exactly what we deliver at Signature
                        Flight Support (DAL). From the moment your plane lands to the
                        second you leave, we ensure your ground travel is as seamless as
                        your flight experience.
                    </p>
                    <ul>
                        <li>
                            <strong><a
                                    href="/services/chauffeur-service-dallas-texas/"
                                    class="internal-links">Professional Chauffeurs</a>: </strong>Experienced drivers trained to serve private aviation
                            clients.
                        </li>
                        <li>
                            <strong>Punctual Every Time: </strong>Coordinated pickups &
                            drop-offs to match your flight schedule.
                        </li>
                        <li>
                            <strong>Transparent Pricing: </strong>Flat, honest rates with
                            no hidden fees.
                        </li>
                        <li>
                            <strong>Luxury Fleet Options: </strong><a href="/our-fleet/" class="internal-links">Executive sedans</a>, SUVs, & vans ready for your needs.
                        </li>
                        <li>
                            <strong>Available 24/7: </strong>Service at any hour, designed
                            to fit your private flight schedule.
                        </li>
                        <li>
                            <strong>Preferred by VIPs and Executives: </strong>Trusted by
                            clients who demand discretion & excellence.
                        </li>
                        <li>
                            <strong>Complimentary Amenities: </strong>Enjoy Wi-Fi,
                            chargers, & bottled water on every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With us, your Signature Flight Support transfer is private,
                        professional, & perfectly tailored to your travel.
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
