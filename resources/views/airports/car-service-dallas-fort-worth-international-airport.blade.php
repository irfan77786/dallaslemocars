@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "DFW Airport Car Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>DFW Airport Car Service</h1>
                            <p>
                                Experience seamless travel with our luxury black car service to
                                and from DFW Airport. We offer professional chauffeurs,
                                real-time flight tracking & comfortable sedans, SUVs & executive
                                vehicles. Whether for business or leisure, enjoy stress-free,
                                on-time airport transfers. Book your Dallas/Fort Worth Airport
                                car service today for reliability, comfort & peace of mind.
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
                    <h2>DFW Airport Car Service</h2>
                    <p>
                        Experience seamless travel with our luxury black car service to
                        and from DFW Airport. We offer professional chauffeurs,
                        real-time flight tracking & comfortable sedans, SUVs & executive
                        vehicles. Whether for business or leisure, enjoy stress-free,
                        on-time airport transfers. Book your Dallas/Fort Worth Airport
                        car service today for reliability, comfort & peace of mind.
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
                        <h2>Dallas Black Cars Limo Service – Premium Fleet for DFW Airport Transfers</h2>
                        <p>
                         Our fleet is tailored for DFW airport car service, providing comfort, space, and professionalism for business and leisure travelers.
                        </p>
                    </div>

                    <p>
                        <strong class="strong-c-color">Luxury Sedans: </strong>Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class are perfect for executives who need efficient, stylish transfers.
                    </p>



  <p>
                        <strong class="strong-c-color">Luxury SUVs: </strong>Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide spacious seating for families, corporate travelers, or extra luggage.
                    </p>


                      <p>
                        <strong class="strong-c-color">Executive Sprinter Vans: </strong>Mercedes-Benz Sprinters make group DFW airport transfers seamless for teams and wedding parties.
                    </p>


                      <p>
                        <strong class="strong-c-color">23–38 Passenger Mini Bus: </strong>The perfect solution for convention groups, large delegations, or corporate retreats arriving at DFW.
                    </p>


                      <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers): </strong>Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class are perfect for executives who need efficient, stylish transfers.
                    </p>


                    <p class="tagline-bottom">Every ride is chauffeur-driven, insured, and reliable, making DFW airport transfers stress-free.</p>


                    <img
                        src="/images/img/airport-limo-service-dallas.webp"
                        alt="Dallas limo service to and from DFW Airport" />
                </div>
                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="/book-now/">Ride in Dallas – Book Now</a>
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
                    <h5 class="pt-section-title">Reliable DFW Airport Pickups</h5>
                    <p class="pt-section-description">
                        Arriving at DFW Airport is easy with our experienced chauffeurs.
                        They track your flight & arrive on time. It doesn’t matter if
                        you land late at night or during busy hours.
                    </p>
                    <p class="pt-section-description">
                        Choose a business sedan for solo travel. Families or groups with
                        luggage can enjoy a luxury SUV. We help with baggage & provide
                        smooth navigation out of the airport. Your arrival will be
                        stress-free, comfortable & dependable.
                        <a style="cursor: pointer;" class="quick-book-link internal-links-w">Book your DFW pickup today</a>
                        & start your trip the right way.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/dfw-airport-black-car-service-dallas.webp"
                        width="522"
                        height="564"
                        alt="SUV airport transfer for families at DFW Airport" />
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

                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="/book-now/">Travel in Comfort – Book Now</a>
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
                        alt="Corporate black car service at Dallas Fort Worth International Airport" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">Areas We Serve</h5>

                    <p>
                        Providing seamless transportation to and from Dallas/Fort Worth
                        International Airport (DFW), serving the entire Metroplex:
                    </p>
                    <ul>
                        <li>
                            <strong>Cities & Regional Communities </strong> We proudly
                            serve major cities like Dallas and Fort Worth, along with
                            Plano,
                            <a
                                href="/locations/black-car-service-frisco-texas/"
                                class="internal-links">Frisco</a>, McKinney, and Allen. Our network also extends to Southlake,
                            Keller, Flower Mound, Carrollton, Richardson, Denton, Garland,
                            Mesquite, and The Colony.
                        </li>
                        <li>
                            <strong>Airports & Aviation Access </strong>DFW International
                            Airport,
                            <a
                                href="/airport/dallas-love-field-black-car-service/"
                                class="internal-links">Dallas Love Field</a>, Addison Airport, McKinney National Airport, Fort Worth
                            Alliance Airport, and VIP FBO Terminals.
                        </li>
                        <li>
                            <strong>Corporate & Lifestyle Zones: </strong>Legacy West
                            (Plano), The Star (Frisco), Downtown Dallas, Las Colinas
                            (Irving), Dallas Arts District, and Preston Hollow.
                        </li>
                        <li>
                            <strong>Sports & Entertainment Venues: </strong>AT&T Stadium,
                            Globe Life Field, American Airlines Center, Toyota Stadium,
                            PGA Frisco, and Toyota Music Factory.
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
                        src="/assets/images/professional-chauffeur-service.webp"
                        alt="Elegant sedan for DFW Airport pickup and drop-off" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for Dallas/Fort Worth Airport (DFW) Transfers
                    </h5>

                    <p class="pt-section-description">
                        DFW Airport is one of the busiest airports in the world, &
                        navigating it can feel overwhelming. That’s why we make your
                        airport transfers simple, reliable, & stress-free. Whether
                        you’re arriving, departing, or connecting, we ensure a smooth
                        ride every time.
                    </p>
                    <ul>
                        <li>
                            <strong>Licensed and Professional Drivers: </strong>
                            <a
                                href="/services/chauffeur-service-dallas-texas/"
                                class="internal-links">Experienced chauffeurs</a>
                            trained for airport travel.
                        </li>
                        <li>
                            <strong>On-Time, Every Time: </strong>Real-time flight
                            tracking for perfect pickups & drop-offs.
                        </li>
                        <li>
                            <strong>Fair, Flat Rates: </strong>No surge pricing just
                            honest and transparent fares.
                        </li>
                        <li>
                            <strong><a href="/our-fleet/" class="internal-links">Luxury Vehicles:</a> </strong>Clean, spacious cars designed for comfort & style.
                        </li>
                        <li>
                            <strong>24/7 Availability: </strong>Service around the clock
                            for early flights or late arrivals.
                        </li>
                        <li>
                            <strong>Trusted by Business and Leisure Travelers: </strong>The top choice for executives, families, & VIPs.
                        </li>
                        <li>
                            <strong>Complimentary Perks: </strong>Wi-Fi, phone chargers,
                            and bottled water included with every ride.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With us, your Dallas/Fort Worth Airport experience is always
                        smooth, comfortable, & worry-free.
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
                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="/book-now/">Book your ride now</a>
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
                                                My experience with DFW Airport Car Service was
                                                absolutely fantastic! The car was clean, driver was
                                                early, and the ride was perfect. I will absolutely
                                                book again when traveling to DFW.
                                            </p>
                                            <p>
                                                <bold>— Megan F.</bold> Dallas, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                I have used many airport transfers but DFW Airport
                                                Car Service is the best I have ever experienced.
                                                Prompt, professional, and zero stress. They made my
                                                travel day from A to B seamless and worry-free.
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
                                                DFW Airport Car Service completely eliminated any
                                                bumps in my travel experience. I was greeted
                                                professionally, my luggage was handled
                                                professionally, and the ride was pure luxury! This
                                                is truly a five-star service and worth every dollar
                                                spent.
                                            </p>
                                            <p>
                                                <bold>— Katherine R.</bold> Allen, TX
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
