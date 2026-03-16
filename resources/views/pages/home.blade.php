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
                    <h1 class="text-white h2 fw-bold mb-15">Premier Black Car Service Dallas</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Luxury black car and limo service in Dallas, TX. Professional chauffeurs for airport transfers, corporate travel, and special events. Serving Dallas, Plano, Frisco, Allen, and the entire DFW area.</p>
                       
                        <p class="text-white font-base d-flex align-items-center  mb-30 mb-md-0">
                            Call Now: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
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
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet <span class="theme-color fw-bold">Travel with Comfort and Class</span></h2>
                </div>
                <div class="col-12">
                    <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we provide a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style. Whether you need Dallas airport transportation, <a href="/airports/dfw-car-service/"><strong>DFW airport car service</strong></a>, corporate transportation, black car service, or group travel, our professionally maintained vehicles ensure a smooth and elegant travel experience.

Our fleet includes luxury sedans, black SUVs, executive sprinter vans, and spacious minibuses, all driven by professional chauffeurs dedicated to providing first-class service across Dallas and the DFW area.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            
                            <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans offer a refined and comfortable ride, ideal for business travelers or individuals who prefer privacy and sophistication. Vehicles like the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 deliver premium comfort and quiet luxury.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong> For passengers who require more space, our luxury SUVs such as the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors, smooth rides, and plenty of luggage capacity.
                            </p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Our Mercedes-Benz Sprinter Vans are perfect for group transportation. With spacious seating and modern interiors, they offer a comfortable travel solution for corporate groups and special occasions.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27
                                Passengers):</strong> Our luxury minibuses are designed for medium-sized groups who want comfort and convenience while traveling together. They provide comfortable seating and a smooth ride for events and group transportation.</p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base">   <strong class="font-lg gray-700 fw-bold">Mini Bus (31-38
                                Passengers):</strong> For larger groups, our spacious minibuses offer reliable and comfortable transportation with professional chauffeur service and well-maintained interiors.</p>
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
                        <img src="/img/dallas-black-car-service-dfw-love-field-airport-mobile.webp" class="img-fluid" alt="luxury black car service in Dallas Texas with professional chauffeur">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Reliable Black Car Service for DFW & Love Field Airport Transfers</h3>
                    <p class="font-base text-justify">Traveling to or from the airport should be smooth, comfortable, and stress-free. Our <a href="/services/airport-transfers-dallas/"><strong>reliable black car service for DFW Airport</strong></a> and Dallas Love Field Airport provides punctual, professional, and luxury transportation across the Dallas–Fort Worth area.

Whether you’re flying from DFW International Airport or Dallas Love Field Airport (DAL), our experienced chauffeurs ensure on-time pickups, efficient routes, and a premium travel experience. At Dallas Limo and Black Cars, we offer luxury sedans, executive SUVs, and spacious vehicles designed for comfort, privacy, and convenience.

Our Dallas airport black car service is ideal for business travelers, families, and corporate executives who need dependable airport transportation. We monitor flight arrivals and departures to guarantee timely pickups and drop-offs.

Serving Downtown Dallas, Plano, Frisco, Irving, McKinney, and the entire DFW metroplex, we deliver safe, private, and luxury airport transfers every time. </p>
                <a href="/booking/"
                        class="btn btn-primary sm fw-medium fifa-btn-full">Book Reliable Airport Car Service Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="premium Dallas limo and black car airport transfer service">
                    </div>
                </div>
            </div>
            
            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/dallas-corporate-black-car-chauffeur-service-mobile.webp" class="img-fluid" alt="DFW airport black car service luxury chauffeur pickup">
                    </div>
                </div>
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Executive Corporate Travel with professional chauffeur Service</h3>
                    <p class="font-base text-justify">For business professionals who value punctuality, comfort, and reliability, our executive corporate travel with <a href="/services/chauffeur-service-dallas/"><strong> professional chauffeur service</strong></a> offers premium transportation across the Dallas–Fort Worth area. At Dallas Limo and Black Cars, we specialize in corporate black car service in Dallas, providing luxury vehicles and experienced chauffeurs dedicated to delivering a seamless and professional travel experience.

