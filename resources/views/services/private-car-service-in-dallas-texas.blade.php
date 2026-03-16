@extends('master') @section('content')
<section class="d-md-none">
    <div class="ah-container">
        <div class="search-form-mobile"> @include('partials.search', ['id_suffix' => '_mobile']) </div>
    </div>
</section> {{-- Banner: text (and desktop form) --}}
<section class="home-banner-section">
    <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100" style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>
        <div class="row" style="pointer-events: none;">
            <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                <h1 class="text-white h2 fw-bold mb-15">Private Car Service in Dallas</h1>
                <div class="d-none d-md-block">
                    <p class="text-white font-lg fw-medium mb-30">Experience premium private car service in Dallas with luxury chauffeur transportation for airport transfers, corporate travel, city rides, and special events throughout Dallas, Plano, Frisco, Irving, and the surrounding DFW area.</p>
                    <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0"> Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a> </p>
                </div>
            </div>
            <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                <div class="search-form-wrapper-desktop"> @include('partials.search', ['id_suffix' => '_form']) </div>
            </div>
        </div>
    </div> @include('partials.hero_banner_styles') </section>
<section class="fleet-section py-40 py-sm-50 py-md-50 py-lg-50">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-xl-10">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet – <span class="theme-color fw-bold">Travel with Comfort, Space, and Style</span></h2>
            </div>
            <div class="col-12">
                <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we offer a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style for every ride. Whether you need private car service in Dallas, executive chauffeur transportation, airport
                    transfers, or private travel, our professionally maintained vehicles ensure a smooth and stress-free experience. Our fleet includes luxury sedans, black SUVs, and spacious minibuses, all driven by professional chauffeurs dedicated
                    to providing first-class <a href="/book-now/"><strong>Dallas private car service</strong></a>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="list-unstyled">
                    <li>
                        <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans provide a quiet and comfortable ride, ideal for business travelers or individuals needing <a href="/services/chauffeur-service-dallas/"><strong>private transportation in Dallas</strong></a>. Vehicles such as
                            the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 deliver premium comfort and privacy.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong> For travelers needing extra space or luggage capacity, our luxury SUVs including the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors
                            and smooth rides for reliable private transportation. </p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Perfect for group transportation, our Mercedes-Benz Sprinter Vans offer spacious seating and modern interiors, making them ideal for corporate teams, families,
                            and private event travel.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27 Passengers):</strong> Our luxury minibuses are ideal for medium-sized groups traveling across Dallas, offering comfortable seating and convenient chauffeur-driven
                            group transportation.</p>
                    </li>
                    <li>
                        <p class="justify-mobile font-base"> <strong class="font-lg gray-700 fw-bold">Mini Bus (31-38 Passengers):</strong> For larger groups, our spacious minibuses provide dependable chauffeur transportation with professional service and comfortable interiors.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="img-holder"> <img src="{{ asset('new_assets/assets/fleet-img.webp') }}" alt="luxury Dallas private car service fleet with executive sedans black SUVs and chauffeur transportation" class="img-fluid"> </div>
            </div>
            <div class="text-center col-12 pt-15"> <a href="/booking/" class="btn btn-primary fifa-btn">Book Your Private Car Ride </a> </div>
        </div>
    </div>
</section>
<section class="fifa-main-banner only-m" style=" background: url(/img/black-car-service-for-fifa-world-cup-2026-mobile.webp) center top; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fifa-btns"> </div>
            </div>
        </div>
    </div>
</section>
<section class="fifa-main-banner only-d" style=" background: url(/img/black-car-service-for-fifa-world-cup-2026.webp) center top; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fifa-btns"> </div>
            </div>
        </div>
    </div>
</section>
<div class="container text-center here-fifa">
    <div class="row">
        <div class="col-md-12">
            <div class="fifa-btnss"> <a href="/fifa-world-cup-2026-car-service-dallas/" class="btn btn-primary fifa-btn">Visit FIFA World Cup 2026 Page</a> </div>
        </div>
    </div>
