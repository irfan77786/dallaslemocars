@extends('master')

@section('content')
    <section class="d-md-none">
        <div class="ah-container">
            <div class="search-form-mobile">
                @include('partials.search', ['id_suffix' => '_mobile'])
            </div>
        </div>
    </section>

    <section class="home-banner-section">
        <div class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h1 fw-bold mb-15">Professional Chauffeur Service in Dallas</h1>
                    <p class="mb-0 text-white font-lg fw-medium justify-class">We provide smooth, punctual chauffeur transportation with professional drivers and service available day and night. Trusted by executives and business travelers for dependable black car service.</p>
                    <p class="text-white font-md d-flex align-items-center">
                        Call Now: <a href="tel:(214) 897-8056" class="mx-2 fw-bold font-lg theme-color text-underline">(214) 897-8056</a>
                    </p>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="pt-40 pb-20 detail-content-section">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- mb-md-20 mb-lg-30 -->
                    <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                        <!-- mb-15 mb-sm-20 mb-lg-30 -->
                        <h2 class="mb-10 text-center h2 fw-bold">Why Choose <span class="theme-color br-css-tt"> Dallas Black Limo
                                Service</span></h2>
                        <p class="font-md justify-mobile">Executives trust us for trained chauffeurs, on-time airport transfers, and consistently reliable black car service across Dallas.</p>
                    </div>
                </div>
                <div class="py-20 row">
                    <div class="col-12 col-md-8 pr-xl-50">
                        <h3 class="h5 fw-semibold">Why Choose Our Chauffeur Service</h3>
                        <p class="font-md justify-mobile">Our chauffeur service is designed for clients who value comfort, safety, and dependable travel. Every ride is private, well-planned, and professionally managed to keep your schedule smooth and stress-free.</p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Professional Chauffeurs You Can Trust:</strong>  Every chauffeur is licensed, trained, and experienced. They arrive prepared, courteous, and focused on safe, professional service.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Punctuality Built Into Every Ride:</strong> Pickups are scheduled in advance. Routes are planned early. Traffic is tracked to keep arrivals on time.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Clean, Quiet, Executive Vehicles:</strong> Vehicles are cleaned daily and inspected before each trip. Interiors stay quiet, comfortable, and distraction-free.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Private and Discreet Travel:</strong> Each chauffeur service ride offers privacy. Perfect for calls, work, or quiet travel between appointments.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Clear Pricing With No Surprises:</strong> Rates are confirmed upfront. No hidden charges. Easy planning for assistants and corporate billing.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong>Consistent Service, Every Booking:</strong> The same standards are followed on every ride. You know exactly what to expect, every time.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder ms-md-auto">
                            <img loading="lazy" decoding="async" src="../../assets/why-choose-dallas-black-limo-service.webp" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                        </div>
                    </div>
                </div>

            </div>
            <div class="bg-gray py-30 d-md-none">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-12">
                            <div class="fifa-image-holder">
                                <img loading="lazy" decoding="async" src="../../assets/fifa-image.jpg" class="img-fluid" alt="FIFA Image" width="380" height="100%">
                            </div>
                            <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World
                                Cup 2026
                                page</a>
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
                            <span class="mb-10 icon-holder d-block">
<img  loading="lazy"
                                decoding="async" src="{{ asset('assets/new_theme/img/icon-03.svg') }}" alt="Booking" class="img-fluid">
                            </span>
                            <h3 class="h6 fw-semibold">Schedule Online or by Phone</h3>
                            <p class="font-md">Use our booking form or call to arrange your chauffeur service.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                        <article class="text-center">
                            <span class="mb-10 icon-holder d-block">
<img  loading="lazy"
                                decoding="async" src="{{ asset('assets/new_theme/img/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                            </span>
                            <h3 class="h6 fw-semibold">Receive Booking Confirmation</h3>
                            <p class="font-md">Get chauffeur and trip details sent by text or email.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                        <article class="text-center">
                            <span class="mb-10 icon-holder d-block">
