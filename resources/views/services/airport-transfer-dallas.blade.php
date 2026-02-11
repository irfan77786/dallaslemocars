@extends('master')

@section('content')
    <section class="home-banner-section position-relative pt-40 pt-sm-60 py-md-70 d-flex align-items-center">
        <!-- Map Container (Initially hidden, shows up when location is selected) -->
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
        </div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <h1 class="h1 fw-bold text-white mb-15">Professional Airport Transfers Built for On-Time Arrivals</h1>
                    <p class="font-lg fw-medium text-white mb-0 justify-class">We provide smooth, punctual airport transportation with real-time flight tracking, professional drivers, and service available day and night. Trusted by frequent flyers and business travelers for dependable airport transportation.</p>

                    <p class="font-md text-white d-flex align-items-center">
                        Call Now: <a href="tel:(214) 897-8056" class="fw-bold font-lg theme-color mx-2 text-underline">(214) 897-8056</a>
                    </p>
                </div>
                <div class="con-12 col-md-6">
                    <div class="distance-form-holder">
                        @include('partials.search')
                    </div>
                </div>
            </div>
        </div>
        <span class="position-absolute bg-image" id="hide_on_map">
            <img src="{{ asset('assets/new_theme/img/banner-1.webp') }}" alt="Professional black car transportation for executives and private clients" class="img-fluid w-100 h-100" fetchpriority="high" style="object-fit: cover;">
        </span>
    </section>

    <section class="luxury-cars-section bg-gray pb-40 pb-sm-60 py-md-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-15 mb-sm-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-10 text-center">Airport Transportation Built <span class="theme-color br-css-tt">Around Executive Expectations</span></h2>
                    <p class="font-md mb-0 justify-mobile">Our airport fleet is built for travelers and executive assistants who need reliable, professional transportation without follow-ups or uncertainty. Executive sedans offer a quiet, composed ride for solo and business travel, while luxury and premium SUVs provide added space for passengers and luggage with a polished, executive-ready presence. Sprinter vans and larger buses support coordinated group airport transfers, corporate arrivals, and event travel. Every vehicle is chauffeur-driven, clean, and selected for schedule awareness—ensuring calm departures, smooth arrivals, and airport transportation handled correctly.</p>
                </div>
            </div>
            @include('partials.fleet_grid')
        </div>
    </section>

    <section class="detail-content-section pt-40 pb-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                    <h2 class="h2 fw-bold mb-10 text-center">Why Choose <span class="theme-color br-css-tt"> Dallas Black Limo Service</span></h2>
                    <p class="font-md justify-mobile">Executives trust us for trained chauffeurs, on-time airport transfers, and consistently reliable black car service across Dallas.</p>
                </div>
            </div>
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50">
                    <h3 class="h5 fw-semibold">Why Executives Choose Our Airport Transfer Service</h3>
                    <p class="font-md justify-mobile">Our <a href="/dfw-car-service/"><b>airport transfers</b></a> are built for real flight conditions, not assumptions. Our Dallas airport car service follows how DFW and Love Field actually operate, with every ride monitored from flight tracking to curbside pickup.</p>
                    <ul class="list-unstyled custom-unorder-list">
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Real-Time Flight Tracking:</strong> Pickup times adjust automatically for early arrivals, delays, and gate changes, so you do not need to make calls or send updates.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Airport Pickup Matched to Your Arrival Terminal:</strong> Chauffeurs are dispatched to the correct terminal and follow airport pickup rules to reduce walking distance and curbside wait time.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Monitored Airport Transfers:</strong> Dispatch oversees every ride in real time, tracking traffic, arrival timing, and route conditions from start to finish.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Airport Departures Planned to Avoid Missed Flights:</strong> Drop-offs are scheduled with extra time for traffic and terminal congestion to help prevent missed flights.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Professional Chauffeurs Trained for Airport Transfers:</strong> Experienced drivers with airport knowledge handle every trip. The same standards apply every time, with no random drivers or last-minute replacements.
                            </p>
                        </li>
                        <li>
                            <p class="mb-0 justify-mobile">
                                <strong class="br-css-tts">Backup Support for Time-Sensitive Travel:</strong> Backup coverage is ready to protect your schedule if a vehicle issue or timing problem comes up.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/why-choose-dallas-black-limo-service.webp') }}" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                    </div>
                </div>
            </div>
         </div>
    </section>

    <section class="bg-gray pt-50 pb-25 pb-md-20">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-03.svg') }}" alt="Booking" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Book Airport Ride</h3>
                        <p class="font-md">Schedule online or call in seconds.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Flight-Aware Service</h3>
                        <p class="font-md">Pickup times adjust with flight updates.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="icon-holder mb-10 d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/icon-01.svg') }}" alt="Driver" class="img-fluid">
                        </span>
                        <h3 class="h6 fw-semibold">Arrive Stress-Free</h3>
                        <p class="font-md">Relax while we handle airport travel.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-content-section py-20">
        <div class="container">
            <div class="row py-20">
                <div class="col-12 col-md-8 pr-xl-50">
                    <h3 class="h4 fw-semibold">Land at Dallas Fort Worth International Airport</h3>
                    <p class="font-md">Landing at Dallas Fort Worth International Airport should feel organized, not rushed. Our airport transfer service is built for executives, assistants, and travelers who need reliable airport transportation without uncertainty or last-minute coordination. Every professional chauffeur tracks your flight in real time and arrives early, adjusting automatically for delays, early arrivals, or gate changes. Terminal pickups are handled smoothly, with clear curbside coordination and assistance with luggage. A clean, quiet vehicle is ready when you exit, giving you space to reset after your flight. Routes and traffic patterns are planned in advance to protect your schedule and avoid unnecessary delays. Whether you’re traveling to a business meeting, hotel, residence, or corporate office, each airport transfer is private, punctual, and professionally managed. From touchdown to final drop-off, timing is controlled, details are handled, and your ride remains calm, dependable, and predictable.</p>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder ms-md-auto">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/dfw-and-love-field-airport-transportation.webp') }}" width="407" height="210" class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse py-20">
                <div class="col-12 col-md-8 pr-xl-50 mb-20">
                    <h3 class="h4 fw-semibold">From the Airport to Anywhere in Dallas</h3>
                    <p class="font-md">
                        After landing at <a href="/services/airport-transfer-dallas/"><b>DFW or Dallas Love Field</b></a>, your airport transfer is managed using real arrival times, terminal location, and live traffic conditions not estimates. <br />
                        Our airport car service provides direct transportation to Dallas’s main business districts, hotels, and venues. Many executives travel to Downtown Dallas, with offices near The Ritz-Carlton, Dallas and Omni Dallas Hotel. Event travel is routed to American Airlines Center or AT&T Stadium with traffic-aware planning.<br />
                        Corporate pickups often continue to Las Colinas, Plano, and North Dallas. Every ride is flight-monitored, terminal-matched, and dispatch-managed for smooth curbside pickup and on-time arrival.
                    </p>
                </div>
                <div class="col-12 col-md-4 h-100">
                    <div class="img-holder">
                        <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/executive-black-car-service-for-business-meetings.webp') }}" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-25">Where We <span class="theme-color"> Serve</span></h2>
                    <p class="font-md">Providing professional transportation services across the Dallas–Fort Worth Metroplex. Throughout the region our service covers:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="we-serve-item text-center mb-30 mb-md-35">
                        <div class="img-holder mb-15 mx-auto d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-05.jpg') }}" alt="Cities & Regional Communities" class="img-fluid">
                        </div>
                        <h3 class="h6 fw-semibold mb-10">Cities & Regional Communities</h3>
                        <p class="font-base">Service is available in Dallas, Fort Worth, Plano, Frisco, McKinney, Allen, Irving, Arlington, Grapevine, Southlake, Addison, and surrounding areas across DFW.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="we-serve-item text-center mb-30 mb-md-35">
                        <div class="img-holder mb-15 mx-auto d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-06.jpg') }}" alt="Airports & Aviation Access" class="img-fluid">
                        </div>
                        <h3 class="h6 fw-semibold mb-10">Airports & Aviation Access</h3>
                        <p class="font-base">We serve DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport, and private aviation terminals.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="we-serve-item text-center mb-30 mb-md-35">
                        <div class="img-holder mb-15 mx-auto d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-07.jpg') }}" alt="Corporate & Lifestyle Zones" class="img-fluid">
                        </div>
                        <h3 class="h6 fw-semibold mb-10">Corporate & Lifestyle Zones</h3>
                        <p class="font-base">Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, The Star (Frisco), Preston Hollow, Highland Park, and major business districts.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                    <article class="we-serve-item text-center mb-30 mb-md-35">
                        <div class="img-holder mb-15 mx-auto d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-08.jpg') }}" alt="Sports & Entertainment Venues" class="img-fluid">
                        </div>
                        <h3 class="h6 fw-semibold mb-10">Sports & Entertainment Venues</h3>
                        <p class="font-base">Transportation is available for AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    @include('partials.top-cities')
    @include('partials.companies_strip')
    @include('partials.testimonials')
    @include('partials.faq')
@endsection
