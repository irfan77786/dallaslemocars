@extends('master')
@section('content')

@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp

@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => 'Airport Transfer Service'])
@endif

<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
  <div class="row">
    <div class="col-sm-12 back-container">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
            <div class="bottom-banner-text" bis_skin_checked="1">
              <h1>Airport Transfer Service – Luxury Transfers to DFW & Love Field</h1>
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
          <h2>Airport Transfer Service – Luxury Transfers to DFW & Love Field</h2>
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
            <h2>Dallas Black Cars Limo Service – Premium Fleet for Airport Transfers</h2>
            <p>
              Arrive and depart in style with our luxury fleet designed for seamless
              <a href="/airport/car-service-dallas-fort-worth-international-airport/" class="internal-links">
                DFW Airport transfers
              </a>, Dallas Love Field arrivals, and private FBO transportation. Whether you’re coming from Plano,
              <a href="/locations/black-car-service-frisco-texas/" class="internal-links">Frisco</a>, or McKinney, our vehicles ensure every journey is first-class.
            </p>
          </div>

          <p>
            <strong class="strong-c-color">Luxury Sedans:</strong> Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class provide executive comfort for fast and stylish airport transfers.
          </p>

          <p>
            <strong class="strong-c-color">Luxury SUVs:</strong> Cadillac Escalade ESV, Chevy Suburban, GMC Yukon XL, and Lincoln Navigator deliver spacious seating and luggage capacity — perfect for families, corporate travelers, or group arrivals.
          </p>

          <p>
            <strong class="strong-c-color">Executive Sprinter Vans:</strong> Mercedes-Benz Sprinter Vans accommodate corporate groups, family trips, or private aviation arrivals with premium comfort and ample storage.
          </p>

          <p>
            <strong class="strong-c-color">23–38 Passenger Mini Bus:</strong> Designed for small-to-medium groups, ideal for conventions, airport shuttles, and hotel transfers with Wi-Fi and plush seating.
          </p>

          <p>
            <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers):</strong> The best option for sports teams, delegations, or event transportation to and from DFW or Love Field airports.
          </p>




<p class="tagline-bottom"> Trust our chauffeur service Dallas for punctual, reliable, and comfortable airport transfers. All vehicles are fully insured, cleaned daily, and driven by licensed professionals for a safe & stylish ride every time.</p>




          <img src="/img/dallas-black-car-service.webp" alt="Airport Car Service Dallas">
        </div>

        <div class="btom-btn">
          <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Allen – Book Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-uss">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pt-chauffeur-1"><img src="/img/love-field-airport-ride-luxury.webp" alt="Love Field Airport Car Service">
        </div>
      </div>
      <div class="col-md-8">
        <div class="pt-section-title-box ">
          <h5 class="pt-section-titles">Get to or from the airport
          </h5>
          <p class="pt-section-description">
            Traveling to the airport should be simple & stress-free. Our airport transfer service helps you reach DFW Airport or <a href="/airport/dallas-love-field-black-car-service/" class="internal-links">Dallas Love Field Airport</a> on time & with ease. Whether you are leaving from Frisco, Allen, Anna, Plano, or McKinney, we make sure your ride is smooth.
          </p>
          <p> We offer clean & comfortable cars, including a <a href="/our-fleet/" class="internal-links">business sedan</a> for solo or business trips & a luxury SUV for families or groups with more luggage. Our drivers are friendly & professional and know the best routes in Dallas. With us, you can relax & enjoy your ride without worrying about parking or delays.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="cta cta-ddc-nones bottom-button-vtb-c">
  <div class="container">
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-10">
        <img src="/img/fifa-world-cup-2026-car-service-dallas.jpg" alt="fifa world cup 2026 car service dallas">

        <a href="/fifa-world-cup-2026-car-service-dallas/" class="bottom-cta-vtb-c">Visit our fifa world cup 2026 page</a>
      </div>
      <div class="col-md-1">
      </div>


    </div>
  </div>
</div>
<div id="bottomServices-defcitiy icon-h-page">
  <div class="container">
    <div class="row">

      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei">
          <span class="serviceImage1">
            <img src="/img/booking.webp" alt="DFW Airport Car Service
 ">
          </span>

          <div class="serviceHeadings">
            <h3>
              Book Online or Call
            </h3>

            <p>Use our form or call to schedule your ride.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei">
          <span class="serviceImage1">
            <img src="/img/conformation.webp" alt="Dallas Airport Transfer
 ">
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
            <img src="/img/chauffeur.webp" alt="Expert Chauffeur Service
 ">
          </span>

          <div class="serviceHeadings">
            <h3>Meet Your Chauffeur</h3>

            <p>On-time, professional, and ready to assist </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="about-us city-pages special-w">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <div class="pt-section-title-box ">
          <h5 class="pt-section-title">Areas We Serve
          </h5>
          <p class="pt-section-description">
            Serving travelers across the Dallas-Fort Worth Metroplex with premium airport transfer services to:
          </p>
          <ul>

            <li><strong>Cities & Suburbs: </strong>Dallas, Plano, Frisco, McKinney, Carrollton, Southlake, Richardson, Allen, Flower Mound, The Colony, Rowlett, Lewisville, Keller, and Murphy, as well as Garland.</li>
            <li><strong>Airports: </strong><a href="/locations/black-car-service-plano-texas/" class="internal-links-w">DFW International Airport</a>, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport & Private FBO Terminals.</li>
            <li><strong>Business & Entertainment Districts: </strong>Legacy West Plano, The Star District Frisco, Downtown Dallas, Dallas Arts District, Las Colinas – Irving & Granite Park <a href="/locations/black-car-service-plano-texas/" class="internal-links-w">Plano</a>.</li>
            <li><strong>Sporting & Event Venues: </strong>AT&T Stadium, Globe Life Field, American Airlines Centre, Toyota Stadium, Texas Motor Speedway & Toyota Music Factory.</li>

          </ul>
        </div>


      </div>
      <div class="col-md-6">
        <div class="pt-chauffeur-1"><img src="/img/dfw-car-service-airport-transfers.webp" width="522" height="564" alt="Corporate Airport Car Service Dallas">
        </div>

      </div>


    </div>
  </div>
