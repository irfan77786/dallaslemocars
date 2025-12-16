@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Contact Us"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
    <div class="row">
        <div class="col-sm-12 back-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
                        <div class="bottom-banner-text" bis_skin_checked="1">
                            <h1>Contact Us – Dallas Limo And Black Cars Service</h1>
                            <p>
                                Let’s Get You There in Style – Reach Out Anytime, Day or Night.
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
                    <h2>Contact Us – Dallas Limo And Black Cars Service</h2>
                    <p>
                        Let’s Get You There in Style – Reach Out Anytime, Day or Night.
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

<div class="form-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-pulsl">
                <div class="for-banner-text">
                    <div class="sub-hub-text">
                        <h3>We’re Here When You Need Us</h3>
                        <p>
                            At
                            <a
                                href="https://dallaslimoandblackcars.com/"
                                class="internal-links">Dallas Limo And Black Cars Service</a>, we make it easy to reach us for questions, bookings, and
                            special transportation requests. Whether you need a
                            last-minute airport ride, a
                            <a
                                href="/services/luxury-van-rental-dallas-texas/"
                                class="internal-links">custom Sprinter Van</a>
                            quote, or want to speak with our dispatch team, we’re always
                            ready. We serve clients across Dallas–Fort Worth, including
                            Plano, Frisco, Irving, Arlington, and transfers from DFW
                            Airport,
                            <a
                                href="/airport/signature-flight-support/"
                                class="internal-links">Dallas Love Field</a>, and private FBOs like Signature Aviation and Million Air.
                        </p>
                    </div>

                    <div class="sub-hub-text">
                        <h3>Call or Text Us</h3>
                        <p>Have an urgent question or need to confirm a pickup?</p>
                        <ul>
                            <li>
                                <strong>Phone & Text:</strong>
                                <a href="tel:214-305-8671">214-305-8671</a>
                            </li>
                            <li><strong>Available:</strong> 24 hours, 7 days a week</li>
                        </ul>
                    </div>

                    <div class="sub-hub-text">
                        <h3>Email Us</h3>
                        <p>
                            For special requests, corporate account setup, wedding/event
                            quotes, or Sprinter/Mini Bus bookings:
                        </p>
                        <p>
                            <strong>Email:</strong>
                            <a href="mailto:info@dallaslimoandblackcars.com">info@dallaslimoandblackcars.com</a>
                        </p>
                    </div>

                    <div class="sub-hub-text">
                        <h3>Operating Hours</h3>
                        <ul>
                            <li>We operate 24/7 including all major holidays.</li>
                            <li>
                                You can count on us for early-morning airport pickups or
                                late-night returns.
                            </li>
                        </ul>
                    </div>

                    <div class="sub-hub-text">
                        <h3>Business Address</h3>
                        <p>
                            Dallas Limo And Black Cars Service 200 Crescent Court Dallas,
                            Texas 75201
                        </p>
                        <p>(For correspondence and pre-arranged meetings)</p>
                    </div>

                    <div class="sub-hub-text">
                        <h3>Booking Options</h3>
                        <p>You can also book online instantly:</p>
                        <ul>
                            <li>
                                <a href="/book-now/" class="internal-links">Book Online Now</a>
                            </li>
                            <li>
                                <a href="/get-a-quote/" class="internal-links">Get a Custom Quote</a>
                            </li>
                            <li>
                                <a href="/our-fleet/" class="internal-links">Explore Our Fleet</a>
                            </li>
                        </ul>
                        <p>
                            We offer real-time availability, instant confirmations, and
                            transparent pricing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-push">
                <div class="contact_us">
                    <div class="responsive-container-block container">
                        <h3>Contact us</h3>
                        <div class="expMessage"></div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form
                            id="contactus"
                            class="form-box"
                            method="POST"
                            action="/contact-us/"
                            novalidate="novalidate">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="firstname">First Name</label>
                                    <input
                                        name="formInput[first_name]"
                                        id="firstname"
                                        class="form-control"
                                        placeholder="Your first name"
                                        required
                                        type="text" />
                                </div>
                                <div class="form-group col-12">
                                    <label for="lastname">Last Name</label>
                                    <input
                                        name="formInput[last_name]"
                                        id="lastname"
                                        class="form-control"
                                        placeholder="your last name"
                                        required
                                        type="text" />
                                </div>

                                <div class="form-group col-12">
                                    <label for="email">Email</label>
                                    <input
                                        name="formInput[email]"
                                        id="email"
                                        class="form-control"
                                        placeholder="Your email address"
                                        required
                                        type="email" />
                                </div>

                                <div class="form-group col-12">
                                    <label for="phone">Phone</label>
                                    <input
                                        name="formInput[phone]"
                                        id="phone"
                                        class="form-control"
                                        placeholder="Your phone number"
                                        required
                                        type="tel" />
                                </div>

                                <div class="form-group col-12">
                                    <label for="message">Message</label>
                                    <textarea
                                        id="message"
                                        name="formInput[message]"
                                        class="form-control bg-white"
                                        placeholder="Your message"
                                        style="height: 120px; background-color: #fff !important;"></textarea>
                                </div>

                                <div class="form-group col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Send Message
                                    </button>
                                    <input type="hidden" name="action" value="submitform" class="filled" />
                                </div>
                        </form>


                    </div>

                    <div class="form-group mt-4">
                        <div class="form-check p-0">
                            <p class="small text-muted mb-2">
                                Do you agree to receive texts from Dallas Limo And Black Cars
                                Service (214-305-8671)? Messages may include reservation
                                reminders/updates. Msg & data rates may apply. Reply STOP
                                to unsubscribe or HELP for support.
                            </p>
                            <div class="form-check pl-0">
                                <input
                                    class="form-check-input ml-0"
                                    type="checkbox"
                                    id="horns1"
                                    name="formInput[Yes]"
                                    style="margin-left: 0;" />
                                <label class="form-check-label small d-inline-block ml-3" for="horns1" style="margin-top: -2px;">
                                    Yes, I agree to receive text messages from Dallas Black
                                    Cars Limo Service sent from (214-305-8671).
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <input
                                    type="checkbox"
                                    id="horns2"
                                    name="formInput[No]"
                                    class="filled" />
                                No, I do not want to receive text messages from Dallas
                                Black Cars Limo Service.
                            </p>

                            <p>
                                See our
                                <a href="/privacy-policy/" class="internal-links">Privacy Policy</a>
                                for details on how we handle your information.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-md-pulls">
            <div class="for-banner-text">
                <div class="sub-hub-text">
                    <h3>We’re Here When You Need Us</h3>
                    <p>
                        At
                        <a
                            href="https://dallaslimoandblackcars.com/"
                            class="internal-links">Dallas Limo And Black Cars Service</a>, we make it easy to reach us for questions, bookings, and
                        special transportation requests. Whether you need a
                        last-minute airport ride, a
                        <a
                            href="/services/luxury-van-rental-dallas-texas/"
                            class="internal-links">custom Sprinter Van</a>
                        quote, or want to speak with our dispatch team, we’re always
                        ready. We serve clients across Dallas–Fort Worth, including
                        Plano, Frisco, Irving, Arlington, and transfers from DFW
                        Airport,
                        <a
                            href="/airport/signature-flight-support/"
                            class="internal-links">Dallas Love Field</a>, and private FBOs like Signature Aviation and Million Air.
                    </p>
                </div>

                <div class="sub-hub-text">
                    <h3>Call or Text Us</h3>
                    <p>Have an urgent question or need to confirm a pickup?</p>
                    <ul>
                        <li>
                            <strong>Phone & Text:</strong>
                            <a href="tel:214-305-8671">214-305-8671</a>
                        </li>
                        <li><strong>Available:</strong> 24 hours, 7 days a week</li>
                    </ul>
                </div>

                <div class="sub-hub-text">
                    <h3>Email Us</h3>
                    <p>
                        For special requests, corporate account setup, wedding/event
                        quotes, or Sprinter/Mini Bus bookings:
                    </p>
                    <p>
                        <strong>Email:</strong>
                        <a href="mailto:info@dallaslimoandblackcars.com">info@dallaslimoandblackcars.com</a>
                    </p>
                </div>

                <div class="sub-hub-text">
                    <h3>Operating Hours</h3>
                    <ul>
                        <li>We operate 24/7 including all major holidays.</li>
                        <li>
                            You can count on us for early-morning airport pickups or
                            late-night returns.
                        </li>
                    </ul>
                </div>

                <div class="sub-hub-text">
                    <h3>Business Address</h3>
                    <p>
                        Dallas Limo And Black Cars Service 200 Crescent Court Dallas,
                        Texas 75201
                    </p>
                    <p>(For correspondence and pre-arranged meetings)</p>
                </div>

                <div class="sub-hub-text">
                    <h3>Booking Options</h3>
                    <p>You can also book online instantly:</p>
                    <ul>
                        <li>
                            <a href="/book-now/" class="internal-links">Book Online Now</a>
                        </li>
                        <li>
                            <a href="/get-a-quote/" class="internal-links">Get a Custom Quote</a>
                        </li>
                        <li>
                            <a href="/our-fleet/" class="internal-links">Explore Our Fleet</a>
                        </li>
                    </ul>
                    <p>
                        We offer real-time availability, instant confirmations, and
                        transparent pricing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section class="about-us testimonials-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 testimonials-sec">
                <div class="pt-section-title-box">
                    <h5 class="pt-section-title text-center">
                        What Our Corporate Clients and Executive Assistants Are Saying
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
                                                I reached out at midnight for a 4 AM ride to DFW
                                                Airport, and they replied instantly. I’ve used car
                                                services all over, and none match this level of
                                                communication and professionalism.
                                            </p>
                                            <p>
                                                <bold>— Sandra T.</bold> Plano, TX
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                Coordinating transportation for 30+ executives isn’t
                                                easy, but Dallas Black Cars made it effortless. From
                                                initial quote to post-trip follow-up, their
                                                communication was prompt, polite, and professional.
                                            </p>
                                            <p>
                                                <bold>— Brian M.</bold> Downtown Dallas
                                            </p>
                                        </div>
                                    </div>

                                    <div
                                        class="slide tns-item"
                                        aria-hidden="true"
                                        tabindex="-1">
                                        <div class="slide__item">
                                            <p>
                                                They sent a booking link via text, confirmed in
                                                minutes, and the Sprinter Van arrived early. The
                                                entire process—from quote to drop-off—was seamless.
                                            </p>
                                            <p>
                                                <bold>— Jessica R.</bold> Frisco, TX
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
