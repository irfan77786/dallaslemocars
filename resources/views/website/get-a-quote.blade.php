@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "Get a Quote"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
  <div class="row">
    <div class="col-sm-12 back-container">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
            <div class="bottom-banner-text" bis_skin_checked="1">
              <h1>Get a Quote – Dallas Black Cars Limo Service</h1>
              <p>Request Instant Pricing for Black Car, SUV, Sprinter, or Group Travel in DFW.</p>
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
          <h2>Get a Quote – Dallas Black Cars Limo Service</h2>
          <p>Request Instant Pricing for Black Car, SUV, Sprinter, or Group Travel in DFW.</p>
          <p class="bt-text">24/7 Service – Call Now</p>
          <div class="bottom-banner-btn" bis_skin_checked="1">
            <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12148978056" bis_skin_checked="1">Call: 214-897-8056</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="section get-form">
  <div class="container-sub">
    <div class="mw-770">
      <h2
        class="heading-44-medium mb-30 text-center wow fadeInUp"
        style="visibility: visible; animation-name: fadeInUp">
        Get A Quote
      </h2>
      <div
        class="form-contact form-comment wow fadeInUp"
        style="visibility: visible; animation-name: fadeInUp">
        <div class="expMessage"></div>
        <form
          class="positioned"
          name="sentMessage"
          id="contactus"
          action=""
          method="post"
          novalidate="novalidate">
          <label for="cars">Select Vehicles Option:</label>

          <select
            name="formInput[Vehicles Option]"
            id="cars"
            class="filled">
            <option value="Luxury Sedan">Luxury Sedan</option>
            <option value="Premium SUV">Premium SUV</option>
            <option value="Luxury SUV">Luxury SUV</option>
            <option value="Sprinter Van">Sprinter Van</option>
            <option value="Mini Bus">Mini-Bus</option>
          </select>

          <label for="cars">Select Trip Type:</label>

          <select name="formInput[Vehicles Type]" id="cars" class="filled">
            <option value="Point to Point">Point to Point</option>
            <option value="Airport Services">Airport Services</option>
            <option value="Hourly/As Directed">Hourly/As Directed</option>
          </select>

          <label for="cars">No. of Passengers </label>
          <input
            name="formInput[Number Of Passengers]"
            id="senderName"
            placeholder="Number of Pax"
            required=""
            type="text" />

          <label for="cars">Trip Date</label>
          <input type="date" id="date" name="formInput[date]" required="" />

          <label for="cars">Trip Time </label>
          <input
            type="time"
            id="appt"
            name="formInput[Trip Time]"
            required="" />

          <label for="pickup-address">Pickup Address </label>
          <div class="position-relative">
            <input
              name="formInput[Pickup Address]"
              id="pickup-address"
              class="form-control"
              placeholder="street, city, state"
              type="text"
              autocomplete="off" />
          </div>

          <label for="dropoff-address" class="mt-3">Drop Off Address </label>
          <div class="position-relative">
            <input
              name="formInput[Drop Off Address]"
              id="dropoff-address"
              class="form-control"
              placeholder="street, city, state"
              type="text"
              autocomplete="off" />
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="cars">First Name </label>
              <input
                name="formInput[First Name]"
                id="sendermessage"
                placeholder="your first name"
                required=""
                type="text" />
            </div>
            <div class="col-md-6">
              <label for="cars">Last Name </label>
              <input
                name="formInput[Last Name]"
                id="sendermessage"
                placeholder="your last name"
                required=""
                type="text" />
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <label for="cars">Email </label>
              <input
                name="formInput[Email]"
                id="sendermessage"
                placeholder="your email address"
                required=""
                type="text" />
            </div>
            <div class="col-md-6">
              <label for="cars">Phone </label>
              <input
                name="formInput[phone]"
                id="sendermessage"
                placeholder="your phone number"
                required=""
                type="phone" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label for="cars">Message </label>
              <textarea
                id="subject"
                name="formInput[Message]"
                placeholder="your Message"
                style="height: 200px"></textarea>
            </div>
            </din>
            <button type="submit" class="btn btn-primary btn-ico bton-qury">
              Send Now
            </button>

            <input
              type="hidden"
              name="action"
              value="submitform"
              class="filled" />
        </form>
      </div>
    </div>
  </div>
</section>



