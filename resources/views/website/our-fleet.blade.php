@extends('master')

@section('content')
      
      <section class="d-md-none">
    <div class="ah-container">
        <div class="search-form-mobile">
            @include('partials.search', ['id_suffix' => '_mobile'])
        </div>
    </div>
</section>

{{-- Banner: text (and desktop form) --}}
<section class="home-banner-section">
    <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
         style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

        <div class="row" style="pointer-events: none;">
            <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                <h1 class="text-white h2 fw-bold mb-15">Our Luxury Fleet</h1>
                <div class="d-none d-md-block">
                    <p class="text-white font-lg fw-medium mb-30">Explore our luxury fleet in Dallas featuring premium sedans, black SUVs, executive sprinter vans, and spacious minibuses for airport transfers, chauffeur service, private car service, limousine transportation, and city-to-city rides across Dallas and nearby areas.</p>
 
                    <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                        Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a>
                    </p>
                </div>
            </div>
            <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                <div class="search-form-wrapper-desktop">
                    @include('partials.search', ['id_suffix' => '_form'])
                </div>
            </div>
        </div>
    </div>
    @include('partials.hero_banner_styles')
</section>


     <section class="fleet-section py-40 py-sm-50 py-md-50 py-lg-50">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-xl-10">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet –  <span class="theme-color fw-bold">Premium Vehicles for Every Ride</span></h2>
                </div>
                <div class="col-12">
                    <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we offer a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style for every trip. Whether you need airport transportation, chauffeur service, executive travel, private car service, limousine service, or group transportation, our professionally maintained vehicles ensure a smooth and stress-free ride. Our fleet includes luxury sedans, black SUVs, and spacious minibuses, all driven by professional chauffeurs dedicated to providing first-class transportation across Dallas and nearby areas.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans provide a quiet and comfortable ride, ideal for business travelers, airport passengers, and private clients across Dallas, Plano, Frisco, Irving, and nearby cities. Vehicles such as the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 deliver premium comfort and privacy.</p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong>  For travelers needing extra space or luggage capacity, our luxury SUVs including the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors and smooth rides for reliable airport transportation, corporate service, and private city travel.
                            </p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Perfect for group airport transfers, corporate teams, family transportation, and event travel, our Mercedes-Benz Sprinter Vans offer spacious seating and modern interiors for comfortable group service.</p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27
                                Passengers):</strong> Our luxury minibuses are ideal for medium-sized groups traveling for airport pickups, conferences, weddings, sports events, and private group transportation throughout the Dallas–Fort Worth metroplex.</p>
                        </li>
                        <li>
                            <p class="justify-mobile font-base">   <strong class="font-lg gray-700 fw-bold">Mini Bus (31-38
                                Passengers):</strong> For larger groups, our spacious minibuses provide dependable transportation with professional chauffeur service, comfortable interiors, and organized travel for events and long-distance trips.</p>
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
                    <a href="/booking/" class="btn btn-primary fifa-btn">Book Your Chauffeur Service Now </a>
                </div>
            </div>
        </div>
    </section>
   
   
<section class="fifa-main-banner only-m" style="
    background: url(/img/black-car-service-for-fifa-world-cup-2026-mobile.webp) center top;
">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="fifa-btns">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="fifa-main-banner only-d" style="
    background: url(/img/black-car-service-for-fifa-world-cup-2026.webp) center top;
">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="fifa-btns">
                </div>
            </div>
        </div>
    </div>
</section>
   
<div class="container text-center here-fifa">
 <div class="row">
         <div class="col-md-12">
              <div class="fifa-btnss">  
            <a href="/fifa-world-cup-2026-car-service-dallas/" class="btn btn-primary fifa-btn">Visit FIFA World Cup 2026 Page</a>
            </div>
            </div>
            </div>
    </div>
    
    

        <section class="detail-content-section bg-gray py-40 py-sm-50 py-md-50 py-lg-40 seciononeheading">
        <div class="ah-container">
            
            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/dallas-black-car-service-dfw-love-field-airport-mobile.webp" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Executive Sedans for Private and Corporate Travel</h3>
                    <p class="font-base text-justify">Our luxury sedan fleet provides reliable and professional transportation for travelers who value comfort, privacy, and punctuality. Whether you are heading to DFW Airport, Dallas Love Field, a business meeting, or a private appointment, our executive sedans deliver a refined travel experience. At Dallas Limo and Black Cars, we use premium vehicles designed for smooth rides, quiet interiors, and high-end comfort throughout Dallas and surrounding areas.

