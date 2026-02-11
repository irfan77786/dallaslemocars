    <!-- call to action section start -->
    <section class="call-to-action-wrap bg-cover {{ $onlyMobile ? 'onlyMobile' : '' }}{{$onlyDesktop ? 'onlyDesktop' : '' }}" style="background-image: url('assets/img/{{ $image }}')">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-8 col-sm-12  col-md-7">
                    <div class="call-to-action">
                        <h2 style="color: {{ $darkTheme ? 'white' : 'black' }}">{{ $title }}</h2>
                        <span style="color: {{ $darkTheme ? 'white' : 'black' }}">{{ $description }}</span>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12 col-md-5 text-lg-right">
                    <a href="#" class="call-action-btn"><i class="far fa-check-circle"></i>{{ $action_name }}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action section end -->
