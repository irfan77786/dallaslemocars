@php
    $isHourly = session('service_type') === 'hourlyHire';
@endphp

@extends('master')

@section('content')
@section('styles')
    <style>
        /* iOS Safari-only — keep logo sizing but DON'T change alignment */
        @supports (-webkit-touch-callout: none) {
            /* keep Bootstrap's default layout for the brand */

            .navbar-brand .logo {
                height: auto !important;
                /* keep intrinsic ratio */
                max-height: 41px;
                /* your visual cap */
                width: auto !important;
                /* prevent width rules from stretching it */
                max-width: 100%;
                object-fit: contain;
                display: block;
            }

            .navbar {
                display: flex !important;
                justify-content: space-between !important;
                /* Space between the items */
                align-items: center !important;
                /* Vertically center the content */
                height: 60px !important;
                /* Set height of navbar */
                margin-top: 5px !important;
                /* Add margin from top (adjust as needed) */
            }

            .navbar-brand {
                display: flex !important;
                align-items: center !important;
                /* Vertically center the logo */
                justify-content: center !important;
                /* Horizontally center the logo */
                height: 100% !important;
                /* Ensure it takes full height */
            }

            .navbar-toggler {
                display: flex !important;
                align-items: center !important;
                /* Vertically center the hamburger icon */
                justify-content: center !important;
                /* Horizontally center the hamburger icon */
            }

            .logo {
                height: auto !important;
                max-height: 41px !important;
                /* Your visual cap */
                width: auto !important;
                /* Prevent stretching */
            }
        }
    </style>
    <style>
        /* iOS Safari — prevent focus zoom on pickup/dropoff text inputs */
        @supports (-webkit-touch-callout: none) {

            #pickup-location,
            #dropoff-location,
            #pickup-location-hourly,
            #dropoff-location-hourly,
            input.pac-target-input,
            /* Google Places attaches this */
            input[type="text"].form-control,
            input[type="search"].form-control,
            input[type="tel"].form-control,
            input[type="email"].form-control,
            textarea.form-control,
            select.form-select {
                font-size: 16px !important;
                /* >=16px stops the zoom */
            }
        }

        @media (max-width: 768px) {
            input[type="time"] {
                color: transparent !important;
                /* Hide the text color initially */
                text-align: left;
                /* Adjust text alignment if needed */
            }

            /* When the input has a value, change the text color to black */
            input[type="time"]:valid {
                color: black !important;
            }

            /* When the input is focused, the value will also be black */
            input[type="time"]:focus {
                color: black !important;
            }
        }




        /* ===== Date/Time inputs: stable baseline across browsers ===== */
        input[type="date"].form-control,
        input[type="time"].form-control {
            font-size: 16px;
            /* prevents iOS zoom */
            height: 40px;
            line-height: 40px;
            padding: 0 .75rem;
            box-sizing: border-box;
            text-align: left;
            -webkit-appearance: auto;
            appearance: auto;
        }

        /* Hide the text-input placeholder only on iOS Safari */
        @supports (-webkit-touch-callout: none) {
            .date-display::placeholder {
                color: transparent;
            }

            .date-display::-webkit-input-placeholder {
                color: transparent;
            }

            /* older WebKit */
        }

        /* Remove previous experiments that caused vertical drift */
        input[type="date"].form-control::-webkit-datetime-edit,
        input[type="time"].form-control::-webkit-datetime-edit,
        input[type="date"].form-control::-webkit-datetime-edit-fields-wrapper,
        input[type="time"].form-control::-webkit-datetime-edit-fields-wrapper,
        input[type="date"].form-control::-webkit-datetime-edit-month-field,
        input[type="date"].form-control::-webkit-datetime-edit-day-field,
        input[type="date"].form-control::-webkit-datetime-edit-year-field,
        input[type="time"].form-control::-webkit-datetime-edit-hour-field,
        input[type="time"].form-control::-webkit-datetime-edit-minute-field,
        input[type="time"].form-control::-webkit-datetime-edit-ampm-field {
            padding: 0;
            margin: 0;
            text-align: left;
        }


        /* Keep the native calendar/clock icon clickable */
        input[type="date"].form-control::-webkit-calendar-picker-indicator,
        input[type="time"].form-control::-webkit-calendar-picker-indicator {
            opacity: 1;
            cursor: pointer;
        }

        /* Small iOS-only nudge (no flex/transform) */
        @supports (-webkit-touch-callout: none) {

            input[type="date"].form-control,
            input[type="time"].form-control {
                line-height: 38px;
                /* adjust to 39px if still a hair low on your device */
            }
        }

        /* ===== Fake placeholders for iOS (since native ones don't render) ===== */
        .ph-wrap {
            position: relative;
            width: 100%;
        }

        .ph-wrap>.form-control {
            width: 100%;
        }

        .fake-ph {
            position: absolute;
            left: 0rem;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
            opacity: .55;
            font-size: 14px;
            line-height: 1;
            white-space: nowrap;
            color: black !important;
        }

        .ph-wrap {
            text-align: left !important;
        }

        /* Hide overlay when there is a value or focusing the field */
        .ph-wrap.has-value .fake-ph,
        .ph-wrap:focus-within .fake-ph {
            display: none;
        }

        /* === Overlay date-input approach for iOS === */
        .ph-wrap {
            position: relative;
        }

        .ph-wrap .date-display {
            position: relative;
            z-index: 1;
            /* visible layer */
        }

        .ph-wrap .hidden-date {
            position: absolute;
            inset: 0;
            /* left:0; top:0; right:0; bottom:0 */
            opacity: 0;
            /* invisible but still clickable */
            width: 100%;
            height: 100%;
            cursor: pointer;
            z-index: 2;
            /* sits above the display for taps */
            -webkit-tap-highlight-color: transparent;
        }

        input[type="date"] {
            text-transform: uppercase !important;
            color: black !important;
            padding-left: 2.2rem !important;
        }

        /* Only show the overlay on iOS Safari */
        @supports (-webkit-touch-callout: none) {
            .fake-ph {
                display: inline;
            }
        }

        /* Non-iOS: never show the overlay */
        @supports not (-webkit-touch-callout: none) {
            .fake-ph {
                display: none;
            }
        }

        /* iOS Safari: never center the value (even on click/focus) */
        @supports (-webkit-touch-callout: none) {

            /* Path A: value is in ::-webkit-date-and-time-value */
            #pickup-date::-webkit-date-and-time-value,
            #pickup-date:focus::-webkit-date-and-time-value,
            #pickup-date-hourly::-webkit-date-and-time-value,
            #pickup-date-hourly:focus::-webkit-date-and-time-value,
            #pickup-time::-webkit-date-and-time-value,
            #pickup-time:focus::-webkit-date-and-time-value,
            #pickup-time-hourly::-webkit-date-and-time-value,
            #pickup-time-hourly:focus::-webkit-date-and-time-value {
                display: block;
                width: 100%;
                text-align: left !important;
                margin: 0 !important;
            }

            /* Path B: value is in ::-webkit-datetime-edit */
            #pickup-date::-webkit-datetime-edit,
            #pickup-date:focus::-webkit-datetime-edit,
            #pickup-date-hourly::-webkit-datetime-edit,
            #pickup-date-hourly:focus::-webkit-datetime-edit,
            #pickup-time::-webkit-datetime-edit,
            #pickup-time:focus::-webkit-datetime-edit,
            #pickup-time-hourly::-webkit-datetime-edit,
            #pickup-time-hourly:focus::-webkit-datetime-edit {
                display: inline-flex;
                width: 100%;
                justify-content: flex-start !important;
                text-align: left !important;
                text-align-last: left !important;
                margin: 0 !important;
            }
        }

        /* Also hard-left the inputs themselves (covers any parent centering) */
        #pickup-date,
        #pickup-date-hourly,
        #pickup-time,
        #pickup-time-hourly {
            text-align: left !important;
            text-align-last: left !important;
            -webkit-text-align-last: left !important;
            direction: ltr !important;
        }


        /* ===== Your existing layout tweaks (unchanged) ===== */
        .booking_card_container {
            z-index: 99;
        }

        @media screen and (max-width:768px) {
            .banner-hidden-mobile {
                display: none;
            }

            .bottom-banner {
                padding-top: 0 !important;
            }

            .shadow-card {
                max-width: none !important;
                border-radius: 0 !important;
            }

            .nav-pills {
                flex-direction: row !important;
            }

            .nav-pills .nav-item .nav-link {
                border-radius: 0 !important;
            }

            .ph-wrap input[type="time"]+.fake-ph {
                display: inline;
            }

            .ph-wrap input[type="time"]+.fake-ph {
                color: black;
            }

            .ph-wrap.has-value input[type="time"]+.fake-ph {
                display: none;
            }
        }
    </style>

    <style>
        .booking_card_container {
            z-index: 99;
        }

        @media screen and (max-width:768px) {
            .banner-hidden-mobile {
                display: none;
            }

            .bottom-banner {
                padding-top: 0 !important;
            }

            .shadow-card {
                max-width: none !important;
                border-radius: 0 !important;
            }

            .nav-pills {
                flex-direction: row !important;
            }

            .nav-pills .nav-item .nav-link {
                border-radius: 0 !important;
            }

        }
    </style>
    <style>
        .input-icon-group {
            position: relative;
            height: 51px;
        }

        .input-icon-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
        }

        .input-icon-group input {
            padding-left: 2.2rem;
        }
    </style>
