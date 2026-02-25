@extends('master')

@section('content')
    <section class="home-banner-section">
        <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
             style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
            <!-- Map Container (Initially hidden, shows up when location is selected) -->
            <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
            </div>

            <div class="row" style="pointer-events: none;">
                <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                    <h1 class="text-white h1 fw-bold mb-15">Black Car Service Dallas</h1>
                    <p class="text-white font-lg fw-medium mb-30">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                        the 1500s, when an unknown printer tooks,</p>
                    <span class="text-white font-base">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call
                            Now</strong></span>
                    <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                        Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
                            214-897-8056</a>
                    </p>
                </div>
                <div class="col-12 col-md-6" style="pointer-events: auto; position: relative; z-index: 2;">
                    <!-- Booking Form -->
                    <div class="search-form-wrapper-desktop">
                        @include('partials.search')
                    </div>
                </div>
            </div>
        </div>
    </section>
            <section class="bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Get A Quote</h2>
                        <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        <form action="#" method="post" class="get-a-quote-form bg-white px-20 px-sm-30 py-30">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="" class="form-label mb-1 fw-medium">Select Vehicles Option:</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="Luxury Sedan">Luxury Sedan</option>
                                        <option value="Premium SUV">Premium SUV</option>
                                        <option value="Luxury SUV">Luxury SUV</option>
                                        <option value="Sprinter Van">Sprinter Van</option>
                                        <option value="Mini-Bus">Mini-Bus</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="" class="form-label mb-1 fw-medium">Select Trip Type:</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="Point to Point">Point to Point</option>
                                        <option value="Airport Services">Airport Services</option>
                                        <option value="Hourly/As Directed">Hourly/As Directed</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="No_of_Passengers" class="form-label mb-1 fw-medium">No. of
                                        Passengers</label>
                                    <input type="text" class="form-control" id="No_of_Passengers"
                                        placeholder="Number of Pax">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="Trip_Date_field" class="form-label mb-1 fw-medium">Trip Date</label>
                                    <input type="date" class="form-control" id="Trip_Date_field">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="Trip_Time_field" class="form-label mb-1 fw-medium">Trip Time</label>
                                    <input type="time" class="form-control" id="Trip_Time_field">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="pickup_field" class="form-label mb-1 fw-medium">Pickup Address</label>
                                    <input type="text" class="form-control" id="pickup_field"
                                        placeholder="Street, City, State">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="drop_address_field" class="form-label mb-1 fw-medium">Drop Off
                                        Address</label>
                                    <input type="text" class="form-control" id="drop_address_field"
                                        placeholder="Street, City, State">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15 d-none d-md-flex d-lg-none"></div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="full_name" class="form-label mb-1 fw-medium">Full Name</label>
                                    <input type="text" class="form-control" id="full_name" placeholder="Full Name">
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="email" class="form-label mb-1 fw-medium">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="your email address">
                                </div>
                                <div class="col-12 mb-15">
                                    <label for="message" class="form-label mb-1 fw-medium">Message</label>
                                    <textarea class="form-control" id="message"></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button class="btn btn-primary fw-bold">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="detail-content-section py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Plan Ahead. Quote Instantly. Ride in Comfort</h2>
                        <p class="font-base">Looking for a price before you book? Whether you're scheduling a DFW Airport
                            pickup, a wedding Sprinter Van, or a city-to-city ride from Dallas to Houston, our team is
                            ready to provide a clear, upfront quote.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center py-20">
                    <div class="col-12 col-md-6 pr-xl-50">
                        <h3 class="h5 fw-semibold">What Type of Ride Do You Need?</h3>
                        <p>We customize quotes based on your ride type, location, group size, and
                            vehicle choice. Select from:</p>
                        <ul class="custom-unorder-list pl-0">
                            <li class="mb-1">
                                <p class="mb-0">Airport Transfers (DFW, DAL, FBOs)</p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">Hourly Charters (corporate, shopping, events)</p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">City-to-City Rides (Dallas to Austin, Houston, Waco, etc.)</p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">Sprinter Vans for Weddings & Groups</p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">Mini & Charter Bus Quotes for 23–56 Passengers</p>
                            </li>
                            <li class="mb-1">
                                <p class="mb-0">Long-Distance & Overnight Service</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 h-100">
                        <div class="img-holder ms-md-auto">
                            <img src="{{ asset('new_assets/assets/image-01.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
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
                                    smaller groups, corporate meeting, or <a class="fw-bold font-lg mx-2 theme-color"
                                        href="">airport
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
        <section class="bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                        <article class="custom-card d-flex flex-column w-100 bg-white">
                            <span class="icon-holder mb-20">
                                <img src="{{ asset('new_assets/assets/icon-03.svg') }}" alt="Booking" class="img-fluid">
                            </span>
                            <h3 class="h4 fw-semibold">Online Form (Fastest)</h3>
                            <p class="font-base">Fill out our simple quote form with pickup location, drop-off, date, and
                                passenger count. <br><strong>Request a Quote Online</strong></p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                        <article class="custom-card d-flex flex-column w-100 bg-white">
                            <span class="icon-holder mb-20">
                                <img src="{{ asset('new_assets/assets/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                            </span>
                            <h3 class="h3 fw-semibold">Email Quote</h3>
                            <p class="font-base">
                                <strong>Send trip details to:</strong>
                                <span class="single-line-ellipses w-100 d-inline-block" style="max-width: 296px;vertical-align: middle;">
                                    <a class="fw-bold font-lg" href="mailto:info@dallaslimoandblackcars.com">info@dallaslimoandblackcars.com </a>
                                </span>
                                <br>
                                <strong>Include:</strong> pickup, destination, vehicle type, number of
                                passengers.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex ">
                        <article class="custom-card d-flex flex-column w-100 bg-white">
                            <span class="icon-holder mb-20">
                                <img src="{{ asset('new_assets/assets/icon-01.svg') }}" alt="Driver" class="img-fluid">
                            </span>
                            <h3 class="h3 fw-semibold">Call or Text</h3>
                            <p class="font-base">Speak with our team anytime:
                                <a class="fw-bold font-lg ms-2 theme-color" style="word-break: break-all;" href="tel:+12148978056">+1
                                    214-897-8056</a>.
                                <br> We’ll get you a quote within
                                minutes—24/7.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.companies_strip')
        @include('partials.testimonials')
        @include('partials.faq')
@endsection
