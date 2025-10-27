<section class="py-5 feature-section {{ $sectionClass }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1 order-2 mb-4 mb-md-0 text-content-col left-desc-container">
                <h2 class="display-5 fw-bold {{ $textColor }}">{{ $title }}</h2>
                <p>{!! $content !!}</p>
                {{ $slot ?? '' }}
            </div>

            <div class="col-md-6 order-md-2 order-1 image-col">
                <img src="{{ asset('assets/img/site/' . $image) }}" class="img-fluid rounded shadow-lg" alt="{{ $alt }}">
            </div>
        </div>
    </div>
</section>
