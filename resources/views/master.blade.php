<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <meta property="og:site_name" content="Dallas Limo And Black Cars">
    <link rel="canonical" href="{{ url()->current() }}/" />
    @show
    @else
    @endisset
    <!-- ======== Page title ============ -->
    <title>Dallas Limo And Black Cars</title>
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
    <!-- SweetAlert2 CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-material-datetimepicker.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css"/>
    @yield('styles')
</head>

<body class="theme_body">

    @include('partials.header')

    @yield('content')

    @if(!isset($step) || $step == 0)
        @include('partials.footer')
    @endif

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
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            updateMapWidth();
            window.addEventListener('resize', updateMapWidth);
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
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment-with-locales.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.selectable-card').forEach(card => {
                card.addEventListener('click', function(e) {
                    const ignoreSelector = 'a, button, [role="button"], [data-toggle="collapse"], .collapse, .info-icon, .feature-item, .feature_items_cont';
                    if (e.target.closest(ignoreSelector)) {
                        return;
                    }
                    if (window.innerWidth <= 767 && typeof window.openVehicleBottomSheet === 'function') {
                        window.openVehicleBottomSheet(card);
                        return;
                    }
                    document.querySelectorAll('.selectable-card').forEach(c => c.classList.remove('selected'));
                    card.classList.toggle('selected');
                    const selectedId = card.dataset.id;
                });
            });
            // Default select first card only on desktop
            if (window.innerWidth > 767) {
                const firstCard = document.querySelector('.selectable-card');
                if (firstCard) {
                    document.querySelectorAll('.selectable-card').forEach(c => c.classList.remove('selected'));
                    firstCard.classList.add('selected');
                    console.log("Default selected vehicle ID:", firstCard.dataset.id);
                }
            }
            const continueBtn = document.querySelector('.continue-button');
            if (continueBtn) {
                continueBtn.addEventListener('click', function() {
                    var step = parseInt("{{ $step ?? 1 }}");
                    console.log("Current step is = " + step);

                    // Step 2: Vehicle Class - Navigate to Passenger Info
                    if (step === 2) {
                        const selected = document.querySelector('.selectable-card.selected') || document.querySelector('.selectable-card');
                        if (!selected) {
                            alert('Please select a vehicle');
                            return;
                        }
                        const id = selected.dataset.id;
                        const priceEl = selected.querySelector('.pricing_summary_price');
                        if (!priceEl) {
                            alert('Fare not available for selected vehicle');
                            return;
                        }
                        const priceMatch = (priceEl.textContent || '').match(/[0-9]+(?:\.[0-9]+)?/);
                        const price = priceMatch ? priceMatch[0] : null;
                        if (!price) {
                            alert('Fare not available for selected vehicle');
                            return;
                        }
                        window.location.href = `/user-login/${id}/${price}`;
                    }
                    // Step 3: Passenger Info - Submit the passenger form
                    else if (step === 3) {
                        const passengerForm = document.getElementById('passengerForm');
                        if (passengerForm) {
                            passengerForm.requestSubmit();
                        }
                    }
                    // Step 4: Booking Detail - Submit the booking form
                    else if (step === 4) {
                        const bookingForm = document.querySelector('form[action*="/bookRide"]');
                        if (bookingForm) {
                            bookingForm.requestSubmit();
                        }
                    }
                    // For other steps, do nothing as they have their own navigation
                });
            }

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
            });

            (function(){
                var selector = 'input[id$="-location"]';
                $(document).on('focus click', selector, function(){
                    var el = this;
                    setTimeout(function(){ try { el.select(); } catch(e){} }, 0);
                });
                $(document).on('mouseup', selector, function(e){
                    e.preventDefault();
                });
            })();

            if ($('#round-trip').is(':checked')) {
                $('.return-trip').show();
                $('.point-button').addClass('mt-4');
            } else {
                $('.return-trip').hide();
                $('.point-button').removeClass('mt-4');
            }

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

            (function() {
                if (typeof $ !== 'function' || typeof $.fn.bootstrapMaterialDatePicker !== 'function') return;
                function computeTarget(now) {
                    var t = moment(now).add(2, 'hours');
                    if (t.isBefore(now)) {
                        t = now;
                    }
                    return t;
                }
                function initMDP(sel) {
                    var $el = $(sel);
                    if (!$el.length) return;
                    var now = moment();
                    var minTarget = computeTarget(now);
                    var val = $el.val();
                    var opts = {
                        format: 'ddd, MMM Do, YYYY h:mm A',
                        minDate: minTarget,
                        shortTime: true,
                        clearButton: false,
                        switchOnClick: false,
                        weekStart: 0
                    };
                    if (val) {
                        var parsed = moment(val, 'ddd, MMM Do, YYYY h:mm A', true);
                        if (parsed.isValid()) {
                            opts.currentDate = parsed.isBefore(minTarget) ? minTarget : parsed;
                        } else {
                            opts.currentDate = minTarget;
                        }
                    } else {
                        opts.currentDate = minTarget;
                    }
                    $el.bootstrapMaterialDatePicker(opts);
                }
                initMDP('#pickup-datetime');
                initMDP('#pickup-datetime-hourly');
                initMDP('#return-datetime-hourly');
            })();

                (function() {
                    var now = moment();
                    var target = moment(now).add(2, 'hours');
                    if (target.isBefore(now)) {
                        target = now;
                    }
                    var minuteInc = 15;
                    var roundedMin = Math.ceil(target.minute() / minuteInc) * minuteInc;
                    if (roundedMin === 60) {
                        target.add(1, 'hour');
                        roundedMin = 0;
                    }
                    var defaultTarget = moment(target).minute(roundedMin).second(0).millisecond(0);
                    const fpInstances = flatpickr(".flatpickr", {
                        enableTime: true,
                        dateFormat: "Y-m-d h:i K",
                        altInput: true,
                        altFormat: "D, M jS, Y h:i K",
                        minDate: defaultTarget.toDate(),
                        time_24hr: false,
                        minuteIncrement: minuteInc,
                        defaultHour: defaultTarget.hour(),
                        defaultMinute: defaultTarget.minute(),
                        defaultDate: defaultTarget.toDate(),
                        disableMobile: true,
                        allowInput: true,
                        clickOpens: true,
                        closeOnSelect: false,
                        plugins: [confirmDatePlugin({ showAlways: true })],
                        onReady: function(selectedDates, dateStr, instance) {
                            instance.set('hourElement').value = instance.currentHour;
                            instance.set('minuteElement').value = instance.currentMinute;
                        }
                    });
                    if (Array.isArray(fpInstances)) {
                        fpInstances.forEach(function(instance) {
                            const inputEl = instance.altInput || instance.input;
                            if (!inputEl) return;
                            const container = document.createElement('span');
                            container.style.marginLeft = '8px';
                            const calBtn = document.createElement('button');
                            calBtn.type = 'button';
                            calBtn.className = 'btn btn-outline-secondary btn-sm';
                            calBtn.style.marginRight = '6px';
                            calBtn.innerHTML = '<i class="bi bi-calendar3"></i>';
                            const clockBtn = document.createElement('button');
                            clockBtn.type = 'button';
                            clockBtn.className = 'btn btn-outline-secondary btn-sm';
                            clockBtn.innerHTML = '<i class="bi bi-clock"></i>';
                            container.appendChild(calBtn);
                            container.appendChild(clockBtn);
                            inputEl.insertAdjacentElement('afterend', container);
                            calBtn.addEventListener('click', function() {
                                instance.open();
                            });
                            clockBtn.addEventListener('click', function() {
                                instance.open();
                                setTimeout(function() {
                                    if (instance.hourElement) instance.hourElement.focus();
                                }, 0);
                            });
                        });
                    }
                })();

                if (Array.isArray(fpInstances)) {
                    fpInstances.forEach(function(instance) {
                        const inputEl = instance.altInput || instance.input;
                        if (!inputEl) return;
                        const container = document.createElement('span');
                        container.style.marginLeft = '8px';
                        const calBtn = document.createElement('button');
                        calBtn.type = 'button';
                        calBtn.className = 'btn btn-outline-secondary btn-sm';
                        calBtn.style.marginRight = '6px';
                        calBtn.innerHTML = '<i class="bi bi-calendar3"></i>';
                        const clockBtn = document.createElement('button');
                        clockBtn.type = 'button';
                        clockBtn.className = 'btn btn-outline-secondary btn-sm';
                        clockBtn.innerHTML = '<i class="bi bi-clock"></i>';
                        container.appendChild(calBtn);
                        container.appendChild(clockBtn);
                        inputEl.insertAdjacentElement('afterend', container);
                        calBtn.addEventListener('click', function() {
                            instance.open();
                        });
                        clockBtn.addEventListener('click', function() {
                            instance.open();
                            setTimeout(function() {
                                if (instance.hourElement) instance.hourElement.focus();
                            }, 0);
                        });
                    });
                }
            updateMapWidth();
            window.addEventListener('resize', updateMapWidth);
        });

        function updateMapWidth() {
            const map = document.getElementById("map");
            if (!map) return;

            const vh = window.visualViewport ? window.visualViewport.height : window.innerHeight;

            if (window.innerWidth >= 1600) {
                // Big LCD screens
                map.style.setProperty("width", Math.round(vh * 1.32) + "px", "important");
            }
            else if (window.innerWidth >= 1024) {
                // Small laptops
                map.style.setProperty("width", Math.round(vh * 1.70) + "px", "important");
            }
            else {
                // Mobile
                map.style.setProperty("width", "100%", "important");
            }
        }
    </script>
    @yield('scripts')
</body>
</html>
