@extends('master')

@section('content')
      
      <section class="d-md-none">
    <div class="ah-container">
        <div class="search-form-mobile">
            @include('partials.search', ['id_suffix' => '_mobile'])
        </div>
    </div>
</section>

{{-- Banner: text (and desktop form) --}}
<section class="home-banner-section">
    <div id="hero-banner-container" class="py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
         style="z-index: 2; background-image: url('https://dallaslimoandblackcars.com/img/dallas-limo-and-black-cars-banner.webp');">
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

        <div class="row" style="pointer-events: none;">
            <div id="home-text-content" class="col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                <h1 class="text-white h2 fw-bold mb-15">Get Your Free Quote Today</h1>
                <div class="d-none d-md-block">
                    <p class="text-white font-lg fw-medium mb-30">Fill out the form to receive a fast and accurate quote for your transportation needs in Dallas. We offer reliable black car, airport, and group travel services at competitive rates.</p>
 
                    <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                        Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a>
                    </p>
                </div>
            </div>
            <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                <div class="search-form-wrapper-desktop">
                    @include('partials.search', ['id_suffix' => '_form'])
                </div>
            </div>
        </div>
    </div>
    @include('partials.hero_banner_styles')
</section>
    
    
    
            <section class="bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="ah-container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10 text-center mb-20 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Get A Quote</h2>
                        <p class="font-base">Get a personalized quote for luxury black car, airport, or group transportation in Dallas. We offer competitive pricing, professional service, and a smooth booking experience tailored to your travel needs.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10">
                        @if ($message = session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-20" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($message = session('error'))
                            <div class="alert alert-danger alert-dismissible fade show mb-20" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('get_a_quote_post') }}" method="post" class="get-a-quote-form bg-white px-20 px-sm-30 py-30">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="vehicle_type" class="form-label mb-1 fw-medium">Select Vehicles Option:</label>
                                    <select class="form-select @error('vehicle_type') is-invalid @enderror" name="vehicle_type" id="vehicle_type" required>
                                        <option value="">-- Select Vehicle --</option>
                                        <option value="Luxury Sedan">Luxury Sedan</option>
                                        <option value="Premium SUV">Premium SUV</option>
                                        <option value="Luxury SUV">Luxury SUV</option>
                                        <option value="Sprinter Van">Sprinter Van</option>
                                        <option value="Mini-Bus">Mini-Bus</option>
                                    </select>
                                    @error('vehicle_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="trip_type" class="form-label mb-1 fw-medium">Select Trip Type:</label>
                                    <select class="form-select @error('trip_type') is-invalid @enderror" name="trip_type" id="trip_type" required>
                                        <option value="">-- Select Trip Type --</option>
                                        <option value="Point to Point">Point to Point</option>
                                        <option value="Airport Services">Airport Services</option>
                                        <option value="Hourly/As Directed">Hourly/As Directed</option>
                                    </select>
                                    @error('trip_type')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="number_of_passengers" class="form-label mb-1 fw-medium">No. of Passengers</label>
                                    <input type="text" class="form-control @error('number_of_passengers') is-invalid @enderror" id="number_of_passengers" name="number_of_passengers" placeholder="Number of Pax" required>
                                    @error('number_of_passengers')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="trip_date" class="form-label mb-1 fw-medium">Trip Date</label>
                                    <input type="date" class="form-control @error('trip_date') is-invalid @enderror" id="trip_date" name="trip_date" required>
                                    @error('trip_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="trip_time" class="form-label mb-1 fw-medium">Trip Time</label>
                                    <input type="time" class="form-control @error('trip_time') is-invalid @enderror" id="trip_time" name="trip_time" required>
                                    @error('trip_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="pickup-location_quote" class="form-label mb-1 fw-medium">Pickup Address</label>
                                    <input type="hidden" id="is-airport_quote" value="0" tabindex="-1" aria-hidden="true">
                                    <div class="position-relative">
                                        <input type="text"
                                            class="form-control @error('pickup_address') is-invalid @enderror"
                                            id="pickup-location_quote"
                                            name="pickup_address"
                                            value="{{ old('pickup_address') }}"
                                            placeholder=" "
                                            autocomplete="off"
                                            required>
                                        <div id="pickup-suggestions_quote" class="location-suggestions"></div>
                                    </div>
                                    @error('pickup_address')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="dropoff-location_quote" class="form-label mb-1 fw-medium">Drop Off Address</label>
                                    <input type="hidden" id="is-airport-dropoff_quote" value="0" tabindex="-1" aria-hidden="true">
                                    <div class="position-relative">
                                        <input type="text"
                                            class="form-control @error('dropoff_address') is-invalid @enderror"
                                            id="dropoff-location_quote"
                                            name="dropoff_address"
                                            value="{{ old('dropoff_address') }}"
                                            placeholder=" "
                                            autocomplete="off"
                                            required>
                                        <div id="dropoff-suggestions_quote" class="location-suggestions"></div>
                                    </div>
                                    @error('dropoff_address')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15 d-none d-md-flex d-lg-none"></div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="full_name" class="form-label mb-1 fw-medium">Full Name</label>
                                    <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="Full Name" required>
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6 col-lg-4 mb-15">
                                    <label for="email" class="form-label mb-1 fw-medium">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="your email address" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-15">
                                    <label for="message" class="form-label mb-1 fw-medium">Message (Optional)</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Add any special requests or additional information..."></textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary fw-bold">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
 
 
      <section class="fleet-section py-40 py-sm-50 py-md-50 py-lg-50">
        <div class="ah-container">
            <div class="row justify-content-center">
                <div class="text-center col-12 col-xl-10">
                    <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30 seciononeheading">Our Luxury Fleet <span class="theme-color fw-bold">Travel with Comfort and Class</span></h2>
                </div>
                <div class="col-12">
                    <p class="font-base justify-mobile">At Dallas Limo and Black Cars, we provide a premium fleet of luxury vehicles designed to deliver comfort, reliability, and style. Whether you need Dallas airport transportation, <a href="/airports/dfw-car-service/"><strong>DFW airport car service</strong></a>, corporate transportation, black car service, or group travel, our professionally maintained vehicles ensure a smooth and elegant travel experience.

Our fleet includes luxury sedans, black SUVs, executive sprinter vans, and spacious minibuses, all driven by professional chauffeurs dedicated to providing first-class service across Dallas and the DFW area.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <li>
                            
                            <p class="font-base justify-mobile"><strong class="font-lg gray-700 fw-bold">Luxury Sedans:</strong> Our executive sedans offer a refined and comfortable ride, ideal for business travelers or individuals who prefer privacy and sophistication. Vehicles like the Mercedes-Benz S-Class, Cadillac CT6, and Volvo S90 deliver premium comfort and quiet luxury.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Black SUVs:</strong> For passengers who require more space, our luxury SUVs such as the Cadillac Escalade, GMC Yukon XL, and Chevrolet Suburban provide spacious interiors, smooth rides, and plenty of luggage capacity.
                            </p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Executive Sprinter Vans:</strong> Our Mercedes-Benz Sprinter Vans are perfect for group transportation. With spacious seating and modern interiors, they offer a comfortable travel solution for corporate groups and special occasions.</p>
                        </li>
                        <li>
                            
                            <p class="justify-mobile font-base"><strong class="font-lg gray-700 fw-bold ">Mini Bus Luxury Bus (23-27
                                Passengers):</strong> Our luxury minibuses are designed for medium-sized groups who want comfort and convenience while traveling together. They provide comfortable seating and a smooth ride for events and group transportation.</p>
                        </li>
                        <li>
                         
                            <p class="justify-mobile font-base">   <strong class="font-lg gray-700 fw-bold">Mini Bus (31-38
                                Passengers):</strong> For larger groups, our spacious minibuses offer reliable and comfortable transportation with professional chauffeur service and well-maintained interiors.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="img-holder">
                        <img src="https://dallaslimoandblackcars.com/new_assets/assets/fleet-img.webp" alt="Fleet Image" class="img-fluid">
                    </div>
                </div>
                <div class="text-center col-12 pt-15">
                    <a href="/booking/" class="btn btn-primary fifa-btn">Book Your Chauffeur Service Now </a>
                </div>
            </div>
        </div>
    </section>
    
        @include('partials.companies_strip')
        @include('partials.testimonials')
        @include('partials.faq')

@endsection

@section('scripts')
    @include('partials.form_swal_alerts', ['resetFormSelector' => '.get-a-quote-form'])
@endsection