</section>




<div class="cta cta-ddc-nones bottom-button-vtb-c">
  <div class="container">
    <div class="row">
      <div class="col-md-1">
      </div>

      <div class="col-md-10">
        <h5><span class="main-color">Don’t leave</span><br>your next trip to chance</h5>
        <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="#">Book your ride now</a>
      </div>
      <div class="col-md-1">
      </div>


    </div>
  </div>
</div>

<section class="about-uss">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pt-chauffeur-1"><img src="/img/dallas-premium-airport-transportation.webp" alt="Chauffeur Airport Car Service Dallas">
        </div>

      </div>


      <div class="col-md-8">
        <div class="pt-section-title-box ">
          <h5 class="pt-section-titles">Why Choose Us for Airport Transfers
          </h5>




          <p class="pt-section-description">
            Traveling to or from the airport should be safe & stress-free. We make sure your journey is smooth, whether you’re catching an early flight or arriving late at night. Our goal is to give you comfort, reliability & peace of mind every time.
          </p>

          <ul>
            <li><strong class="strong-c-color">Licensed and Insured Drivers</strong> <a href="/services/chauffeur-service-dallas-texas/" class="internal-links">Experienced chauffeurs</a> trained for airport travel.</li>
            <li><strong class="strong-c-color">Always On Time</strong> We track your flight in real-time for perfect pickups.</li>
            <li><strong class="strong-c-color">Fair, Flat Pricing</strong> No surge charges or surprise costs, just clear rates.</li>
            <li><strong class="strong-c-color">Clean and Comfortable Cars</strong> Fresh interiors, luxury seating & plenty of space for luggage.</li>
            <li><strong class="strong-c-color">24/7 Service</strong> Day or night, we’re ready whenever your flight is scheduled.</li>
            <li><strong class="strong-c-color">Trusted by Travelers</strong> Business & leisure passengers rely on us for smooth airport rides.</li>
            <li><strong class="strong-c-color">Complimentary Perks</strong> Stay connected with Wi-Fi, enjoy free bottled water, and charge your devices.</li>
          </ul>

          <p>Your airport ride should be the easiest part of your trip & with us, it always is.
          </p>
        </div>

      </div>

    </div>
  </div>
</section>
<section class="about-us testimonials-sec">
  <div class="container">
    <div class="row">

      <div class="col-md-12 testimonials-sec">
        <div class="pt-section-title-box ">
          <h5 class="pt-section-title text-center">What Our Corporate Clients and Executive Assistants Are Saying</h5>







          <div class="button-prevs text-right">
            <div class="row">
              <div class="col-md-8">

              </div>

              <div class="col-md-4 testi">
                <button class="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
                <button class="next"><i class="fa fa-arrow-right"></i></button>
              </div>
            </div>
          </div>





          <div class="banner-slids">

            <div class="tns-outer tns-ovh"><button data-action="stop" type="button"><span class="tns-visually-hidden">stop animation</span>stop</button>
              <div class="tns-inner" id="tns1-iw">
                <div class="slider tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translateX(-28%); transition-duration: 0.3s;">
                  <div class="slide tns-item" aria-hidden="true" tabindex="-1">
                    <div class="slide__item">

                      <p>The airport transfer was seamless thanks to the Mercedes-Benz S-Class. The flight change last minute went smoothly. Got just the right look with the privacy partition, expensive interior trim. Classy, top-notch, and trouble-free. Recommended for all executive or private events.
                      </p>
                      <p>
                        <bold>— Nicole A.</bold> Dallas, TX
                      </p>


                    </div>
                  </div>






                  <div class="slide tns-item" aria-hidden="true" tabindex="-1">
                    <div class="slide__item">
                      <p>The Mercedes-Benz S-Class was ideal for my road show transfer. Last-minute flight change? Handled perfectly. The privacy partition ensured client conversations stayed private. The premium interior made a strong impression. Seamless, stylish, and professional. Highly recommend for corporate travel.
                      </p>
                      <p>
                        <bold>— Olivia R.</bold> Addison, TX
                      </p>


                    </div>
                  </div>


                  <div class="slide tns-item" aria-hidden="true" tabindex="-1">
                    <div class="slide__item">
                      <p>Timing is key when you're a wedding planner. The airport transfer was made oh so easy with the Mercedes-Benz S-Class. Accommodated a last-minute flight change. The privacy partition and elegant interior impressed my clients. Extremely satisfied — highly recommend for professional event travel.
                      </p>
                      <p>
                        <bold>— Emily J.</bold> San Antonio, TX
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
@section('body-scripts')
<script src="{{ asset('js/industrie-custom.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUqn8Dg3GICSzhyvw7DjXXHkyoGMCoTpM&libraries=places&loading=async&callback=initAutocomplete" async defer></script>
@endsection
@endsection
