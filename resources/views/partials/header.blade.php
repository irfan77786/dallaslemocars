    <!-- header section start -->
    <header class="header-section" style="position: relative !important;">
        <!-- main menu -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo" style="padding-left: 8px; padding-right: 0px;">
                        <a class="navbar-brand" style="position: absolute; z-index: 1000000;">
                            <img onclick="window.location.href = '{{ route('booking') }}'" src="{{ asset('assets/img/site/black-car-service-dallas-logo.webp') }}" style="z-index: 1000000;" class="logo-display" alt="shipo">
                        </a>
                    <div class="col-12">
                        <div class="responsive-menu"></div>
                    </div>
                    </div> <!-- /.col-md-3 logo -->
                    <div class="col-md-9 d-none d-lg-block text-lg-right">
                        <nav id="responsive-menu" class="main-menu">
                            <ul class="menu-items">
                                <li><a href="about.html">About us</a></li>

                                <li class="has-submenu">
                                    <a href="#">Our Service</a>
                                    <ul class="submenu">
                                        <li><a href="#">Airport Transfers</a></li>
                                        <li><a href="#">Airport Greeters</a></li>
                                        <li><a href="#">Chauffeur Service</a></li>
                                        <li><a href="#">Corporate Transportation</a></li>
                                        <li><a href="#">Executive shuttle services</a></li>
                                        <li><a href="#">Luxury van rental</a></li>
                                        <li><a href="#">Private car service</a></li>
                                        <li><a href="#">Private Aviation/FBO</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">FIFA World Cup 26</a></li>

                                <li><a href="#">Fleet</a></li>

                                <li class="has-submenu">
                                    <a href="#">Help</a>
                                    <ul class="submenu">
                                        <li><a href="#">Get a quote</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Cancellation Policy</a></li>
                                    </ul>
                                </li>
                                <li>
                                    @if (Route::has('login'))
                                        <div class="fixed top-0 right-0 p-6 text-right z-10">
                                            @auth
                                                <a href="{{ url('/dashboard') }}">
                                                    Dashboard
                                                </a>
                                            @else
                                                <a href="{{ route('login') }}">
                                                    Log in
                                                </a>
                                            @endauth
                                        </div>
                                    @endif
                                </li>
                            </ul>
                            <a href="#" class="btn-booking-start">Book Now</a>
                        </nav>
                    </div> <!-- /. col-md-9 d-none d-lg-block -->
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->
