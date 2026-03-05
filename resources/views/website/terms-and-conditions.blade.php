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
    <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
         style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

        <div class="row" style="pointer-events: none;">
            <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                <h1 class="text-white h1 fw-bold mb-15">Term & Conditions – Black Car Service Dallas</h1>
                <p class="mb-0 text-white font-lg fw-medium">Request Instant Pricing for Black Car, SUV, or Group Travel in DFW.</p>
                <span class="my-2 text-white font-base d-block">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call Now</strong></span>
                <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                    Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a>
                </p>
            </div>
            <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                <div class="search-form-wrapper-desktop">
                    @include('partials.search', ['id_suffix' => ''])
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row">
            <div class="col-12">
                <p class="font-base">Welcome to Dallas Black Cars Service! These Terms and Conditions
                    govern your use of this website and our services. By getting access to and the usage of this
                    website and our services, you agree to be bound using those Terms. If you do not agree to
                    those Terms, you can no longer use our offerings or this website. You acknowledge that
                    Dallas Black Cars Service has the right to exchange those Terms at any time without
                    notice to you. Continue to check them from time to time for updates.
                </p>
                <h3 class="h5 fw-medium">1. Definitions</h3>
                <p><b>Dallas Black Cars Service, "we", "our", or "us":</b> Refers to the enterprise, the
                    internet
                    site, the owners, the operators, and/or the associates.
                    <b>"You" or "User":</b> Refers to individuals or entities who get admission to or employ our
                    internet site or offerings.
                </p>
                <h3 class="h5 fw-medium">2. Acknowledgment And Agreement To Terms</h3>
                <p>When you use our site or what we do, you say you have looked at and get these rules, and you
                    say yes to them. But if you don't go along with these rules, don't use our site or anything
                    we give you.</p>
                <p>Dallas Black Cars Service may change the Terms and Conditions at any time. If you
                    continue to use the services, you accept the new Terms and Conditions.</p>
                <h3 class="h5 fw-medium">3. Services Offered</h3>
                <p>Dallas Black Cars Service is an elite provider of professional chauffeured limousine
                    services, specializing in the following areas:</p>
                <p>
                <ul class="list-unstyled custom-unorder-list">
                    <li class="mb-0">Airport Transfers</li>
                    <li class="mb-0">Corporate and Executive Transportation</li>
                    <li class="mb-0">Special Event Services</li>
                </ul>
                </p>
                <p>Users must confirm all booking details, including the pickup/drop-off points, dates, and
                    times. All booking details and payment confirmations will be sent to users through email or
                    SMS.</p>
                <h3 class="h5 fw-medium">4. Booking And Payment Policy</h3>
                <p>
                <ul class="list-unstyled custom-unorder-list">
                    <li class="mb-0">Service bookings may be made online or over the phone with a
                        representative.</li>
                    <li class="mb-0">Payment will be required at the time of booking and will be processed
                        securely. The most common method of payment generally accepted is debit/credit cards,
                        and other acceptable methods will be notified to you at the time of booking.</li>
                    <li class="mb-0">After payment is completed, you will receive a confirmation via email or
                        SMS text message containing your booking information.</li>
                    <li class="mb-0 d-block"><b>Automatic Charges:</b>Payments for service will be automatically
                        charged to the same form of payment one day prior to service. Services associated with
                        your booking that are requested after booking confirmation will be billed separately.
                    </li>
                    <li class="mb-0 d-block"><b>Declined Payments:</b>Payments that are declined will require
                        you to provide another form of payment. If the alternate form of payment is not given,
                        it is possible your booking may be canceled. Dallas Black Cars Service is not
                        liable for cancellations on your booking due to payment issues.</li>
                    <li class="mb-0">After payment is completed, you will receive a confirmation via email or
                        SMS text message containing your booking information.</li>
                </ul>
                </p>
                <p>Our mobile applications offer features designed to enhance your user experience. We may
                    collect personal information, such as location data, to provide better and more personalized
                    services. Please check the privacy settings within the apps for details on the data we
                    collect and how it is used.</p>
                <h3 class="h5 fw-medium">5. Social Media/Social Networks</h3>
                <p>We may include social media plugins on our services to allow interaction with our social
                    media profiles. These plugins may collect personal information according to their privacy
                    policies. Please review third-party privacy policies for more details.</p>
                <h3 class="h5 fw-medium">6. Data Processing During Registered Use and Booking Rides</h3>
                <p>When you book a ride or use our services, we collect personal data such as contact details,
                    payment information, and ride preferences. We use this data to provide services, communicate
                    regarding your service, handle billing, and improve offerings. By using our services, you
                    consent to this data processing.</p>
                <h3 class="h5 fw-medium">7. Disputes And Arbitration</h3>
                <p>In the event of disputes stemming from the use of our services or website:</p>
                <p>
                <ul class="list-unstyled custom-unorder-list">
                    <li class="mb-0">The user must first contact Dallas Black Cars Service directly for resolution.</li>
                    <li class="mb-0">If there is no resolution, disputes will be settled through binding arbitration under relevant U.S. law.</li>
                    <li class="mb-0">Arbitration will take place at a mutually agreed-upon location, and the arbitrator's decision will be final.</li>
                    <li class="mb-0">Users waive their right to bring a class action lawsuit relating to the services of Dallas Black Cars Service or its terms.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@include('partials.testimonials')
@include('partials.faq')
@endsection
