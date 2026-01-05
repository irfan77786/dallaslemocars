@php
    $isHourly = session('service_type') === 'hourlyHire';
@endphp

@extends('master')

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
                /* width: 100% !important; */
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
            padding-left: 20px;
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

@section('content')
    <section class="home-banner-section">
        <div class="ah-container position-relative py-60 py-sm-70 py-md-80 py-lg-100"
            style="background-image: url('{{ asset('new_assets/assets/banner-4.jpg') }}');">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                    <h1 class="h1 fw-bold mb-15 text-white">Black Car Service Dallas</h1>
                    <p class="font-lg fw-medium text-white mb-30">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s, when an unknown printer tooks,</p>
                    <span class="font-base text-white">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call
                            Now</strong></span>
                    <p class="font-base text-white d-flex align-items-center mb-30 mb-md-0">
                        Call: <a href="tel:+12148978056" class="fw-bold font-lg mx-2 theme-color">+1
                            214-897-8056</a>
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="shadow-card" style="background: #fff; padding: 20px; border-radius: 10px;">
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
    </section>
    <section class="fleet-section py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10 text-center">
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
                            <strong class="font-lg gray-700 fw-bold d-block mb-2">Luxury Sedans:</strong>
                            <p class="font-base">Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for
                                effortless driving to the DFW airport, meetings, or any other special event.</p>
                        </li>
                        <li>
                            <strong class="font-lg gray-700 fw-bold d-block mb-2">Black SUVs:</strong>
                            <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide
                                spacious, stylish transportation for groups, corporate travelers, or extra luggage.
                            </p>
                        </li>
                        <li>
                            <strong class="font-lg gray-700 fw-bold d-block mb-2">Executive Sprinter Vans:</strong>
                            <p class="font-base"> Ideal for large gatherings such as meetings and weddings events,
                                our
                                Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious
                                seating.</p>
                        </li>
                        <li>
                            <strong class="font-lg gray-700 fw-bold d-block mb-2">Mini Bus Luxury Bus (23-27
                                Passengers):</strong>
                            <p class="font-base">Confortable seating & Wi-Fi make our Luxury Mini Buses best for
                                smaller groups, corporate meeting, or <a class="fw-semibold" href="">airport
                                    transfers</a>. Comfortably seats 23-27 passengers.</p>
                        </li>
                        <li>
                            <strong class="font-lg gray-700 fw-bold d-block mb-2">Mini Bus (31-38
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
                <div class="col-12 text-center pt-15">
                    <a href="#" class="btn btn-primary">Quick Quote </a>
                </div>
            </div>
        </div>
    </section>
    <section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Our <span class="theme-color"> Black
                            Car Service?</span></h2>
                    <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            </div>
            <div class="row align-items-center py-20">
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
            <div class="row align-items-center flex-row-reverse py-20">
                <div class="col-12 col-md-6 pr-xl-50 mb-20">
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
    <section class="faqs-section py-50 py-sm-60 py-md-70 py-lg-80">
        <div class="ah-container">
            <div class="row">
                <div class="col-12 text-center mb-25 mb-md-30 mb-lg-40">
                    <h2 class="h2 fw-bold">Frequently Asked Questions</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8 accordion-holder" id="accordion01">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="accordion01-headingOne">
                            <button
                                class="h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
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
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <br>
                                <p class="font-base">Our drivers arrive 10–15 minutes early to give you a
                                    stress-free start to your ride.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="accordion01-headingTwo">
                            <button
                                class="h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
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
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <br>
                                <p class="font-base">Yes, our Black Car Service Dallas allows multiple stops. The
                                    driver will plan the route efficiently.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="accordion01-headingThree">
                            <button
                                class="h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
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
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <br>
                                <p class="font-base">Absolutely. You can request the same driver for your trips if
                                    available. Many corporate clients prefer consistent drivers for comfort and
                                    trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="accordion01-headingFour">
                            <button
                                class="h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
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
                            <div class="accordion-body pl-0 pt-0 pr-0">
                                <br>
                                <p class="font-base">We track flights in real-time. The driver adjusts your pickup
                                    time to match your arrival.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="accordion01-headingFive">
                            <button
                                class="h6 accordion-button px-15 py-15 py-sm-20 py-lg-25 mb-0 fw-semibold collapsed"
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
                            <div class="accordion-body pl-0 pt-0 pr-0">
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
