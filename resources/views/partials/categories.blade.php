    <!-- Popular Categories carousel section start -->
    <section class="popular-categories carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 ">
                    <div class="section-title">
                        <h2 class="mt-0">{{ $title }}</h2>
                        <span>{{ $description }}</span>
                        <ul>
                            @foreach ($features as $feature)
                                <li>
                                    <strong class="strong-c-color">
                                        @if ($feature['link'])
                                            <a href="{{ $feature['link'] }}" class="internal-links">{{ $feature['title'] }}</a>
                                        @else
                                            {{ $feature['title'] }}
                                        @endif
                                    </strong>:
                                    {{ $feature['description'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="listico-item-carousel owl-carousel owl-theme">
                        @foreach ($items as $item)
                            <div class="single-popular-item">
                                <div class="item-cover-image bg-cover" style="background-image: url('{{ $item['image'] }}')"></div>
                                <div class="item-content">
                                    <h4><a href="{{ $item['link'] }}" style="color: black">{{ $item['title'] }}</a></h4>
                                    <div class="item-feedback">
                                        <div class="row pl-3">
                                            @foreach ($item['features'] as $feature)
                                                <div class="col-4 text-left pl-0">
                                                    <strong><i class="{{ $feature['icon'] }}"></i></strong>  {{ $feature['label'] }}: {{ $feature['value'] }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Categories  carouselsection end -->
