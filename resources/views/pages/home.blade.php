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
             style="z-index: 2; background-image: url('{{ asset('new_assets/assets/banner-4.jpg') }}');">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h2 fw-bold mb-15">Black Car Service Dallas</h1>
                    <div class="d-none d-md-block">
                        <p class="text-white font-lg fw-medium mb-30">Lorem Ipsum is simply dummy text of the printing</p>
                        <span class="text-white font-base">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call
                                Now</strong></span>
                        <p class="text-white font-base d-flex align-items-center  mb-30 mb-md-0">
                            Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
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
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Our <span class="theme-color"> Black
                            Car Service?</span></h2>
                    <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
            <div class="py-20 row align-items-center">
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
            <div class="flex-row-reverse py-20 row align-items-center">
                <div class="mb-20 col-12 col-md-6 pr-xl-50">
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

    <section
        class="intercity-ride-section bg-gray pt-50 pb-30 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40 pt-lg-80 pb-lg-50">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Top Cities & <span class="theme-color">Top
                            Routes</span></h2>
                    <p class="font-base">Our <strong>Black Car Service Dallas</strong> connects you to the most
                        popular cities and key routes in the region. We provide <strong>smooth, punctual, and
                            reliable rides</strong> whether you’re traveling for business or events. Enjoy comfort
                        and professional service on every trip.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/atlantic-city.jpg') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Austin
                            </h3>
                            <p class="mb-0 text-white font-base">195 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 54m</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/hamptons.jpg') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Houston
                            </h3>
                            <p class="mb-0 text-white font-base">239 miles &nbsp;&nbsp;|&nbsp;&nbsp; 3h 29m</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/philadelphia.jpg') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                College Station
                            </h3>
                            <p class="mb-0 text-white font-base">181 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 44m</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/boston.jpg') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Anna
                            </h3>
                            <p class="mb-0 text-white font-base">50 miles &nbsp;&nbsp;|&nbsp;&nbsp; 0h 47m</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/albany.jpg') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="mb-1 text-white h6">Dallas
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Tyler
                            </h3>
                            <p class="mb-0 text-white font-base">116 miles &nbsp;&nbsp;|&nbsp;&nbsp; 2h 10min</p>
                        </div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="mb-20 top-cities-item mb-sm-25 mb-md-30">
                        <div class="img-holder">
                            <img src="{{ asset('new_assets/assets/hartford.jpg') }}" alt="Top City" class="img-fluid">
                        </div>
                        <div class="city-details p-15 position-absolute">
                            <h3 class="mb-1 text-white h6">DFW
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium mui-style-nw1xan"
                                    focusable="false" aria-hidden="true" width="24" viewBox="0 0 24 24"
                                    data-testid="ChevronRightIcon">
                                    <path d="M10 6 8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" fill="#fff"></path>
                                </svg>
                                Waco
                            </h3>
                            <p class="mb-0 text-white font-base">109 miles &nbsp;&nbsp;|&nbsp;&nbsp; 1h 40m</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row justify-content-center align-items-center">
                <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold">Finest Corporate Travel Experience</h2>
                </div>
                <div class="col-12 col-md-6">
                    <p class="font-base">Travel in comfort and style with clean, quiet, and smooth vehicles.</p>
                    <ul class="mb-20 list-unstyled custom-unorder-list no-bullets pr-lg-80 mb-md-0">
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Ride stress-free knowing
                            your driver is professional and reliable.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Use your travel time to
                            relax, plan, or catch up on work.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Arrive on time and ready
                            for meetings or events.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Enjoy a calm and safe
                            journey with attention to every detail.</li>
                        <li class="gap-2 d-flex"><span class="theme-color font-base">✔</span>Experience luxury and
                            personalized care in every part of your ride.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <form class="mx-auto news-letter-form me-md-0 px-15 py-25" action="" method="post">
                        <div class="text-center">
                            <h3 class="mb-0 font-base fw-bold">Need Corporate Support?</h3>
                            <p class="font-sm">Fill out the form and our team will take care of the rest</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="full_name" class="mb-1 form-label fw-medium">Full Name</label>
                                <input type="text" class="form-control" id="full_name" placeholder="">
                            </div>
                            <div class="col-12 col-sm-6 mb-15">
                                <label for="Email" class="mb-1 form-label fw-medium">Email</label>
                                <input type="email" class="form-control" id="Email" placeholder="name@example.com">
                            </div>
                            <div class="col-12 mb-15">
                                <label for="contact_no" class="mb-1 form-label fw-medium">Contact No</label>
                                <input id="contact_no" type="tel" class="form-control">
                            </div>
                            <div class="col-12 mb-15">
                                <label for="message" class="mb-1 form-label fw-medium">Message</label>
                                <textarea name="" id="message" class="form-control"></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section bg-blue py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row">
                <div class="mb-10 text-center col-12 mb-md-20">
                    <h2 class="text-white h2 fw-bold">Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="overflow-hidden bg-white swiper testimonial-slider py-50 py-lg-80">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide px-30 px-sm-50 px-lg-80">
                                <div class="testimonial-slider-item">
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Sarah
                                        Thompson</cite>
                                    <span class="mb-20 text-center location fw-semibold font-lg d-block">Dallas,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="mb-0 text-center font-lg fw-medium">
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
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block"> Rajiv
                                        Patel</cite>
                                    <span class="mb-20 text-center location fw-semibold font-lg d-block">Fort Worth,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <p class="mb-0 text-center font-lg fw-medium">
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
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block">Sarah
                                        Thompson</cite>
                                    <span class="mb-20 text-center location fw-semibold font-lg d-block">Dallas,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="mb-0 text-center font-lg fw-medium">
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
                                    <cite class="mb-2 text-center name fw-bold text-capitalize d-block"> Rajiv
                                        Patel</cite>
                                    <span class="mb-20 text-center location fw-semibold font-lg d-block">Fort Worth,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <p class="mb-0 text-center font-lg fw-medium">
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
                <div class="text-center col-12">
                    <div class="fifa-image-holder">
                        <img src="{{ asset('new_assets/assets/fifa-image.png') }}" class="img-fluid" alt="FIFA Image">
                    </div>
                    <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World Cup 2026
                        page</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs-section py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row">
                <div class="text-center col-12 mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 accordion-holder" id="accordion01">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingOne">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseOne"
                                aria-expanded="false" aria-controls="accordion01-collapseOne">
                                How early will the driver arrive before my pickup time?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingOne">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Our drivers arrive 10–15 minutes early to give you a
                                    stress-free start to your ride.</p>
                            </div>
                        </div>
                    </div>
                    <!-- More accordion items... I'll include them all for completeness -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingTwo">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo"
                                aria-expanded="false" aria-controls="accordion01-collapseTwo">
                                Can I make multiple stops during my trip?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingTwo">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Yes, our Black Car Service Dallas allows multiple stops. The
                                    driver will plan the route efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingThree">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree"
                                aria-expanded="false" aria-controls="accordion01-collapseThree">
                                Can I request a specific driver?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingThree">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Absolutely. You can request the same driver for your trips if
                                    available. Many corporate clients prefer consistent drivers for comfort and
                                    trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingFour">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour"
                                aria-expanded="false" aria-controls="accordion01-collapseFour">
                                What happens if my flight is delayed?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingFour">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">We track flights in real-time. The driver adjusts your pickup
                                    time to match your arrival.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="accordion01-headingFive">
                            <button
                                class="mb-0 h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFive"
                                aria-expanded="false" aria-controls="accordion01-collapseFive">
                                Are there WiFi or charging options in the cars?
                                <span class="chevron-icon ms-auto">
                                    <img src="{{ asset('new_assets/assets/chevron-down.svg') }}" width="20" alt="chevron" class="img-fluid">
                                </span>
                            </button>
                        </h2>
                        <div id="accordion01-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="accordion01-headingFive">
                            <div class="pt-0 pr-0 pl-0 accordion-body">
                                <br>
                                <p class="font-base">Yes. Most vehicles have WiFi and charging ports so you can stay
                                    connected during your ride.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