</div>
<section class="detail-content-section bg-gray py-40 py-sm-40 py-md-40 py-lg-50">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Why Choose Our <span class="theme-color"> Private Car Service in Dallas?</span></h2>
                <p class="font-base">Our private car service in Dallas provides reliable and luxury chauffeur transportation for airport transfers, business travel, private rides, and special events across the Dallas–Fort Worth metroplex, including Dallas, Plano, Frisco,
                    Arlington, and Irving.</p>
            </div>
        </div>
        <div class="py-20 row align-items-center">
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Dallas Private Car Service & Luxury Travel</h3>
                <p class="font-base text-justify">Looking for a reliable private car service in Dallas? At Dallas Limo and Black Cars, we provide professional chauffeur transportation for airport transfers, business travel, private rides, special events, and executive transportation,
                    ensuring every client enjoys a smooth, punctual, and stress-free experience. Our premium Dallas private car service is trusted by business travelers, families, executives, and visitors who need dependable transportation throughout
                    the Dallas–Fort Worth metroplex. We proudly serve Dallas, Plano, Frisco, Arlington, Irving, Las Colinas, and nearby destinations, providing efficient routes and on-time pickups so you never have to worry about delays or travel disruptions.</p>
                <ul>
                    <li>Professional chauffeurs with Dallas route expertise.</li>
                    <li>On-time pickups and dependable ride scheduling.</li>
                    <li>Convenient door-to-door luxury transportation.</li>
                    <li>Luxury vehicles for business and private travel.</li>
                    <li>Comfortable rides with premium service standards.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 h-100">
                <div class="why-imgs"> <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="Dallas private car service for DFW airport transfers and luxury chauffeur transportation"> </div>
            </div>
        </div>
    </div>
</section>
<section class="where-we-serve-section bg-gray pt-40 pb-25 pt-sm-40 pb-sm-35 pt-md-40 pb-md-40 pt-lg-40 pb-lg-40">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-lg-20 seciononeheading">Where we serve</h2>
                <p class="font-base">Our private car service in Dallas provides professional chauffeur transportation across the Dallas–Fort Worth metroplex, connecting travelers to airports, cities, business districts, hotels, and event venues with comfort and reliability.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder"> <img src="/img/affordable-dallas-limousine-service-with-chauffeur.webp" alt="private car service across Dallas Fort Worth Plano Frisco Irving and Arlington communities" class="img-fluid"> </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Cities & Regional Communities</h3>
                        <p class="mb-0 font-base">We proudly serve Dallas, Fort Worth, Plano, Frisco, Irving, Arlington, and nearby communities, providing reliable private car transportation across the Dallas–Fort Worth area.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder"> <img src="/img/dfw-airport-limo-and-black-car-service-dallas.webp" alt="Dallas private car transportation to DFW International Airport Love Field and regional airports" class="img-fluid"> </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Airports & Aviation Access</h3>
                        <p class="mb-0 font-base">We provide private car transportation to DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, and Fort Worth Alliance Airport.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder"> <img src="/img/luxury-dallas-limo-and-black-car-service.webp" alt="executive private car service in Downtown Dallas Legacy West Frisco and Las Colinas" class="img-fluid"> </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Corporate & Lifestyle Zones</h3>
                        <p class="mb-0 font-base">Our service connects travelers to Downtown Dallas, Legacy West Plano, The Star Frisco, Las Colinas Irving, Dallas Arts District, and Preston Hollow.</p>
                    </div>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 d-flex">
                <article class="we-serve-item custom-card mb-30 mb-md-35">
                    <div class="img-holder"> <img src="{{ asset('new_assets/assets/image-08.jpg') }}" alt="Dallas private car service for sports venues concerts and entertainment events" class="img-fluid"> </div>
                    <div class="text-detail">
                        <h3 class="mb-10 h4 fw-semibold">Sports & Entertainment Venues</h3>
                        <p class="mb-0 font-base">We provide transportation to AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and major entertainment venues throughout Dallas.</p>
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
                <div class="service-image"> <img src="/img/dallas-black-car-service-dfw-love-field-airport-mobile.webp" class="img-fluid" alt="mobile Dallas private car service for airport transfers and executive transportation"> </div>
            </div>
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Professional Private Car Service in Dallas for Every Ride</h3>
                <p class="font-base text-justify">Our private car service in Dallas provides reliable and <a href="/services/airport-transfers-dallas/"><strong>professional transportation for airport transfers</strong></a>, corporate travel, business meetings, special occasions, and private rides. Whether you are traveling for business, leisure, or an
                    important occasion, our experienced chauffeurs ensure a smooth and punctual experience. At Dallas Limo and Black Cars, we specialize in luxury transportation designed for comfort, reliability, and efficiency across the Dallas–Fort
                    Worth area. Our service is ideal for travelers coming from Dallas, Plano, Frisco, Irving, Arlington, McKinney, and surrounding DFW cities who need dependable private car transportation. With door-to-door service, flexible scheduling,
                    and professional chauffeurs, we make sure you arrive at your destination on time without stress. Our luxury fleet of sedans, SUVs, and executive vehicles provides the perfect combination of comfort and reliability for both personal
                    and business travel.</p> <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Book Reliable Private Car Service</a> </div>
            <div class="col-12 col-md-6 h-100 only-d">
                <div class="service-image"> <img src="/img/dallas-black-car-service-dfw-love-field-airport.webp" class="img-fluid" alt="professional private car service in Dallas for airport pickups business travel and private rides"> </div>
            </div>
        </div>
        <div class="flex-row-reverse py-20 row align-items-center">
            <div class="col-12 col-md-6 h-100 only-m">
                <div class="service-image"> <img src="/img/dallas-corporate-black-car-chauffeur-service-mobile.webp" class="img-fluid" alt="mobile executive private car transportation in Dallas with professional chauffeurs"> </div>
            </div>
            <div class="mb-20 col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Executive Transportation with Professional Chauffeurs</h3>
                <p class="font-base text-justify">
                Our private car service in Dallas provides dependable, luxury transportation for business travelers, executives, and visitors across the Dallas–Fort Worth area. With professional chauffeurs and premium vehicles, we ensure a comfortable, safe, and punctual travel experience for corporate meetings, private events, and executive transportation.

