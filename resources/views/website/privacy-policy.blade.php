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
                <h1 class="text-white h1 fw-bold mb-15">Privacy Policy – Black Car Service Dallas</h1>
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
                <p class="font-base">At Dallas Black Cars Service, we care about your privacy and take
                    measures to protect any personal information you provide. This Privacy Policy outlines our
                    practices concerning the collection, use, and protection of your data while you access our
                    websites, mobile applications, and services. By using our services, you agree to the
                    practices mentioned in this Privacy Policy.</p>
                
                <h3 class="h5 fw-medium">1. Data Security</h3>
                <p>Your privacy is important to us. We implement strong security measures to protect your data
                    from unauthorized access, sharing, alteration, or loss. We safeguard your personal and
                    financial information and continuously improve our security strategies.</p>
                <h3 class="h5 fw-medium">2. Provision Of Services</h3>
                <p>Dallas Black Cars Service provides Black Car and transportation services. Our services
                    are accessible through our websites, mobile apps, and other digital platforms. By accessing
                    these platforms, you consent to Dallas Black Cars Service collecting, using, and
                    storing your data as described in this Privacy Policy.</p>
                <h3 class="h5 fw-medium">3. Cookies, Pixels, and Similar Technologies</h3>
                <p>We use cookies, beacons, and similar technologies on our websites and mobile apps to enhance
                    your experience. These technologies help us understand your interaction with our services
                    and allow us to personalize content. For detailed information, refer to our separate Cookie
                    Policy.</p>
                <h3 class="h5 fw-medium">4. Special Features for Mobile Apps</h3>
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
            </div>
        </div>
    </div>
</section>
@include('partials.testimonials')
@include('partials.faq')
@endsection