Our Dallas corporate black car service is ideal for business meetings, executive transportation, corporate events, airport transfers, and VIP client pickups. Whether transportation is needed for a single executive or a team of professionals, our fleet of luxury sedans and executive SUVs ensures comfort, privacy, and efficiency.

Our professional chauffeurs prioritize punctuality, discretion, and reliability, making us a trusted choice for corporate travelers. Serving Dallas, Plano, Frisco, Irving, Richardson, and the greater DFW metroplex, we help professionals travel confidently and maintain a polished business image.
</p>
                    <a href="/booking/"
                        class="btn btn-primary sm fw-medium fifa-btn-full">Get Corporate Travel Quote Now</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-corporate-black-car-chauffeur-service.webp" class="img-fluid" alt="luxury chauffeur service for business meetings Dallas">
                    </div>
                </div>
            </div>
               <div class="py-20 row align-items-center">
                  <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/dallas-city-to-city-black-car-service-mobile.webp" class="img-fluid" alt="luxury sedan black car service Dallas Texas">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Private City-to-City Black Car Service from Dallas</h3>
                    <p class="font-base text-justify">Travel comfortably between cities with our <a href="/city-to-city-rides/"><strong>private city-to-city black car service from Dallas </strong></a>, designed for travelers who value luxury, privacy, and reliable long-distance transportation. At Dallas Limo and Black Cars, we provide professional chauffeur service for passengers seeking smooth, stress-free travel between Dallas and nearby cities across Texas and the DFW metroplex.

Our Dallas city-to-city black car service is ideal for business travelers, families, and individuals looking for a comfortable alternative to flights or rideshare services. Whether you're traveling from Dallas to Austin, Houston, Fort Worth, Plano, Frisco, McKinney, or surrounding cities, our luxury vehicles ensure a safe and relaxing journey.

Our fleet of luxury sedans and executive SUVs delivers comfort, privacy, and convenience for long-distance travel. With professional chauffeurs and dependable door-to-door transportation, we provide a seamless and reliable travel experience for every trip.</p>
                  <a href="/booking/"
                        class="btn btn-primary sm fw-medium fifa-btn-full">Book Your City-to-City Ride Today</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-city-to-city-black-car-service.webp" class="img-fluid" alt="stretch limousine service Dallas Texas luxury limo ride">
                    </div>
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
                           <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-01.png') }}" class="img-fluid" alt="Dallas limo and black car service partner company logo 1"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-02.png') }}" class="img-fluid" alt="Dallas private car service partner brand logo 2"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-03.png') }}" class="img-fluid" alt="chauffeur transportation partner company logo 3"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-04.png') }}" class="img-fluid" alt="Dallas executive transportation partner logo 4"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-05.png') }}" class="img-fluid" alt="luxury black car service partner logo 5"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-06.png') }}" class="img-fluid" alt="Dallas airport transportation partner brand logo 6"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-07.png') }}" class="img-fluid" alt="DFW luxury chauffeur service partner logo 7"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-08.png') }}" class="img-fluid" alt="Dallas limousine service partner company logo 8"></div>

