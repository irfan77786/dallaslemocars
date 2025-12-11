<!-- header section start -->
    <header class="header-section" style="position: relative !important;">
        <!-- main menu -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logo" style="padding-left: 8px; padding-right: 0px;">
                        <img style="position: relative; z-index: 6 !important; cursor: pointer;" onclick="window.location.href='{{ url('/') }}'" src="{{ asset('assets/img/site/black-car-service-dallas-logo.webp') }}" class="logo-display" alt="shipo">
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
                    <div class="col-md-9 d-lg-none d-flex justify-content-end align-items-center" style="position: absolute; margin-top: 12px; z-index: 4;">
                        <button id="mobile-menu-toggle" class="btn btn-link p-0 mobile-menu-toggle" aria-controls="mobile-drawer" aria-expanded="false" aria-label="Open menu">
                            <i class="bi bi-list" style="font-size: 1.8rem;"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="drawer-overlay" class="drawer-overlay"></div>
        <aside id="mobile-drawer" class="mobile-drawer" aria-hidden="true">
            <div class="drawer-header d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/site/black-car-service-dallas-logo.webp') }}" class="logo-display" alt="shipo" style="height: 40px;">
                </a>
                <button class="btn btn-link p-0 drawer-close" aria-label="Close menu">
                    <i class="bi bi-x-lg" style="font-size: 1.4rem;"></i>
                </button>
            </div>
            <nav class="drawer-nav">
                <ul class="drawer-menu list-unstyled">
                    <li><a href="about.html">About us</a></li>
                    @auth
                        <li><a href="{{ route('dashboard') }}" class="drawer-tab-link">Rides</a></li>
                        <li><a href="{{ route('users') }}" class="drawer-tab-link">Users</a></li>
                        <li><a href="{{ route('cards.index') }}" class="drawer-tab-link">Payment Methods</a></li>
                        <li><a href="{{ route('invoices.index') }}" class="drawer-tab-link">Invoices</a></li>
                        <li><a href="{{ route('profile.edit') }}" class="drawer-tab-link">Account Info</a></li>
                        <li><a href="{{ route('storedLocations.index') }}" class="drawer-tab-link">Stored Locations</a></li>
                    @endauth
                    <li><a href="about.html">About us</a></li>
                    <li class="has-submenu">
                        <a href="#" class="submenu-toggle">Our Service</a>
                        <ul class="submenu list-unstyled">
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
                        <a href="#" class="submenu-toggle">Help</a>
                        <ul class="submenu list-unstyled">
                            <li><a href="#">Get a quote</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cancellation Policy</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="mt-3">
                    @if (Route::has('login'))
                        <div class="p-2">
                            @auth
                                <a class="btn btn-primary w-100" href="{{ url('/dashboard') }}" style="color: #ffffff;">Dashboard</a>
                            @else
                                <a class="btn btn-primary w-100" href="{{ route('login') }}" style="color: #ffffff;">Log in</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </nav>
        </aside>
    </header>

    <script>
        const drawerLinks = document.querySelectorAll('.drawer-tab-link');

        drawerLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);

                // Remove active from all nav-links
                document.querySelectorAll('.nav-link').forEach(tab => tab.classList.remove('active'));

                // Add active to the clicked nav-link
                const navLink = document.querySelector(`.nav-link[href="#${targetId}"]`);
                if (navLink) navLink.classList.add('active');

                // Remove active/show from all tab-panes
                document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('active', 'show'));

                // Show the target tab-pane
                const tabPane = document.getElementById(targetId);
                if (tabPane) tabPane.classList.add('active', 'show');
            });
        });
    </script>

    <!-- header section end -->
