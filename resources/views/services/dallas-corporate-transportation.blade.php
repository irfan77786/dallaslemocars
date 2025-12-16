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
              <h1>Dallas Corporate Transportation</h1>
              <p>
                Arrive in style & on time with our premium corporate
                transportation services. We offer luxury sedans, SUVs, &
                executive vehicles tailored for business travel, meetings, &
                events across Dallas. With professional chauffeurs, punctual
                pickups, & complete comfort, we make every journey seamless.
                Book your Dallas corporate transportation today for reliable,
                first-class service.
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
            <h2>Dallas Corporate Transportation</h2>
            <p> Arrive in style & on time with our premium corporate
                transportation services. We offer luxury sedans, SUVs, &
                executive vehicles tailored for business travel, meetings, &
                events across Dallas. With professional chauffeurs, punctual
                pickups, & complete comfort, we make every journey seamless.
                Book your Dallas corporate transportation today for reliable,
                first-class service.
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
            <h2>Dallas Limo And Black Cars Service – Ride Smart with Our Corporate Fleet</h2>
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
              <h5 class="pt-section-title">Reliable Business Travel</h5>
              <p class="pt-section-description">
                Business travel should be smooth, on-time & stress-free. Our
                <a
                  href="https://dallaslimoandblackcars.com/"
                  class="internal-links-w"
                  >corporate transportation service in Dallas</a
                >, Frisco, Plano & McKinney is made for execs who value time &
                professionalism.
              </p>
              <p class="pt-section-description">
                We offer clean sedans for solo execs &
                <a href="/our-fleet/" class="internal-links-w">luxury SUVs</a>
                for small teams. Trained chauffeurs handle traffic, parking &
                routes so you don’t have to. You can focus on work, prepare for
                meetings, or just relax on the ride. Every trip is planned with
                care to ensure on-time arrival at meetings, conferences, or the
                airport. With comfort, privacy & reliability, our corporate car
                service gives a pro experience every time.
                <a style="cursor: pointer;" class="quick-book-link internal-links-w"
                  >Book your corporate ride today</a
                >
                & travel without worry.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="pt-chauffeur-1">
              <img
                src="/img/airport-car-service.webp"
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
                src="/images/img/business-travel-car-service-dallas.webp"
                alt="Chauffeured black car service in Dallas"
              />
            </div>
          </div>

          <div class="col-md-8">
            <div class="pt-section-title-box">
              <h5 class="pt-section-titles">
                Group & Event <span class="main-color">Transfers</span>
              </h5>

              <p class="pt-section-description">
                For events, team travel & business group transfers, you need
                transport that’s reliable & well-organized. Our
                <a
                  href="/services/luxury-van-rental-dallas-texas/"
                  class="internal-links"
                  >executive group transportation in Dallas</a
                >, Plano & nearby cities offers SUVs & vans for groups of all
                sizes.
              </p>
              <p class="pt-section-description">
                We manage
                <a
                  href="/services/dallas-airport-transfers/"
                  class="internal-links"
                  >airport pickups</a
                >, hotel transfers & company outings with ease. From luggage
                help to route planning, our pro chauffeurs handle it all. Your
                team stays focused while we manage the details. Whether it’s
                moving colleagues between meetings or bringing VIP guests to an
                event, we deliver punctual & stress-free rides. Our group
                transportation blends efficiency, style & reliability, making us
                the trusted choice for businesses. Contact us now to schedule
                group transfers for your next event.
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
                src="/images/img/dallas-executive-black-car.webp"
                alt="concerts and sporting events"
              />
            </div>
          </div>

          <div class="col-md-8">
            <div class="pt-section-title-box">
              <h5 class="pt-section-titles">
                Why Choose Us for
                <span class="main-color">Corporate Transportation</span>
              </h5>

              <p class="pt-section-description">
                When it comes to business travel, time & professionalism matter
                most. Our corporate transportation service is built to meet the
                needs of executives, teams, & clients who expect nothing but the
                best. We make every ride smooth, reliable, & professional.
              </p>
              <ul>
                <li>
                  <strong class="strong-c-color"
                    >Professional Chauffeurs: </strong
                  >Trained drivers who value discretion & courtesy.
                </li>
                <li>
                  <strong class="strong-c-color">On-Time, Every Time: </strong
                  >We ensure punctual pickups to keep your schedule on track.
                </li>
                <li>
                  <strong class="strong-c-color">Clear, Flat Rates: </strong>No
                  hidden costs, budget with confidence.
                </li>
                <li>
                  <strong class="strong-c-color">Luxury Fleet Options: </strong
                  ><a href="/our-fleet/" class="internal-links"
                    >Executive sedans</a
                  >, SUVs, & vans for every group size.
                </li>
                <li>
                  <strong class="strong-c-color">24/7 Service: </strong>Ready
                  whenever your business requires travel.
                </li>
                <li>
                  <strong class="strong-c-color"
                    >Trusted by Companies and Executives: </strong
                  >Serving professionals who demand high standards.
                </li>
                <li>
                  <strong class="strong-c-color">In-Ride Comforts: </strong
                  >Wi-Fi, chargers, & water to keep you refreshed & connected.
                </li>
              </ul>
              <p class="pt-section-description">
                With us, your corporate travel is more than just a ride—it’s a
                seamless business experience.
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
                            We had an important client meeting and were
                            pleasantly surprised by the services of the Dallas
                            Corporate Transportation. The car was on time and
                            the driver was very professional. In short, it
                            turned out to be a pleasant ride. They are really
                            great in terms of corporate travel!
                          </p>
                          <p><bold>— Abigail T.</bold> Dallas, TX</p>
                        </div>
                      </div>

                      <div
                        class="slide tns-item"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <div class="slide__item">
                          <p>
                            Our company used Dallas Corporate Transportation for
                            organized on a business basis. Vehicles were clean,
                            cars were on time, drivers were polite. The whole
                            experience was as simple as that. It was extremely
                            reliable!
                          </p>
                          <p><bold>— Danielle P.</bold> Denton, TX</p>
                        </div>
                      </div>

                      <div
                        class="slide tns-item"
                        aria-hidden="true"
                        tabindex="-1"
                      >
                        <div class="slide__item">
                          <p>
                            We chose the service of Dallas Corporate
                            Transportation for our team, and it was the best
                            idea. They arrived at the address on time, were in
                            touch for various issues during the day, and were
                            simply very professional. No doubt next time I will
                            book a transfer from you.
                          </p>
                          <p><bold>— Katherine R.</bold> Dallas, TX</p>
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