Our experienced chauffeurs monitor real-time traffic to guarantee timely pickups and smooth drop-offs throughout Dallas, Plano, Frisco, Irving, and Arlington. Whether you are traveling for business or leisure, our door-to-door chauffeur service delivers convenience, privacy, and reliability.

We also specialize in Dallas airport transportation, offering prompt transfers to and from DFW International Airport and Dallas Love Field Airport. Our <a href="/services/corporate-transportation-dallas/"><strong>black car service</strong></a> ensures stress-free arrivals and departures, making travel easier for professionals, families, and visitors throughout the Dallas–Fort Worth metro area.
                </p> <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Get Private Car Service Quote</a>                </div>
            <div class="col-12 col-md-6 h-100 only-d">
                <div class="service-image"> <img src="/img/dallas-corporate-black-car-chauffeur-service.webp" class="img-fluid" alt="executive Dallas private car service with luxury chauffeur transportation for business travelers"> </div>
            </div>
        </div>
        <div class="py-20 row align-items-center">
            <div class="col-12 col-md-6 h-100 only-m">
                <div class="service-image"> <img src="/img/dallas-city-to-city-black-car-service-mobile.webp" class="img-fluid" alt="mobile luxury private car service across Dallas Fort Worth for city rides and long distance travel"> </div>
            </div>
            <div class="col-12 col-md-6 pr-xl-50">
                <h3 class="h5 fw-semibold">Luxury Private Car Service Across Dallas–Fort Worth</h3>
                <p class="font-base text-justify">Traveling through the city should be comfortable and stress-free. Our <a href="/city-to-city-rides/"><strong>luxury private car service in Dallas</strong></a> offers premium chauffeur transportation designed for travelers who value reliability, privacy, and professional service. At Dallas
                    Limo and Black Cars, we provide first-class transportation for airport transfers, business travel, special occasions, and private rides throughout the DFW metro area. Our luxury fleet includes executive sedans, spacious SUVs, and premium
                    vehicles perfect for professional transportation. Whether you are traveling alone, with colleagues, or with family, our vehicles provide a comfortable and stylish ride across Dallas and surrounding cities. With experienced chauffeurs,
                    well-maintained vehicles, and flexible scheduling, our private car service in Dallas ensures every trip is smooth, safe, and perfectly timed for your travel plans.</p> <a href="/booking/" class="btn btn-primary sm fw-medium fifa-btn-full">Reserve Your Private Car Ride</a>                </div>
            <div class="col-12 col-md-6 h-100 only-d">
                <div class="service-image"> <img src="/img/dallas-city-to-city-black-car-service.webp" class="img-fluid" alt="luxury private car service across Dallas Fort Worth with comfortable chauffeur driven vehicles"> </div>
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
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-01.png') }}" class="img-fluid" alt="partner logo 1"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-02.png') }}" class="img-fluid" alt="partner logo 2"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-03.png') }}" class="img-fluid" alt="partner logo 3"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-04.png') }}" class="img-fluid" alt="partner logo 4"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-05.png') }}" class="img-fluid" alt="partner logo 5"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-06.png') }}" class="img-fluid" alt="partner logo 6"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-07.png') }}" class="img-fluid" alt="partner logo 7"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-08.png') }}" class="img-fluid" alt="partner logo 8"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-01.png') }}" class="img-fluid" alt="partner logo 9"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-02.png') }}" class="img-fluid" alt="partner logo 10"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-03.png') }}" class="img-fluid" alt="partner logo 11"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-04.png') }}" class="img-fluid" alt="partner logo 12"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-05.png') }}" class="img-fluid" alt="partner logo 13"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-06.png') }}" class="img-fluid" alt="partner logo 14"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-07.png') }}" class="img-fluid" alt="partner logo 15"></div>
                        <div class="swiper-slide"><img src="{{ asset('new_assets/assets/logo-08.png') }}" class="img-fluid" alt="partner logo 16"></div>
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
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Top Cities & <span class="theme-color">Top Routes</span></h2>
                <p class="font-base">Our private car service in Dallas connects you to the most popular cities and travel routes across the Dallas–Fort Worth area. Whether you're heading to Plano, Frisco, Arlington, Waco, Tyler, or nearby destinations, our professional chauffeurs
                    ensure smooth, punctual, and comfortable transportation. Enjoy reliable private car service from Dallas with luxury vehicles, private travel, and a stress-free ride experience every time.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                    <div class="img-holder"> <img src="/img/black-car-service-austin.webp" alt="Dallas to Austin private car service with luxury chauffeur transportation" class="img-fluid"> </div>
                    <div class="city-details p-15 position-absolute">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3 class="mb-1 text-white h6">Dallas <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon"> <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path> </svg>                                    Austin </h3>
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
                    <div class="img-holder"> <img src="/img/black-car-service-college-station.webp" alt="Dallas to College Station private car transportation for executive and leisure travel" class="img-fluid"> </div>
                    <div class="city-details p-15 position-absolute">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3 class="mb-1 text-white h6">Dallas <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon"> <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path> </svg>                                    College Station </h3>
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
                    <div class="img-holder"> <img src="/img/black-car-service-houston.webp" alt="Dallas to Houston luxury private car service with professional chauffeur" class="img-fluid"> </div>
                    <div class="city-details p-15 position-absolute">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3 class="mb-1 text-white h6">Dallas <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon"> <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path> </svg>                                    Houston </h3>
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
                    <div class="img-holder"> <img src="/img/black-car-service-sherman.webp" alt="Dallas to Sherman private car ride with dependable chauffeur service" class="img-fluid"> </div>
                    <div class="city-details p-15 position-absolute">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3 class="mb-1 text-white h6">Dallas <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon"> <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path> </svg>                                    Sherman </h3>
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
                    <div class="img-holder"> <img src="/img/black-car-service-tyler.webp" alt="Dallas to Tyler private chauffeur transportation with luxury black car service" class="img-fluid"> </div>
                    <div class="city-details p-15 position-absolute">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3 class="mb-1 text-white h6">Dallas <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon"> <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path> </svg>                                    Tyler </h3>
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
                    <div class="img-holder"> <img src="/img/black-car-service-waco.webp" alt="Dallas to Waco private car service for comfortable long distance travel" class="img-fluid"> </div>
                    <div class="city-details p-15 position-absolute">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <h3 class="mb-1 text-white h6">Dallas <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan" focusable="false" aria-hidden="true" width="20" viewBox="0 0 24 24" data-testid="ChevronRightIcon"> <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path> </svg>                                    Waco </h3>
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
                <h2 class="text-white h2 fw-bold">What Clients Say About Our Private Car Service in Dallas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="overflow-hidden bg-white swiper testimonial-slider py-30 py-lg-30">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item"> <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Ryan Peterson</cite> <span class="mb-10 text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium"> Excellent private car service in Dallas. Our driver arrived early, the vehicle was spotless, and the ride was smooth and comfortable. Highly professional chauffeur service. </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item"> <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Laura Mitchell</cite> <span class="mb-10 text-center location fw-semibold font-lg d-block">Plano, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium"> Reliable Dallas private car service. Our chauffeur was on time, professional, and courteous throughout the trip. Very comfortable and stress-free luxury ride. </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item"> <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Christopher Adams</cite> <span class="mb-10 text-center location fw-semibold font-lg d-block">Frisco, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium"> I regularly use their private car service in Dallas for business trips. Always punctual, professional chauffeurs, and luxury vehicles. Best executive travel in Dallas. </p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="swiper-slide px-30 px-sm-35 px-lg-35">
                            <div class="testimonial-slider-item"> <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Jessica Carter</cite> <span class="mb-10 text-center location fw-semibold font-lg d-block">Arlington, TX</span>
                                <blockquote class="mb-30">
                                    <p class="mb-0 text-center font-lg fw-medium"> Fantastic luxury transportation service. The driver picked us up from our hotel and handled everything professionally. Very comfortable private car ride across Dallas. </p>
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
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseOne"> What areas does your private car service in Dallas cover? </button> </h2>
                    <div id="accordion01-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body"> Our private car service in Dallas covers Dallas, Plano, Frisco, Irving, Arlington, McKinney, Fort Worth, and surrounding DFW destinations with reliable luxury transportation. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo"> Do you provide private car transportation to airports? </button> </h2>
                    <div id="accordion01-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body"> Yes, we provide professional private car transportation to DFW International Airport, Dallas Love Field, Addison Airport, and other regional aviation hubs. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree"> Is your private car service available for corporate travel? </button> </h2>
                    <div id="accordion01-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body"> Yes, our private car service in Dallas is ideal for executives, business travelers, and corporate teams needing professional luxury transportation for meetings and events. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour"> Can I book private transportation from Dallas? </button> </h2>
                    <div id="accordion01-collapseFour" class="accordion-collapse collapse">
                        <div class="accordion-body"> Yes, we offer private car service from Dallas for airport transfers, corporate travel, special events, and luxury transportation throughout the DFW area. </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6 col-xl-6 col-666 accordion-holder">
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive"> How do I book your private car service in Dallas? </button> </h2>
                    <div id="accordion01-collapseFive" class="accordion-collapse collapse">
                        <div class="accordion-body"> You can easily book our private car service in Dallas online through our website or request a ride quote for quick reservation confirmation. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSix"> What vehicles are available for private transportation? </button> </h2>
                    <div id="accordion01-collapseSix" class="accordion-collapse collapse">
                        <div class="accordion-body"> Our fleet includes luxury sedans, executive SUVs, sprinter vans, and minibuses suitable for airport transfers, corporate travel, and private transportation. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseSeven"> Are your chauffeurs professionally trained? </button> </h2>
                    <div id="accordion01-collapseSeven" class="accordion-collapse collapse">
                        <div class="accordion-body"> Yes, our chauffeurs are licensed, experienced, and professionally trained to provide safe, reliable, and comfortable transportation throughout Dallas and DFW. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header"> <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseEight"> Why choose your private car service in Dallas? </button> </h2>
                    <div id="accordion01-collapseEight" class="accordion-collapse collapse">
                        <div class="accordion-body"> Our private car service in Dallas offers punctual pickups, luxury vehicles, professional chauffeurs, and reliable transportation across Dallas and the DFW area. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> @endsection