@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Luxury Van Rental Dallas"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Luxury Van Rental Dallas</h1>
                            <p>
                                Travel in comfort & style with our premium luxury van rentals.
                                Ideal for family trips, corporate outings, & group events, our
                                spacious vans feature modern amenities & professional chauffeurs
                                for a smooth ride. Enjoy reliable_ service across Dallas &
                                beyond. Book your Dallas luxury van rental today for
                                convenience, comfort, & peace of mind.
                            </p>
                            <p class="bt-text">24/7 Service Available, Click to Call Now!</p>
                            <div class="bottom-banner-btn" bis_skin_checked="1">
                                <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12148978056" bis_skin_checked="1">Call: 214-897-8056</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 p-0 booking_card_container">
                        @include('partials.search_form')
                    </div>
                </div>

                <!-- Map to display after form input -->
            </div>
        </div>

        <div id="map" style="height: 100%; width: 100%; display: none; border-radius: 15px; overflow: hidden; left:0;z-index: 9 !important; top:0">
            <div class="map-overlay"></div>
        </div>

        <div id="route-info-box" style="
      position: absolute;
      bottom: 20px;
      left: 20px;
      background: white;
      color: black;
      padding: 12px 16px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      font-size: 14px;
      z-index: 999;
      display: none;">
            <div><strong>Distance:</strong> <span id="route-distance">-</span></div>
            <div><strong>Duration:</strong> <span id="route-duration">-</span></div>
        </div>
    </div>
