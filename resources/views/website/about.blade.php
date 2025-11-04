@extends('master')
@section('content')
@php
$isHourly = session('service_type') === 'hourlyHire';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="point-to-point-url" content="{{ url('/booking/point-to-point') }}">
@if(!session('pickup_location') && !session('dropoff_location'))
@include('partials.banner', ['title' => "About Us – Dallas Black Cars Limo Service"])
@endif
<div class="bottom-banner" style="{{ session('pickup_location') && session('dropoff_location') ? 'background-image: none' : '' }}">
  <div class="row">
    <div class="col-sm-12 back-container">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-sm-7 bottom-banner-inside banner-hidden-mobile" bis_skin_checked="1" id="hide_on_map" style="padding-top: 65px; {{ session('pickup_location') && session('dropoff_location') ? 'display: none' : '' }}">
            <div class="bottom-banner-text" bis_skin_checked="1">
              <h1>About Us – Dallas Black Cars Limo Service</h1>
              <p>
                <!-- Add About Text here -->
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
          <h2>About Us – Dallas Black Cars Limo Service</h2>
          <p>
            <!-- Add About Text here -->
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

<div id="bottomServices-defcitiy icon-h-page airport-pages-icon">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 text-center">
        <div class="pz-bottom-servicei">
          <span class="serviceImage1">
            <img
              src="/img/booking.webp"
              width="20"
              height="20"
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
              width="20"
              height="20"
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
              width="20"
              height="20"
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

<section class="about-uss">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pt-chauffeur-1">
          <img
            src="/img/about-dallas-black-cars-limo-service.webp"
            srcset="
                  /img/about-dallas-black-cars-limo-service-202x116.webp 202w,
                  /img/about-dallas-black-cars-limo-service.webp         403w
                "
            sizes="(max-width: 575px) 100vw, (max-width: 991px) 50vw, 33vw"
            alt="concerts and sporting events"
            width="403"
            height="233"
            loading="lazy" />
        </div>
      </div>

      <div class="col-md-8">
        <div class="pt-section-title-box">
          <h2>Who We Are</h2>

          <p class="pt-section-description text-gc">
            At Dallas Black Cars Limo Service, we redefine luxury travel
            across the Dallas–Fort Worth Metroplex. Based in Dallas, TX, we
            provide
            <a
              href="https://dallasblackcarslimoservice.com/"
              class="internal-links">premium black car service</a>, executive transportation, and private limo rides to clients
            throughout DFW, Frisco, Plano, Las Colinas, Love Field, and
            beyond.
          </p>

          <p>
            Whether you're traveling for business, heading to a special
            event, or need
            <a
              href="/services/dallas-airport-transfers/"
              class="internal-links">reliable airport transfer</a>, our team is committed to delivering first-class service
            that’s always on time, every time.
          </p>
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
          <h5 class="pt-section-title">Our Mission</h5>
          <p class="pt-section-description">
            Driven by Excellence. Designed for You.
          </p>

          <p class="pt-section-description">
            We believe your ride should be more than just transportation—it
            should be part of the experience. That’s why our mission is to
            combine luxury, safety, and reliability in every mile we drive.
          </p>
          <p class="pt-section-description">
            From
            <a
              href="/services/dallas-corporate-transportation/"
              class="internal-links-w">corporate executives</a>
            to wedding parties, from city-to-city trips to
            <a
              href="/airport/car-service-dallas-fort-worth-international-airport/"
              class="internal-links-w">DFW Airport transfers</a>, we’re trusted by clients who expect more—and get it.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pt-chauffeur-1">
          <img
            src="/img/sprinter-van-rental-dallas.webp"
            srcset="
                  /img/sprinter-van-rental-dallas-202x116.webp 202w,
                  /img/sprinter-van-rental-dallas.webp         522w
                "
            sizes="(max-width: 575px) 100vw, (max-width: 991px) 50vw, 33vw"
            alt="Reliable black car service near Dallas"
            width="522"
            height="564"
            loading="lazy" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about-uss black-sec-clr btom">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="pt-chauffeur-1">
          <img
            src="/images/img/business-travel-car-service-dallas.webp"
            srcset="
                  /images/img/business-travel-car-service-dallas-202x116.webp 202w,
                  /images/img/business-travel-car-service-dallas.webp         403w
                "
            sizes="(max-width: 575px) 100vw, (max-width: 991px) 50vw, 33vw"
            alt="concerts and sporting events"
            width="403"
            height="233"
            loading="lazy" />
        </div>
      </div>

      <div class="col-md-8">
        <h2>Why Choose Dallas Black Cars Limo Service?</h2>

        <p class="section-description">
          We’re not just another limo company in Dallas—we’re the gold
          standard for luxury transportation in Texas. Here’s what makes us
          different:
        </p>

        <article>
          <h3>Local Expertise</h3>
          <p>Serving all of Dallas–Fort Worth, including:</p>
          <ul>
            <li>DFW Airport</li>
            <li>
              <a
                class="internal-links"
                href="/airport/dallas-love-field-black-car-service/">Dallas Love Field</a>
            </li>
            <li>Downtown Dallas</li>
            <li>
              <a
                class="internal-links"
                href="/locations/black-car-service-frisco-texas/">Frisco’s The Star</a>
            </li>
            <li>Plano Legacy West</li>
            <li>AT&T Stadium in Arlington</li>
          </ul>
        </article>

        <article>
          <h3>Diverse Luxury Fleet</h3>
          <p>Choose from:</p>
          <ul>
            <li>Executive Sedans</li>
            <li>Black SUVs (Suburban, Escalade)</li>
            <li>
              <a
                class="internal-links"
                href="/services/luxury-van-rental-dallas-texas/">Mercedes Sprinter Vans</a>
            </li>
            <li>Mini Buses & Motor Coaches for group travel</li>
          </ul>
        </article>

        <article>
          <h3>City-to-City Rides</h3>
          <p>
            We offer long-distance car service from Dallas to Austin,
            Houston, San Antonio, Waco, Tyler, and more—ideal for corporate
            travel, weekend escapes, and special events.
          </p>
        </article>

        <article>
          <h3>24/7 Availability</h3>
          <p>
            We’re here when you need us—day or night. We serve private FBOs,
            late-night pickups, and early morning departures.
          </p>
        </article>

        <article>
          <h3>On-Time Guarantee</h3>
          <p>
            We track flights, traffic, and real-time routes to ensure you're
            never left waiting.
          </p>
        </article>
      </div>
    </div>
  </div>
