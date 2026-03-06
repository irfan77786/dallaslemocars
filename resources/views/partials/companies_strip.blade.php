<section class="pt-50 pt-sm-60 pt-md-70 pt-lg-80 pb-30 pb-sm-40 pb-md-50 pb-lg-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10 text-center mb-15 mb-md-20 mb-lg-30">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Chosen By People At <span class="theme-color">Top
                        Companies</span></h2>
                <p class="font-md">Our commitment to excellence earns the trust of leading professionals. Executives and teams at world-class companies choose <b>Black Car Service Dallas</b> for premium, reliable, and stress-free travel.</p>
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