@endsection
<div class="banner-hidden-desktop">
    <div class="row">
        <div class="col-md-12">
            <div class="bottom-content-one">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Book Your Ride Now</h1>

                        </div>

                    </div>
                </div>
            </div>
            <img src="/img/black-car-service-dallas.webp" alt="Dallas Limo And Black Cars">
        </div>
    </div>
</div>



<div class="bottom-banner" style="
    background-image: url(/img/black-car-service-frisco.webp);
">
    <div class="container">

        <div class="row">


            <div class="col-sm-5 banner-hidden-mobile">
                <div class="bottom-banner-text banner-text-service">
                    <h1>Book Now – Dallas Limo And Black Cars Service</h1>


                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-12 booking_card_container p-0">
                <div class="shadow-card">
                    <!-- Nav tabs for different services -->
                    <ul class="nav nav-pills mb-3" id="serviceTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link  {{ !$isHourly ? 'active' : '' }} m-0" id="pointToPoint-tab"
                                data-bs-toggle="pill" href="#pointToPoint" role="tab" aria-controls="pointToPoint"
                                aria-selected="true">Point to Point</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $isHourly ? 'active' : '' }} m-0" id="hourlyHire-tab"
                                data-bs-toggle="pill" href="#hourlyHire" role="tab" aria-controls="hourlyHire"
                                aria-selected="false">Hourly Hire</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="serviceTabsContent">
                        <!-- Point to Point -->
                        <div class="tab-pane fade {{ !$isHourly ? 'show active' : '' }}" id="pointToPoint"
                            role="tabpanel" aria-labelledby="pointToPoint-tab">
                            <form action="{{ url('/booking/point-to-point') }}" method="POST">
                                @csrf
                                <input type="hidden" name="is_airport" id="is-airport"
                                    value="{{ session('is_airport') ?? 0 }}">

                                <!-- Pick-up Location -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-geo-alt"></i></div>
                                    <div class="input-text-container">
                                        <label for="pickup-location" class="form-label">Pick-up Location</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="{{ session('pickup_location') }}" name="pickup_location"
                                                id="pickup-location" placeholder="Address, airport, hotel..."
                                                onfocus="geolocate()" required>
                                            <ul id="pickup-suggestions"
                                                class="list-group position-absolute w-100 mt-1 shadow"
                                                style="z-index:1050; max-height: 300px; overflow-y: auto;"></ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Drop-off Location -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-geo-alt"></i></div>
                                    <div class="input-text-container">
                                        <label for="dropoff-location" class="form-label">Destination</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="{{ session('dropoff_location') }}" name="dropoff_location"
                                                id="dropoff-location" placeholder="Address, airport, hotel..."
                                                onfocus="geolocate()" required>
                                            <ul id="dropoff-suggestions"
                                                class="list-group position-absolute w-100 mt-1 shadow"
                                                style="z-index:1050; max-height: 300px; overflow-y: auto;"></ul>
                                            <input type="hidden" id="dropoff-is-airport" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Pick-Up Date -->
                                <!-- Pick-Up Date -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-calendar"></i></div>
                                    <div class="input-text-container">
                                        <label for="pickup-date" class="form-label">Pick-up Date</label>
                                        <div class="input-group">
                                            <div class="ph-wrap">
                                                <!-- Read-only formatted display -->
                                                <input type="text" class="form-control date-display"
                                                    value="@if (session('pickup_date')) {{ \Carbon\Carbon::parse(session('pickup_date'))->format('D, M jS, Y') }} @endif"
                                                    placeholder="MM-DD-YYYY" id="pickup-date-display" readonly>
                                                <!-- Native date input: invisible but clickable -->
                                                <input type="date" class="form-control hidden-date"
                                                    value="{{ session('pickup_date', '') }}" name="pickup_date"
                                                    id="pickup-date" required>
                                                <span class="fake-ph" aria-hidden="true">MM-DD-YYYY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pick-Up Time -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-clock"></i></div>
                                    <div class="input-text-container">
                                        <label for="pickup-time" class="form-label">Pick-up Time</label>
                                        <div class="input-group">
                                            <div class="ph-wrap">
                                                <input type="time" class="form-control"
                                                    value="{{ session('pickup_time') ?? '' }}" placeholder="HH:MM AM"
                                                    name="pickup_time" id="pickup-time" required>
                                                <span class="fake-ph" aria-hidden="true">HH:MM AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="text-left mb-1">
                                    <p class="small text-muted mb-1">Chauffeur will wait 15 minutes free of charge</p>
                                    <button type="submit" class="btn btn-primary w-100 search_btn">GET MY
                                        PRICES</button>
                                </div>
                            </form>
                        </div>

                        <!-- Hourly Hire -->
                        <div class="tab-pane fade {{ $isHourly ? 'show active' : '' }}" id="hourlyHire"
                            role="tabpanel" aria-labelledby="hourlyHire-tab">
                            <form id="hourForm" action="/booking/hourly-hire/" method="POST">
                                @csrf

                                <!-- Pick-up Location -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-geo-alt"></i></div>
                                    <div class="input-text-container">
                                        <label for="pickup-location-hourly" class="form-label">Pick-up
                                            Location</label>
                                        <div class="input-group">
                                            <input type="hidden" name="is_airport_hourly" id="is-airport_hourly"
                                                value="{{ session('is_airport') ?? 0 }}">
                                            <input type="text" class="form-control"
                                                value="{{ session('pickup_location', '') }}"
                                                name="pickup_location_hourly" id="pickup-location-hourly"
                                                placeholder="Address, airport, hotel..." onFocus="geolocate()"
                                                required>
                                            <ul id="pickup-location-hourly-suggestions"
                                                class="list-group position-absolute w-100 mt-1 shadow"
                                                style="z-index: 1050; max-height: 300px; overflow-y: auto;"></ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Select Hours -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-clock"></i></div>
                                    <div class="input-text-container">
                                        <label for="select-hours" class="form-label">Select Hours</label>
                                        <div class="input-group">
                                            <select class="form-control" name="select_hours" id="select-hours"
                                                required>
                                                <option value="">Select Hours</option>
                                                @foreach (range(3, 24) as $hour)
                                                    <option value="{{ $hour }}"
                                                        {{ session('select_hours') == $hour ? 'selected' : '' }}>
                                                        {{ $hour }} hour{{ $hour > 1 ? 's' : '' }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pick-Up Date -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-calendar"></i></div>
                                    <div class="input-text-container">
                                        <label for="pickup-date-hourly" class="form-label">Pick-up Date</label>
                                        <div class="input-group">
                                            <div class="ph-wrap">
                                                <!-- Read-only formatted display -->
                                                <input type="text" class="form-control date-display"
                                                    value="@if (session('pickup_date')) {{ \Carbon\Carbon::parse(session('pickup_date'))->format('D, M jS, Y') }} @endif"
                                                    placeholder="MM-DD-YYYY" id="pickup-date-hourly-display" readonly>
                                                <!-- Native date input: invisible but clickable -->
                                                <input type="date" class="form-control hidden-date"
                                                    value="{{ session('pickup_date') ?? '' }}" name="pickup_date"
                                                    id="pickup-date-hourly" required>
                                                <span class="fake-ph" aria-hidden="true">MM-DD-YYYY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pick-Up Time -->
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-clock"></i></div>
                                    <div class="input-text-container">
                                        <label for="pickup-time-hourly" class="form-label">Pick-up Time</label>
                                        <div class="input-group">
                                            <div class="ph-wrap">
                                                <input type="time" class="form-control" name="pickup_time"
                                                    placeholder="HH:MM AM" value="{{ session('pickup_time') ?? '' }}"
                                                    id="pickup-time-hourly" required>
                                                <span class="fake-ph" aria-hidden="true">HH:MM AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="text-center mb-1">
                                    <p class="small text-muted mb-1">Chauffeur will wait 15 minutes free of charge</p>
                                    <button type="submit" class="btn btn-primary w-100 search_btn">GET MY
                                        PRICES</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- /tab-content -->

                </div>

            </div>

        </div>
        <div id="map"
            style="height: 100%; width: 100%; display: none; border-radius: 15px; overflow: hidden; left:0;z-index: 9 !important; top:0">
            <div class="map-overlay"></div> <!-- Black overlay -->
        </div>
        <div id="route-info-box"
            style="
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
  display: none;
">
            <div><strong>Distance:</strong> <span id="route-distance">-</span></div>
            <div><strong>Duration:</strong> <span id="route-duration">-</span></div>
        </div>
    </div>

</div>

<!--ENG-->
<div id="bottomServices-defcitiy icon-h-page">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei magrin-tcp">
                    <span class="serviceImage1">
                        <img src="/img/booking.webp" alt="Online Portal
 ">
                    </span>

                    <div class="serviceHeadings">
                        <h3>
                            Online Booking
                        </h3>

                        <p>Use our secure reservation portal to book your ride instantly. Choose vehicle type, pickup
                            location, and trip details.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei magrin-tcp">
                    <span class="serviceImage1">
                        <img src="/img/chauffeur.webp" alt="Clear-Cut All-Inclusive Pricing
 ">
                    </span>

                    <div class="serviceHeadings">
                        <h3>Call Our 24/7 Dispatch</h3>

                        <p>Prefer to speak to someone? Our team is ready to assist you day or night.<br><a
                                href="tel:214-305-8671"><strong>Call Now:</strong> 214-305-8671</a></p>
                    </div>
                </div>
            </div>


            <div class="col-sm-4 text-center">
                <div class="pz-bottom-servicei magrin-tcp">
                    <span class="serviceImage1">
                        <img src="/img/conformation.webp" alt="Expert Chauffeurs
 ">
                    </span>

                    <div class="serviceHeadings">
                        <h3>Email Reservations</h3>

                        <p>Have a special request or need a custom itinerary?<br><a
                                href="mailto:info@dallaslimoandblackcars.com"><strong>Email:</strong>
                                info@dallaslimoandblackcars.com</a></p>
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
                <div class="pt-chauffeur-1"><img src="/img/love-field-airport-ride-luxury.webp"
                        alt="concerts and sporting events">
                </div>
            </div>




            <div class="col-md-8">
                <div class="pt-section-title-box ">
                    <h5 class="pt-section-titles">Instant Black Car Booking – Simple, Secure, Seamless</h5>
                    <p class="pt-section-description">Booking your ride with <a href="#"
                            class="internal-links">Dallas Limo And Black Cars Service</a> is quick and stress-free. Whether
                        you're headed to <a href="/airport/car-service-dallas-fort-worth-international-airport/"
                            class="internal-links">DFW Airport</a>, attending an executive meeting in Plano, or need a
                        <a href="/city-to-city-ride/dallas-to-austin/" class="internal-links">city-to-city ride from
                            Dallas to Austin</a>, we’ve made our reservation process simple and flexible.</p>

                </div>

            </div>

        </div>
    </div>
</section>


<section class="about-us city-pages special-w">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="pt-section-title-box ">
                    <h5 class="pt-section-title">Why Book With Us?</h5>

                    <h3>Real-Time Availability</h3>
                    <p>Our booking system is live 24/7 to accommodate last-minute trips, red-eye arrivals, and urgent
                        corporate travel.</p>

                    <h3>Fleet for Every Occasion</h3>
                    <p>Choose from:</p>
                    <ul>
                        <li>Executive Sedans for solo airport transfers.</li>
                        <li>Luxury SUVs for small groups or added luggage.</li>
                        <li>Mercedes Sprinter Vans for meetings and group events.</li>
                        <li>Mini Buses and Motor Coaches for large-scale events.</li>
                    </ul>
                    <h3>Professional Chauffeurs</h3>
                    <p>Every driver is background-checked, licensed, and trained to provide discreet, professional
                        service throughout Dallas–Fort Worth, <a href="/locations/black-car-service-frisco-texas/"
                            class="internal-links-w">Frisco</a>, Plano, Irving, Arlington, and beyond.</p>

                    <h3>Long-Distance Car Service</h3>
                    <p>We provide one-way and round-trip bookings from Dallas to Austin, Houston, San Antonio, Waco, and
                        Tyler—perfect for business travelers and private getaways.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1"><img src="/images/img/airport-pickup-service-dallas.webp" width="522"
                        height="564" alt="Reliable black car service near Dallas">
                </div>

            </div>


        </div>
    </div>
</section>

<section class="about-uss city-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pt-chauffeur-1"><img src="/images/img/dallas-airport-transfer-service.webp"
                        alt="Chauffeured black car service in Dallas">
                </div>

            </div>


            <div class="col-md-8">
                <div class="pt-section-title-box ">
                    <h5 class="pt-section-titles">Service Options Available to Book</h5>

                    <ul>
                        <li><a href="/airport/car-service-dallas-fort-worth-international-airport/"
                                class="internal-links">DFW Airport Car Service</a></li>
                        <li>Dallas Love Field Airport Transfers </li>
                        <li>Private FBO Chauffeur Service (Signature, Million Air)</li>
                        <li>Hourly as Directed Chauffeur </li>
                        <li><a href="/services/executive-shuttle-services-dallas-texas/"
                                class="internal-links">Corporate Event Transportation</a></li>
                        <li>Proms, Weddings, Special Events </li>
                        <li>City-to-City Transfers from Dallas </li>
                        <li>Charter Bus & Mini Bus Service</li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</section>







<section class="about-us city-pages special-w">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="pt-section-title-box ">
                    <h5 class="pt-section-title">Book with Confidence</h5>


                    <ul>
                        <li>Fully Licensed & Insured </li>
                        <li>Real-Time GPS Tracking </li>
                        <li>Flight Monitoring for Airport Pickups </li>
                        <li>Transparent Pricing – No Hidden Fees</li>
                    </ul>

                    <h5 class="pt-section-title">We’ve proudly served:</h5>
                    <ul>
                        <li>Business travelers flying into DFW </li>
                        <li>Families relocating between cities </li>
                        <li>VIPs attending events at AT&T Stadium </li>
                        <li>Wedding parties traveling from <a href="/airport/dallas-love-field-black-car-service/"
                                class="internal-links-w">Love Field to Downtown Dallas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pt-chauffeur-1"><img src="/img/luxury-van-rental-dallas-texas.webp" width="522"
                        height="564" alt="Reliable black car service near Dallas">
                </div>

            </div>


        </div>
    </div>
</section>



<div class="wrapper">
    <div class="container">


        <h3 class="text-center">Frequently asked questions</h3>



        <div class="row">


            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        How far in advance should I book?

                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We recommend at least 24 hours for Sprinters and 72 hours for buses. Sedans and SUVs can be
                            booked same-day based on availability.
                        </div>
                    </div>
                </div>


            </div>

            <div class="col-md-6">

                <div class="container">
                    <div class="question">
                        What payment methods are accepted?

                    </div>
                    <div class="answercont">
                        <div class="answer">
                            We accept all major credit cards, corporate accounts, and prepayment options. Receipts are
                            emailed automatically.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="container">
                    <div class="question">
                        Can I cancel or reschedule?
                    </div>
                    <div class="answercont">
                        <div class="answer">
                            <p>Yes. We offer flexible cancellation terms:</p>

                            <ul>
                                <li>Sedans: 2 hours</li>
                                <li>SUVs: 24 hours</li>
                                <li>Sprinters: 72 hours</li>
                                <li>Motor Coaches: 7 days</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container">
                    <div class="question">
                        Do you provide child seats or ADA-accessible vehicles?

                    </div>
                    <div class="answercont">
                        <div class="answer">
                            Yes. Please request during booking. Availability may vary based on vehicle type and lead
                            time.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
<script>
    // Function to format date as "Mon, Aug 11th, 2025"
    (function() {
        // Format "Sat, Aug 30th, 2025"
        function formatDate(date) {
            if (!date) return '';
            const d = new Date(date);
            if (isNaN(d.getTime())) return '';
            const options = {
                weekday: 'short',
                month: 'short',
                day: 'numeric',
                year: 'numeric'
            };
            const formatted = d.toLocaleDateString('en-US', options);
            const day = d.getDate();
            const suffix = (day % 10 > 3 || Math.floor(day % 100 / 10) === 1) ?
                'th' :
                (['', 'st', 'nd', 'rd'][day % 10] || 'th');
            return formatted.replace(day, day + suffix);
        }

        function initDateOverlays() {
            document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
                const displayInput = wrap.querySelector('.date-display');
                const dateInput = wrap.querySelector('input[type="date"]');
                if (!displayInput || !dateInput) return;

                const sync = () => {
                    if (dateInput.value && String(dateInput.value).trim() !== '') {
                        wrap.classList.add('has-value');
                        displayInput.value = formatDate(dateInput.value);
                    } else {
                        wrap.classList.remove('has-value');
                        displayInput.value = '';
                    }
                };

                // Initial paint
                sync();

                // Keep display in sync
                dateInput.addEventListener('input', sync);
                dateInput.addEventListener('change', sync);
                dateInput.addEventListener('blur', sync);
            });
        }

        document.addEventListener('DOMContentLoaded', initDateOverlays);
    })();
    // Handle date input changes
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
            const displayInput = wrap.querySelector('.date-display');
            const dateInput = wrap.querySelector('input[type="date"]');
            if (!displayInput || !dateInput) return;

            // Sync placeholder and formatted date
            const sync = () => {
                if (dateInput.value && String(dateInput.value).trim() !== '') {
                    wrap.classList.add('has-value');
                    displayInput.value = formatDate(dateInput.value);
                } else {
                    wrap.classList.remove('has-value');
                    displayInput.value = '';
                }
            };

            // Run on load
            sync();

            // Trigger date picker when clicking text input
            displayInput.addEventListener('click', () => {
                dateInput.showPicker(); // Opens the native date picker
            });

            // Update display input when date changes
            dateInput.addEventListener('input', sync);
            dateInput.addEventListener('change', sync);
            dateInput.addEventListener('blur', sync);
        });
    });
    // Toggle fake placeholder visibility based on value
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
            const input = wrap.querySelector('input');
            if (!input) return;
            const sync = () => {
                if (input.value && String(input.value).trim() !== '') {
                    wrap.classList.add('has-value');
                } else {
                    wrap.classList.remove('has-value');
                }
            };
            sync();
            input.addEventListener('input', sync);
            input.addEventListener('change', sync);
            input.addEventListener('blur', sync);
        });
    });
</script>
@endsection
@endsection
