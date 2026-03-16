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
                <h1 class="text-white h2 fw-bold mb-15">About Dallas Limo and Black Cars</h1>
                <div class="d-none d-md-block">
                    <p class="text-white font-lg fw-medium mb-30">Dallas Limo and Black Cars is a trusted provider of luxury transportation in Dallas, offering professional chauffeur service, airport transfers, private car service, limousine service, and city-to-city rides with comfort, reliability, and local expertise throughout Dallas and nearby areas.</p>
 
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


<section class="detail-content-section bg-gray py-40 py-sm-40 py-md-40 py-lg-50">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">About Our <span class="theme-color">Luxury Transportation Company</span></h2>
                <p class="font-base">Dallas Limo and Black Cars delivers professional black car and limousine service for travelers, families, executives, and groups who expect dependable transportation in Dallas, Fort Worth, Plano, Frisco, Irving, Arlington, and surrounding communities across the Dallas–Fort Worth metroplex.</p>
            </div>
        </div>
        <div class="py-20 row align-items-center">
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Professional Chauffeur Service Built on Reliability</h3>
                <p class="font-base text-justify">At Dallas Limo and Black Cars, our mission is simple: provide luxury transportation with professionalism, punctuality, and personalized care. We have built our reputation by serving clients who need dependable airport transfers, executive travel, private car service, and limousine transportation across Dallas and nearby cities. Every ride is handled with attention to comfort, timing, and customer satisfaction from reservation to final drop-off.

Whether you are booking a <a href="/services/airport-transfers-dallas/"><strong>black car to DFW Airport</strong></a>, arranging transportation for a business meeting in Downtown Dallas, or planning group travel from Plano, Frisco, Arlington, or Irving, our experienced chauffeurs and premium fleet are ready to deliver a smooth and stress-free travel experience.</p>
                    
                <ul>
                    <li>Professional and courteous chauffeurs.</li>
                    <li>Luxury vehicles maintained to high standards.</li>
                    <li>Reliable service across Dallas and nearby cities.</li>
                    <li>On-time pickups for business and airport travel.</li>
                    <li>Comfortable private transportation for every occasion.</li>
                </ul>    
            </div>
            <div class="col-12 col-md-6 h-100">
                <div class="why-imgs">
                    <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="Dallas airport limousine transfer service to DFW airport">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fleet-section py-40 py-sm-50 py-md-50 py-lg-50">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-xl-10">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet – <span class="theme-color fw-bold">Premium Vehicles for Every Ride</span></h2>
            </div>
            <div class="col-12">
                <p class="font-base justify-mobile">At Dallas Limo and Black Cars, our luxury fleet is selected to meet the transportation needs of business travelers, airport passengers, families, and private clients throughout Dallas and the surrounding DFW area. Whether you need <a href="https://dallaslimoandblackcars.com/"><strong>black car service</strong></a>, chauffeur transportation, airport transfers, limousine service, or group travel, our professionally maintained vehicles are designed to deliver comfort, style, and reliability on every trip.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>
                        <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans are ideal for <a href="/services/private-car-service-in-dallas/"><strong>private car service</strong></a>, airport transfers, and corporate transportation in Dallas. Vehicles such as the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 offer premium comfort, privacy, and a refined ride experience.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold">Black SUVs:</strong> For travelers who prefer additional space and versatility, our luxury SUVs including the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide comfort, luggage capacity, and smooth transportation across Dallas and nearby cities.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold">Executive Sprinter Vans:</strong> Perfect for corporate groups, family transportation, and event travel, our Mercedes-Benz Sprinter Vans offer spacious seating and modern interiors for premium group service throughout the Dallas–Fort Worth metroplex.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold">Mini Bus Luxury Bus (23-27 Passengers):</strong> Our luxury minibuses are a practical option for medium-sized groups needing dependable transportation for airport pickups, events, conferences, weddings, and city-to-city rides in Texas.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold">Mini Bus (31-38 Passengers):</strong> For larger groups, our spacious minibuses provide reliable and organized transportation with professional chauffeur support and comfortable interiors for longer and local trips.</p>
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
               <div class="fifa-btns"></div>
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
               <div class="fifa-btns"></div>
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
                    <img src="/img/dallas-black-car-service-dfw-love-field-airport-mobile.webp" class="img-fluid" alt="luxury car service from Dallas to DFW International Airport">
                </div>
            </div>
                
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Who We Serve Across Dallas and Nearby Areas</h3>
                <p class="font-base text-justify">Dallas Limo and Black Cars proudly serves a wide range of clients who need professional and dependable luxury transportation. Our services are trusted by corporate travelers, local residents, visitors, families, event planners, and groups looking for <a href="/services/private-car-service-in-dallas/"><strong> private car service</strong></a>, airport transportation, limousine service, and executive chauffeur service in Dallas and surrounding cities.

