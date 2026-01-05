@extends('master')

@section('content')
    <section class="home-banner-section">
        <div class="ah-container position-relative py-60 py-sm-70 py-md-80 py-lg-100"
            style="background-image: url('{{ asset('new_assets/assets/banner-4.jpg') }}');">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center text-md-start">
                    <h1 class="h1 fw-bold mb-15 text-white">Contact Us – Black Car Service Dallas</h1>
                    <p class="font-lg fw-medium text-white mb-0">Request Instant Pricing for Black Car, SUV, or
                        Group Travel in DFW.</p>
                    <span class="font-base text-white d-block my-2">24/7 Service Available – <strong
                            class="font-lg fw-semibold">Click to Call
                            Now</strong></span>
                    <div class="pt-3"><a href="/booking" class="btn btn-primary sm fw-medium">Book Your Ride
                            Now</a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Contact us</h2>
                    <p class="font-base">Let’s Get You There in Style – Reach Out Anytime, Day or Night.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
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
                    <form action="/contact-us/" method="post" class="contact-us-form bg-white px-20 px-sm-30 py-30">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-6 mb-15">
                                <label for="firstname" class="form-label mb-1 fw-medium">First Name</label>
                                <input type="text" class="form-control" name="formInput[first_name]" id="firstname"
                                    placeholder="First Name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-15">
                                <label for="lastname" class="form-label mb-1 fw-medium">Last Name</label>
                                <input type="text" class="form-control" name="formInput[last_name]" id="lastname"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="col-12 col-md-6 mb-15">
                                <label for="email" class="form-label mb-1 fw-medium">Email</label>
                                <input type="email" class="form-control" name="formInput[email]" id="email"
                                    placeholder="Your email address" required>
                            </div>
                            <div class="col-12 col-md-6 mb-15">
                                <label for="phone" class="form-label mb-1 fw-medium">Phone</label>
                                <input type="tel" class="form-control" name="formInput[phone]" id="phone"
                                    placeholder="Your phone number" required>
                            </div>
                            <div class="col-12 mb-15">
                                <label for="message" class="form-label mb-1 fw-medium">Message</label>
                                <textarea class="form-control" name="formInput[message]" id="message" placeholder="Your message" required></textarea>
                            </div>
                            <div class="col-12 mb-15">
                                <p class="font-sm mb-2">
                                    Do you agree to receive texts from Dallas Black Cars Limo
                                    Service (214-305-8671)? Messages may include reservation
                                    reminders/updates. Msg &amp; data rates may apply. Reply STOP
                                    to unsubscribe or HELP for support.</p>
                                <div class="form-check pl-0 d-flex mt-2">
                                    <input class="form-check-input ml-0 flex-shrink-0" type="checkbox" id="Yes"
                                        name="formInput[Yes]" style="margin-left: 0;">
                                    <label class="form-check-label small d-inline-block ms-2" for="Yes"
                                        style="margin-top: -2px;">
                                        Yes, I agree to receive text messages from Dallas Black
                                        Cars Service sent from (214-305-8671).
                                    </label>
                                </div>
                                <div class="form-check pl-0 d-flex mt-2">
                                    <input class="form-check-input ml-0 flex-shrink-0" type="checkbox" id="No"
                                        name="formInput[No]" style="margin-left: 0;">
                                    <label class="form-check-label small d-inline-block ms-2" for="No"
                                        style="margin-top: -2px;">
                                        No, I do not want to receive text messages from Dallas
                                        Black Cars Service.
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <input type="hidden" name="action" value="submitform" class="filled" />
                                <button type="submit" class="btn btn-primary fw-bold">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="icon-holder mb-20">
                            <img src="{{ asset('new_assets/assets/phone.svg') }}" alt="Driver" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Call or Text Us</h3>
                        <p>Have an urgent question or need to confirm a pickup? <br>
                            <strong class="fw-semibold">Phone: </strong>
                            <a class="fw-bold font-lg theme-color" style="word-break: break-all;"
                                href="tel:+12148978056">+1
                                214-897-8056</a>
                        </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="icon-holder mb-20">
                            <img src="{{ asset('new_assets/assets/email.svg') }}" alt="Confirmation" class="img-fluid">
                        </span>
                        <h3 class="h3 fw-semibold">Email Us</h3>
                        <p>
                            For special requests, corporate account setup, wedding/event quotes, or Sprinter/Mini
                            Bus bookings: <br>
                            <strong>Email:</strong>
                            <span class="single-line-ellipses w-100 d-inline-block"
                                style="max-width: 296px;vertical-align: middle;">
                                <a class="fw-bold font-lg"
                                    href="mailto:info@dallaslimoandblackcars.com">info@dallaslimoandblackcars.com
                                </a>
                            </span>
                        </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="icon-holder mb-20">
                            <img src="{{ asset('new_assets/assets/24-hours.svg') }}" alt="Booking" class="img-fluid">
                        </span>
                        <h3 class="h4 fw-semibold">Operating Hours</h3>
                        <p>We operate 24/7 including all major holidays. <br> You can count on us
                            for early-morning airport pickups or late-night returns. </p>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="icon-holder mb-20">
                            <img src="{{ asset('new_assets/assets/pointer.svg') }}" alt="Booking" class="img-fluid">
                        </span>
                        <h3 class="h4 fw-semibold">Business Address</h3>
                        <address>
                            <p>Dallas Black Cars Service 200 Crescent Court Dallas, Texas 75201
                            </p>
                        </address>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                    <article class="custom-card d-flex flex-column w-100">
                        <span class="icon-holder mb-20">
                            <img src="{{ asset('new_assets/assets/document.svg') }}" alt="Booking" class="img-fluid">
                        </span>
                        <h3 class="h4 fw-semibold">Booking Options</h3>
                        <address>
                            <p class="font-base">
                                You can also book online instantly: <br>
                                <a class="font-base" href="/book-now">Book Online Now</a>,
                                <a class="font-base" href="/get-a-quote">Get a Custom Quote</a>,
                                <a class="font-base" href="/our-fleet">Explore Our Fleet</a>
                            </p>
                        </address>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section bg-blue py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row">
                <div class="col-12 text-center mb-10 mb-md-20">
                    <h2 class="h2 fw-bold text-white">Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper testimonial-slider py-50 py-lg-80 bg-white overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide px-30 px-sm-50 px-lg-80">
                                <div class="testimonial-slider-item">
                                    <cite class="name fw-bold mb-2 text-capitalize text-center d-block">Sarah
                                        Thompson</cite>
                                    <span class="location fw-semibold mb-20 font-lg text-center d-block">Dallas,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="font-lg fw-medium text-center mb-0">
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
                                    <cite class="name fw-bold mb-2 text-capitalize text-center d-block"> Rajiv
                                        Patel</cite>
                                    <span class="location fw-semibold mb-20 font-lg text-center d-block">Fort Worth,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <p class="font-lg fw-medium text-center mb-0">
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
                                    <cite class="name fw-bold mb-2 text-capitalize text-center d-block">Sarah
                                        Thompson</cite>
                                    <span class="location fw-semibold mb-20 font-lg text-center d-block">Dallas,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <!-- <span class="quote">“</span> -->
                                        <p class="font-lg fw-medium text-center mb-0">
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
                                    <cite class="name fw-bold mb-2 text-capitalize text-center d-block"> Rajiv
                                        Patel</cite>
                                    <span class="location fw-semibold mb-20 font-lg text-center d-block">Fort Worth,
                                        TX</span>
                                    <blockquote class="mb-30">
                                        <p class="font-lg fw-medium text-center mb-0">
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
    @include('partials.faq_section')
@endsection
