@extends('master')

@section('content')
    <section class="d-md-none">
        <div class="ah-container">
            <div class="search-form-mobile">
                @include('partials.search', ['id_suffix' => '_mobile'])
            </div>
        </div>
    </section>

        <section class="pb-40 luxury-cars-section bg-gray pb-sm-60 py-md-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11 col-xl-10 text-md-center mb-15 mb-sm-25 mb-md-30 mb-lg-40">
                        <h2 class="mb-10 text-center h2 fw-bold">Executive Fleet for <span class="theme-color br-css-tt">Comfort and Privacy</span></h2>
                        <p class="mb-0 font-md">Our executive fleet is designed to support corporate transportation in Dallas where professionalism, comfort, and discretion matter. We provide premium black car and chauffeur services for airport transfers, corporate meetings, executive travel, and <a href="/services/luxury-mercedes-sprinter-service-dallas-texas/"><b>group transportation across the Dallas–Fort Worth</b></a> area. Each vehicle is selected to meet different business travel needs—whether it’s an individual executive heading to a meeting or a corporate team traveling together on a fixed schedule.</p>
                    </div>
                </div>
                <div class="row luxury-cars-item-holder justify-content-center d-none d-md-flex">
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="mx-auto text-center luxury-cars-item">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="{{asset('assets/new_theme/img/Sedan.webp')}}" alt="Black car service Dallas luxury sedan"
                                    class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="mb-3 fw-semibold h6">Premier Sadan</h3>
                            <p class="mb-2 font-base">Mercedes S550, BMW 750 or similar</p>
                            <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="PeopleIcon">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                        </path>
                                    </svg>
                                    max 3
                                </li>
                                <li class="px-2"></li>
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="LuggageIcon">
                                        <path
                                            d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                        </path>
                                    </svg>
                                    max 3
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="mx-auto text-center luxury-cars-item">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="../../assets/suv.webp" alt="Luxury SUV black car service Dallas"
                                    class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="mb-3 fw-semibold h6">Premier SUV</h3>
                            <p class="mb-2 font-base">Chevrolet Suburban or similar</p>
                            <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="PeopleIcon">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                        </path>
                                    </svg>
                                    max 6
                                </li>
                                <li class="px-2"></li>
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="LuggageIcon">
                                        <path
                                            d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                        </path>
                                    </svg>
                                    max 6
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="mx-auto text-center luxury-cars-item">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="../../assets/luxury-suv.webp" alt="Premium SUV black car service Dallas"
                                    class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="mb-3 fw-semibold h6">Luxury SUV</h3>
                            <p class="mb-2 font-base">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                            <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="PeopleIcon">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                        </path>
                                    </svg>
                                    max 6
                                </li>
                                <li class="px-2"></li>
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="LuggageIcon">
                                        <path
                                            d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                        </path>
                                    </svg>
                                    max 6
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="mx-auto text-center luxury-cars-item">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="../../assets/sprinter.webp" alt="Black SUV chauffeur service in Dallas"
                                    class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="mb-3 fw-semibold h6">Busniess Sprinter</h3>
                            <p class="mb-2 font-base">Mercedes benz Sprinter Van or similar</p>
                            <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="PeopleIcon">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                        </path>
                                    </svg>
                                    max 12
                                </li>
                                <li class="px-2"></li>
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="LuggageIcon">
                                        <path
                                            d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                        </path>
                                    </svg>
                                    max 30
                                </li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-12 col-lg-3 px-30 px-sm-15">
                        <article class="mx-auto text-center luxury-cars-item">
                            <div class="img-holder mb-15">
                                <img loading="lazy" decoding="async" src="../../assets/mini-bus.webp" alt="Spacious black SUV for Dallas black car service"
                                    class="img-fluid" width="750" height="410">
                            </div>
                            <h3 class="mb-3 fw-semibold h6">Mini Bus</h3>
                            <p class="mb-2 font-base">24-Seater Mini Bus</p>
                            <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="PeopleIcon">
                                        <path
                                            d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                        </path>
                                    </svg>
                                    max 24
                                </li>
                                <li class="px-2"></li>
                                <li class="gap-2 d-flex align-items-center">
                                    <svg width="20" height="20" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                                        data-testid="LuggageIcon">
                                        <path
                                            d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                        </path>
                                    </svg>
                                    max 20
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="row d-md-none">
                    <div class="col-12">
                        
                        
                        <div class="luxury-cars-slider-holder">
                            <div>
                                <article class="mx-auto text-center luxury-cars-slider-item">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="../../assets/Sedan.webp" alt="Black car service Dallas luxury sedan"
                                            class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="mb-2 fw-semibold h5">Premier Sadan</h3>
                                    <p class="mb-2 font-base">Mercedes S550, BMW 750 or similar</p>
                                    <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path
                                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                                </path>
                                            </svg>
                                            max 3
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path
                                                    d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                                </path>
                                            </svg>
                                            max 3
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div>
                                <article class="mx-auto text-center luxury-cars-slider-item">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="../../assets/suv.webp" alt="Luxury SUV black car service Dallas"
                                            class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="mb-2 fw-semibold h5">Premier SUV</h3>
                                    <p class="mb-2 font-base">Chevrolet Suburban or similar</p>
                                    <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path
                                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                                </path>
                                            </svg>
                                            max 6
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path
                                                    d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                                </path>
                                            </svg>
                                            max 6
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div>
                                <article class="mx-auto text-center luxury-cars-slider-item">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="../../assets/luxury-suv.webp"
                                            alt="Premium SUV black car service Dallas" class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="mb-2 fw-semibold h5">Luxury SUV</h3>
                                    <p class="mb-2 font-base">Cadillac Escalade ESV, Lincoln Navigator or similar</p>
                                    <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path
                                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                                </path>
                                            </svg>
                                            max 6
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path
                                                    d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                                </path>
                                            </svg>
                                            max 6
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            
                            <div>
                                <article class="mx-auto text-center luxury-cars-slider-item">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="../../assets/sprinter.webp"
                                            alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                                    </div>
                                    <h3 class="mb-2 fw-semibold h5">Busniess Sprinter</h3>
                                    <p class="mb-2 font-base">Mercedes benz Sprinter Van or similar</p>
                                    <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path
                                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                                </path>
                                            </svg>
                                            max 12
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path
                                                    d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                                </path>
                                            </svg>
                                            max 20
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            
                            
                            
                            
                                  <div>
                                <article class="mx-auto text-center luxury-cars-slider-item">
                                    <div class="img-holder mb-15">
                                        <img loading="lazy" decoding="async" src="../../assets/mini-bus.webp"
                                            alt="Black SUV chauffeur service in Dallas" class="img-fluid" width="750" height="410">
                                    </div>
                                     <h3 class="mb-3 fw-semibold h6">Mini Bus</h3>
                            <p class="mb-2 font-base">24-Seater Mini Bus</p>
                                    <ul class="pl-0 mb-0 list-unstyled d-flex justify-content-center">
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="PeopleIcon">
                                                <path
                                                    d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5">
                                                </path>
                                            </svg>
                                            max 24
                                        </li>
                                        <li class="px-2"></li>
                                        <li class="gap-2 d-flex align-items-center">
                                            <svg width="20" height="20" focusable="false" aria-hidden="true"
                                                viewBox="0 0 24 24" data-testid="LuggageIcon">
                                                <path
                                                    d="M17 6h-2V3c0-.55-.45-1-1-1h-4c-.55 0-1 .45-1 1v3H7c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2 0 .55.45 1 1 1s1-.45 1-1h6c0 .55.45 1 1 1s1-.45 1-1c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2M9.5 18H8V9h1.5zm3.25 0h-1.5V9h1.5zm.75-12h-3V3.5h3zM16 18h-1.5V9H16z">
                                                </path>
                                            </svg>
                                            max 20
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            
                            
                        
                            
                            
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </section>
     
 <section class="pt-40 pb-20 detail-content-section">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- mb-md-20 mb-lg-30 -->
                    <div class="col-12 col-lg-11 col-xl-10 text-md-center">
                        <!-- mb-15 mb-sm-20 mb-lg-30 -->
                        <h2 class="mb-10 text-center h2 fw-bold">Why Choose <span class="theme-color br-css-tt"> Dallas Black Limo
                                Service</span></h2>
                        <p class="font-md justify-mobile">Executives trust us for trained chauffeurs, on-time airport transfers, and consistently reliable black car service across Dallas.</p>
                    </div>
                </div>
                <div class="py-20 row">
                    <div class="col-12 col-md-8 pr-xl-50">
                        <h3 class="h5 fw-semibold">Why Executives Choose Our Airport Transfer Service</h3>
                        <p class="font-md justify-mobile">Our <a href="/dfw-car-service/"><b>airport transfers</b></a> are built for real flight conditions, not assumptions. Our Dallas airport car service follows how DFW and Love Field actually operate, with every ride monitored from flight tracking to curbside pickup.</p>
                        <ul class="list-unstyled custom-unorder-list">
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Real-Time Flight Tracking:</strong>  Pickup times adjust automatically for early arrivals, delays, and gate changes, so you do not need to make calls or send updates.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Airport Pickup Matched to Your Arrival Terminal:</strong>  Chauffeurs are dispatched to the correct terminal and follow airport pickup rules to reduce walking distance and curbside wait time.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Monitored Airport Transfers:</strong> Dispatch oversees every ride in real time, tracking traffic, arrival timing, and route conditions from start to finish.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Airport Departures Planned to Avoid Missed Flights:</strong> Drop-offs are scheduled with extra time for traffic and terminal congestion to help prevent missed flights.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Professional Chauffeurs Trained for Airport Transfers:</strong> Experienced drivers with airport knowledge handle every trip. The same standards apply every time, with no random drivers or last-minute replacements.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0 justify-mobile">
                                    <strong class="br-css-tts">Backup Support for Time-Sensitive Travel:</strong> Backup coverage is ready to protect your schedule if a vehicle issue or timing problem comes up.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder ms-md-auto">
                            <img loading="lazy" decoding="async" src="../../assets/why-choose-dallas-black-limo-service.webp" width="406" height="233" class="img-fluid" alt="Uniformed chauffeur for executive travel Dallas">
                        </div>
                    </div>
                </div>
             </div>
            <div class="bg-gray py-30 d-md-none">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-12">
                            <div class="fifa-image-holder">
                                <img loading="lazy" decoding="async" src="../../assets/fifa-image.jpg" class="img-fluid" alt="FIFA Image" width="380" height="100%">
                            </div>
                            <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World
                                Cup 2026
                                page</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section> 
        <section class="bg-gray pt-50 pb-25 pb-md-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                        <article class="text-center">
                            <span class="mb-10 icon-holder d-block">
                                <img  loading="lazy"