<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-01.png') }}" class="img-fluid" alt="Dallas transportation partner logo brand 9"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-02.png') }}" class="img-fluid" alt="Dallas executive chauffeur partner logo 10"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-03.png') }}" class="img-fluid" alt="luxury private car service partner logo 11"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-04.png') }}" class="img-fluid" alt="Dallas corporate transportation partner brand logo 12"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-05.png') }}" class="img-fluid" alt="premium Dallas limo partner logo 13"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-06.png') }}" class="img-fluid" alt="Dallas black car chauffeur partner company logo 14"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-07.png') }}" class="img-fluid" alt="DFW executive travel partner brand logo 15"></div>
<div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-08.png') }}" class="img-fluid" alt="Dallas luxury transportation partner logo 16"></div>
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
                    <p class="font-base">Our Dallas Black Car Service connects you to the most popular cities and travel routes across Texas. Whether you're heading to Austin, Arlington, Waco, Tyler, or nearby destinations, our professional chauffeurs ensure smooth, punctual, and comfortable transportation. Enjoy reliable city-to-city black car service from Dallas with luxury vehicles, private travel, and a stress-free ride experience every time.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="img/black-car-service-austin.webp" alt="Top City" class="img-fluid">
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
                            <img src="img/black-car-service-college-station.webp" alt="Top City" class="img-fluid">
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
                            <img src="img/black-car-service-houston.webp" alt="Top City" class="img-fluid">
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
                            <img src="img/black-car-service-sherman.webp" alt="Top City" class="img-fluid">
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
                            <img src="img/black-car-service-tyler.webp" alt="Top City" class="img-fluid">
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
                            <img src="img/black-car-service-waco.webp" alt="Top City" class="img-fluid">
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

    <section class="py-40 py-sm-40 py-md-40 py-lg-50">
        <div class="ah-container">
            <div class="row justify-content-center align-items-center">
               
                <div class="col-12 col-md-7">
                      <h5 class="h2 fw-bold seciononeheading">Finest Corporate Travel Experience</h5>
                    <p class="font-base">Our Dallas Black Car Service provides a premium transportation solution designed for business professionals who value punctuality, comfort, and reliability. Whether you're heading to corporate meetings, conferences, business events, or airport transfers, our professional chauffeurs ensure a smooth and stress-free travel experience across the Dallas–Fort Worth area.

With our executive corporate black car service in Dallas, you can focus on your work while we take care of the journey. Our luxury vehicles offer privacy, comfort, and dependable service, making them ideal for executives, corporate teams, and business travelers who require reliable transportation.</p>
                    <ul class="mb-20 list-unstyled custom-unorder-list no-bullets pr-lg-80 mb-md-0">
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Professional chauffeurs trained for corporate travel.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Comfortable luxury vehicles for executive transportation.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Punctual service for meetings, events, and airport trips.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Private, safe, and stress-free business travel.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Reliable corporate transportation across Dallas.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-5">
                    @if ($message = session('success'))
                        <div class="alert alert-success alert-dismissible fade show mb-20" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($message = session('error'))
                        <div class="alert alert-danger alert-dismissible fade show mb-20" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form class="mx-auto news-letter-form me-md-0 px-15 py-25" action="{{ route('corporate_support_post') }}" method="post">
                        @csrf
                        <div class="text-center">
                            <h3 class="mb-0 font-base fw-bold">Need Corporate Support?</h3>
                            <p class="font-sm">Fill out the form and our team will take care of the rest</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="full_name" class="mb-1 form-label fw-medium">Full Name</label>
                                <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="" required>
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="email" class="mb-1 form-label fw-medium">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-15">
                                <label for="phone" class="mb-1 form-label fw-medium">Contact No</label>
                                <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-15">
                                <label for="message" class="mb-1 form-label fw-medium">Message</label>
                                <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" required></textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section bg-blue py-40 py-sm-40 py-md-40 py-lg-50">
        <div class="ah-container">
            <div class="row">
                <div class="mb-10 text-center col-12 mb-md-20">
                    <h2 class="text-white h2 fw-bold">What Our Executive Clients Are Saying</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="overflow-hidden bg-white swiper testimonial-slider py-30 py-lg-30">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                                <div class="testimonial-slider-item">
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block">James Anderson</cite>
                                    <span class="mb-10 text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="mb-0 text-center font-lg fw-medium">
                                          Excellent service from start to finish. Our driver arrived early for our DFW Airport pickup, and the ride was smooth and comfortable. Very professional chauffeur service. I’ll definitely book again.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                                <div class="testimonial-slider-item">
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Michael Thompson</cite>
                                    <span class="mb-10 text-center location fw-semibold font-lg d-block">Plano, TX</span>
                                    <blockquote class="mb-30">
                                        <p class="mb-0 text-center font-lg fw-medium">
                                           I use this Dallas black car service regularly for business meetings. The vehicles are always clean, the drivers are professional, and the service is reliable every time. Highly recommended for corporate travel.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                                <div class="testimonial-slider-item">
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Jennifer Miller</cite>
                                    <span class="mb-10 text-center location fw-semibold font-lg d-block">Frisco, TX</span>
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="mb-0 text-center font-lg fw-medium">
                                          Great experience with their airport black car service. My flight arrived late at Love Field Airport, but the driver was already waiting. The ride home was comfortable and stress-free.
                                        </p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                                <div class="testimonial-slider-item">
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block">David Wilson</cite>
                                    <span class="mb-10 text-center location fw-semibold font-lg d-block">Arlington, TX
