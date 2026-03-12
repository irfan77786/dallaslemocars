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
                <h1 class="text-white h2 fw-bold mb-15">Dallas to Tyler Car Service</h1>
                <div class="d-none d-md-block">
                    <p class="text-white font-lg fw-medium mb-30">Enjoy reliable Dallas to Tyler car service with our professional black car chauffeurs. We provide punctual and comfortable long-distance transportation from Dallas to Tyler, ensuring a smooth, stress-free travel experience for business trips, family travel, special events, medical visits, and private rides every time.</p>
 
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
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet –  <span class="theme-color fw-bold">Travel to Tyler with Comfort and Class</span></h2>
                </div>
                <div class="col-12">
                    <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we offer a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style for every long-distance journey. Whether you need Dallas to Tyler transportation, private executive travel, family transportation, or group city-to-city rides, our professionally maintained vehicles ensure a smooth and stress-free ride. Our fleet includes luxury sedans, black SUVs, and spacious minibuses, all driven by professional chauffeurs dedicated to providing first-class Dallas to Tyler car service.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            
                            <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans provide a quiet and comfortable ride, ideal for business travelers or individuals heading from Dallas to Tyler. Vehicles such as the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 deliver premium comfort and privacy.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong>  For travelers needing extra space or luggage capacity, our luxury SUVs including the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors and smooth rides for reliable intercity transportation.
                            </p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Perfect for group travel, our Mercedes-Benz Sprinter Vans offer spacious seating and modern interiors, making them ideal for corporate teams, families, and event travel between Dallas and Tyler.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27
                                Passengers):</strong> Our luxury minibuses are ideal for medium-sized groups traveling to Tyler, offering comfortable seating and convenient group transportation for meetings, events, and private trips.</p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base">   <strong class="font-lg gray-700 fw-bold">Mini Bus (31-38
                                Passengers):</strong> For larger groups, our spacious minibuses provide dependable city-to-city transportation with professional chauffeur service and comfortable interiors.</p>
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
    
        <section class="detail-content-section bg-gray py-40 py-sm-40 py-md-40 py-lg-50">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Why Choose Our <span class="theme-color"> Black
                                Car Service?</span></h2>
                        <p class="font-base">Our Dallas Black Car Service provides reliable and luxury Dallas to Tyler transportation, offering professional chauffeur service and comfortable travel across East Texas, including Downtown Dallas, Plano, Frisco, Mesquite, Tyler, Whitehouse, Lindale, and surrounding areas.</p>
                    </div>
                </div>
                <div class="py-20 row align-items-center">
                    <div class="col-12 col-md-6 pr-xl-50">
                        <h3 class="h5 fw-semibold">Dallas to Tyler Car Service & Black Car Transportation</h3>
                        <p class="font-base text-justify">Looking for a reliable Dallas to Tyler car service? At Dallas Limo and Black Cars, we provide professional black car transportation from Dallas to Tyler, ensuring every traveler enjoys a smooth, punctual, and stress-free ride. Our premium Dallas to Tyler car service is trusted by business travelers, families, and visitors who need dependable transportation throughout the region.

We proudly serve Downtown Dallas, Plano, Frisco, Arlington, Tyler, Whitehouse, Lindale, and nearby East Texas communities, providing efficient routes and on-time pickups so you never have to worry about delays, road stress, or unreliable ride options during your trip.</p>
                    
                
<ul>
<li>Real-time route planning and trip monitoring.</li>
<li>On-time pickups and drop-offs from Dallas to Tyler.</li>
<li>Convenient door-to-door city-to-city transportation.</li>
<li>Experienced and professional chauffeur service.</li>
<li>Luxury black car fleet with premium comfort.</li>
</ul>    
                    
                     </div>
                    <div class="col-12 col-md-6 h-100">
                        <div class="why-imgs">
                            <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="">
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
                        <p class="font-base">Our Dallas black car service provides professional chauffeur transportation across Dallas and East Texas, connecting travelers to cities, business districts, medical facilities, hotels, campuses, and major destinations in Tyler and nearby communities.</p>
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
                                <p class="mb-0 font-base">We proudly serve Dallas, Tyler, Plano, Frisco, Mesquite, Whitehouse, Lindale, and nearby communities with reliable black car transportation.</p>
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
                                <p class="mb-0 font-base">We provide transportation to DFW International Airport, Dallas Love Field, Tyler Pounds Regional Airport, Addison Airport, and other nearby aviation access points.</p>
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
                                <p class="mb-0 font-base">Our service connects travelers to Downtown Dallas, Legacy West Plano, Downtown Tyler, medical districts, office areas, shopping zones, and major commercial locations.</p>
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
                                <p class="mb-0 font-base">We provide transportation to local event venues, conference spaces, college campuses, hospitals, hotels, and entertainment destinations throughout Tyler and nearby areas.</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-content-section bg-gray py-40 py-sm-50 py-md-50 py-lg-40 seciononeheading">
        <div class="ah-container">
            
            <div class="py-20 row align-items-center">
                <div class="col-12 col-md-6 h-100 only-m">
                    <div class="service-image">
                        <img src="/img/dallas-black-car-service-dfw-love-field-airport-mobile.webp" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-12 col-md-6 pr-xl-50">
                    <h3 class="h5 fw-semibold">Dallas to Tyler Black Car Service for Private Travel</h3>
                    <p class="font-base text-justify">Our Dallas to Tyler car service provides reliable and professional transportation for travelers who want comfort, privacy, and dependable service on every ride. Whether you are traveling for business, a family visit, a medical appointment, a campus trip, or a special event, our experienced chauffeurs ensure a smooth and punctual travel experience. At Dallas Limo and Black Cars, we specialize in luxury city-to-city transportation designed for comfort, reliability, and efficiency across East Texas.