<img  loading="lazy"
                                decoding="async" src="{{ asset('assets/new_theme/img/icon-01.svg') }}" alt="Driver" class="img-fluid">
                            </span>
                            <h3 class="h6 fw-semibold">Meet Your Chauffeur</h3>
                            <p class="font-md">Professional, punctual, and prepared to assist throughout the ride.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 detail-content-section">
            <div class="container">
                <div class="py-20 row">
                    <div class="col-12 col-md-8 pr-xl-50">
                        <h3 class="h4 fw-semibold">Professional Chauffeur Service in Dallas</h3>
                        <p class="font-md">Our chauffeur service in Dallas provides private, <a href="/services/private-car-service-dallas/"><b>professionally managed transportation for executives</b></a>, corporate clients, and private travelers who need reliability, discretion, and exact timing. Every trip is handled by a licensed professional chauffeur who arrives early, dresses formally, and manages the ride from pickup to drop-off. Vehicles are luxury-grade, quiet, and maintained to executive standards for comfort and privacy. This executive chauffeur service is trusted for business meetings, airport travel, hotels, and important personal appointments throughout Dallas. Routes are planned using live traffic data to protect your schedule and avoid delays. Booking is straightforward, pricing is transparent, and communication remains professional at every step. With Dallas Black Limo Service, clients receive a dependable professional chauffeur service designed to remove stress, protect privacy, and keep every day running on time.</p>

                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder ms-md-auto">
                            <img loading="lazy" decoding="async" src="../../assets/dfw-and-love-field-airport-transportation.webp" width="407" height="210" class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                        </div>
                    </div>
                </div>
                <div class="flex-row-reverse py-20 row">
                    <div class="mb-20 col-12 col-md-8 pr-xl-50">
                        <h3 class="h4 fw-semibold">Get around Dallas with a hired chauffeur</h3>
                        <p class="font-md">
                            A hired chauffeur in Dallas offers private, professionally managed transportation for clients who want control, comfort, and dependable timing. A trained chauffeur handles routing, traffic, and schedule management while you ride in a clean, luxury vehicle built for quiet and privacy. Pickups are punctual, adjustments are made in real time, and every detail is handled with discretion. This executive chauffeur service is ideal for business travel, <a href="/services/airport-transfer-dallas/"><b>airport transfers</b></a>, meetings, and private occasions where presentation matters. Inside the vehicle, you can work, take calls, or relax without interruption. Vehicles meet executive standards for space and comfort. Booking is simple, pricing is transparent, and service is delivered consistently around your schedule—not the other way around.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder">
                            <img loading="lazy" decoding="async" src="../../assets/executive-black-car-service-for-business-meetings.webp" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                        </div>
                    </div>
                </div>
                <div class="py-20 row d-none d-md-flex">
                    <div class="mb-20 col-12 col-md-8 pr-xl-50">
                        <h3 class="h4 fw-semibold">Chauffeur Hire to Dallas Forth Worth International Airport (DFW)</h3>
                        <p class="font-md">
                            Chauffeur hire to <a href="/dfw-car-service/"><b>Dallas Fort Worth International Airport</b></a> provides professionally managed airport transportation for travelers who need punctual, organized service. Your licensed chauffeur arrives early, tracks your flight in real time, and adjusts pickup times for delays or early arrivals. Terminal pickups and drop-offs are handled correctly to avoid confusion or rushing. Vehicles are clean, quiet, and comfortable, giving you privacy to work or relax before or after your flight. This executive chauffeur service is trusted by business travelers, families, and private clients who value discretion and reliability. Routes are planned using live traffic data to protect your schedule. Booking is simple, pricing is clear, and communication remains professional from confirmation to drop-off. With a dedicated chauffeur to DFW, airport travel becomes calm, predictable, and well controlled.
                        </p>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder">
                            <img loading="lazy" decoding="async" src="../../assets/luxury-black-car-airport-transfer-will-rogers-world-airport.webp" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray py-30 d-md-none">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-12">
                            <h4 class="mb-20 h4 fw-semibold">
                                <span class="theme-color">Reserve Your Executive Ride </span> <br>in Dallas Fort Worth
                            </h4>
                            <a href="/booking" class="btn btn-primary w-100 fw-medium text-capitalize">Book Corporate Chauffeur Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-40 pb-15 bg-blue ridelux-difference">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- mb-15 mb-sm-25 mb-md-30 mb-lg-40 -->
                    <div class="mb-20 text-center col-12 col-lg-11 col-xl-10">
                        <!-- mb-15 mb-sm-20 mb-lg-30 -->
                        <h2 class="mb-10 text-white h2 fw-bold">The Smarter Choice for Corporate Transportation</h2>
                        <p class="font-md">Professional black car service in Dallas for executives and executive assistants who require punctual pickups, transparent pricing, and zero uncertainty. Every ride is professionally chauffeured, actively monitored by dispatch, and backed by contingency planning for business-critical travel to DFW, Love Field, and across Dallas.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                        <article class="text-center">
                            <span class="mb-10 icon-holder d-block">
