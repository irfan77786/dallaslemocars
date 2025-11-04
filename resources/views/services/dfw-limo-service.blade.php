@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "DFW Limo Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
  <div class="row">
    <div class="col-sm-12 back-container">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
            <div class="bottom-banner-text" bis_skin_checked="1">
              <h1>DFW Limo Service</h1>
              <p>
                Arrive in style with our top DFW limo service. We provide luxury
                cars, SUVs & limos for airport transfers, business trips,
                weddings & events. Serving Dallas, Fort Worth & nearby areas,
                our pro chauffeurs make every ride smooth, safe & on time.
                Travel with comfort in clean, well-kept vehicles built for your
                needs. Whether it’s a quick airport pickup or a long trip, our
                limo service gives you a first-class travel experience every
                time.
              </p>
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
          <h2>DFW Limo Service</h2>
          <p>
            Arrive in style with our top DFW limo service. We provide luxury
            cars, SUVs & limos for airport transfers, business trips,
            weddings & events. Serving Dallas, Fort Worth & nearby areas,
            our pro chauffeurs make every ride smooth, safe & on time.
            Travel with comfort in clean, well-kept vehicles built for your
            needs. Whether it’s a quick airport pickup or a long trip, our
            limo service gives you a first-class travel experience every
            time.
          </p>
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
            <h2>Dallas Black Cars Limo Service – Fleet for Elegant Limousine Travel</h2>
            <p>
              Our fleet delivers the perfect blend of luxury and sophistication for
              Dallas limousine service, ideal for weddings, proms, galas, or executive
              functions.
            </p>
          </div>

          <p>
            <strong class="strong-c-color">Luxury Sedans –</strong>
            Cadillac CT6, Volvo S90, and Mercedes-Benz S-Class for private limo-style rides.
          </p>

          <p>
            <strong class="strong-c-color">Luxury SUVs –</strong>
            Escalade ESV, Suburban, Yukon XL, and Navigator for upscale group travel with luxury finishes.
          </p>

          <p>
            <strong class="strong-c-color">Executive Sprinter Vans –</strong>
            Mercedes-Benz Sprinters provide a limousine-style experience for larger parties and events.
          </p>

          <p>
            <strong class="strong-c-color">23–38 Passenger Mini Bus –</strong>
            Great for wedding shuttles, concert transportation, or upscale group rides.
          </p>

          <p>
            <strong class="strong-c-color">Luxury Motor Coaches (55–60 Passengers) –</strong>
            The ultimate option for gala events, conventions, or large VIP travel groups.
          </p>

<p class="tagline-bottom">  With our Dallas limo service, every ride is styled for elegance and lasting impressions.</p>




          <img
            src="/images/img/airport-limo-service-dallas.webp"
            alt="Dallas Limo Service Luxury Fleet" />
        </div>

        <div class="btom-btn">
          <a href="/book-now/">Ride in Dallas – Book Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-us city-pages">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pt-section-title-box">
          <h5 class="pt-section-title">Luxury Airport Transfers</h5>
          <p class="pt-section-description">
            Travel to and from Dallas/Fort Worth International Airport is
            easy with our DFW limo service. We serve Dallas, Fort Worth,
            <a
              href="/locations/black-car-service-plano-texas/"
              class="internal-links-w">Plano</a>
            & Coppell. You can choose a luxury car for one person or a big
            SUV for families & groups. Our drivers help with bags, drive
            safely & follow the best route. They make sure you arrive on
            time.
          </p>
          <p class="pt-section-description">
            Each car is clean, neat & kept in good shape. Seats are soft &
            comfy for a smooth ride. Whether you travel for work or fun, our
            limo service gives you a safe, stylish & stress-free airport
            trip every time.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pt-chauffeur-1">
          <img
            src="/img/love-field-airport-ride-luxury.webp"
            width="522"
            height="564"
            alt="Reliable black car service near Dallas" />
        </div>
      </div>
    </div>
  </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>

      <div class="col-md-10">
        <h5>
          <span class="main-color">Going to the airport,</span> a business
          meeting, or the big game?
        </h5>

        <p class="bottom-cta-content">
          Your private chauffeur is ready for DFW Airport, Plano business
          districts, Legacy West, or AT&amp;T Stadium game days.
        </p>

        <a href="/book-now/" class="bottom-cta-vtb-c">Travel in Comfort – Book Now</a>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