decoding="async" src="../../assets/icon-03.svg" alt="Booking" class="img-fluid">
                            </span>
                            <h3 class="h6 fw-semibold">Book Online or Call</h3>
                            <p class="font-md">Use our form or call to schedule corporate transportation.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                        <article class="text-center">
                            <span class="mb-10 icon-holder d-block">
                                <img  loading="lazy"
decoding="async" src="../../assets/icon-02.svg" alt="Confirmation" class="img-fluid">
                            </span>
                            <h3 class="h6 fw-semibold">Get Instant Confirmation</h3>
                            <p class="font-md">Receive trip and chauffeur details by text or email.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30">
                        <article class="text-center">
                            <span class="mb-10 icon-holder d-block">
                                <img  loading="lazy"
decoding="async" src="../../assets/icon-01.svg" alt="Driver" class="img-fluid">
                            </span>
                            <h3 class="h6 fw-semibold">Meet Your Chauffeur</h3>
                            <p class="font-md">On-time, professional, and prepared for business travel.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    
    <section class="py-20 detail-content-section">
            <div class="container">
                <div class="py-20 row">
                    <div class="col-12 col-md-8 pr-xl-50">
                        <h3 class="h4 fw-semibold">Reliable Corporate Transportation Services in Dallas</h3>
                        <p class="font-md">
                         <a href="/services/private-car-service-dallas/"><b>Reliable corporate transportation in Dallas</b></a> requires more than just a vehicle—it requires precision, accountability, and consistency. Our corporate transportation services are designed to support executive travel, business meetings, and professional appointments across Dallas–Fort Worth with structured planning and dependable execution. From early-morning airport pickups to multi-stop business schedules, every trip is managed with attention to timing and route efficiency.