<img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Booking"
                                class="img-fluid" width="40" height="40">
                            </span>
                            <h3 class="text-white h6 fw-semibold">Experienced Chauffeurs</h3>
                            <p class="font-md">Licensed, trained, and client-focused professionals</p>
                        </article>
</div>

    <section class="pt-50 pb-15 bg-blue ridelux-difference">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10">
                    <h2 class="mb-10 text-white h2 fw-bold">The Smarter Choice for Corporate Transportation</h2>
                    <p class="font-md justify-mobile">Professional black car service in Dallas for executives and executive assistants who require punctual pickups, transparent pricing, and zero uncertainty. Every ride is professionally chauffeured, actively monitored by dispatch, and backed by contingency planning for business-critical travel to DFW, Love Field, and across Dallas.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/money.svg') }}" alt="Booking"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Upfront Corporate Pricing</h3>
                        <p class="text-white font-md"> Flat, pre-set rates with no surge fees or hidden charges -<b> clear invoicing designed for corporate travel approvals and expense reporting.</b></p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                    <article class="text-center">
                        <span class="mb-10 icon-holder d-block">
                            <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/car-steering.svg') }}" alt="Confirmation"
                                class="img-fluid" width="40" height="40">
                        </span>
                        <h3 class="text-white h6 fw-semibold">Career Chauffeurs</h3>
                        <p class="text-white font-md"> Professionally trained, background-checked chauffeurs with <b>dedicated executive and airport transfer experience</b>, selected for discretion, punctuality, and consistency.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
        <section class="bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-25">Where We <span class="theme-color"> Serve</span></h2>
                        <p class="font-md">Providing professional transportation services across the Dallas–Fort Worth Metroplex. Throughout the region our service covers:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-05.jpg') }}" alt="Premium black car service for airport, hotel, and event travel" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Cities &amp; Regional Communities</a></h3>
                            <p class="font-base">Service is available in Dallas, Fort Worth, Plano, Frisco, McKinney, Allen, Irving, Arlington, Grapevine, Southlake, Addison, and surrounding areas across DFW.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-06.jpg') }}" alt="Chauffeur service providing safe and comfortable city transportation" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Airports &amp; Aviation Access</a></h3>
                            <p class="font-base">We serve DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport, and private aviation terminals.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-07.jpg') }}" alt="Executive black car service for meetings, conferences, and events" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Corporate &amp; Lifestyle Zones</a></h3>
                            <p class="font-base">Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, The Star (Frisco), Preston Hollow, Highland Park, and major business districts.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="{{ asset('assets/new_theme/img/image-08.jpg') }}" alt="Airport pickup service with professional chauffeur and luxury vehicle" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Sports &amp; Entertainment Venues</a></h3>
                            <p class="font-base">Transportation is available for AT&amp;T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-50 pt-sm-60 pt-md-70 pt-lg-80 pb-30 pb-sm-40 pb-md-50 pb-lg-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-12 col-lg-11 col-xl-10 mb-15 mb-md-20 mb-lg-30">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Chosen By People At <span class="theme-color">Top
                                Companies</span></h2>
                        <p class="font-md">Our Chauffeur Service is trusted by professionals who depend on reliable and well-managed transportation.</p>
                    </div>
                    <div class="col-12">
                        <div class="companies-logo-marquee">
                            <div class="companies-logo-track">
                                @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                                <div class="py-10 px-15">
                                    <span class="img-holder">
                                        <img loading="lazy" width="90" height="60" decoding="async"
                                            src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="Logo" class="img-fluid">
                                    </span>
                                </div>
                                @endforeach
                                @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                                <div class="py-10 px-15">
                                    <span class="img-holder">
                                        <img loading="lazy" width="90" height="60" decoding="async"
                                            src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="" class="img-fluid">
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="testimonial-section bg-blue py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="container">
                <div class="row">
                    <div class="mb-10 text-center col-12 mb-md-20">
                        <h2 class="text-white h2 fw-bold">Testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider">
                            <div>
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="text-center font-lg fw-medium">
                                            The chauffeur service was well managed from start to finish. The vehicle was spotless, the chauffeur was professional, and the ride followed our schedule exactly. This is the level of service executives expect.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">— Andrew M., Managing Director</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                </div>
                            </div>
                                   <div>
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="text-center font-lg fw-medium">
                                           We booked a car from DAL to Plano for a client visit. The pickup was on time, the driver was professional, and everything went exactly as scheduled.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- Michael Turner, Corporate Client</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                </div>
                            </div>


                              <div>
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="text-center font-lg fw-medium">
                                        We booked a car for a family ride with our 16 month old. The driver was professional, and the ride felt safe and comfortable throughout.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- Rachel Moore</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">New York City, NY</span>
                                </div>
                            </div>


                              <div>
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="text-center font-lg fw-medium">
                                          It was my first time in Dallas, and I booked their service for a game at AT&T Stadium. The ride was comfortable, and getting around was completely stress-free.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- David Ramirez, Amelia C.</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Philadelphia, PA</span>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="text-center font-lg fw-medium">
                                            We rely on their chauffeur service for client meetings and executive travel. The experience is always consistent, discreet, and professionally handled. It reflects well on our company.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">— Rebecca L., Director of Corporate Affairs</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Fort Worth, TX</span>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="text-center font-lg fw-medium">
                                            The chauffeur James arrived early, handled the route smoothly, and maintained a professional presence throughout the ride. Their service meets high corporate travel standards.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">— Thomas K., Chief Operating Officer</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Plano, TX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray py-30 d-md-none">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12">
                        <div class="fifa-image-holder">
                            <img  loading="lazy"
