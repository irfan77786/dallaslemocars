<section class="py-{{ $py ?? 4 }} feature-section {{ $sectionClass }}{{ $customClass }}" style="background-color: {{ $bgColor ?? 'white' }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1 order-2 mb-4 mb-md-0 text-content-col left-desc-container">
                <h2 class="display-5 fw-bold {{ $textColor }}" style="color: {{ $textColor }} !important">{{ $title }}</h2>
                <ul style="color: {{ $textColor }} !important">
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
                {{ $slot ?? '' }}
            </div>

            <div class="col-md-6 order-md-2 order-1 image-col">
                <img src="{{ asset('assets/img/site/' . $image) }}" class="img-fluid rounded" alt="{{ $alt }}">
            </div>
        </div>
    </div>
</section>
