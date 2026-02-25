@extends('master')

@section('content')
    <section class="home-banner-section">
        <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h1 fw-bold mb-15">Black Car Service Dallas</h1>
                    <p class="text-white font-lg fw-medium mb-30">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s, when an unknown printer tooks,</p>
                    <span class="text-white font-base">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call
                            Now</strong></span>
                    <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                        Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
                            214-897-8056</a>
                    </p>
                </div>
                <div class="col-12 col-md-6" style="pointer-events: auto; position: relative; z-index: 2;">
                    <!-- Booking Form -->
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search')
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fleet-section py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-xl-10">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Our Premium Fleet – Ride in Comfort and Style
                        with <span class="theme-color fw-bold">Dallas Limo and Black Cars Service</span></h2>
                </div>
                <div class="col-12 mb-15">
                    <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                        survived not only five centuries, but also the leap into electronic typesetting, remaining
                        essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                        containing Lorem Ipsum passages, and more recently.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            <strong class="mb-2 font-lg gray-700 fw-bold d-block">Luxury Sedans:</strong>
                            <p class="font-base">Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for
                                effortless driving to the DFW airport, meetings, or any other special event.</p>
                        </li>
                        <li>
                            <strong class="mb-2 font-lg gray-700 fw-bold d-block">Black SUVs:</strong>
                            <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide
                                spacious, stylish transportation for groups, corporate travelers, or extra luggage.
                            </p>
                        </li>
                        <li>
                            <strong class="mb-2 font-lg gray-700 fw-bold d-block">Executive Sprinter Vans:</strong>
                            <p class="font-base"> Ideal for large gatherings such as meetings and weddings events,
                                our
                                Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious
                                seating.</p>
                        </li>
                        <li>
                            <strong class="mb-2 font-lg gray-700 fw-bold d-block">Mini Bus Luxury Bus (23-27
                                Passengers):</strong>
                            <p class="font-base">Confortable seating & Wi-Fi make our Luxury Mini Buses best for
                                smaller groups, corporate meeting, or <a class="fw-semibold" href="">airport
                                    transfers</a>. Comfortably seats 23-27 passengers.</p>
                        </li>
                        <li>
                            <strong class="mb-2 font-lg gray-700 fw-bold d-block">Mini Bus (31-38
                                Passengers):</strong>
                            <p class="font-base"> Ideal for large gatherings such as meetings and weddings events,
                                our
                                Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious
                                seating.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="img-holder">
                        <img src="{{ asset('new_assets/assets/fleet-img.webp') }}" alt="Fleet Image" class="img-fluid">
                    </div>
                </div>
                <div class="text-center col-12 pt-15">
                    <a href="#" class="btn btn-primary">Quick Quote </a>
                </div>
            </div>
        </div>
    </section>
    <section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Us for <span
                            class="theme-color">Black Car Service</span></h2>
                    <p class="font-base">Traveling to or from the airport should be safe & stress-free. We make sure
                        your journey is smooth, whether you’re catching an early flight or arriving late at night.
                        Our goal is to give you comfort, reliability & peace of mind every time.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <ul class="pl-0 custom-unorder-list">
                        <li>
                            <p class="mb-0"><b>Friendly, Professional Greeters:</b> Courteous staff ready to assist
                                with every detail.</p>
                        </li>
                        <li>
                            <p class="mb-0"><b>Seamless Meet and Greet:</b> We wait for you at the gate or arrival
                                hall with clear signage.</p>
                        </li>
                        <li>
                            <p class="mb-0"><b>Luggage Assistance:</b> Helping you handle bags with ease from
                                arrival to car pickup.</p>
                        </li>
                        <li>
                            <p class="mb-0"><b>Fast-Track Guidance:</b> Support with check-in, security & boarding
                                for quicker flow.</p>
                        </li>
                        <li>
                            <p class="mb-0"><b>24/7 Availability:</b> No matter the time, we’re ready to welcome
                                you.</p>
                        </li>
                        <li>
                            <p class="mb-0"><b>Trusted by Families and VIPs:</b> Perfect for first-time flyers,
                                elderly travelers, & executives.</p>
                        </li>
                        <li>
                            <p class="mb-0"><b>Stress-Free Experience:</b> We take care of details so you can relax
                                & enjoy the journey.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 h-100">
                    <div class="img-holder ms-md-auto">
                        <img src="{{ asset('new_assets/assets/image-02.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="where-we-serve-section bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-lg-20">Where we serve</h2>
                    <p class="font-base">Providing chauffeur services across the Dallas-Fort Worth Metroplex with
                        access to:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <article class="we-serve-item custom-card mb-30 mb-md-35">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/image-05.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-detail">
                            <h3 class="mb-10 h4 fw-semibold">Cities & Regional Communities</h3>
                            <p class="mb-0 font-base">We proudly serve major cities like Dallas and Fort Worth, along with
                                Plano, Frisco, McKinney, and Allen. Our network also extends to Southlake.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <article class="we-serve-item custom-card mb-30 mb-md-35">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/image-06.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-detail">
                            <h3 class="mb-10 h4 fw-semibold">Airports & Aviation Access</h3>
                            <p class="mb-0 font-base">DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport, and VIP FBO Terminals.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <article class="we-serve-item custom-card mb-30 mb-md-35">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/image-07.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-detail">
                            <h3 class="mb-10 h4 fw-semibold">Corporate & Lifestyle Zones</h3>
                            <p class="mb-0 font-base">Legacy West (Plano), The Star (Frisco), Downtown Dallas, Las Colinas (Irving), Dallas Arts District, and Preston Hollow.</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                    <article class="we-serve-item custom-card mb-30 mb-md-35">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/image-08.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="text-detail">
                            <h3 class="mb-10 h4 fw-semibold">Sports & Entertainment Venues</h3>
                            <p class="mb-0 font-base">AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="mb-20 icon-holder">
                            <img src="{{ asset('new_assets/assets/icon-03.svg') }}" alt="Booking" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Book Online or Call</h3>
                        <p class="font-lg">Use our form or call to schedule your ride.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="mb-20 icon-holder">
                            <img src="{{ asset('new_assets/assets/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Get Instant Confirmation</h3>
                        <p class="font-lg">Receive driver and trip details via text or email.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="mb-20 icon-holder">
                            <img src="{{ asset('new_assets/assets/icon-01.svg') }}" alt="Driver" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Meet Your Chauffeur</h3>
                        <p class="font-lg">On-time, professional, and ready to assist.</p>
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
