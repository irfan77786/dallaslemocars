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
                <h1 class="text-white h2 fw-bold mb-15">Black Car Service Allen</h1>
                <div class="d-none d-md-block">
                    <p class="text-white font-lg fw-medium mb-30">Enjoy reliable Allen black car service with our professional chauffeurs and luxury vehicles. We provide punctual and comfortable transportation for airport transfers, corporate travel, private rides, and special events, ensuring a smooth, stress-free travel experience every time.</p>
 
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
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet –  <span class="theme-color fw-bold">Travel in Allen with Comfort and Class</span></h2>
                </div>
                <div class="col-12">
                    <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we offer a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style for every ride in Allen. Whether you need Allen airport transportation, Dallas Love Field transfers, executive chauffeur travel, or group transportation, our professionally maintained vehicles ensure a smooth and stress-free ride. Our fleet includes luxury sedans, black SUVs, and spacious minibuses, all driven by professional chauffeurs dedicated to providing first-class black car service in Allen.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            
                            <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans provide a quiet and comfortable ride, ideal for business travelers or individuals heading to meetings, DFW Airport, or Dallas Love Field from Allen. Vehicles such as the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 deliver premium comfort and privacy.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong>  For travelers needing extra space or luggage capacity, our luxury SUVs including the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors and smooth rides for reliable private transportation in Allen.
                            </p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Perfect for group transportation, our Mercedes-Benz Sprinter Vans offer spacious seating and modern interiors, making them ideal for corporate teams, families, and event travel from Allen and nearby cities.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27
                                Passengers):</strong> Our luxury minibuses are ideal for medium-sized groups traveling to or from airports, meetings, and special events, offering comfortable seating and convenient group transportation.</p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base">   <strong class="font-lg gray-700 fw-bold">Mini Bus (31-38
                                Passengers):</strong> For larger groups, our spacious minibuses provide dependable transportation with professional chauffeur service and comfortable interiors throughout Allen and nearby communities.</p>
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
                        <p class="font-base">Our Allen Black Car Service provides reliable and luxury transportation to DFW International Airport and Dallas Love Field Airport, offering professional chauffeur service and comfortable travel across Allen, Plano, Frisco, McKinney, and the surrounding North Texas area.</p>
                    </div>
                </div>
                <div class="py-20 row align-items-center">
                    <div class="col-12 col-md-6 pr-xl-50">
                        <h3 class="h5 fw-semibold">Allen Black Car Service & Private Transportation</h3>
                        <p class="font-base text-justify">Looking for a reliable black car service in Allen? At Dallas Limo and Black Cars, we provide professional chauffeur transportation for airport transfers, corporate meetings, private rides, and special events, ensuring every traveler enjoys a smooth, punctual, and stress-free ride. Our premium Allen black car service is trusted by business travelers, families, and visitors who need dependable transportation throughout Allen and the greater Dallas–Fort Worth region.

We proudly serve Allen, Plano, Frisco, McKinney, Richardson, Fairview, and nearby North Texas cities, providing efficient routes and on-time pickups so you never have to worry about delays for flights, meetings, or important occasions.</p>
                    
                
<ul>
<li>On-time pickups and drop-offs across Allen.</li>
<li>Professional chauffeurs for private transportation.</li>
<li>Convenient door-to-door transportation service.</li>
<li>Luxury black car fleet with premium comfort.</li>
<li>Reliable airport and corporate travel service.</li>
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
                        <p class="font-base">Our Allen black car service provides professional chauffeur transportation across Allen and North Texas, connecting travelers to airports, cities, business districts, and major event venues.</p>
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
                                <p class="mb-0 font-base">We proudly serve Allen, Plano, Frisco, McKinney, Richardson, Fairview, and Murphy, providing reliable black car transportation across major cities and nearby communities.</p>
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
                                <p class="mb-0 font-base">We provide airport transfers to DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, and other regional aviation facilities.</p>
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
                                <p class="mb-0 font-base">Our service connects travelers to Watters Creek Allen, Legacy West Plano, The Star Frisco, downtown Dallas business districts, and upscale residential neighborhoods.</p>
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
                                <p class="mb-0 font-base">We provide transportation to Credit Union of Texas Event Center, Allen Premium Outlets, Toyota Stadium, PGA Frisco, and major entertainment venues nearby.</p>
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
                    <h3 class="h5 fw-semibold">Allen Black Car Service to DFW & Love Field</h3>
                    <p class="font-base text-justify">Our Allen black car service provides reliable and professional transportation to DFW International Airport and Dallas Love Field Airport. Whether you are traveling for business, vacation, or a corporate event, our experienced chauffeurs ensure a smooth and punctual travel experience. At Dallas Limo and Black Cars, we specialize in luxury private transportation designed for comfort, reliability, and efficiency across Allen and the Dallas–Fort Worth metroplex.

Our service is ideal for travelers coming from Allen, Plano, Frisco, McKinney, Richardson, and surrounding North Texas cities who need dependable airport transfers. With timely pickups, door-to-door service, and professional chauffeurs, we make sure you arrive at the airport on time without stress. Our luxury fleet of sedans, SUVs, and executive vehicles provides the perfect combination of comfort and reliability for both personal and business travel.</p>
                <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Reliable Black Car Service Today</a>
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
                    <h3 class="h5 fw-semibold">Reliable Transportation with Professional Chauffeurs</h3>
                    <p class="font-base text-justify">When it comes to dependable transportation in Allen, professionalism and punctuality are essential. Our Allen black car service is designed to deliver a premium travel experience with highly trained chauffeurs and luxury vehicles. We understand the importance of reliable transportation when catching a flight, attending a meeting, arriving at an event, or planning private travel across the area.