We work closely with corporate clients, executive assistants, and business coordinators to ensure smooth transportation without last-minute adjustments or delays. Our service is ideal for daily business travel, client meetings, corporate events, and airport transfers to DFW Airport and Dallas Love Field. With professionally chauffeured vehicles, transparent pricing, and 24/7 availability, businesses rely on our <a href="/services/chauffeur-service-dallas/"><b>Dallas corporate transportation service</b></a> to maintain schedules, reduce travel stress, and present a polished, professional image at every pickup and drop-off.
</p>
                   
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder ms-md-auto">
                            <img loading="lazy" decoding="async" src="../../assets/dfw-and-love-field-airport-transportation.webp" width="407" height="210" class="img-fluid" alt="Luxury black car at Dallas Love Field Airport">
                        </div>
                    </div>
                </div>
                <div class="flex-row-reverse py-20 row">
                    <div class="mb-20 col-12 col-md-8 pr-xl-50">
                        <h3 class="h4 fw-semibold">Executive Chauffeur Service for Business and Airport Travel</h3>
                        <p class="font-md">
Our <a href="/services/chauffeur-service-dallas/"><b>executive chauffeur service </b></a>is tailored for business professionals who value punctuality, discretion, and comfort. Serving Dallas and surrounding business districts, we provide chauffeur-driven transportation for corporate meetings, airport transfers, conferences, and executive events. Each trip is handled by trained chauffeurs who understand professional conduct, confidentiality, and time-sensitive travel requirements.