From Downtown Dallas and Uptown to Plano, Frisco, Arlington, Irving, McKinney, Addison, Las Colinas, and nearby communities, we provide tailored transportation solutions based on comfort, timing, and service quality. Whether the ride is local or long distance, our team focuses on professional service and a smooth customer experience.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Reliable Black Car Service Today</a>
            </div>
            <div class="col-12 col-md-6 h-100 only-d">
                <div class="service-image">
                    <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="professional chauffeur airport pickup Dallas TX">
                </div>
            </div>
        </div>
            
        <div class="flex-row-reverse py-20 row align-items-center">
            <div class="col-12 col-md-6 h-100 only-m">
                <div class="service-image">
                    <img src="/img/dallas-corporate-black-car-chauffeur-service-mobile.webp" class="img-fluid" alt="private airport transfer Dallas black car service">
                </div>
            </div>
            <div class="mb-20 col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Why Clients Choose Dallas Limo and Black Cars</h3>
                <p class="font-base text-justify">Clients choose our Dallas black car and limousine service because we combine local knowledge, premium vehicles, and professional chauffeur standards with a strong focus on reliability. We understand that transportation is not only about reaching a destination, but also about arriving comfortably, safely, and on schedule for airport travel, business appointments, special events, and private trips.

Our team is committed to delivering consistent service quality for every reservation. From airport pickups at  <a href="/texas/black-car-service-plano-tx/"><strong>DFW and Love Field to executive travel in Plano</strong></a>, Frisco, Irving, and Arlington, we provide transportation that reflects professionalism, privacy, comfort, and attention to detail for every client we serve.
</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Get a Quote for Luxury Transportation</a>
            </div>
            <div class="col-12 col-md-6 h-100 only-d">
                <div class="service-image">
                    <img src="/img/dallas-corporate-black-car-chauffeur-service.webp" class="img-fluid" alt="executive corporate black car service Dallas TX">
                </div>
            </div>
        </div>

        <div class="py-20 row align-items-center">
            <div class="col-12 col-md-6 h-100 only-m">
                <div class="service-image">
                    <img src="/img/dallas-city-to-city-black-car-service-mobile.webp" class="img-fluid" alt="luxury chauffeur service for business meetings Dallas">
                </div>
            </div>
                
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Luxury Transportation with Local Dallas Expertise</h3>
                <p class="font-base text-justify">Our company is built around the needs of travelers who value dependable service and local expertise. Dallas Limo and Black Cars understands the routes, airports, corporate districts, hotels, stadiums, and neighborhoods that matter most to clients throughout the Dallas–Fort Worth region. This local knowledge helps us provide efficient transportation for airport transfers, private rides, and city-to-city travel.

With a luxury fleet, experienced chauffeurs, and a service-first approach, we continue to serve Dallas and nearby areas with transportation designed for convenience and peace of mind. Every reservation is handled with professionalism so our clients can travel with confidence for business, leisure, and special occasions.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Reserve Your Luxury Ride Now</a>
            </div>
            <div class="col-12 col-md-6 h-100 only-d">
                <div class="service-image">
                    <img src="/img/dallas-city-to-city-black-car-service.webp" class="img-fluid" alt="corporate transportation service Dallas Fort Worth">
                </div>
            </div>
        </div>
            
    </div>
</section>