decoding="async" src="../../assets/fifa-image.png" class="img-fluid" alt="FIFA Image">
                        </div>
                        <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World Cup 2026
                            page</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="faqs-section py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12 mb-25 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold">Frequently Asked Questions</h2>
                    </div>
                </div>
                <div class="row" id="faqAccordion">
                    <div class="col-12 col-md-6 accordion-holder accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How is Chauffeur Service different from black car or limousine service?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion" style="">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Chauffeur Service is <b>as-directed and schedule-based</b>, allowing multiple stops, on-demand changes, and continuous availability—rather than single trips or event transportation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can Chauffeur Service support full business days or roadshows?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion" style="">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes. Chauffeur Service is ideal for <b>full-day executive schedules</b>, roadshows, site visits, client meetings, and multi-location itineraries that require timing precision and adaptability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is Chauffeur Service billed hourly or as-directed?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes. Chauffeur Service is typically <b>hourly or as-directed</b>, allowing your chauffeur to remain available throughout your itinerary without rebooking separate rides.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Are chauffeurs trained for executive and VIP travel?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes. Chauffeurs are trained in <b>professional conduct, discretion, timing awareness,</b> and <b>executive protocol</b>, ensuring quiet, controlled, and polished service at all times.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-6 accordion-holder" id="accordion01"> -->
                    <div class="col-12 col-md-6 accordion-holder accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can schedules or routes change during service?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion" style="">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes. Chauffeur Service allows <b>real-time adjustments</b> to routes, timing, and stops without disrupting service—ideal for evolving executive schedules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Is Chauffeur Service suitable for private or personal engagements?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes. Chauffeur Service is frequently used for <b>formal events, private appointments, and personal travel</b> where professionalism and privacy matter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How far in advance should Chauffeur Service be booked?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Advance booking is recommended for <b>extended or corporate service</b>, though availability may vary based on schedule length and vehicle requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    How early does the chauffeur arrive for scheduled service?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">
                                        For standard chauffeur bookings, the chauffeur typically arrives <b>10–15 minutes before</b> the scheduled start to stage the vehicle, review the itinerary, and be fully ready when service begins.<br />