Our service is ideal for travelers coming from Downtown Dallas, Plano, Frisco, Irving, Arlington, Mesquite, and surrounding areas who need dependable transportation to Tyler. With door-to-door service, professional chauffeurs, and carefully planned routes, we make sure you arrive on time without stress. Our luxury fleet of sedans, SUVs, and executive vehicles provides the perfect combination of comfort and reliability for both personal and business travel.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Reliable Car Service Today</a>
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
                    <h3 class="h5 fw-semibold">Reliable Long-Distance Transportation with Professional Chauffeurs</h3>
                    <p class="font-base text-justify">When it comes to dependable transportation from Dallas to Tyler, professionalism and punctuality are essential. Our Dallas to Tyler black car service is designed to deliver a premium travel experience with highly trained chauffeurs and luxury vehicles. We understand the importance of reliable transportation when traveling for appointments, meetings, private events, or family visits across East Texas.

Our professional chauffeurs monitor traffic and route conditions to ensure timely pickups and smooth drop-offs between Dallas and Tyler. Whether you need transportation from a hotel, office, home, airport, hospital, or event venue, our service offers convenient door-to-door travel across the region. Business travelers, executives, families, and visitors trust our black car service for its comfort, privacy, and dependable performance.
</p>
                    <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Get Corporate Travel Quote Now</a>
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
                    <h3 class="h5 fw-semibold">Luxury Dallas to Tyler Transportation Across East Texas</h3>
                    <p class="font-base text-justify">Traveling to Tyler should be comfortable and stress-free. Our luxury Dallas to Tyler car service offers premium black car transportation designed for travelers who value reliability, privacy, and professional service. At Dallas Limo and Black Cars, we provide first-class city-to-city rides for both business and leisure travelers throughout the region.

Our luxury fleet includes executive sedans, spacious SUVs, and premium vehicles perfect for long-distance transportation. Whether you are traveling alone, with colleagues, or with family, our vehicles provide a comfortable and stylish ride from Dallas to Tyler. With experienced chauffeurs, well-maintained vehicles, and flexible scheduling, our Dallas to Tyler car service ensures every trip is smooth, safe, and perfectly timed for your travel plans.</p>
                  <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Reserve Your Dallas to Tyler Car Service</a>
                </div>
                <div class="col-12 col-md-6 h-100 only-d">
                    <div class="service-image">
                        <img src="/img/dallas-city-to-city-black-car-service.webp" class="img-fluid" alt="">
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
                    <p class="font-base">Our Dallas Black Car Service connects you to the most popular cities and travel routes across Texas. Whether you're heading to Tyler, Austin, Waco, Houston, or nearby destinations, our professional chauffeurs ensure smooth, punctual, and comfortable transportation. Enjoy reliable city-to-city black car service from Dallas with luxury vehicles, private travel, and a stress-free ride experience every time.</p>
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
                <h2 class="text-white h2 fw-bold">What Travelers Say About Our Dallas to Tyler Car Service</h2>
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
                                        Excellent Dallas to Tyler car service. Our driver arrived early and the ride was smooth and comfortable. Highly professional black car service for long-distance travel.
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
                                        Reliable Dallas to Tyler black car service. My chauffeur arrived on time, handled everything professionally, and the trip was very comfortable and stress-free.
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
                                        I regularly use their Dallas to Tyler car service for business trips. Always punctual, professional chauffeurs, and luxury vehicles. Best city-to-city transportation option.
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
                                        Fantastic city-to-city transportation service. The driver picked us up from our hotel and took us to Tyler on time. Very comfortable black car ride and excellent service.
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
                            What areas does your Dallas to Tyler car service cover?
                        </button>
                    </h2>
                    <div id="accordion01-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our Dallas to Tyler car service covers Dallas, Plano, Frisco, Irving, Mesquite, Tyler, Whitehouse, Lindale, and surrounding cities with reliable long-distance transportation.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo">
                            Do you provide private transportation from Dallas to Tyler?
                        </button>
                    </h2>
                    <div id="accordion01-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we provide professional private transportation from Dallas to Tyler with punctual pickups, comfortable luxury vehicles, and reliable chauffeur service.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree">
                            Is your black car service available for corporate travel?
                        </button>
                    </h2>
                    <div id="accordion01-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, our Dallas black car service is ideal for executives, business travelers, and corporate teams needing professional chauffeur transportation for meetings and intercity travel.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour">
                            Can I book city-to-city transportation from Dallas?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we offer city-to-city black car service from Dallas to Tyler, Austin, Houston, Waco, and other nearby Texas destinations.
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive">
                            How do I book your Dallas to Tyler car service?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            You can easily book our Dallas to Tyler car service online through our website or request a ride quote for quick reservation confirmation.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSix">
                            What vehicles are available for long-distance transportation?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our fleet includes luxury sedans, executive SUVs, sprinter vans, and minibuses suitable for city-to-city travel, corporate transportation, and group rides.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSeven">
                            Are your chauffeurs professionally trained?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, our chauffeurs are licensed, experienced, and professionally trained to provide safe, reliable, and comfortable transportation throughout Texas.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseEight">
                            Why choose your Dallas to Tyler black car service?
                        </button>
                    </h2>
                    <div id="accordion01-collapseEight" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our Dallas to Tyler black car service offers punctual pickups, luxury vehicles, professional chauffeurs, and reliable city-to-city transportation across East Texas.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    
    
@endsection