<section class="where-we-serve-section bg-gray pt-40 pb-25 pt-sm-40 pb-sm-35 pt-md-40 pb-md-40 pt-lg-40 pb-lg-40">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-lg-20 seciononeheading">Where We Serve</h2>
                <p class="font-base">Dallas Limo and Black Cars provides luxury transportation throughout Dallas and nearby areas, connecting clients to airports, corporate districts, neighborhoods, entertainment venues, hotels, and major destinations across the Dallas–Fort Worth metroplex.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder">
                        <img src="/img/affordable-dallas-limousine-service-with-chauffeur.webp" alt="luxury sedan black car service Dallas Texas" class="img-fluid">
                    </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Cities & Regional Communities</h3>
                        <p class="mb-0 font-base">We proudly serve Dallas, Fort Worth, Plano, Frisco, McKinney, Allen, Arlington, and Irving with reliable black car, limousine, and chauffeur transportation for local and regional travel.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder">
                        <img src="/img/dfw-airport-limo-and-black-car-service-dallas.webp" alt="luxury SUV black car service Dallas TX" class="img-fluid">
                    </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Airports & Aviation Access</h3>
                        <p class="mb-0 font-base">We provide airport transportation to DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, and Fort Worth Alliance Airport with professional chauffeur service.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder">
                        <img src="/img/luxury-dallas-limo-and-black-car-service.webp" alt="Mercedes Sprinter van rental with chauffeur Dallas" class="img-fluid">
                    </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Corporate & Lifestyle Zones</h3>
                        <p class="mb-0 font-base">Our service connects clients to Downtown Dallas, Legacy West Plano, The Star Frisco, Las Colinas Irving, Dallas Arts District, Uptown Dallas, and Preston Hollow.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder">
                        <img src="{{ asset('new_assets/assets/image-08.jpg') }}" alt="stretch limousine service Dallas Texas luxury limo ride" class="img-fluid">
                    </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Sports & Entertainment Venues</h3>
                        <p class="mb-0 font-base">We provide luxury transportation to AT&amp;T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, Toyota Music Factory, and other major event venues.</p>
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
    
    
<section class="intercity-ride-section bg-gray pt-40 pb-30 pt-sm-40 pb-sm-35 pt-md-40 pb-md-40 pt-lg-40 pb-lg-40">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Top Cities & <span class="theme-color">Service Routes</span></h2>
                <p class="font-base">Our Dallas luxury transportation company proudly serves some of the most requested travel routes in Texas. Whether clients need private car service, chauffeur transportation, or black car service from Dallas to Austin, Arlington, Waco, Tyler, Houston, or nearby destinations, we provide dependable long-distance travel with comfort, privacy, and professional service.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                    <div class="img-holder">
                        <img src="/img/black-car-service-austin.webp" alt="premium Dallas limo and black car airport transfer service" class="img-fluid">
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
                        <img src="/img/black-car-service-college-station.webp" alt="executive black car transportation in Dallas Fort Worth" class="img-fluid">
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
                        <img src="/img/black-car-service-houston.webp" alt="private chauffeur service Dallas TX luxury sedan" class="img-fluid">
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
                        <img src="/img/black-car-service-sherman.webp" alt="reliable Dallas limousine service for airport and corporate travel" class="img-fluid">
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
                        <img src="/img/black-car-service-tyler.webp" alt="DFW airport black car service luxury chauffeur pickup" class="img-fluid">
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
                        <img src="/img/black-car-service-waco.webp" alt="luxury black car service in Dallas Texas with professional chauffeur" class="img-fluid">
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
                <h2 class="text-white h2 fw-bold">What Clients Say About Dallas Limo and Black Cars</h2>
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
                                        Excellent company to work with. Their Dallas black car service was professional, punctual, and comfortable from start to finish. You can tell they care about service quality.
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
                                        Reliable and easy to book. I used Dallas Limo and Black Cars for airport transportation and was impressed by the chauffeur, the vehicle, and the overall professionalism.
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
                                        One of the best transportation companies in the Dallas area. Their chauffeurs are always courteous, and the ride experience is smooth whether for airport travel or business meetings.
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
                                        Fantastic luxury transportation service. The vehicle was spotless, the chauffeur was professional, and the booking process was simple. I would absolutely use them again.
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
                            What does Dallas Limo and Black Cars specialize in?
                        </button>
                    </h2>
                    <div id="accordion01-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            We specialize in airport transfers, chauffeur service, private car service, limousine service, luxury van rental, and city-to-city rides throughout Dallas and nearby areas.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo">
                            What areas do you serve in and around Dallas?
                        </button>
                    </h2>
                    <div id="accordion01-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            We serve Dallas, Fort Worth, Plano, Frisco, Irving, Arlington, McKinney, Addison, Las Colinas, and many surrounding communities across the Dallas–Fort Worth metroplex.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree">
                            Do you provide airport transportation to DFW and Love Field?
                        </button>
                    </h2>
                    <div id="accordion01-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we provide professional airport transportation to DFW International Airport and Dallas Love Field Airport with reliable scheduling and luxury vehicles.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour">
                            Is your company available for corporate and executive travel?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, our chauffeur and black car services are ideal for corporate travelers, executives, business meetings, airport pickups, and professional transportation needs in Dallas.
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive">
                            What types of vehicles are in your fleet?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our fleet includes luxury sedans, executive SUVs, sprinter vans, minibuses, and limousine-style transportation options for private and group travel.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSix">
                            Are your chauffeurs professionally trained?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, our chauffeurs are experienced, professional, and committed to delivering safe, courteous, and reliable transportation throughout Dallas and nearby cities.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSeven">
                            Can I book long-distance or city-to-city rides?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we offer city-to-city black car service from Dallas to Austin, Houston, Waco, Tyler, Sherman, College Station, and other Texas destinations.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseEight">
                            How can I book with Dallas Limo and Black Cars?
                        </button>
                    </h2>
                    <div id="accordion01-collapseEight" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            You can book online through our website, request a quote, or contact our team directly for luxury transportation reservations in Dallas and nearby areas.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    
    
@endsection