We monitor traffic patterns and flight schedules to ensure timely arrivals and smooth departures, whether traveling to corporate offices, hotels, event venues, or major airports. Our executive service is commonly used by company leadership, visiting executives, and assistant-booked travelers who require dependable transportation without disruption. By combining luxury vehicles, experienced chauffeurs, and organized scheduling, our <a href="https://www.dallasblacklimoservice.com/"><b>executive chauffeur service in Dallas</b></a> supports productive business travel while maintaining privacy, comfort, and consistent service standards from start to finish. 
                   
                   
                        </p>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder">
                            <img loading="lazy" decoding="async" src="../../assets/executive-black-car-service-for-business-meetings.webp" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                        </div>
                    </div>
                </div>
                <div class="py-20 row d-none d-md-flex">
                    <div class="mb-20 col-12 col-md-8 pr-xl-50">
                        <h3 class="h4 fw-semibold">Corporate Black Car and Group Transportation Solutions</h3>
                        <p class="font-md">
                           Our <a href="/services/luxury-mercedes-sprinter-service-dallas-texas/"><b>corporate black car and group transportation solutions</b></a> provide flexible options for both individual executives and corporate teams. Whether transporting one executive or coordinating group travel for meetings, conferences, or corporate events, we offer professionally managed vehicles suited to every business need. Executive sedans are ideal for individual travel, while SUVs and Sprinter vans accommodate larger groups traveling together on shared schedules.

