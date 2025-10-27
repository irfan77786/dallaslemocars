<!-- how it works section start -->
<section class="how-it-works section-padding bg-cover parallax-2" style="background: white; before: none">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xl-12 text-center">
                <div class="section-title">
                    <h2>{{ $title }}</h2>
                    <span>{{ $subtitle }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($steps as $step)
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="single-how-works d-flex align-items-start">
                        <div class="how-icon">
                            <span>{{ $step['number'] }}</span>
                            <img src="{{ asset('assets/img/site/' . $step['icon']) }}" alt="{{ $step['title'] }}">
                        </div>
                        <div class="how-works">
                            <h3>{{ $step['title'] }}</h3>
                            <p>{{ $step['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    <!-- how it works section end -->