</section>

<div class="cta cta-ddc-nones bottom-button-vtb-c">
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>

      <div class="col-md-10">
        <h5>Going to the airport, a business meeting, or the big game?</h5>

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

<section class="about-us city-pages special-w">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="pt-section-title-box">
          <h5 class="pt-section-title">Safety. Style. Service.</h5>

          <p class="pt-section-description">
            Your peace of mind is our top priority. All drivers undergo:
          </p>

          <ul>
            <li>Background checks</li>
            <li>Defensive driving certification</li>
            <li>Regular customer service training</li>
          </ul>

          <p class="pt-section-description">
            Our vehicles are maintained to the highest standards, detailed
            daily, and equipped with the latest in safety tech and luxury
            comfort.
          </p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="pt-chauffeur-1">
          <img
            src="/img/luxury-van-rental-dallas-tx.webp"
            srcset="
                  /img/luxury-van-rental-dallas-tx-202x116.webp 202w,
                  /img/luxury-van-rental-dallas-tx.webp         522w
                "
            sizes="(max-width: 575px) 100vw, (max-width: 991px) 50vw, 33vw"
            alt="Reliable black car service near Dallas"
            width="522"
            height="564"
            loading="lazy"
            fetchpriority="high" />
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid ait">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="btom">
          <div class="btom-bottom">
            <h2>Our Story</h2>
          </div>

          <p>
            Founded with a single vehicle and a simple idea—deliver luxury
            service that never compromises on class or punctuality—Dallas
            Black Cars Limo Service has grown into one of the most respected
            transportation providers in the region. Today, our team consists
            of veteran
            <a
              href="/services/chauffeur-service-dallas-texas/"
              class="internal-links">chauffeurs</a>, hospitality-trained professionals, and dedicated support
            staff who put your comfort first.
          </p>

          <p>We’ve served:</p>
          <ul>
            <li>Corporate executives from Fortune 500 companies</li>
            <li>VIPs and entertainers</li>
            <li>Wedding parties and private events</li>
            <li>
              Travelers needing stress-free airport and hotel transfers
            </li>
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
                        Exceptional experience from Love Field to Legacy
                        West in Plano. Our chauffeur was early, the Cadillac
                        Escalade was spotless, and the entire process was
                        seamless.
                      </p>
                      <p>
                        <bold>— Michelle R.</bold> Highland Park, TX
                      </p>
                    </div>
                  </div>

                  <div
                    class="slide tns-item"
                    aria-hidden="true"
                    tabindex="-1">
                    <div class="slide__item">
                      <p>
                        We used their Sprinter Van for a wedding party in
                        Frisco, and it couldn’t have gone smoother. The
                        chauffeur was courteous, and the ride was luxurious.
                        Highly recommend!
                      </p>
                      <p>
                        <bold>— Anthony D.</bold> University Park, TX
                      </p>
                    </div>
                  </div>

                  <div
                    class="slide tns-item"
                    aria-hidden="true"
                    tabindex="-1">
                    <div class="slide__item">
                      <p>
                        I booked a private transfer to Houston last minute.
                        The response time, professionalism, and comfort
                        level exceeded my expectations.
                      </p>
                      <p>
                        <bold>— David B.</bold> Arlington, TX
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
