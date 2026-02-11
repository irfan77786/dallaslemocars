@extends('master')
@section('content')
@include('partials.search_form')
<section class="fleet-section py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="text-center col-12 col-xl-10">
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
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Luxury Sedans:</strong>
                        <p class="font-base">Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for
                            effortless driving to the DFW airport, meetings, or any other special event.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Black SUVs:</strong>
                        <p class="font-base">Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide
                            spacious, stylish transportation for groups, corporate travelers, or extra luggage.
                        </p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Executive Sprinter Vans:</strong>
                        <p class="font-base"> Ideal for large gatherings such as meetings and weddings events,
                            our
                            Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious
                            seating.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Mini Bus Luxury Bus (23-27
                            Passengers):</strong>
                        <p class="font-base">Confortable seating & Wi-Fi make our Luxury Mini Buses best for
                            smaller groups, corporate meeting, or <a class="fw-semibold" href="">airport
                                transfers</a>. Comfortably seats 23-27 passengers.</p>
                    </li>
                    <li>
                        <strong class="mb-2 font-lg gray-700 fw-bold d-block">Mini Bus (31-38
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
            <div class="text-center col-12 pt-15">
                <a href="#" class="btn btn-primary">Quick Quote </a>
            </div>
        </div>
    </div>
</section>
<section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Us for <span
                        class="theme-color">Airport Transfers</span></h2>
                <p class="font-base">Traveling to or from the airport should be safe & stress-free. We make sure
                    your journey is smooth, whether you’re catching an early flight or arriving late at night.
                    Our goal is to give you comfort, reliability & peace of mind every time.</p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <ul class="pl-0 custom-unorder-list">
                    <li>
                        <p class="mb-0"><b>Friendly, Professional Greeters:</b> Courteous staff ready to assist
                            with every detail.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Seamless Meet and Greet:</b> We wait for you at the gate or arrival
                            hall with clear signage.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Luggage Assistance:</b> Helping you handle bags with ease from
                            arrival to car pickup.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Fast-Track Guidance:</b> Support with check-in, security & boarding
                            for quicker flow.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>24/7 Availability:</b> No matter the time, we’re ready to welcome
                            you.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Trusted by Families and VIPs:</b> Perfect for first-time flyers,
                            elderly travelers, & executives.</p>
                    </li>
                    <li>
                        <p class="mb-0"><b>Stress-Free Experience:</b> We take care of details so you can relax
                            & enjoy the journey.</p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 h-100">
                <div class="img-holder ms-md-auto">
                    <img src="{{ asset('new_assets/assets/airport-transfer.JPG') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/icon-03.svg') }}" alt="Booking" class="img-fluid">
                    </span>
                    <h3 class="h3 fw-semibold">Book Online or Call</h3>
                    <p class="font-lg">Use our form or call to schedule your ride.</p>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/icon-02.svg') }}" alt="Confirmation" class="img-fluid">
                    </span>
                    <h3 class="h3 fw-semibold">Get Instant Confirmation</h3>
                    <p class="font-lg">Receive driver and trip details via text or email.</p>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/icon-01.svg') }}" alt="Driver" class="img-fluid">
                    </span>
                    <h3 class="h3 fw-semibold">Meet Your Chauffeur</h3>
                    <p class="font-lg">On-time, professional, and ready to assist.</p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="detail-content-section bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Why Choose Our <span class="theme-color"> Black
                        Car Service?</span></h2>
                <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
        </div>
        <div class="py-20 row align-items-center">
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
        <div class="flex-row-reverse py-20 row align-items-center">
            <div class="mb-20 col-12 col-md-6 pr-xl-50">
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
@include('partials.companies_strip')
@include('partials.testimonials')
@include('partials.fifa')
@include('partials.faq')
@endsection
