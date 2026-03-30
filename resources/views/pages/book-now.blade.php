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
        <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h2 fw-bold mb-15">Start Your Booking Now</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Reserve your premium black car or limousine service in Dallas. Professional chauffeurs available 24/7 for airport transfers, corporate travel, and special events.</p>
                       
                        <p class="text-white font-base d-flex align-items-center  mb-30 mb-md-0">
                            Need help? Call us: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
                                214-897-8056</a>
                        </p>
                    </div>
                </div>
                <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                    <!-- Booking Form -->
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search', ['id_suffix' => ''])
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media (max-width: 767px) {
                #hero-banner-container {
                    min-height: 300px !important;
                    height: 300px !important;
                    background-size: cover !important;
                    background-position: center center !important;
                    background-repeat: no-repeat !important;
                    display: flex !important;
                    align-items: center !important;
                    justify-content: center !important;
                }
                #hero-banner-container .row {
                    width: 100%;
                    margin: 0;
                    justify-content: center !important;
                    align-items: center !important;
                }
                #home-text-content {
                    justify-content: center !important;
                    align-items: center !important;
                    text-align: center !important;
                }
                #home-text-content h1 {
                    text-align: center !important;
                    white-space: nowrap !important;
                }
            }
            @media (min-width: 768px) {
                #hero-banner-container {
                    min-height: 570px;
                }
                #home-text-content {
                    margin-top: 130px;
                }
                .search-form-wrapper-desktop {
                    position: absolute;
                    width: 100%;
                    z-index: 10;
                }
            }
        </style>
    </section>

    <section class="fleet-section py-40 py-sm-50 py-md-50 py-lg-50">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-xl-10">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Choose From Our Premium Fleet</h2>
                </div>
                <div class="col-12">
                    <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we provide a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style. Select the perfect vehicle for your journey and experience world-class service with professional chauffeurs dedicated to your satisfaction.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 offer refined comfort and privacy. Perfect for business travelers and executives.</p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong> Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors and smooth rides for families and groups.
                            </p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Mercedes-Benz Sprinter Vans perfect for corporate teams and group transportation with spacious seating and modern interiors.</p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27 Passengers):</strong> Designed for medium-sized groups with comfortable seating and convenient amenities.</p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold">Mini Bus (31-38 Passengers):</strong> Perfect for large groups with spacious interiors and reliable <a href="/services/chauffeur-service-dallas/"><strong>professional chauffeur service</strong></a>.</p>
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
                    <a href="#" onclick="document.querySelector('.search-form-wrapper-desktop').scrollIntoView({behavior: 'smooth'});" class="btn btn-primary fifa-btn">Select Your Vehicle & Book Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="detail-content-section bg-gray py-40 py-sm-50 py-md-50 py-lg-40 seciononeheading">
        <div class="ah-container">
            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/executive-sedan-service-dallas-mobile.webp" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Why Book With Dallas Limo and Black Cars?</h3>
                    <p class="font-base text-justify">When you choose our service, you get more than just a ride — you get complete peace of mind knowing you’re traveling with experienced chauffeurs and premium luxury vehicles. We proudly serve the entire Dallas–Fort Worth area, providing reliable transportation services available 24/7 to meet your schedule and travel needs. Our booking process is simple, secure, and fully transparent, ensuring there are no hidden fees or unexpected charges. We offer competitive pricing, real-time ride tracking, and flexible scheduling options for maximum convenience. Whether you need airport transfers, corporate transportation, special event services, or city-to-city travel, we deliver a smooth and stress-free experience. Our commitment to safety, punctuality, and exceptional customer service makes us a trusted choice for <a href="https://dallaslimoandblackcars.com/"><strong>black car service in Dallas</strong></a>.</p>
                    <a href="#" onclick="document.querySelector('.search-form-wrapper-desktop').scrollIntoView({behavior: 'smooth'});" class="btn btn-primary sm fw-medium fifa-btn-full">Complete Your Booking</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/executive-sedan-service-dallas.webp" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            
            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/dallas-corporate-black-car-chauffeur-service-mobile.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Professional Service at Every Step</h3>
                    <p class="font-base text-justify">Our professional chauffeurs are highly trained, experienced, and dedicated to delivering exceptional service at every stage of your journey. From the moment you book your ride until you reach your final destination, we focus on every detail to ensure a seamless and comfortable experience. Your safety, comfort, and satisfaction are always our top priorities. We maintain our luxury fleet to the highest standards with regular inspections, deep cleaning, and ongoing maintenance to guarantee reliability and performance. Each vehicle is equipped with modern amenities, including Wi-Fi, USB charging ports, complimentary bottled water, and premium sound systems for your convenience. Whether you are traveling for business, airport transfers, or special events, our service reflects true professionalism. Experience luxury, reliability, and personalized care with our trusted Dallas black car service.</p>
                    <a href="#" onclick="document.querySelector('.search-form-wrapper-desktop').scrollIntoView({behavior: 'smooth'});" class="btn btn-primary sm fw-medium fifa-btn-full">Book Your Ride Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-corporate-black-car-chauffeur-service.webp" class="img-fluid" alt="">
                    </div>
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
                        <h3 class="h3 fw-semibold">Easy Booking</h3>
                        <p class="font-lg">Complete your reservation in minutes with our simple online form above.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="mb-20 icon-holder">
                            <img src="{{ asset('new_assets/assets/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Instant Confirmation</h3>
                        <p class="font-lg">Receive immediate confirmation with driver details via email or SMS.</p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="mb-20 icon-holder">
                            <img src="{{ asset('new_assets/assets/icon-01.svg') }}" alt="Driver" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Professional Arrival</h3>
                        <p class="font-lg">Your certified chauffeur arrives on-time with a pristine luxury vehicle.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

<section class="intercity-ride-section bg-gray pt-40 pb-30 pt-sm-40 pb-sm-35 pt-md-40 pb-md-40 pt-lg-40 pb-lg-40">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Top Cities &amp; <span class="theme-color">Top
                            Routes</span></h2>
                    <p class="font-base">Our Dallas Black Car Service connects you to the most popular cities and travel routes across Texas. Whether you're heading to Austin, Arlington, Waco, Tyler, or nearby destinations, our professional chauffeurs ensure smooth, punctual, and comfortable transportation. Enjoy reliable city-to-city black car service from Dallas with luxury vehicles, private travel, and a stress-free ride experience every time.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="/img/black-car-service-austin.webp" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                           <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Austin
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">195 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 54m</p>
                             </div>
                            </div>
                            
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="/img/black-car-service-college-station.webp" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                      <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                College Station
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">181 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 46m</p>
                             </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="/img/black-car-service-houston.webp" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                          
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Houston
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">239 miles &nbsp;&nbsp;|&nbsp;&nbsp; 3h 24m</p>
                             </div>
                            </div>
                            
                            
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="/img/black-car-service-sherman.webp" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 Sherman
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">65.2 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1h 56m</p>
                             </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="/img/black-car-service-tyler.webp" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                             <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Tyler
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">98 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1h 34m</p>
                             </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="/img/black-car-service-waco.webp" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                              <div class="row">
                           <div class="col-md-6 col-sm-6">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Waco
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">93.8 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1h 23m</p>
                             </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    
    
    
    @include('partials.companies_strip')
    @include('partials.testimonials')
    @include('partials.fifa')
    @include('partials.faq')
@endsection
