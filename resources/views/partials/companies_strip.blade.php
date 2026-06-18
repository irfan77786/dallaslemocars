<section class="py-40 py-lg-50">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="swiper logo-swiper">
                    <div class="swiper-wrapper">
                        @for ($pass = 1; $pass <= 2; $pass++)
                            @for ($i = 1; $i <= 8; $i++)
                                @php $padded = str_pad((string) $i, 2, '0', STR_PAD_LEFT); @endphp
                                <div class="swiper-slide">
                                    <img src="{{ asset('new_assets/assets/logo-' . $padded . '.png') }}"
                                         alt="Partner client logo {{ $i }} — Dallas Limo Black Cars"
                                         class="img-fluid"
                                         loading="lazy"
                                         decoding="async">
                                </div>
                            @endfor
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