</div>
<div class="hero-mobile">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-banner-text" bis_skin_checked="1">
                    <h2>Luxury Van Rental Dallas</h2>
                    <p>
                        Travel in comfort & style with our premium luxury van rentals.
                        Ideal for family trips, corporate outings, & group events, our
                        spacious vans feature modern amenities & professional chauffeurs
                        for a smooth ride. Enjoy reliable_ service across Dallas &
                        beyond. Book your Dallas luxury van rental today for
                        convenience, comfort, & peace of mind.
                    </p>
                    <p class="bt-text">24/7 Service – Call Now</p>
                    <div class="bottom-banner-btn" bis_skin_checked="1">
                        <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12148978056" bis_skin_checked="1">Call: 214-897-8056</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="container-fluid ait">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="btom">
                    <div class="btom-bottom">
                        <h2>
                           Dallas Limo And Black Cars Service – Travel in Comfort with Our Vans
                        </h2>
                        <p>
                           Our fleet delivers the perfect blend of luxury and sophistication for <a href="/services/dfw-limo-service/" class="internal-links">Dallas limousine service</a>, ideal for weddings, proms, galas, or executive functions.</>
                        </p>
                    </div>


  <p>
                        <strong class="strong-c-color">Luxury Sedans:</strong> Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for private limo-style rides.
                    </p>



                    <p>
                        <strong class="strong-c-color">Luxury SUVs:</strong>
                        Escalade ESV, Suburban, Yukon XL, and Navigator for upscale group travel with luxury finishes.
                    </p>

                    <p>
                        <strong class="strong-c-color">Executive Sprinter Vans:</strong>
                     Mercedes-Benz Sprinters provide a limousine-style experience for larger parties and events.
                    </p>

                       <p> <strong class="strong-c-color">23–38 Passenger Mini Bus:</strong>
                     Great for wedding shuttles, concert transportation, or upscale group rides.
                    </p>

                       <p>
                        <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers):</strong>
                    The ultimate option for gala events, conventions, or large VIP travel groups. With our Dallas limo service, every ride is styled for elegance and lasting impressions.
                    </p>




                    <img
                        src="/img/dallas-black-car-service.webp"
                        alt="luxury Dallas Limo And Black Cars" />
                </div>
                <div class="btom-btn">
                    <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Dallas – Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title">
                        Spacious Vans for <span class="main-color">Every Trip</span>
                    </h5>
                    <p class="pt-section-description">
                        Traveling with a big group is easier when everyone stays
                        together. Our luxury van rental in Dallas is built for comfort,
                        style & convenience. Wide seating makes every ride easy. Large
                        luggage space gives room for all bags. Our vans are perfect for
                        family vacations. They also work for
                        <a
                            href="/services/dallas-airport-transfers/"
                            class="internal-links-w">airport transfers</a>. They fit well for business travel too. We serve Dallas,
                        Plano, Frisco & nearby areas. We ensure smooth trips to DFW
                        Airport or
                        <a
                            href="/airport/dallas-love-field-black-car-service/"
                            class="internal-links-w">Love Field Airport</a>. Each van is clean & well-maintained.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/luxury-van-rental-dallas-texas.webp"
                        width="522"
                        height="564"
                        alt="Reliable black car service near Dallas" />
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <h5>
                    <span class="main-color">Going to the airport,</span> a business
                    meeting, or the big game?
                </h5>

                <p class="bottom-cta-content">
                    Your private chauffeur is ready for DFW Airport, Plano business
                    districts, Legacy West, or AT&amp;T Stadium game days.
                </p>

                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="#">Travel in Comfort – Book Now</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<section class="about-uss city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/premium-van-rental-dallas-texas.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Comfort & Style on <span class="main-color">the Road</span>
                    </h5>

                    <p class="pt-section-description">
                        Group travel does not need to be stressful. Our chauffeured
                        luxury vans keep rides simple & relaxing. Every van has spacious
                        interiors. Soft seating makes travel easy. Modern features add
                        comfort. They are perfect for
                        <a
                            href="/services/private-car-service-in-dallas-texas/"
                            class="internal-links">weddings & corporate events</a>. They fit family tours & nights out in Dallas. A pro driver
                        comes with every van. The driver is punctual & polite. They know
                        the best routes in the city. You can sit back & enjoy your time.
                    </p>
                    <p class="pt-section-description">
                        Our vans are good for long trips. They also fit short, stylish
                        rides. We cover every detail from luggage help to smooth
                        transfers.
                        <a style="cursor: pointer;" class="quick-book-link internal-links">Reserve your luxury van now</a>
                        & travel in style.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <img
                    src="/img/fifa-world-cup-2026-car-service-dallas.jpg"
                    alt="fifa world cup 2026 car service dallas" />

                <a
                    href="/fifa-world-cup-2026-car-service-dallas/"
                    class="bottom-cta-vtb-c">Visit our fifa world cup 2026 page</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<div id="bottomServices-defcitiy icon-h-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/booking.webp"
                            alt="Online Portal
 " />
                    </span>

                    <div class="serviceHeadings">
                        <h3>Book Online or Call</h3>

                        <p>Use our form or call to schedule your ride.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/conformation.webp"
                            alt="Clear-Cut All-Inclusive Pricing
 " />
                    </span>

                    <div class="serviceHeadings">
                        <h3>Get Instant Confirmation</h3>

                        <p>Receive driver and trip details via text or email.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei">
                    <span class="serviceImage1">
                        <img
                            src="/img/chauffeur.webp"
                            alt="Expert Chauffeurs
 " />
                    </span>

                    <div class="serviceHeadings">
                        <h3>Meet Your Chauffeur</h3>

                        <p>On-time, professional, and ready to assist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about-uss city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/executive-luxury-van-dallas-texas.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for
                        <span class="main-color">Luxury Van Rental</span>
                    </h5>

                    <p class="pt-section-description">
                        When you need space, style, & comfort all in one,
                        <a href="/our-fleet/" class="internal-links">our luxury vans</a>
                        are the perfect choice. Whether it’s for family trips, group
                        outings, or business travel, we make sure every ride is as
                        smooth & enjoyable as possible. With us, you get the right
                        balance of elegance & practicality.
                    </p>

                    <ul>
                        <li>
                            <strong class="strong-c-color"><a
                                    href="/services/chauffeur-service-dallas-texas/"
                                    class="internal-links">Professional Chauffeurs</a>: </strong>Courteous, trained drivers for a stress-free ride.
                        </li>
                        <li>
                            <strong class="strong-c-color">Always On Time: </strong>Punctual pickups & drop-offs for your convenience.
                        </li>
                        <li>
                            <strong class="strong-c-color">Flat, Transparent Rates: </strong>No hidden fees—clear pricing every time.
                        </li>
                        <li>
                            <strong class="strong-c-color">Spacious, Luxury Vans: </strong>Plush seating with room for passengers & luggage.
                        </li>
                        <li>
                            <strong class="strong-c-color">24/7 Availability: </strong>Travel any time, day or night, without worry.
                        </li>
                        <li>
                            <strong class="strong-c-color">Trusted by Families and Executives: </strong>Ideal for vacations, business trips, or special events.
                        </li>
                        <li>
                            <strong class="strong-c-color">Complimentary Amenities: </strong>Wi-Fi, phone chargers, & bottled water included for your
                            comfort.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With our
                        <a
                            href="/services/executive-shuttle-services-dallas-texas/"
                            class="internal-links">luxury van rentals</a>, you and your group can travel together in comfort, style, &
                        peace of mind.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <h5>
                    <span class="main-color">Don’t leave</span><br />your next trip to
                    chance
                </h5>
                <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="#">Book your ride now</a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<section class="about-us testimonials-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 testimonials-sec">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title text-center">
                        What Our Corporate Clients and
                        <span class="main-color">Executive Assistants Are Saying</span>
                    </h5>

                    <div class="button-prevs text-right">
                        <div class="row">
                            <div class="col-md-8"></div>

                            <div class="col-md-4 testi">
                                <button class="prev">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                </button>
                                <button class="next">
                                    <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="banner-slids">
                        <div class="tns-outer tns-ovh">
                            <button data-action="stop" type="button">
                                <span class="tns-visually-hidden">stop animation</span>stop
                            </button>
                            <div class="tns-inner" id="tns1-iw">
                                <div
                                    class="slider tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                    id="tns1"
                                    style="
                        transform: translateX(-28%);
                        transition-duration: 0.3s;
                      ">
                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                I hired Luxury Van Rental Dallas last month when We
                                                went on a family trip Oh my god the seats were so
                                                much space Secratet of luxury the seround were all
                                                of to of e driver was very good. The van was so
                                                clean.
                                            </p>
                                            <p>
                                                <bold>— Amanda C.</bold> Fort Worth, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                I hired Luxury Van Rental Dallas for a bachelorette
                                                party. First of all, I want to say that the van
                                                looked even better in real life and the ride was as
                                                smooth as everyone had mentioned. I highly recommend
                                                using them for any kind of special event. They
                                                really made our experience one of a kind.
                                            </p>
                                            <p>
                                                <bold>— Nicole A.</bold> Plano, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                It was a great experience from the beginning till
                                                the end. The inside was clean, the air conditioning
                                                very good and the driver was professional. It was a
                                                great time spent together moving to different places
                                                around the city. Luxury Van Rental Dallas.
                                            </p>
                                            <p>
                                                <bold>— Rachel M.</bold> Frisco, TX
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.faq_section')
<div class="cta cta-ddc-nones bottom-button-vtb-c">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
            </div>

            <div class="col-md-10">
                <h3><span class="main-color">Make Every Mile </span><br>First-Class</h3>
                <a href="/fifa-world-cup-2026-car-service-dallas/" class="bottom-cta-vtb-c">Reserve Your Black Car Today</a>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
</div>
@section('body-scripts')
<script src="{{ asset('js/industrie-custom.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUqn8Dg3GICSzhyvw7DjXXHkyoGMCoTpM&libraries=places&loading=async&callback=initAutocomplete" async defer></script>
@endsection
@endsection
