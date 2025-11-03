<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @isset($seo)
    @section('seo')
    <title>{{ $seo['title'] }}</title>
    <meta name="description" content="{{ $seo['description'] }}" />
    <meta name="keywords" content="{{ $seo['keywords'] }}" />
    <meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] }}" />
    <meta property="og:description" content="{{ $seo['og_description'] ?? $seo['description'] }}" />
    @if(isset($seo['og_image']))
    <meta property="og:image" content="{{ $seo['og_image'] }}" />
    <meta property="og:image:alt" content="{{ $seo['og_title'] ?? $seo['title'] }}">
    @endif
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Black Car Service Dallas">
    <link rel="canonical" href="{{ url()->current() }}/" />
    @show
    @else
    @endisset
    <!-- ======== Page title ============ -->
    <title>Listico - Listing & Directory HTML Template</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('assets/img/site/dallas-black-car-service-favicon.png') }}">
    <!-- ===========  All Stylesheet ================= -->
    <!--  fontawesome css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!--  slick css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!--  rangeSlider css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.min.css') }}">
    <!--  slick theme css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <!--  meanmenu css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- template responsive css stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    @yield('styles')
</head>

<body class="theme_body">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/rater.min.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!-- Google Maps JavaScript API with Places Library -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUqn8Dg3GICSzhyvw7DjXXHkyoGMCoTpM&libraries=places&loading=async&callback=initAutocomplete" async defer></script>
      <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
            dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-D87H3B4PXN');
            const originalWarn = console.warn;
            console.warn = function(msg, ...args) {
            if (typeof msg === 'string' && msg.includes('google.maps.places.PlacesService') || msg.includes('google.maps.places.AutocompleteService') || msg.includes('google.maps.Marker')) {
                // Suppress this specific warning
                return;
            }
            originalWarn.apply(console, [msg, ...args]);
            };
        </script>
    <script>
        // Initialize autocomplete after Google Maps API is loaded
        function initAutocomplete() {
            // Initialize autocomplete for all location inputs
            setupCustomAutocomplete('pickup-location', 'pickup-suggestions', 'is-airport', function(place) {
                pickupPlacePoint = place;
                handlePointToPointUpdate();
            });

            setupCustomAutocomplete('dropoff-location', 'dropoff-suggestions', 'is-airport-dropoff', function(place) {
                dropoffPlacePoint = place;
                handlePointToPointUpdate();
            });

            setupCustomAutocomplete('pickup-location-hourly', 'pickup-location-hourly-suggestions', 'is-airport-hourly', function(place) {
                initMap(place, null);
            });
        }

    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#swap-locations').on('click', function() {
                const $pickupInput = $('#pickup-location');
                const $dropoffInput = $('#dropoff-location');

                // Swap the input values
                const tempValue = $pickupInput.val();
                $pickupInput.val($dropoffInput.val());
                $dropoffInput.val(tempValue);

                // Swap the place objects if they exist
                if (window.pickupPlacePoint && window.dropoffPlacePoint) {
                    const tempPlace = window.pickupPlacePoint;
                    window.pickupPlacePoint = window.dropoffPlacePoint;
                    window.dropoffPlacePoint = tempPlace;
                }

                // Reinitialize autocomplete if not already done
                if (!window.autocompletePickup || !window.autocompleteDropoff) {
                    window.autocompletePickup = new google.maps.places.Autocomplete($pickupInput[0], options);
                    window.autocompleteDropoff = new google.maps.places.Autocomplete($dropoffInput[0], options);
                }

                // Trigger place_changed events
                google.maps.event.trigger(window.autocompletePickup, 'place_changed');
                google.maps.event.trigger(window.autocompleteDropoff, 'place_changed');

                // Calculate the route with swapped locations
                calculateRoute();
            });
            // Handle swap locations button click
            $('#round-trip').on('change', function() {
                if ($(this).is(':checked')) {
                    $('.return-trip').show();
                    $('.point-button').addClass('mt-4');
                } else {
                    $('.return-trip').hide();
                    $('.point-button').removeClass('mt-4');
                }
            });
            $('.intercity-rides').on('click', function() {
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });
            const faqItems = document.querySelectorAll(".faq-item");
            faqItems.forEach(item => {
            const btn = item.querySelector(".faq-question");
                btn.addEventListener("click", () => {
                    // close other items
                    faqItems.forEach(i => {
                    if (i !== item) {
                        i.classList.remove("active");
                        i.querySelector(".icon").textContent = "+";
                    }
                    });
                    // toggle current item
                    item.classList.toggle("active");

                    const icon = item.querySelector(".icon");
                    icon.textContent = item.classList.contains("active") ? "–" : "+";
                });
            });
            $('.custom-card').hover(
            function() {
                $('#book-ride-label-' + $(this).data('key')).stop(true, true).fadeIn(100);
                $('#book-ride-label-' + $(this).data('key')).addClass('slide-up-text');
            },
            function() {
                $('#book-ride-label-' + $(this).data('key')).css('display', 'none');
                $('#book-ride-label-' + $(this).data('key')).removeClass('slide-up-text');
            }
            );

            flatpickr(".flatpickr", {
                enableTime: true,
                dateFormat: "Y-m-d h:i K",  // 12-hour format with AM/PM
                altInput: true,
                altFormat: "F j, Y h:i K",  // more readable
                minDate: "today",
                time_24hr: false,
                minuteIncrement: 15,
                disableMobile: true,
                allowInput: true,
                clickOpens: true,
                // Set default date to today with rounded nearest 15 min
                defaultDate: new Date(new Date().setMinutes(Math.ceil(new Date().getMinutes() / 15) * 15)),
                onReady: function(selectedDates, dateStr, instance) {
                    instance.set('hourElement').value = instance.currentHour;
                    instance.set('minuteElement').value = instance.currentMinute;
                }
            });

        });
    </script>
    @yield('scripts')
</body>
</html>
