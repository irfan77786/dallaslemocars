<!-- how it works section start -->
<section class="how-it-works section-padding bg-cover parallax-2" style="background: black; before: none">
    <div class="container">
        <div class="row">
            @foreach($steps as $step)
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="single-how-works d-flex align-items-start">
                        <div class="how-icon">
                            <i class="fas fa-{{ $step['icon'] }}" style="color: white; font-size: xxx-large"></i>
                        </div>
                        <div class="how-works">
                            <h3 style="color: white">{{ $step['title'] }}</h3>
                            <p style="color: white">{{ $step['description'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
    <!-- how it works section end -->