<section class="about-uss city-pages">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pt-chauffeur-1"><img src="/img/sprinter-van-rental-dallas.webp" alt="Chauffeured black car service in Dallas">
        </div>

      </div>


      <div class="col-md-8">
        <div class="pt-section-title-box ">
          <h5 class="pt-section-titles">Plan Ahead. Quote Instantly. Ride in Comfort
          </h5>




          <p class="pt-section-description">Looking for a price before you book? Whether you're scheduling a <a href="/airport/car-service-dallas-fort-worth-international-airport/" class="internal-links">DFW Airport pickup</a>, a wedding Sprinter Van, or a <a href="/city-to-city-ride/dallas-to-austin/" class="internal-links">city-to-city ride</a> from Dallas to Houston, our team is ready to provide a clear, upfront quote.

          </p>
          <p class="pt-section-description">We respond within minutes—day or night.</p>




          <h5 class="pt-section-titles">What Type of Ride Do You Need?
          </h5>
          <p class="pt-section-description">We customize quotes based on your ride type, location, group size, and vehicle choice. Select from:</p>


          <ul>
            <li>Airport Transfers (DFW, DAL, FBOs) </li>
            <li>Hourly Charters (corporate, shopping, events) </li>
            <li>City-to-City Rides (<a href="/city-to-city-ride/dallas-to-austin/" class="internal-links">Dallas to Austin</a>, Houston, Waco, etc.)</li>
            <li>Sprinter Vans for Weddings & Groups </li>
            <li>Mini & Charter Bus Quotes for 23–56 Passengers</li>
            <li>Long-Distance & Overnight Service</li>
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

          <h5 class="pt-section-title">Quote Response Time
          </h5>

          <p>
            Most quote requests are answered within 15 minutes or less.
            For Sprinters and group buses, please allow up to 1 hour for detailed coordination.
          </p>
          <h5 class="pt-section-title">Service Areas Covered
          </h5>

          <p>We provide quotes and service throughout:</p>
          <ul>

            <li>Dallas, <a href="/locations/black-car-service-fort-worth-texas/" class="internal-links-w">Fort Worth</a>, Plano, Frisco, Irving, Arlington </li>
            <li>DFW Airport, Dallas Love Field, Signature Aviation, Million Air </li>
            <li>City-to-city travel across Texas: Austin, Houston, San Antonio, Tyler, Waco</li>
          </ul>



        </div>


      </div>
      <div class="col-md-6">
        <div class="pt-chauffeur-1"><img src="/images/img/airport-pickup-service-dallas.webp" width="522" height="564" alt="Reliable black car service near Dallas">
        </div>

      </div>
    </div>
  </div>
</section>
<div id="bottomServices-defcitiy icon-h-page" class="margin-ff">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei mt-cts">
          <span class="serviceImage1">
            <img src="/img/booking.webp" alt="Online Portal">
          </span>
          <div class="serviceHeadings">
            <h3>
              Online Form (Fastest)
            </h3>
            <p>Fill out our simple quote form with pickup location, drop-off, date, and passenger count. <br> <strong>Request a Quote Online</strong></p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei mt-cts">
          <span class="serviceImage1">
            <img src="/img/conformation.webp" alt="Clear-Cut All-Inclusive Pricing">
          </span>
          <div class="serviceHeadings">
            <h3>Email Quote</h3>
            <p><strong>Send trip details to:</strong> <a href="mailto:info@dallaslimoandblackcars.com">info@dallaslimoandblackcars.com </a>
              <br><strong>Include:</strong> pickup, destination, vehicle type, number of passengers.
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei mt-cts">
          <span class="serviceImage1">
            <img src="/img/chauffeur.webp" alt="Expert Chauffeurs">
          </span>
          <div class="serviceHeadings">
            <h3>Call or Text</h3>
            <p>Speak with our team anytime at <a href="tel:214-305-8671">214-305-8671</a>.<br> We’ll get you a quote within minutes—24/7. </p>
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
        <div class="pt-chauffeur-1"><img src="/images/img/dallas-executive-black-car.webp" alt="concerts and sporting events">
        </div>
      </div>
      <div class="col-md-8">
        <div class="pt-section-title-box ">
          <h5 class="pt-section-titles">Our Vehicle Categories</h5>
          <ul>
            <li>Executive Sedans – Cadillac CT6, Audi A8</li>
            <li>Premier SUVs – Suburban, Yukon XL </li>
            <li>Luxury SUVs – Escalade, Navigator </li>
            <li><a href="/services/luxury-van-rental-dallas-texas/" class="internal-links">Sprinter Vans</a> – Executive, VIP, Shuttle</li>
            <li>Mini Buses – 23–38 Passenger </li>
            <li>Charter Coaches – 50+ Passenger</li>
          </ul>
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
          <h5 class="pt-section-title text-center">What Our Corporate Clients and Executive Assistants Are Saying
          </h5>
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

                      <p>I submitted the form at 10 PM and had a quote within 10 minutes. I booked a black Suburban to Frisco for 6 AM the next day. Seamless.
                      </p>
                      <p>
                        <bold>— Tom G.</bold> Frisco, TX
                      </p>
                    </div>
                  </div>
                  <div class="slide tns-item" aria-hidden="true" tabindex="-1">
                    <div class="slide__item">
                      <p>Needed a quote for a 27-passenger mini bus from Plano to AT&T Stadium. They responded faster than anyone and had it confirmed within an hour.
                      </p>
                      <p>
                        <bold>— Rachel M.</bold> Plano, TX
                      </p>
                    </div>
                  </div>
                  <div class="slide tns-item" aria-hidden="true" tabindex="-1">
                    <div class="slide__item">
                      <p>They worked out pricing for a Sprinter Van to Houston with multiple stops. Extremely professional and quick to respond.
                      </p>
                      <p>
                        <bold>— David H.</bold> Dallas, TX
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