</span>
                                    <blockquote class="mb-30">
                                        <p class="mb-0 text-center font-lg fw-medium">
                                           We booked their city-to-city black car service from Dallas to Austin, and the trip was fantastic. The car was luxurious, and the driver was courteous and professional throughout the journey.
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
                        <h2 class="accordion-header" id="accordion01-headingOne">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseOne"
                                aria-expanded="false" aria-controls="accordion01-collapseOne">
                               What areas does your Dallas black car service cover?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingOne">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Our Dallas black car service provides transportation throughout the Dallas–Fort Worth metro area, including Plano, Frisco, Arlington, Irving, McKinney, and surrounding cities. We also offer long-distance city-to-city transportation from Dallas.</p>
                            </div>
                        </div>
                    </div>
                    <!--one-->
                    
                          <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingTwo">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo"
                                aria-expanded="false" aria-controls="accordion01-collapseTwo">
                                Do you provide airport transfers to DFW and Love Field Airport?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingTwo">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Yes, we provide reliable airport black car service to DFW International Airport and Dallas Love Field Airport. Our professional chauffeurs ensure timely pickups and drop-offs for stress-free airport transportation.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!--Two-->
                       <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingThree">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree"
                                aria-expanded="false" aria-controls="accordion01-collapseThree">
                                Is your black car service available for corporate travel?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingThree">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Absolutely. Our corporate black car service in Dallas is designed for executives, business travelers, and corporate teams who require professional chauffeur transportation for meetings, events, and airport travel.</p>
                            </div>
                        </div>
                    </div>
                    
                 
                 
                         <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingFour">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour"
                                aria-expanded="false" aria-controls="accordion01-collapseFour">
                                Can I book city-to-city black car service from Dallas?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingFour">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Yes, we offer private city-to-city black car service from Dallas to destinations such as Austin, Houston, Waco, Tyler, and other nearby cities. Our luxury vehicles provide a comfortable long-distance travel experience.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!--eng four-->
                 <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder" id="accordionFive">
                         
                         <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingFive">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive"
                                aria-expanded="false" aria-controls="accordion01-collapseFive">
                                How do I book your Dallas black car service?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingFive">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">You can easily book our Dallas black car service online through our website or request a ride quote. Our team will confirm your reservation and provide professional chauffeur service for your trip.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!--eng-->
                         
                          <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingSix">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSix"
                                aria-expanded="false" aria-controls="accordion01-collapseSix">
                                What types of vehicles are available in your fleet?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingSix">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Our fleet includes luxury sedans, executive SUVs, sprinter vans, and mini buses designed for private transportation, corporate travel, airport transfers, and group transportation across Dallas.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- More accordion items... I'll include them all for completeness -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingSeven">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSeven"
                                aria-expanded="false" aria-controls="accordion01-collapseSeven">
                                Are your chauffeurs professionally trained?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingSeven">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Yes, all of our chauffeurs are licensed, experienced, and professionally trained to provide safe, reliable, and comfortable transportation for every passenger.</p>
                            </div>
                        </div>
                    </div>
                         <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingEight">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-15 py-lg-15 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseEight"
                                aria-expanded="false" aria-controls="accordion01-collapseEight">
                                Why choose your Dallas black car service?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingEight">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Our Dallas black car service offers luxury vehicles, professional chauffeurs, punctual service, and reliable transportation for airport transfers, corporate travel, and city-to-city trips across the Dallas–Fort Worth area.</p>
                            </div>
                        </div>
                    </div>
              <!--end-->
                     
                </div>
            </div>
        </div>
    </section>

@section('scripts')
<script>
// Show success/error alerts if messages exist
@if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector('.news-letter-form').reset();
        }
    });
@endif

@if (session('error'))
    Swal.fire({
        title: 'Error!',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
@endif
</script>
@endsection

@endsection
