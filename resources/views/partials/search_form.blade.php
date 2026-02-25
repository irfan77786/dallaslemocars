<section class="home-banner-section">
    <div id="hero-banner-container" class="hero-banner-container py-60 ah-container position-relative py-sm-70 py-md-80 py-lg-100"
            style="z-index: 2; background-image: url('{{ asset('assets/new_theme/img/banner-1.webp') }}'); background-size: cover; background-position: center;">
        <!-- Map Container (Initially hidden, shows up when location is selected) -->
        <div id="map" class="position-absolute w-100 h-100" style="top:0; left:0; z-index: 1; display:none;">
        </div>

        <div class="row" style="pointer-events: none;">
            <div id="home-text-content" class="banner-text-content col-12 col-md-6 d-flex flex-column justify-content-center" style="pointer-events: auto; position: relative; z-index: 0;">
                <h1 class="text-white h1 fw-bold mb-15">Black Car Service Dallas</h1>
                <p class="text-white font-lg fw-medium mb-30">Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                    the 1500s, when an unknown printer tooks,</p>
                <span class="text-white font-base">24/7 Service Available – <strong class="font-lg fw-semibold">Click to Call
                        Now</strong></span>
                <p class="text-white font-base d-flex align-items-center mb-30 mb-md-0">
                    Call: <a href="tel:+12148978056" class="mx-2 fw-bold font-lg theme-color">+1
                        214-897-8056</a>
                </p>
            </div>
            <div class="col-12 col-md-6" style="pointer-events: auto; position: relative; z-index: 2;">
                <!-- Booking Form -->
                <div class="search-form-wrapper-desktop">
                    @include('partials.search', ['id_suffix' => '_form'])
                </div>
            </div>
        </div>
    </div>
</section>