<section class="about-uss city-pages">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pt-chauffeur-1">
          <img
            src="/images/img/business-travel-car-service-dallas.webp"
            alt="Chauffeured black car service in Dallas" />
        </div>
      </div>

      <div class="col-md-8">
        <div class="pt-section-title-box">
          <h5 class="pt-section-titles">Areas We Serve</h5>
          <p class="pt-section-description">
            Providing seamless transportation to and from Dallas/Fort Worth
            International Airport (DFW), serving the entire Metroplex:
          </p>

          <ul>
            <li>
              <strong>Cities & Regional Communities: </strong>We proudly
              serve major cities like Dallas and Fort Worth, along with
              Plano,
              <a
                href="/locations/black-car-service-frisco-texas/"
                class="internal-links">Frisco</a>, McKinney, and Allen. Our network also extends to Southlake,
              Keller, Flower Mound, Carrollton, Richardson, Denton, Garland,
              Mesquite, and The Colony.
            </li>
            <li>
              <strong>Airports & Aviation Access: </strong><a
                href="/airport/car-service-dallas-fort-worth-international-airport/"
                class="internal-links">DFW International Airport</a>, Dallas Love Field, Addison Airport, McKinney National
              Airport, Fort Worth Alliance Airport, and VIP FBO Terminals.
            </li>
            <li>
              <strong>Corporate & Lifestyle Zones: </strong>Legacy West
              (Plano), The Star (Frisco), Downtown Dallas, Las Colinas
              (Irving), Dallas Arts District, and Preston Hollow.
            </li>
            <li>
              <strong>Sports & Entertainment Venues: </strong>AT&T Stadium,
              Globe Life Field, American Airlines Center, Toyota Stadium,
              PGA Frisco, and Toyota Music Factory.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>

      <div class="col-md-10">
        <img
          src="/img/fifa-world-cup-2026-car-service-dallas.jpg"
          alt="fifa world cup 2026 car service dallas" />

        <a
          href="/fifa-world-cup-2026-car-service-dallas/"
          class="bottom-cta-vtb-c">Visit our fifa world cup 2026 page</a>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</div>

<div id="bottomServices-defcitiy icon-h-page">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei">
          <span class="serviceImage1">
            <img
              src="/img/booking.webp"
              alt="Online Portal
 " />
          </span>

          <div class="serviceHeadings">
            <h3>Book Online or Call</h3>

            <p>Use our form or call to schedule your ride.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei">
          <span class="serviceImage1">
            <img
              src="/img/conformation.webp"
              alt="Clear-Cut All-Inclusive Pricing
 " />
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
            <img
              src="/img/chauffeur.webp"
              alt="Expert Chauffeurs
 " />
          </span>

          <div class="serviceHeadings">
            <h3>Meet Your Chauffeur</h3>

            <p>On-time, professional, and ready to assist</p>
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
        <div class="pt-chauffeur-1">
          <img
            src="/img/luxury-van-rental-dallas-texas.webp"
            alt="Chauffeured black car service in Dallas" />
        </div>
      </div>

      <div class="col-md-8">
        <div class="pt-section-title-box">
          <h5 class="pt-section-titles">Why Choose Us</h5>
          <p class="pt-section-description">
            At Dallas Black Cars Limo Service is a simple mission—to make
            every ride safe, reliable, & comfortable. We built our service
            on trust, professionalism, & care for our passengers. Whether
            you’re traveling for work, leisure, or a special event, we focus
            on giving you an experience that stands out.
          </p>

          <ul>
            <li>
              <strong><a
                  href="/services/chauffeur-service-dallas-texas/"
                  class="internal-links">Professional Chauffeurs:</a> </strong>Experienced, licensed drivers who put safety first.
            </li>
            <li>
              <strong>Always On Time: </strong>We respect your schedule &
              guarantee punctual service.
            </li>
            <li>
              <strong>Clear, Honest Rates: </strong>No hidden fees, just
              fair, transparent pricing.
            </li>
            <li>
              <strong><a href="/our-fleet/" class="internal-links">Luxury Fleet:</a> </strong>Clean, stylish vehicles for comfort & class.
            </li>
            <li>
              <strong>Available 24/7: </strong>Travel with us anytime, day
              or night.
            </li>
            <li>
              <strong>Trusted by Clients Across Dallas-Fort Worth: </strong>Serving executives, families & VIPs.
            </li>
            <li>
              <strong>Complimentary Amenities: </strong>Free Wi-Fi,
              chargers, & bottled water on every ride.
            </li>
          </ul>
          <p>
            We’re more than just a ride, we’re your trusted travel partner,
            dedicated to making every journey smooth & stress-free.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>

      <div class="col-md-10">
        <h5>
          <span class="main-color">Don’t leave</span><br />your next trip to
          chance
        </h5>
        <a href="/book-now/" class="bottom-cta-vtb-c">Book your ride now</a>
      </div>
      <div class="col-md-1"></div>
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
                        I was worried I would be late for my flight. I
                        booked this limo from Plano to DFW Airport. The
                        driver came early and helped with my heavy bags. The
                        car was clean and cool inside. I felt safe and calm
                        all the way. Now I always use this service when I
                        fly.
                      </p>
                      <p>
                        <bold>— Sarah.</bold> Plano, TX
                      </p>
                    </div>
                  </div>

                  <div
                    class="slide tns-item"
                    aria-hidden="true"
                    tabindex="-1">
                    <div class="slide__item">
                      <p>
                        My family had a wedding in Dallas. We needed a big
                        car from Coppell. We booked their SUV, and it was
                        perfect. The kids had lots of space. My wife liked
                        the clean seats. The driver smiled and opened the
                        doors for us. It felt like VIP service. We will book
                        again.
                      </p>
                      <p>
                        <bold>— Liam B. </bold> Coppell, TX
                      </p>
                    </div>
                  </div>

                  <div
                    class="slide tns-item"
                    aria-hidden="true"
                    tabindex="-1">
                    <div class="slide__item">
                      <p>
                        I travel for work every week. I go from Highland
                        Park to DFW Airport. I tried other car services, but
                        this one is the best. The drivers are always on
                        time, even early in the morning. They are polite and
                        help with my bag. The cars are clean every time. It
                        makes my trips easy. I trust them like family.
                      </p>
                      <p>
                        <bold>— Ashley W.</bold> Highland Park, TX
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
