<section class="py-{{ $py ?? 4 }} feature-section {{ $sectionClass }}{{ $customClass }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1 order-1 mb-4 mb-md-0 image-col">
                <img src="{{ asset('assets/img/site/' . $image) }}" class="img-fluid rounded" alt="{{ $alt }}">
            </div>

            <div class="col-md-6 order-md-2 order-2 text-content-col">
                <h2 class="display-5 fw-bold {{ $textColor }}">{{ $title }}</h2>
                    <div class="pt-section-title-box">
                        <p class="pt-section-description mb-0">{{ $serviceSection['description'] }}</p>
                        <p class="mb-0">{{ $serviceSection['intro'] }}</p>
                        <ul>
                            @foreach ($serviceSection['items'] as $item)
                                <li>
                                    <strong class="strong-c-color">
                                        @if ($item['link'])
                                            <a href="{{ $item['link'] }}" class="internal-links">{{ $item['title'] }}</a>
                                        @else
                                            {{ $item['title'] }}
                                        @endif
                                    </strong>:
                                    {{ $item['description'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                {{ $slot ?? '' }}
            </div>
        </div>
    </div>
</section>
