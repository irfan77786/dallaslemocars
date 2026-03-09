@extends('master')
@section('content')
    <section class="home-banner-section">
        <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 order-2 order-md-1 d-flex flex-column justify-content-center mt-4 mb-2 mt-md-0 mb-md-0" style="pointer-events: auto; position: relative; z-index: 0;">
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
                <div class="col-12 col-md-6 order-1 order-md-2" style="pointer-events: auto; position: relative; z-index: 2;">
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
                    <div class="col-12 col-xl-10 text-center">
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
                                <strong class="font-lg gray-700 fw-bold d-block mb-2">Luxury Sedans:</strong>
                                <p class="font-base">Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for
                                    effortless driving to the DFW airport, meetings, or any other special event.</p>
                            </li>
                            <li>
                                <strong class="font-lg gray-700 fw-bold d-block mb-2">Black SUVs:</strong>
                                <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide
                                    spacious, stylish transportation for groups, corporate travelers, or extra luggage.
                                </p>
                            </li>
                            <li>
                                <strong class="font-lg gray-700 fw-bold d-block mb-2">Executive Sprinter Vans:</strong>
                                <p class="font-base"> Ideal for large gatherings such as meetings and weddings events,
                                    our
                                    Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious
                                    seating.</p>
                            </li>
                            <li>
                                <strong class="font-lg gray-700 fw-bold d-block mb-2">Mini Bus Luxury Bus (23-27
                                    Passengers):</strong>
                                <p class="font-base">Confortable seating & Wi-Fi make our Luxury Mini Buses best for
                                    smaller groups, corporate meeting, or <a class="fw-semibold" href="">airport
                                        transfers</a>. Comfortably seats 23-27 passengers.</p>
                            </li>
                            <li>
                                <strong class="font-lg gray-700 fw-bold d-block mb-2">Mini Bus (31-38
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
                    <div class="col-12 text-center pt-15">
                        <a href="#" class="btn btn-primary">Quick Quote </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10 text-center mb-15 mb-sm-20 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Us for <span class="theme-color">FIFA 2026 Transportation</span></h2>
                        <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    </div>
                    <div class="row align-items-center py-20">
                        <div class="col-12 col-md-6 pr-xl-50">
                            <h3 class="h5 fw-semibold">What is Lorem Ipsum?</h3>
                            <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries.</p>
                        </div>
                        <div class="col-12 col-md-6 h-100">
                            <div class="img-holder ms-md-auto">
                                <img src="{{ asset('new_assets/assets/fifa-cup-image.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center flex-row-reverse py-20">
                        <div class="col-12 col-md-6 pr-xl-50 mb-20">
                            <h3 class="h5 fw-semibold">Why do we use it?</h3>
                            <p class="font-base">It is a long established fact that a reader will be distracted by the
                                readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors.</p>
                            <a href="/about-us" class="btn btn-primary sm fw-medium">Learn
                                More</a>
                        </div>
                        <div class="col-12 col-md-6 h-100">
                            <div class="img-holder">
                                <img src="{{ asset('new_assets/assets/fifa-02.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                        <article class="custom-card d-flex flex-column w-100">
                            <span class="icon-holder mb-20">
                                <img src="{{ asset('new_assets/assets/icon-03.svg') }}" alt="Booking" class="img-fluid">
                            </span>
                            <h3 class="h3 fw-semibold">Book Online or Call</h3>
                            <p class="font-lg">Use our form or call to schedule your ride.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                        <article class="custom-card d-flex flex-column w-100">
                            <span class="icon-holder mb-20">
                                <img src="{{ asset('new_assets/assets/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                            </span>
                            <h3 class="h3 fw-semibold">Get Instant Confirmation</h3>
                            <p class="font-lg">Receive driver and trip details via text or email.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                        <article class="custom-card d-flex flex-column w-100">
                            <span class="icon-holder mb-20">
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
