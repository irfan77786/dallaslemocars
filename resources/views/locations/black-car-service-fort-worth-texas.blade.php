@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Black Car Service Fort Worth"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Black Car Service Fort Worth</h1>
                            <p>
                                Ride in style with our premium Fort Worth black car service.
                                Whether you need airport transfers, a corporate event, or luxury
                                transportation for a special event, our fleet of sedans, SUVs,
                                and executive vehicles ensures comfort & reliability. With
                                professional chauffeurs & 24/7 availability, book your Fort
                                Worth car service today for seamless, stress-free travel.
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
                    <h2>Black Car Service Fort Worth</h2>
                    <p>
                        Ride in style with our premium Fort Worth black car service.
                        Whether you need airport transfers, a corporate event, or luxury
                        transportation for a special event, our fleet of sedans, SUVs,
                        and executive vehicles ensures comfort & reliability. With
                        professional chauffeurs & 24/7 availability, book your Fort
                        Worth car service today for seamless, stress-free travel.
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
                        <h2>Dallas Black Cars Limo Service – Premium Fleet in Fort Worth</h2>
                        <p>
                        Serving downtown, Stockyards, and DFW connections, our fleet delivers luxury chauffeur service Fort Worth for all occasions.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans: </strong>Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for VIP and executive travel.
                    </p>

              <p>
                        <strong class="strong-c-color">Luxury SUVs: </strong>Escalade ESV, Suburban, Yukon XL, and Navigator for families, executives, and small groups.
                    </p>


                 <p>
                        <strong class="strong-c-color">Executive Sprinter Vans: </strong>Mercedes-Benz Sprinters ideal for Fort Worth corporate gatherings or wedding parties.
                    </p>


                 <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus: </strong>Mid-size group transport for conventions, concerts, or Cowboys games at AT&T Stadium.
                    </p>


              <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers): </strong>Best for university travel, sports teams, or major corporate events in Fort Worth.
                    </p>

             <p class="tagline-bottom">Book our Fort Worth limo service for reliability, style, and professional chauffeurs.</p>

                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="luxury black car service dallas" />
                </div>
                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Fort Worth – Book Now</a>
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
                    <h5 class="pt-section-title">Stylish Travel Across Fort Worth</h5>
                    <p class="pt-section-description">
                        Our Fort Worth limo service gives professional, reliable &
                        luxurious rides for every occasion. We serve neighborhoods like
                        Westworth Village, Arlington Heights & TCU areas. We offer clean
                        sedans for business travelers. Spacious luxury SUVs are
                        available for groups. Whether going to DFW Airport,
                        <a
                            href="/airport/dallas-love-field-black-car-service/"
                            class="internal-links-w">Dallas Love Field</a>, or local events, our chauffeurs ensure smooth rides. They
                        provide precise timing & maximum comfort. Each vehicle is
                        well-maintained to the highest standards.
                    </p>
                    <p class="pt-section-description">
                        Travel is safe, stress-free & elegant. From corporate trips to
                        weddings or social outings, our Fort Worth luxury transport
                        combines style & professionalism for a memorable journey every
                        time.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/image/affordable-luxury-dfw-car-service-to-airport.webp"
                        width="522"
                        height="564"
                        alt="Reliable black car service near Fort Worth" />
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
                        src="/images/img/dallas-executive-black-car.webp"
                        alt="Chauffeured black car service in Fort Worth" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Group & VIP Travel in Fort Worth, TX
                    </h5>

                    <p class="pt-section-description">
                        For families, groups, or VIP guests, our Fort Worth limo service
                        has roomy & comfy vehicles for every need. We serve Haltom City,
                        Saginaw & Lake Worth.
                        <a
                            href="/services/chauffeur-service-dallas-texas/"
                            class="internal-links">Luxury SUVs</a>
                        are perfect for groups. Sleek executive sedans suit
                        professionals. Experienced chauffeurs know Fort Worth roads,
                        traffic & event venues. Whether attending business meetings,
                        sports events, or weddings, we focus on punctuality, comfort &
                        reliability.
                    </p>

                    <p class="pt-section-description">
                        Vehicles are clean & well-maintained. Courteous drivers make
                        every ride seamless. Our Fort Worth airport car service ensures
                        every trip is not just transport but a smooth experience of
                        style, convenience & luxury.
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
            <div class="col-md-6">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title">
                        Why Choose Us for Fort Worth Transportation
                    </h5>
                    <p class="pt-section-description">
                        Traveling around Fort Worth should be easy, comfortable, &
                        dependable, & that’s exactly what we provide. Whether you need
                        an airport transfer, a ride to a business meeting, or luxury
                        travel for a special occasion, we make every journey stress-free
                        and reliable.
                    </p>
                    <ul>
                        <li>
                            <strong><a
                                    href="/services/chauffeur-service-dallas-texas/"
                                    class="internal-links-w">Professional Chauffeurs</a>: </strong>Licensed, experienced drivers who know Fort Worth well.
                        </li>
                        <li>
                            <strong>On-Time, Every Time: </strong>Punctual pickups &
                            drop-offs to fit your schedule.
                        </li>
                        <li>
                            <strong>Flat, Honest Pricing: </strong>No surge rates or
                            hidden fees, just clear, upfront fares.
                        </li>
                        <li>
                            <strong>Luxury Vehicles: </strong>Clean, stylish cars with
                            plenty of space & comfort.
                        </li>
                        <li>
                            <strong>Available 24/7: </strong>Service any time, day or
                            night, to meet your travel needs.
                        </li>
                        <li>
                            <strong>Trusted by Families and Executives: </strong>The
                            preferred choice for personal & corporate rides.
                        </li>
                        <li>
                            <strong>Complimentary Amenities: </strong>Free Wi-Fi,
                            chargers, & bottled water in every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With us, your Fort Worth transportation is always smooth,
                        comfortable, & designed around your needs.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/images/img/business-travel-car-service-dallas.webp"
                        alt="Chauffeured black car service in Dallas" />
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
                        src="/img/luxury-van-rental-dallas-texas.webp"
                        width="522"
                        height="564"
                        alt="Reliable black car service near Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Affordable Black Car Chauffeur Service Fort Worth
                    </h5>

                    <p>
                        Providing luxury limousine service throughout the Dallas-Fort
                        Worth Metroplex, with coverage in:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities & Prime Suburbs: </strong>We provide service
                            throughout Dallas, Richardson, Addison, Coppell, Grapevine,
                            Colleyville, Bedford, Hurst, and Euless. Our coverage also
                            includes Highland Park, University Park, Farmers Branch,
                            Carrollton, Keller, and Trophy Club.
                        </li>
                        <li>
                            <strong>Airports & Terminals: </strong>DFW International
                            Airport, Dallas Love Field,
                            <a
                                href="/airport/addison-airport-car-service/"
                                class="internal-links">Addison Airport</a>, Fort Worth Alliance Airport, McKinney National Airport, and
                            Exclusive FBO Facilities.
                        </li>
                        <li>
                            <strong>Corporate & Entertainment Districts: </strong>Uptown
                            Dallas, Downtown Dallas, Las Colinas (Irving),
                            <a
                                href="/locations/black-car-service-plano-texas/"
                                class="internal-links">Legacy West (Plano)</a>, The Star District (Frisco), and Dallas Arts District.
                        </li>
                        <li>
                            <strong>Sports & Event Venues: </strong>AT&T Stadium, American
                            Airlines Center, Globe Life Field, Texas Motor Speedway, PGA
                            Frisco, and Toyota Stadium.
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
                        transition-duration: 0.3s;
                      ">
                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Booked their Executive Shuttle Service Dallas for a
                                                conference. The vehicle was spacious, comfortable,
                                                and perfect for the whole team. Driver was
                                                professional. Definitely booking again for our next
                                                event.
                                            </p>
                                            <p>
                                                <bold>— Madison C.</bold> Addison, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Our company used Executive Shuttle Service Dallas to
                                                transport staff during a corporate retreat. Everyone
                                                praised the comfort & punctuality. It was smooth,
                                                safe, & very well-organized from start to finish.
                                            </p>
                                            <p>
                                                <bold>— Kimberly H.</bold> Dallas, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                I’ve tried multiple shuttle services, but their
                                                Executive Shuttle Service Dallas truly stood out.
                                                Timely pickups, clean interior, courteous
                                                driver—made our client transfers effortless. Great
                                                impression for our business.
                                            </p>
                                            <p>
                                                <bold>— Natalie R.</bold> Dallas, TX
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
