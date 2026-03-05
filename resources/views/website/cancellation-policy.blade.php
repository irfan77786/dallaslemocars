@extends('master')
@section('content')
<section class="d-md-none">
    <div class="ah-container">
        <div class="search-form-mobile">
            @include('partials.search', ['id_suffix' => '_mobile'])
        </div>
    </div>
</section>

<section class="home-banner-section">
    <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
         style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;"></div>

        <div class="row" style="pointer-events: none;">
            <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                <h1 class="text-white h1 fw-bold mb-15">Cancellation Policy – Black Car Service Dallas</h1>
                <p class="mb-0 text-white font-lg fw-medium">Request Instant Pricing for Black Car, SUV, or Group Travel in DFW.</p>
                <span class="my-2 text-white font-base d-block">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call Now</strong></span>
                <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                    Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1 214-897-8056</a>
                </p>
            </div>
            <div class="d-none col-12 col-md-6 d-md-block" style="pointer-events: auto; position: relative; z-index: 2;">
                <div class="search-form-wrapper-desktop">
                    @include('partials.search', ['id_suffix' => ''])
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row">
            <div class="col-12">
                <p class="font-base">Dallas Black Cars Service strives to provide excellent service while
                    maintaining a clear, fair, and simple cancellation, deposit, and service policy. By booking
                    with Dallas Black Cars Service, you agree to the following terms.</p>
                <ol class="list-unstyled custom-order-list">
                    <li class="h5">
                        <div>
                            <h3 class="h5 fw-medium">General Cancellation Policy</h3>
                            <p>Cancellations must occur during the stated timeframes for each vehicle type.
                                Cancellations outside these periods will result in full charges for the reserved
                                services.</p>
                        </div>
                    </li>
                    <li class="h5">
                        <div>
                            <h3 class="h5 fw-medium">Vehicle-Specific Cancellation Policy</h3>
                        </div>
                    </li>
                    <ol class="list-unstyled custom-order-list">
                        <li class="h6">
                            <div>
                                <h3 class="h6 fw-medium">Sedans and Luxury Sedans</h3>
                                <ul class="list-unstyled custom-unorder-list">
                                    <li class="mb-0">
                                        <p class="mb-0">Cancellation window: At least 24 hours before the
                                            scheduled pickup.</p>
                                    </li>
                                    <li class="mb-0">
                                        <p class="mb-0">Late cancellation: 100% of the booking amount will be
                                            charged.</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="h6">
                            <div>
                                <h3 class="h6 fw-medium">SUVs</h3>
                                <ul class="list-unstyled custom-unorder-list">
                                    <li class="mb-0">
                                        <p class="mb-0">Cancellation window: At least 24 hours before the
                                            scheduled pickup.</p>
                                    </li>
                                    <li class="mb-0">
                                        <p class="mb-0">Late cancellation: 100% of the booking amount will be
                                            charged.</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="h6">
                            <div>
                                <h3 class="h6 fw-medium">Mercedes Sprinters and Luxury Vans</h3>
                                <ul class="list-unstyled custom-unorder-list">
                                    <li class="mb-0">
                                        <p class="mb-0">Cancellation window: At least 72 hours before the scheduled service.</p>
                                    </li>
                                    <li class="mb-0">
                                        <p class="mb-0">Late cancellation: Full charge applies.</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                    <li class="h5">
                        <div>
                            <h3 class="h5 fw-medium">Deposit Policy</h3>
                            <ul class="list-unstyled custom-unorder-list">
                                <li class="mb-0">
                                    <p class="mb-0">Cancellation window: At least 24 hours before the
                                        scheduled pickup.</p>
                                </li>
                                <li class="mb-0">
                                    <p class="mb-0">Late cancellation: 100% of the booking amount will be
                                        charged.</p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="h5">
                        <div>
                            <h3 class="h5 fw-medium">Alcohol and Illegal Substances</h3>
                            <ul class="list-unstyled custom-unorder-list">
                                <li class="mb-0">
                                    <p class="mb-0">Alcohol allowed only for passengers 21 and older.</p>
                                </li>
                                <li class="mb-0">
                                    <p class="mb-0">Illegal substances strictly prohibited. Service will be canceled immediately with no refund and possible legal action.</p>
                                </li>
                                <li class="mb-0">
                                    <p class="mb-0">Smoking is not allowed in any vehicle.</p>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <ol class="list-unstyled custom-order-list">
                        <li class="h6">
                            <div>
                                <h3 class="h6 fw-medium">Sedans and Luxury Sedans</h3>
                                <ul class="list-unstyled custom-unorder-list">
                                    <li class="mb-0">
                                        <p class="mb-0">Cancellation window: At least 24 hours before the
                                            scheduled pickup.</p>
                                    </li>
                                    <li class="mb-0">
                                        <p class="mb-0">Late cancellation: 100% of the booking amount will be
                                            charged.</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="h6">
                            <div>
                                <h3 class="h6 fw-medium">SUVs</h3>
                                <ul class="list-unstyled custom-unorder-list">
                                    <li class="mb-0">
                                        <p class="mb-0">Cancellation window: At least 24 hours before the
                                            scheduled pickup.</p>
                                    </li>
                                    <li class="mb-0">
                                        <p class="mb-0">Late cancellation: 100% of the booking amount will be
                                            charged.</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="h6">
                            <div>
                                <h3 class="h6 fw-medium">Mercedes Sprinters and Luxury Vans</h3>
                                <ul class="list-unstyled custom-unorder-list">
                                    <li class="mb-0">
                                        <p class="mb-0">Cancellation window: At least 72 hours before the scheduled service.</p>
                                    </li>
                                    <li class="mb-0">
                                        <p class="mb-0">Late cancellation: Full charge applies.</p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ol>
                </ol>
            </div>
        </div>
    </div>
</section>
@include('partials.testimonials')
@include('partials.faq')
@endsection
