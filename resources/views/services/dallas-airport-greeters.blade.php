@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
  @include('partials.banner', ['title' => "Dallas Airport Greeters"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
  <div class="row">
    <div class="col-sm-12 back-container">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
            <div class="bottom-banner-text" bis_skin_checked="1">
              <h1>Dallas Airport Greeters – Fast & Personalized Service</h1>
              <p>
                Make your arrival or departure effortless with our dedicated
                airport greeter service. From assisting with luggage to guiding
                you through DFW or Love Field, our courteous team ensures a
                smooth & stress-free journey. Enjoy personalized attention,
                comfort, & efficiency. Book your “Dallas airport greeter” today
                for a welcoming, hassle-free travel experience.
              </p>
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
            <h2>Dallas Airport Greeters – Smooth, Fast, and Personalized Service</h2>
            <p>Make your arrival or departure effortless with our dedicated airport greeter service. From assisting with luggage to guiding you through DFW or Love Field, our courteous team ensures a smooth & stress-free journey. Enjoy personalized attention, comfort, & efficiency. Book your “Dallas airport greeter” today for a welcoming, hassle-free travel experience.
            </p>
            <p class="bt-text">24/7 Service – Call Now</p>
            <div class="bottom-banner-btn" bis_skin_checked="1">
              <a class="call-phonea hover-up d-inline-block mb-20" href="tel:+12148978056" bis_skin_checked="1">Call: 214-897-8056</a>
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
            <h2>Travel in Style with Our Airport Greeter's Fleet</h2>
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

          <p>
            Trust our <a href="/services/chauffeur-service-dallas-texas/" class="internal-links">chauffeur service Dallas</a> for punctual, reliable, and comfortable airport transfers. All vehicles are fully insured, cleaned daily, and driven by licensed professionals for a safe & stylish ride every time.
          </p>

          <img src="/img/dallas-black-car-service.webp" alt="Airport Car Service Dallas">
        </div>

        <div class="btom-btn">
          <a style="cursor: pointer;" class="quick-book-link" href="#">Ride in Allen – Book Now</a>
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
              <h5 class="pt-section-title">
                Meet & Greet at the <span class="main-color">Terminal</span>
              </h5>
              <p class="pt-section-description">
                Our
                <a
                  href="/airport/car-service-dallas-fort-worth-international-airport/"
                  class="internal-links-w"
                  >Dallas airport greeter service</a
                >
                takes away the stress from the very 1st step. When you land at
                DFW Airport or Love Field Airport, a pro greeter will be waiting
                at the terminal to welcome you. They help with luggage & guide
                you through the airport. They also make sure you meet your
                driver without delay.
              </p>
              <p class="pt-section-description">
                This airport meet & greet in Dallas is perfect for first-time
                visitors, families with kids, elderly travelers, or VIP guests
                who want extra care. No need to stress about directions or long
                walks. You can relax knowing someone is with you from arrival to
                the car. Your journey stays smooth & stress-free.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pt-chauffeur-1">
              <img
                src="/images/img/airport-pickup-service-dallas.webp"
                width="522"
                height="564"
                alt="Reliable black car service near Dallas"
              />
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

            <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c"
              >Travel in Comfort – Book Now</a
            >
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
                src="/images/img/dallas-airport-transfer-service.webp"
                alt="Chauffeured black car service in Dallas"
              />
            </div>
          </div>

          <div class="col-md-8">
            <div class="pt-section-title-box">
              <h5 class="pt-section-titles">
                Stress-Free Airport <span class="main-color">Experience</span>
              </h5>

              <p class="pt-section-description">
                Travel days can feel hard, especially after a long flight. Our
                <a
                  href="/airport/addison-airport-car-service/"
                  class="internal-links"
                  >Dallas airport greeters</a
                >
                give comfort, ease & peace of mind. From the moment you arrive,
                your greeter helps with bags, answers your questions & takes you
                straight to your waiting car.
              </p>
              <p class="pt-section-description">
                This service works great for
                <a
                  href="/services/private-car-service-in-dallas-texas/"
                  class="internal-links"
                  >international travelers</a
                >, seniors & business clients in Dallas. It removes waiting time
                & confusion, giving you a quick & safe move from plane to car.
                Whether you travel alone or with a group, our airport greeter
                service in Dallas makes arrivals calm, simple & welcoming. "Book
                your Dallas airport meet & greet today" at DFW or
                <a
                  href="/airport/dallas-love-field-black-car-service/"
                  class="internal-links"
                  >Love Field Airport</a
                >
                & enjoy a smooth, stress-free arrival or departure.
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
            <img
              src="/img/fifa-world-cup-2026-car-service-dallas.jpg"
              alt="fifa world cup 2026 car service dallas"
            />

            <a
              href="/fifa-world-cup-2026-car-service-dallas/"
              class="bottom-cta-vtb-c"
              >Visit our fifa world cup 2026 page</a
            >
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
 "
                />
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
 "
                />
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
 "
                />
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
                src="/img/love-field-airport-ride-luxury.webp"
                alt="concerts and sporting events"
              />
            </div>
          </div>

          <div class="col-md-8">
            <div class="pt-section-title-box">
              <h5 class="pt-section-titles">
                Why Choose Us for
                <span class="main-color">Airport Greeters</span>
              </h5>

              <p class="pt-section-description">
                Arriving at a busy airport can feel overwhelming, but our
                greeters make the experience smooth & welcoming. From the moment
                you step inside, we’re there to guide you, assist you, & ensure
                a hassle-free arrival or departure.
              </p>
              <ul>
                <li>
                  <strong class="strong-c-color"
                    >Friendly, Professional Greeters:</strong
                  >
                  Courteous staff ready to assist with every detail.
                </li>
                <li>
                  <strong class="strong-c-color"
                    >Seamless Meet and Greet:</strong
                  >
                  We wait for you at the gate or arrival hall with clear
                  signage.
                </li>
                <li>
                  <strong class="strong-c-color">Luggage Assistance:</strong>
                  Helping you handle bags with ease from arrival to car pickup.
                </li>
                <li>
                  <strong class="strong-c-color">Fast-Track Guidance:</strong>
                  Support with check-in, security & boarding for quicker flow.
                </li>
                <li>
                  <strong class="strong-c-color">24/7 Availability:</strong> No
                  matter the time, we’re ready to welcome you.
                </li>
                <li>
                  <strong class="strong-c-color"
                    >Trusted by Families and VIPs:</strong
                  >
                  Perfect for first-time flyers, elderly travelers, &
                  executives.
                </li>
                <li>
                  <strong class="strong-c-color"
                    >Stress-Free Experience:</strong
                  >
                  We take care of details so you can relax & enjoy the journey.
                </li>
              </ul>

              <p class="pt-section-description">
                With our airport greeters, every trip begins & ends with comfort
                & care.
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
            <a style="cursor: pointer;" class="quick-book-link bottom-cta-vtb-c" href="#">Book your ride now</a>
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
                What Our Corporate Clients and
                <span class="main-color">Executive Assistants Are Saying</span>
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
                      "
                    >
                      <div
                        class="slide tns-item"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <div class="slide__item">
                          <p>
                            Last month, I tried the Airport Greeter Service in
                            Dallas. When the staff met me at the gate and was
                            extremely helpful with my luggage, I accessed the
                            exit faster, relieving one more stress from a tired
                            traveler.
                          </p>
                          <p><bold>— Monica R</bold> Highland Park, TX</p>
                        </div>
                      </div>

                      <div
                        class="slide tns-item"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <div class="slide__item">
                          <p>
                            Traveling alone is usually stressful, but the
                            Airport Greeter Service in Dallas took the pressure
                            off. Someone was right there when I landed, helped
                            me through, and stayed with me till pickup.
                          </p>
                          <p><bold>— Stephanie M.</bold> University Park, TX</p>
                        </div>
                      </div>

                      <div
                        class="slide tns-item"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <div class="slide__item">
                          <p>
                            This was my first time at DFW, and I was pretty
                            anxious. I hired an Airport Greeter Service in
                            Dallas – they found me immediately, were super
                            polite, carried my bags, and escorted me to my car.
                          </p>
                          <p><bold>— Brooke L.</bold> Arlington, TX</p>
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