Our sedan service is ideal for travelers coming from Downtown Dallas, Plano, Frisco, Irving, Arlington, McKinney, and nearby cities who need dependable transportation for personal and business travel. With professional chauffeurs, door-to-door service, and luxury interiors, our fleet provides the perfect combination of convenience, comfort, and executive style for every reservation.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Luxury Sedan Service Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="">
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
                    <h3 class="h5 fw-semibold">Black SUVs for Comfortable and Spacious Travel</h3>
                    <p class="font-base text-justify">When extra space and comfort matter, our black SUV fleet is the ideal choice for premium transportation in Dallas. Our luxury SUVs are perfect for airport pickups, executive rides, hotel transportation, family travel, and private reservations that require additional luggage capacity and a more spacious interior. We understand that many travelers want both reliability and room to travel comfortably.

Our professional chauffeurs use our SUV fleet for smooth pickups and drop-offs across Dallas, Plano, Frisco, Arlington, Irving, and the wider Dallas–Fort Worth region. Whether you need transportation from a home, office, hotel, airport, or event venue, our black SUVs offer privacy, flexibility, and dependable performance for travelers, families, executives, and visitors seeking premium service.
</p>
                    <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Reserve Black SUV Service Now</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-corporate-black-car-chauffeur-service.webp" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="py-20 row align-items-center">
                  <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/dallas-city-to-city-black-car-service-mobile.webp" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Sprinter Vans and Minibuses for Group Transportation</h3>
                    <p class="font-base text-justify">Traveling with a group should still feel organized, comfortable, and professional. Our executive sprinter vans and minibuses offer premium transportation for corporate teams, wedding guests, airport groups, conference attendees, sports travel, and event transportation across Dallas and nearby cities. At Dallas Limo and Black Cars, we provide group vehicle options that help clients travel together without sacrificing comfort or reliability.

Our larger fleet vehicles include spacious seating, modern interiors, and professional chauffeur support for local and long-distance transportation. Whether you are planning airport transfers, private events, or group city-to-city rides from Dallas, our sprinter vans and minibuses provide a practical and luxury-focused solution for coordinated group travel.</p>
                  <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Group Transportation Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-city-to-city-black-car-service.webp" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="where-we-serve-section bg-gray pt-40 pb-25 pt-sm-40 pb-sm-35 pt-md-40 pb-md-40 pt-lg-40 pb-lg-40">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-lg-20 seciononeheading">Where we serve</h2>
                        <p class="font-base">Our Dallas luxury fleet supports professional chauffeur transportation across the Dallas–Fort Worth metroplex, connecting travelers to airports, cities, business districts, hotels, neighborhoods, and major entertainment venues.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <article class="we-serve-item custom-card mb-30 mb-md-35">
                            <div class="img-holder">
                                <img src="/img/affordable-dallas-limousine-service-with-chauffeur.webp" alt="" class="img-fluid">
                            </div>
                            <div class="text-detail">
                                <h3 class="mb-10 h4 fw-semibold">Cities & Regional Communities</h3>
                                <p class="mb-0 font-base">We proudly serve Dallas, Fort Worth, Plano, Frisco, McKinney, Allen, Arlington, and Irving, providing reliable black car transportation across major cities and nearby communities.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <article class="we-serve-item custom-card mb-30 mb-md-35">
                            <div class="img-holder">
                                <img src="/img/dfw-airport-limo-and-black-car-service-dallas.webp" alt="" class="img-fluid">
                            </div>
                            <div class="text-detail">
                                <h3 class="mb-10 h4 fw-semibold">Airports & Aviation Access</h3>
                                <p class="mb-0 font-base">We provide airport transfers to DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, and Fort Worth Alliance Airport.</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                        <article class="we-serve-item custom-card mb-30 mb-md-35">
                            <div class="img-holder">
                                <img src="/img/luxury-dallas-limo-and-black-car-service.webp" alt="" class="img-fluid">
                            </div>
                            <div class="text-detail">
                                <h3 class="mb-10 h4 fw-semibold">Corporate & Lifestyle Zones</h3>
                                <p class="mb-0 font-base">Our service connects travelers to Downtown Dallas, Legacy West Plano, The Star Frisco, Las Colinas Irving, Dallas Arts District, and Preston Hollow.</p>
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
                                <p class="mb-0 font-base">We provide transportation to AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    
    
       <section class="py-40 py-lg-40">
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
    
    
    
         <section
        class="intercity-ride-section bg-gray pt-40 pb-30 pt-sm-40 pb-sm-35 pt-md-40 pb-md-40 pt-lg-40 pb-lg-40">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Top Cities & <span class="theme-color">Top
                            Routes</span></h2>
                    <p class="font-base">Our Dallas luxury fleet connects you to the most popular cities and travel routes across Texas. Whether you're heading to Austin, Arlington, Waco, Tyler, or nearby destinations, our professional chauffeurs ensure smooth, punctual, and comfortable transportation. Enjoy reliable city-to-city black car service from Dallas with luxury vehicles, private travel, and a stress-free ride experience every time.</p>
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
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
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
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
    
 
     <section class="testimonial-section bg-blue py-40 py-sm-40 py-md-40 py-lg-50">
    <div class="ah-container">
        <div class="row">
            <div class="mb-10 text-center col-12 mb-md-20">
                <h2 class="text-white h2 fw-bold">What Clients Say About Our Luxury Fleet</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="overflow-hidden bg-white swiper testimonial-slider py-30 py-lg-30">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Ryan Peterson</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        Excellent luxury vehicle selection in Dallas. The sedan was spotless, comfortable, and perfect for my airport ride. Highly professional chauffeur service from start to finish.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Laura Mitchell</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">Plano, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        Reliable and impressive fleet. We booked a black SUV for airport transportation and the ride was smooth, spacious, and very comfortable for our family.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Christopher Adams</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">Frisco, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        I regularly use their executive vehicles for business trips. Always clean, punctual, and professional. One of the best luxury transportation fleets in the Dallas area.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Jessica Carter</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">Arlington, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        Fantastic group transportation experience. The sprinter van was comfortable, clean, and perfect for our event travel. Very professional fleet and chauffeur service.
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