By using a single, coordinated transportation provider, businesses avoid the challenges of managing multiple vehicles or rideshare services. Our corporate group transportation services in Dallas are frequently used for airport transfers, company events, roadshows, and city-to-city business travel. Every vehicle is commercially insured, well maintained, and professionally chauffeured to ensure a quiet, comfortable experience. With clear communication, structured scheduling, and dependable execution, our corporate black car service delivers organized transportation solutions that support efficient and professional business operations.
</p>
                    </div>
                    <div class="col-12 col-md-4 h-100">
                        <div class="img-holder">
                            <img loading="lazy" decoding="async" src="../../assets/luxury-black-car-airport-transfer-will-rogers-world-airport.webp" width="407" height="210" class="img-fluid" alt="Professional chauffeur for black car service Dallas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray py-30 d-md-none">
                <div class="container">
                    <div class="row">
                        <div class="text-center col-12">
                            <h4 class="mb-20 h4 fw-semibold">
                                <span class="theme-color">Reserve Your Executive Ride </span> <br>in Dallas Fort Worth
                            </h4>
                            <a href="/booking" class="btn btn-primary w-100 fw-medium text-capitalize">Book Corporate Chauffeur Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="bg-gray pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-45 pt-lg-80 pb-lg-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-12 col-lg-11 col-xl-10 mb-25 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-25">Where We Serve</h2>
                        <p class="font-md">Providing professional transportation services across the Dallas–Fort Worth Metroplex. Throughout the region our service covers:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="../../assets/image-05.jpg" alt="" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Cities &amp; Regional Communities</a></h3>
                            <p class="font-base">Service is available in Dallas, Fort Worth, Plano, Frisco, McKinney, Allen, Irving, Arlington, Grapevine, Southlake, Addison, and surrounding areas across DFW.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="../../assets/image-06.jpg" alt="" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Airports &amp; Aviation Access</a></h3>
                            <p class="font-base">We serve DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport, and private aviation terminals.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="../../assets/image-07.jpg" alt="" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Corporate &amp; Lifestyle Zones</a></h3>
                            <p class="font-base">Coverage includes Downtown Dallas, Uptown, Las Colinas, Legacy West, The Star (Frisco), Preston Hollow, Highland Park, and major business districts.</p>
                        </article>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                        <article class="text-center we-serve-item mb-30 mb-md-35">
                            <a href="" class="mx-auto img-holder mb-15 d-block">
                                <img loading="lazy" decoding="async" src="../../assets/image-08.jpg" alt="" class="img-fluid">
                            </a>
                            <h3 class="mb-10 h6 fw-semibold"><a href="">Sports &amp; Entertainment Venues</a></h3>
                            <p class="font-base">Transportation is available for AT&amp;T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, and Toyota Music Factory.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-50 pt-sm-60 pt-md-70 pt-lg-80 pb-30 pb-sm-40 pb-md-50 pb-lg-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="text-center col-12 col-lg-11 col-xl-10 mb-15 mb-md-20 mb-lg-30">
                        <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Chosen By People At <span class="theme-color">Top
                                Companies</span></h2>
                        <p class="font-md">Our outstanding success is your ultimate trust in us. Professionals at
                            world`s leading brands prefer Prestige Ride as their premium ride-hailing partner.</p>
                    </div>
                    <div class="col-12">
                        <div class="companies-logo-marquee">
                            <div class="companies-logo-track">
                                @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                                <div class="py-10 px-15">
                                    <span class="img-holder">
                                        <img loading="lazy" width="90" height="60" decoding="async"
                                            src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="Logo" class="img-fluid">
                                    </span>
                                </div>
                                @endforeach
                                @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $i)
                                <div class="py-10 px-15">
                                    <span class="img-holder">
                                        <img loading="lazy" width="90" height="60" decoding="async"
                                            src="{{ asset('assets/new_theme/img/logo-0' . $i . '.webp') }}" alt="" class="img-fluid">
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="py-40 testimonial-section bg-blue">
            <div class="container">
                <div class="row">
                    <!-- mb-10 mb-md-20 -->
                    <div class="mb-10 text-center col-12">
                        <h2 class="text-white h2 fw-bold">Trusted by Corporate Teams and Executive Assistants</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-slider slick-initialized slick-slider">
                            <div class="slick-list draggable" tabindex="0"><div class="slick-track" style="opacity: 1; width: 10280px; transform: translate3d(-3855px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                          It was my first time in Dallas, and I booked their service for a game at AT&amp;T Stadium. The ride was comfortable, and getting around was completely stress-free.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- David Ramirez, Amelia C.</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Philadelphia, PA</span>
                                </div>
                            </div><div class="slick-slide" data-slick-index="0" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                           As an executive assistant, I need airport transportation frequently. Flights are tracked and drivers arrive on time always, making them my first choice.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block"> - Emily Carter, Executive Assistant</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                </div>
                            </div><div class="slick-slide" data-slick-index="1" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                            We use them every week for Dallas area corporate travel, including airport runs. Same standards every ride no surprises, no follow-ups.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block"> - James Sasser, Managing Partner</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Fort Worth, TX</span>
                                </div>
                            </div><div class="slick-slide slick-active" data-slick-index="2" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                            Early departures or delayed arrivals they adjusts without calls or confusion, which is why we trust them for executive transportation in Dallas.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- David Ramirez, VP of Operations</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Plano, TX</span>
                                </div>
                            </div><div class="slick-slide" data-slick-index="3" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                           We booked a car from DAL to Plano for a client visit. The pickup was on time, the driver was professional, and everything went exactly as scheduled.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- Michael Turner, Corporate Client</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                </div>
                            </div><div class="slick-slide" data-slick-index="4" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                        We booked a car for a family ride with our 16 month old. The driver was professional, and the ride felt safe and comfortable throughout.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- Rachel Moore</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">New York City, NY</span>
                                </div>
                            </div><div class="slick-slide" data-slick-index="5" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                          It was my first time in Dallas, and I booked their service for a game at AT&amp;T Stadium. The ride was comfortable, and getting around was completely stress-free.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block">- David Ramirez, Amelia C.</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Philadelphia, PA</span>
                                </div>
                            </div><div class="slick-slide slick-cloned" data-slick-index="6" id="" style="width: 1285px;">
                                <div class="testimonial-slider-item">
                                    <blockquote class="mb-20 mb-md-30">
                                        <!-- <span class="quote">â€œ</span> -->
                                        <p class="text-center font-lg fw-medium">
                                           As an executive assistant, I need airport transportation frequently. Flights are tracked and drivers arrive on time always, making them my first choice.
                                        </p>
                                    </blockquote>
                                    <cite class="text-center text-white name fw-semibold font-lg d-block"> - Emily Carter, Executive Assistant</cite>
                                    <span class="text-center location fw-semibold font-lg d-block">Dallas, TX</span>
                                </div>
                            </div></div></div>
                            
                            
                          
                            
                            
                            
                            
                              
                            
                            
                              
                            
                            
                              
                            
                        <ul class="slick-dots" style=""><li class=""><button type="button" data-role="none">1</button></li><li class=""><button type="button" data-role="none">2</button></li><li class="slick-active"><button type="button" data-role="none">3</button></li><li><button type="button" data-role="none">4</button></li><li><button type="button" data-role="none">5</button></li><li><button type="button" data-role="none">6</button></li></ul></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-gray py-30 d-md-none">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12">
                        <div class="fifa-image-holder">
                            <img  loading="lazy"
decoding="async" src="../../assets/fifa-image.png" class="img-fluid" alt="FIFA Image">
                        </div>
                        <a href="" class="btn btn-primary w-100 fw-medium text-capitalize">Visit our FIFA World Cup 2026
                            page</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="faqs-section py-50 py-sm-60 py-md-70 py-lg-80">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12 mb-25 mb-md-30 mb-lg-40">
                        <h2 class="h2 fw-bold">Frequently Asked Questions</h2>
                    </div>
                    <div class="col-12 col-md-6 accordion-holder" id="accordion01">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion01-headingOne">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseOne"
                                    aria-expanded="false" aria-controls="accordion01-collapseOne">
                                    What is included in your corporate transportation service?
                                </button>
                            </h2>
                            <div id="accordion01-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="accordion01-headingOne">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Our corporate transportation service includes professional drivers, well-maintained vehicles, and reliable scheduling to support daily business and executive travel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion01-headingTwo">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseTwo"
                                    aria-expanded="false" aria-controls="accordion01-collapseTwo">
                                    Is this service suitable for executives and business teams?
                                </button>
                            </h2>
                            <div id="accordion01-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="accordion01-headingTwo">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes, the service is designed for executives, management teams, and employees who need dependable transportation for meetings, events, and daily business travel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion01-headingThree">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseThree"
                                    aria-expanded="false" aria-controls="accordion01-collapseThree">
                                    Can corporate transportation be used for airport travel?
                                </button>
                            </h2>
                            <div id="accordion01-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="accordion01-headingThree">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes, corporate transportation can be arranged for airport pickup and drop-off as part of business travel planning.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion01-headingFour">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion01-collapseFour"
                                    aria-expanded="false" aria-controls="accordion01-collapseFour">
                                    Do you offer hourly corporate transportation?
                                </button>
                            </h2>
                            <div id="accordion01-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="accordion01-headingFour">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes, corporate transportation is available on an hourly basis or for point-to-point trips, depending on your company’s needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 accordion-holder" id="accordion02">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion02-headingOne">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion02-collapseOne"
                                    aria-expanded="false" aria-controls="accordion02-collapseOne">
                                    What types of vehicles are available for corporate travel?
                                </button>
                            </h2>
                            <div id="accordion02-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="accordion02-headingOne">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">We offer business sedans, SUVs, executive sprinters, and larger vehicles when required for group or team transportation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion02-headingTwo">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion02-collapseTwo"
                                    aria-expanded="false" aria-controls="accordion02-collapseTwo">
                                    Is the service available outside normal business hours?
                                </button>
                            </h2>
                            <div id="accordion02-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="accordion02-headingTwo">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Yes, corporate transportation is available 24/7 to support early meetings, late events, and extended work schedules.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="accordion02-headingThree">
                                <button
                                    class="px-0 mb-0 h6 accordion-button py-15 py-sm-20 py-lg-25 fw-semibold collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#accordion02-collapseThree"
                                    aria-expanded="false" aria-controls="accordion02-collapseThree">
                                    How far in advance should corporate transportation be booked?
                                </button>
                            </h2>
                            <div id="accordion02-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="accordion02-headingThree">
                                <div class="pt-0 pr-0 pl-0 accordion-body">
                                    <p class="font-base">Advance booking is recommended to ensure availability, especially for recurring travel or larger corporate requirements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
           <div class="bg-gray py-30 d-md-none">
            <div class="container">
                <div class="row">
                    <div class="text-center col-12">
                        <h3 class="mb-20 h4 fw-semibold">
                           Arrive With Confidence <br><span class="theme-color">Book Your Chauffeur Now</span>
                        </h3>
                        <a href="/booking/" class="btn btn-primary w-100 fw-medium text-capitalize">Book Your Chauffeur Today</a>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="bg-gray py-30">
            <div class="container">
                <div class="flex-row-reverse row">
                    <div class="col-12 col-md-5 mb-15 mb-md-0">
                        <ul
                            class="gap-4 mb-0 list-unstyled footer-social-list d-flex justify-content-center justify-content-md-end">
                            
                                <li>
                                <a href="">
                                    <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                        aria-label="Facebook logo" width="40" height="40" viewBox="0 0 24 24">
                                        <title>Facebook logo</title>
                                        <path d="M17 2v4h-2c-.7 0-1 .8-1 1.5V10h3v4h-3v8h-4v-8H7v-4h3V6a4 4 0 014-4h3z"
                                            fill="#97999E"></path>
                                    </svg>
                                </a>
                            </li>
                            
                       
                            <li>
                                <a href="">
                                    <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                        aria-label="Instagram logo" width="40" height="40" viewBox="0 0 24 24">
                                        <title>Instagram logo</title>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4c0 3.2-2.6 5.8-5.8 5.8H7.8A5.8 5.8 0 012 16.2V7.8C2 4.6 4.6 2 7.8 2zm-.2 2A3.6 3.6 0 004 7.6v8.8A3.6 3.6 0 007.6 20h8.8a3.6 3.6 0 003.6-3.6V7.6A3.6 3.6 0 0016.4 4H7.6zm10.9 2.75a1.25 1.25 0 10-2.5 0 1.25 1.25 0 002.5 0zM12 7a5 5 0 110 10 5 5 0 010-10zm-3 5a3 3 0 116 0 3 3 0 01-6 0z"
                                            fill="#97999E"></path>
                                    </svg>
                                </a>
                            </li>
                            
                            
                         <li>
                                <a href="">
                                    <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
                                        aria-label="YouTube logo" width="40" height="40" viewBox="0 0 24 24">
                                        <title>YouTube logo</title>
                                        <path
                                            d="M21.58 7.2a2.5 2.5 0 00-1.76-1.77C18.26 5 12 5 12 5s-6.26 0-7.83.41c-.84.23-1.53.92-1.76 1.78C2 8.76 2 12 2 12s0 3.26.41 4.8c.23.87.9 1.54 1.76 1.77C5.76 19 12 19 12 19s6.26 0 7.82-.41a2.5 2.5 0 001.76-1.76c.42-1.57.42-4.81.42-4.81s.01-3.26-.42-4.83zM10 15V9l5.2 3-5.2 3z"
                                            fill="#97999E"></path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.21 2H21L14.01 10.2L22 22H15.99L11.13 15.37L5.5 22H2.74L10.14 13.26L2 2H8.13L12.48 8.09L18.21 2ZM16.34 20.33H18L7.73 3.49H5.94L16.34 20.33Z"
                                            fill="#97999E" />
                                    </svg>
                                </a>
                            </li>
                            
                           <li>
    <a href="">
        <svg class="footer_socialMediaIcon__XNZUm" focusable="false"
            xmlns="http://www.w3.org/2000/svg" fill="none" role="img"
            aria-label="TikTok logo" width="40" height="40" viewBox="0 0 24 24">
            <title>TikTok logo</title>
            <path
                d="M12.75 2h2.02c.15 1.2.84 2.32 1.94 3.04a5.2 5.2 0 002.8.82v2.02a7.1 7.1 0 01-4.74-1.78v7.26a5.37 5.37 0 11-5.37-5.37c.35 0 .7.04 1.03.12v2.2a3.36 3.36 0 00-1.03-.17 3.35 3.35 0 103.35 3.35V2z"
                fill="#97999E"></path>
        </svg>
    </a>
</li>

                        </ul>
                    </div>
                    <div
                        class="gap-2 col-12 col-md-7 d-flex justify-content-center justify-content-md-start align-items-start">
                        <svg class="mt-1" fill="#000000" width="20px" height="20px" viewBox="-4 0 32 32"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                            <path
                                d="M12.649,31.760 C12.463,31.919 12.231,31.999 12.000,31.999 C11.769,31.999 11.537,31.919 11.351,31.760 C10.887,31.365 0.000,21.976 0.000,11.964 C0.000,5.363 5.383,-0.006 12.000,-0.006 C18.617,-0.006 24.000,5.363 24.000,11.964 C24.000,21.976 13.113,31.365 12.649,31.760 ZM12.000,1.989 C6.486,1.989 2.000,6.464 2.000,11.964 C2.000,19.724 9.687,27.493 12.000,29.654 C14.312,27.493 22.000,19.724 22.000,11.964 C22.000,6.464 17.514,1.989 12.000,1.989 ZM12.000,17.991 C8.691,17.991 6.000,15.306 6.000,12.006 C6.000,8.705 8.691,6.021 12.000,6.021 C15.309,6.021 18.000,8.705 18.000,12.006 C18.000,15.306 15.309,17.991 12.000,17.991 ZM12.000,8.016 C9.794,8.016 8.000,9.805 8.000,12.006 C8.000,14.206 9.794,15.996 12.000,15.996 C14.206,15.996 16.000,14.206 16.000,12.006 C16.000,9.805 14.206,8.016 12.000,8.016 Z"
                                fill="#97999E" />
                        </svg>
                        <address class="mb-0 font-md single-line-ellipses">Dallas, Texas, United States, 75001
                        </address>
                    </div>
                </div>
            </div>
        </section>
         
@endsection