For <b>executive, VIP, or assistant-managed itineraries</b>, arrival buffers may be extended based on location, security needs, or complexity of the schedule.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

           <div class="bg-gray py-30 d-md-none">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12">
                        <h3 class="mb-20 h4 fw-semibold">
                           Arrive With Confidence <br><span class="theme-color">Book Your Chauffeur Now</span>
                        </h3>
                        <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Chauffeur Today</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-gray py-30">
            <div class="container">
                <div class="flex-row-reverse row">
                    <div class="col-12 col-md-5 mb-15 mb-md-0">
                        <ul
                            class="gap-4 mb-0 list-unstyled footer-social-list d-flex justify-content-center justify-content-md-end">

                                <li>
                                <a href="">
                                    <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                        aria-label="Facebook logo" width="40" height="40" viewBox="0 0 24 24">
                                        <title>Facebook logo</title>
                                        <path d="M17 2v4h-2c-.7 0-1 .8-1 1.5V10h3v4h-3v8h-4v-8H7v-4h3V6a4 4 0 014-4h3z"
                                            fill="#97999E"></path>
                                    </svg>
                                </a>
                            </li>


                            <li>
                                <a href="">
                                    <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                        aria-label="Instagram logo" width="40" height="40" viewBox="0 0 24 24">
                                        <title>Instagram logo</title>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8A5.8 5.8 0 012 16.2V7.8C2 4.6 4.6 2 7.8 2zm-.2 2A3.6 3.6 0 004 7.6v8.8A3.6 3.6 0 007.6 20h8.8a3.6 3.6 0 003.6-3.6V7.6A3.6 3.6 0 0016.4 4H7.6zm10.9 2.75a1.25 1.25 0 10-2.5 0 1.25 1.25 0 002.5 0zM12 7a5 5 0 110 10 5 5 0 010-10zm-3 5a3 3 0 116 0 3 3 0 01-6 0z"
                                            fill="#97999E"></path>
                                    </svg>
                                </a>
                            </li>


                         <li>
                                <a href="">
                                    <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                        aria-label="YouTube logo" width="40" height="40" viewBox="0 0 24 24">
                                        <title>YouTube logo</title>
                                        <path
                                            d="M21.58 7.2a2.5 2.5 0 00-1.76-1.77C18.26 5 12 5 12 5s-6.26 0-7.83.41c-.84.23-1.53.92-1.76 1.78C2 8.76 2 12 2 12s0 3.26.41 4.8c.23.87.9 1.54 1.76 1.77C5.76 19 12 19 12 19s6.26 0 7.82-.41a2.5 2.5 0 001.76-1.76c.42-1.57.42-4.81.42-4.81s.01-3.26-.42-4.83zM10 15V9l5.2 3-5.2 3z"
                                            fill="#97999E"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.21 2H21L14.01 10.2L22 22H15.99L11.13 15.37L5.5 22H2.74L10.14 13.26L2 2H8.13L12.48 8.09L18.21 2ZM16.34 20.33H18L7.73 3.49H5.94L16.34 20.33Z"
                                            fill="#97999E" />
                                    </svg>
                                </a>
                            </li>

                           <li>
    <a href="">
        <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
            xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
            aria-label="TikTok logo" width="40" height="40" viewBox="0 0 24 24">
            <title>TikTok logo</title>
            <path
                d="M12.75 2h2.02c.15 1.2.84 2.32 1.94 3.04a5.2 5.2 0 002.8.82v2.02a7.1 7.1 0 01-4.74-1.78v7.26a5.37 5.37 0 11-5.37-5.37c.35 0 .7.04 1.03.12v2.2a3.36 3.36 0 00-1.03-.17 3.35 3.35 0 103.35 3.35V2z"
                fill="#97999E"></path>
        </svg>
    </a>
</li>

                        </ul>
                    </div>
                    <div
                        class="gap-2 col-12 col-md-7 d-flex justify-content-center justify-content-md-start align-items-start">
                        <svg class="mt-1" fill="#000000" width="20px" height="20px" viewBox="-4 0 32 32"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                            <path
                                d="M12.649,31.760 C12.463,31.919 12.231,31.999 12.000,31.999 C11.769,31.999 11.537,31.919 11.351,31.760 C10.887,31.365 0.000,21.976 0.000,11.964 C0.000,5.363 5.383,-0.006 12.000,-0.006 C18.617,-0.006 24.000,5.363 24.000,11.964 C24.000,21.976 13.113,31.365 12.649,31.760 ZM12.000,1.989 C6.486,1.989 2.000,6.464 2.000,11.964 C2.000,19.724 9.687,27.493 12.000,29.654 C14.312,27.493 22.000,19.724 22.000,11.964 C22.000,6.464 17.514,1.989 12.000,1.989 ZM12.000,17.991 C8.691,17.991 6.000,15.306 6.000,12.006 C6.000,8.705 8.691,6.021 12.000,6.021 C15.309,6.021 18.000,8.705 18.000,12.006 C18.000,15.306 15.309,17.991 12.000,17.991 ZM12.000,8.016 C9.794,8.016 8.000,9.805 8.000,12.006 C8.000,14.206 9.794,15.996 12.000,15.996 C14.206,15.996 16.000,14.206 16.000,12.006 C16.000,9.805 14.206,8.016 12.000,8.016 Z"
                                fill="#97999E" />
                        </svg>
                        <address class="mb-0 font-md single-line-ellipses">Dallas, Texas, United States, 75001
                        </address>
                    </div>
                </div>
            </div>
        </section>
@endsection