<section class="faqs-section py-40 py-sm-40 py-md-50 py-lg-50">
    <div class="ah-container">
        <div class="row">
            <div class="text-center col-12 mb-20 mb-md-15 mb-lg-20">
                <h2 class="h2 fw-bold seciononeheading">Frequently Asked <span class="theme-color">Questions</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder" id="accordion01">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseOne">
                            What types of vehicles are included in your luxury fleet?
                        </button>
                    </h2>
                    <div id="accordion01-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our fleet includes luxury sedans, black SUVs, executive sprinter vans, mini buses, and group transportation vehicles for airport transfers, private rides, and corporate travel.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo">
                            Which vehicle is best for airport transportation?
                        </button>
                    </h2>
                    <div id="accordion01-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Luxury sedans and black SUVs are ideal for airport transportation, while sprinter vans and minibuses work best for families, corporate teams, and larger groups.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree">
                            Is your fleet available for corporate travel?
                        </button>
                    </h2>
                    <div id="accordion01-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, our luxury fleet is ideal for executives, business travelers, and corporate teams needing professional chauffeur transportation for meetings, airport transfers, and events.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour">
                            Do you offer vehicles for group transportation?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we offer executive sprinter vans and minibuses for weddings, airport groups, conferences, sports travel, and other private or corporate group transportation needs.
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive">
                            Are your vehicles professionally maintained?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, every vehicle in our fleet is professionally maintained, cleaned, and prepared to deliver safe, reliable, and comfortable transportation throughout Dallas and nearby cities.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSix">
                            Can I book a specific type of vehicle?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, you can request a sedan, SUV, sprinter van, or minibus based on your travel needs, passenger count, luggage requirements, and service type.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSeven">
                            Are chauffeurs included with every fleet reservation?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, our fleet reservations include professional chauffeurs who are experienced, courteous, and trained to provide premium transportation service across Dallas and surrounding areas.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseEight">
                            Why choose your Dallas luxury fleet?
                        </button>
                    </h2>
                    <div id="accordion01-collapseEight" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our Dallas luxury fleet offers premium vehicles, professional chauffeurs, reliable transportation, and flexible options for airport service, business travel, private rides, and group transportation.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    
    
@endsection