Our professional chauffeurs monitor traffic and routes to ensure timely pickups and smooth drop-offs throughout Allen and surrounding cities. Whether you need transportation from a hotel, office, home, or corporate event, our service offers convenient door-to-door travel across the North Texas region. Business travelers, executives, families, and visitors trust our Allen black car service for its comfort, privacy, and dependable performance.
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
                    <h3 class="h5 fw-semibold">Luxury Black Car Service Across Allen and North Texas</h3>
                    <p class="font-base text-justify">Traveling through Allen should be comfortable and stress-free. Our luxury black car service in Allen offers premium private transportation designed for travelers who value reliability, privacy, and professional service. At Dallas Limo and Black Cars, we provide first-class transportation for airport transfers, business travel, special events, and private rides throughout the North Texas area.

Our luxury fleet includes executive sedans, spacious SUVs, and premium vehicles perfect for private transportation. Whether you are traveling alone, with colleagues, or with family, our vehicles provide a comfortable and stylish ride to destinations in Allen and beyond. With experienced chauffeurs, well-maintained vehicles, and flexible scheduling, our Allen black car service ensures every trip is smooth, safe, and perfectly timed for your travel plans.</p>
                  <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Reserve Your Allen Black Car Service</a>
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
                    <p class="font-base">Our Allen Black Car Service connects you to the most popular cities and travel routes across North Texas. Whether you're heading to Dallas, Frisco, Plano, DFW Airport, or nearby destinations, our professional chauffeurs ensure smooth, punctual, and comfortable transportation. Enjoy reliable city-to-city black car service from Allen with luxury vehicles, private travel, and a stress-free ride experience every time.</p>
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
                            <h3 class="mb-1 text-white h6">Allen
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Dallas
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">26 miles &nbsp;&nbsp;|&nbsp;&nbsp; 35m</p>
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
                            <h3 class="mb-1 text-white h6">Allen
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Plano
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">8.5 miles &nbsp;&nbsp;|&nbsp;&nbsp; 18m</p>
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
                            <h3 class="mb-1 text-white h6">Allen
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                DFW Airport
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">34 miles &nbsp;&nbsp;|&nbsp;&nbsp; 42m</p>
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
                            <h3 class="mb-1 text-white h6">Allen
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                 McKinney
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">10 miles &nbsp;&nbsp;|&nbsp;&nbsp; 17m</p>
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
                            <h3 class="mb-1 text-white h6">Allen
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Frisco
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">14 miles &nbsp;&nbsp;|&nbsp;&nbsp; 24m</p>
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
                            <h3 class="mb-1 text-white h6">Allen
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Love Field
                            </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                            <p class="mb-0 text-white font-base">29 miles &nbsp;&nbsp;|&nbsp;&nbsp; 38m</p>
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
                <h2 class="text-white h2 fw-bold">What Travelers Say About Our Black Car Service</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="overflow-hidden bg-white swiper testimonial-slider py-30 py-lg-30">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Ryan Peterson</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">Allen, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        Excellent black car service in Allen. Our driver arrived early for our airport ride and the trip was smooth and comfortable. Highly professional chauffeur service.
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
                                        Reliable Allen black car service. My driver arrived on time and the ride was comfortable, private, and stress-free. Great experience for airport transportation.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Christopher Adams</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">McKinney, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        I regularly use their Allen black car service for business trips. Always punctual, professional chauffeurs, and luxury vehicles. Excellent private transportation in North Texas.
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item">
                                <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Jessica Carter</cite>
                                <span class="mb-10 text-center location fw-semibold font-lg d-block">Frisco, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium">
                                        Fantastic chauffeur transportation service. The driver picked us up from our home and took us to our event on time. Very comfortable black car ride.
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
                            What areas does your Allen black car service cover?
                        </button>
                    </h2>
                    <div id="accordion01-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our Allen black car service covers Allen, Plano, Frisco, McKinney, Richardson, Fairview, and surrounding North Texas cities with reliable private transportation.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo">
                            Do you provide transfers to DFW Airport and Dallas Love Field?
                        </button>
                    </h2>
                    <div id="accordion01-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we provide professional black car service from Allen to DFW International Airport and Dallas Love Field with punctual pickups and comfortable luxury vehicles.
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
                            Yes, our Allen black car service is ideal for executives, business travelers, and corporate teams needing professional chauffeur transportation for meetings and airport transfers.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour">
                            Can I book city-to-city transportation from Allen?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Yes, we offer city-to-city black car service from Allen to Dallas, Plano, Frisco, McKinney, and other nearby Texas destinations.
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive">
                            How do I book your Allen black car service?
                        </button>
                    </h2>
                    <div id="accordion01-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            You can easily book our Allen black car service online through our website or request a ride quote for quick reservation confirmation.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSix">
                            What vehicles are available for private transportation?
                        </button>
                    </h2>
                    <div id="accordion01-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our fleet includes luxury sedans, executive SUVs, sprinter vans, and minibuses suitable for airport transfers, corporate travel, and group transportation.
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
                            Yes, our chauffeurs are licensed, experienced, and professionally trained to provide safe, reliable, and comfortable transportation throughout Allen.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseEight">
                            Why choose your Allen black car service?
                        </button>
                    </h2>
                    <div id="accordion01-collapseEight" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            Our Allen black car service offers punctual pickups, luxury vehicles, professional chauffeurs, and reliable private transportation for airports, meetings, and events.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
    
    
@endsection