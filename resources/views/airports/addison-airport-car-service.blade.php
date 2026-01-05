@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">

<section class="home-banner-section">
    <div class="ah-container position-relative py-60 py-sm-70 py-md-80 py-lg-100"
        style="background-image: url({{ asset('new_assets/assets/banner-4.jpg') }});">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <h1 class="h1 fw-bold mb-15 text-white">Black Car Service Dallas</h1>
                <p class="font-lg fw-medium text-white mb-30">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, when an unknown printer tooks,</p>
                <span class="font-base text-white">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call
                        Now</strong></span>
                <p class="font-base text-white d-flex align-items-center mb-30 mb-md-0">
                    Call: <a href="tel:+12148978056" class="fw-bold font-lg mx-2 theme-color">+1
                        214-897-8056</a>
                </p>
            </div>
            <div class="col-12 col-md-6">
                 <div class="distance-form-holder">
                    @include('search_form')
                </div>
            </div>
        </div>
        <!-- Map container for functionality -->
        <div id="map" style="display: none;"></div>
        <div id="route-info-box" style="display: none;"></div>
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
            <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Us for <span
                        class="theme-color">Airport Transfers</span></h2>
                <p class="font-base">Traveling to or from the airport should be safe & stress-free. We make sure
                    your journey is smooth, whether you’re catching an early flight or arriving late at night.
                    Our goal is to give you comfort, reliability & peace of mind every time.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <ul class="custom-unorder-list pl-0">
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
                    <img src="{{ asset('new_assets/assets/airport-transfer.JPG') }}" class="img-fluid" alt="">
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
<section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Our <span class="theme-color"> Black
                        Car Service?</span></h2>
                <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
        </div>
        <div class="row align-items-center py-20">
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">What sets our service apart from others?</h3>
                <p class="font-base">We focus on well-maintained vehicles and trained drivers for smooth
                    rides. Every detail, from pickup timing to vehicle comfort, is handled with care. Our
                    service values <strong>safety and calm travel</strong> for every passenger.</p>
            </div>
            <div class="col-12 col-md-6 h-100">
                <div class="img-holder ms-md-auto">
                    <img src="{{ asset('new_assets/assets/image-01.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="row align-items-center flex-row-reverse py-20">
            <div class="col-12 col-md-6 pr-xl-50 mb-20">
                <h3 class="h5 fw-semibold">Why do business travelers rely on us?</h3>
                <p class="font-base">Corporate clients trust our Black Car Service for its reliability and
                    professional standards. Quiet rides allow focus and privacy, while drivers respect
                    schedules and understand business needs. In Dallas, we support meetings, events, and
                    executive travel with consistent, high-quality service.</p>
                <a href="/about-us"
                    class="btn btn-primary sm fw-medium">Learn
                    More</a>
            </div>
            <div class="col-12 col-md-6 h-100">
                <div class="img-holder">
                    <img src="{{ asset('new_assets/assets/image-02.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="where-we-serve-section bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10 text-center mb-25 mb-md-30 mb-lg-40">
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
                        <h3 class="h4 fw-semibold mb-10">Cities & Regional Communities</h3>
                        <p class="font-base mb-0">We proudly serve major cities like Dallas and Fort Worth, along with
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
                        <h3 class="h4 fw-semibold mb-10">Airports & Aviation Access</h3>
                        <p class="font-base mb-0">DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport, and VIP FBO Terminals.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder">
                        <img src="{{ asset('new_assets/assets/image-07.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="text-detail">
                        <h3 class="h4 fw-semibold mb-10">Corporate & Lifestyle Zones</h3>
                        <p class="font-base mb-0">Legacy West (Plano), The Star (Frisco), Downtown Dallas, Las Colinas (Irving), Dallas Arts District, and Preston Hollow.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder">
                        <img src="{{ asset('new_assets/assets/image-08.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="text-detail">
                        <h3 class="h4 fw-semibold mb-10">Sports & Entertainment Venues</h3>
                        <p class="font-base mb-0">AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="py-40 py-lg-50">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="swiper logo-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-01.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-02.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-03.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-04.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-05.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-06.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-07.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-08.png') }}" class="img-fluid"></div>

                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-01.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-02.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-03.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-04.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-05.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-06.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-07.png') }}" class="img-fluid"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-08.png') }}" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-section bg-blue py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row">
            <div class="col-12 text-center mb-10 mb-md-20">
                <h2 class="h2 fw-bold text-white">Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper testimonial-slider py-50 py-lg-80 bg-white overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-30 px-sm-50 px-lg-80">
                            <div class="testimonial-slider-item">
                                <cite class="name fw-bold mb-2 text-capitalize text-center d-block">Sarah
                                    Thompson</cite>
                                <span class="location fw-semibold mb-20 font-lg text-center d-block">Dallas,
                                    TX</span>
                                <blockquote class="mb-30">
                                    <!-- <span class="quote">“</span> -->
                                    <p class="font-lg fw-medium text-center mb-0">
                                        I booked a Black Car Service Dallas for an important business meeting.
                                        The
                                        car was luxurious and quiet, and I could prepare for my presentation
                                        during
                                        the ride. Everything was smooth and on time.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide px-30 px-sm-50 px-lg-80">
                            <div class="testimonial-slider-item">
                                <cite class="name fw-bold mb-2 text-capitalize text-center d-block"> Rajiv
                                    Patel</cite>
                                <span class="location fw-semibold mb-20 font-lg text-center d-block">Fort Worth,
                                    TX</span>
                                <blockquote class="mb-30">
                                    <p class="font-lg fw-medium text-center mb-0">
                                        Driver Michael was excellent—friendly, professional, and attentive. He
                                        drove
                                        us from DFW Airport to our hotel in Dallas, and the ride was comfortable
                                        and
                                        stress-free. I will definitely use this service again.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide px-30 px-sm-50 px-lg-80">
                            <div class="testimonial-slider-item">
                                <cite class="name fw-bold mb-2 text-capitalize text-center d-block">Sarah
                                    Thompson</cite>
                                <span class="location fw-semibold mb-20 font-lg text-center d-block">Dallas,
                                    TX</span>
                                <blockquote class="mb-30">
                                    <!-- <span class="quote">“</span> -->
                                    <p class="font-lg fw-medium text-center mb-0">
                                        I booked a Black Car Service Dallas for an important business meeting.
                                        The
                                        car was luxurious and quiet, and I could prepare for my presentation
                                        during
                                        the ride. Everything was smooth and on time.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide px-30 px-sm-50 px-lg-80">
                            <div class="testimonial-slider-item">
                                <cite class="name fw-bold mb-2 text-capitalize text-center d-block"> Rajiv
                                    Patel</cite>
                                <span class="location fw-semibold mb-20 font-lg text-center d-block">Fort Worth,
                                    TX</span>
                                <blockquote class="mb-30">
                                    <p class="font-lg fw-medium text-center mb-0">
                                        Driver Michael was excellent—friendly, professional, and attentive. He
                                        drove
                                        us from DFW Airport to our hotel in Dallas, and the ride was comfortable
                                        and
                                        stress-free. I will definitely use this service again.
                                    </p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gray py-30 d-md-none">
    <div class="ah-container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="fifa-image-holder">
                    <img src="{{ asset('new_assets/assets/fifa-image.png') }}" class="img-fluid" alt="FIFA Image">
                </div>
                <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World Cup 2026
                    page</a>
            </div>
        </div>
    </div>
</section>
@include('partials.faq_section')
@section('body-scripts')
<script src="{{ asset('js/industrie-custom.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endsection
@endsection
