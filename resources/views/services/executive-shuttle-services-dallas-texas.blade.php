@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Executive Shuttle Services Dallas"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Executive Shuttle Services Dallas</h1>
                            <p>
                                Move your team or guests with ease using our professional
                                executive shuttle services. Perfect for corporate events,
                                conferences, or group travel, we provide luxury vans & shuttles
                                with professional chauffeurs. Enjoy punctual service, comfort, &
                                efficiency across Dallas & the surrounding areas. Book your
                                Dallas executive shuttle service today for reliable group
                                transportation.
                            </p>
                            <p class="bt-text">24/7 Service Available, Click to Call Now!</p>
                            <div class="bottom-banner-btn" bis_skin_checked="1">
                                <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12143058671" bis_skin_checked="1">Call: +1 214-305-8671</a>
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
                    <h2>Executive Shuttle Services Dallas</h2>
                    <p>
                        Move your team or guests with ease using our professional
                        executive shuttle services. Perfect for corporate events,
                        conferences, or group travel, we provide luxury vans & shuttles
                        with professional chauffeurs. Enjoy punctual service, comfort, &
                        efficiency across Dallas & the surrounding areas. Book your
                        Dallas executive shuttle service today for reliable group
                        transportation.
                    </p>
                    <p class="bt-text">24/7 Service – Call Now</p>
                    <div class="bottom-banner-btn" bis_skin_checked="1">
                        <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12143058671" bis_skin_checked="1">Call: +1 214-305-8671</a>
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
                           Dallas Black Cars Limo Service – Fleet for Elegant Limousine Travel
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
                        alt="luxury black car service dallas" />
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
                        Premium Shuttle for
                        <span class="main-color">Professionals</span>
                    </h5>
                    <p class="pt-section-description">
                        Our Dallas executive shuttle is for business travelers & groups
                        who need safe & comfy rides. Going to
                        <a
                            href="/airport/car-service-dallas-fort-worth-international-airport/"
                            class="internal-links-w">DFW Airport</a>, Love Field Airport, or office-to-office in Dallas? We get you
                        there on time. We offer luxury SUVs & big vans with lots of
                        space. Perfect for groups who want comfort & style.
                    </p>
                    <p class="pt-section-description">
                        Skilled chauffeurs know the best routes. They save your time &
                        avoid delays. The
                        <a
                            href="https://dallasblackcarslimoservice.com/"
                            class="internal-links-w">corporate shuttle in Dallas</a>
                        is the right choice for meetings, events & airport travel. Book
                        your Dallas shuttle today & ride with confidence.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1">
                    <img
                        src="/img/sprinter-van-rental-dallas.webp"
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
                        src="/img/dallas-luxury-van-rental.webp"
                        alt="Chauffeured black car service in Dallas" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Group Travel <span class="main-color">Made Easy</span>
                    </h5>

                    <p class="pt-section-description">
                        Group trips for work or events don’t have to be hard. Our
                        executive group shuttle makes it simple. SUVs & vans give space
                        for people & bags so everyone stays together. We serve
                        <a
                            href="/locations/black-car-service-frisco-texas/"
                            class="internal-links">Frisco</a>, Plano, McKinney & nearby areas. We offer smooth rides to
                        airports, hotels & offices.
                    </p>
                    <p class="pt-section-description">
                        From on-time pickups to safe driving, our pro chauffeurs handle
                        it all. Moving colleagues to a meeting or guests to an event?
                        Our Dallas corporate shuttle keeps it easy, reliable &
                        stress-free. Reserve your group shuttle today & enjoy a smooth
                        ride.
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
                        src="/img/mercedes-sprinter-van-rental.webp"
                        alt="concerts and sporting events" />
                </div>
            </div>

            <div class="col-md-8">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-titles">
                        Why Choose Us for
                        <span class="main-color">Executive Shuttle Services</span>
                    </h5>

                    <p class="pt-section-description">
                        Group travel for business or events should be easy, comfortable,
                        & well-organized. Our executive shuttles are designed to move
                        teams, guests, & clients with the highest level of care &
                        efficiency.
                    </p>

                    <ul>
                        <li>
                            <strong class="strong-c-color"><a
                                    href="/services/chauffeur-service-dallas-texas/"
                                    class="internal-links">Professional Chauffeurs</a>: </strong>Skilled drivers who ensure safety & courtesy.
                        </li>
                        <li>
                            <strong class="strong-c-color">On-Time Service: </strong>Reliable scheduling ensures your group never has to wait.
                        </li>
                        <li>
                            <strong class="strong-c-color">Clear, Flat Rates: </strong>No
                            hidden costs, straightforward pricing for every ride.
                        </li>
                        <li>
                            <strong class="strong-c-color">Spacious, Luxury Shuttles: </strong>Clean, comfortable seating with room for everyone.
                        </li>
                        <li>
                            <strong class="strong-c-color">24/7 Availability: </strong>Ready whenever your company or event requires transport.
                        </li>
                        <li>
                            <strong class="strong-c-color">Trusted by Businesses and Event Planners: </strong>The choice for conferences, meetings, & VIP gatherings.
                        </li>
                        <li>
                            <strong class="strong-c-color">Complimentary Perks: </strong>Wi-Fi, chargers, & bottled water available for all
                            passengers.
                        </li>
                    </ul>

                    <p class="pt-section-description">
                        With our executive shuttle service, your group travels together
                        in comfort, style, & complete reliability.
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
                                                Booked their Executive Shuttle Service Dallas for a
                                                conference. The vehicle was spacious, comfortable,
                                                and perfect for the whole team. Driver was
                                                professional. Definitely booking again for our next
                                                event.
                                            </p>
                                            <p>
                                                <bold>— Madison C.</bold> Addison, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Our company used Executive Shuttle Service Dallas to
                                                transport staff during a corporate retreat. Everyone
                                                praised the comfort & punctuality. It was smooth,
                                                safe, & very well-organized from start to finish.
                                            </p>
                                            <p>
                                                <bold>— Kimberly H.</bold> Dallas, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                I’ve tried multiple shuttle services, but their
                                                Executive Shuttle Service Dallas truly stood out.
                                                Timely pickups, clean interior, courteous
                                                driver—made our client transfers effortless. Great
                                                impression for our business.
                                            </p>
                                            <p>
                                                <bold>— Natalie R.</bold> Dallas, TX
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
