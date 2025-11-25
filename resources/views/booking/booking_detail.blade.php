@extends('master')
@section('content')
    @php
        $step = 4;
    @endphp

    <style>
    .floating-bordered-input {
        position: relative;
        border: 1px solid #C4C4C4;
        border-radius: 4px;
        padding: 12px 15px !important;
        padding-top: 0px !important;
        padding-bottom: 0px !important;
        background: #fff;
    }
    .custom-switch-container{display:flex;align-items:center;gap:10px}
    .switch-wrapper{position:relative;display:inline-block;width:44px;height:24px}
    .switch-wrapper input{opacity:0;width:0;height:0}
    .switch-slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background:#bdbdbd;transition:.2s;border-radius:24px}
    .switch-slider:before{position:absolute;content:"";height:20px;width:20px;left:2px;top:2px;background:#fff;transition:.2s;border-radius:50%}
    .switch-wrapper input:checked + .switch-slider{background:var(--dark-bg-btn,#1A6982)}
    .switch-wrapper input:checked + .switch-slider:before{transform:translateX(20px)}
    </style>

    @include('partials.bookig-top_area')

    <?php $is_airport = session('is_airport'); ?>

    <div class="container py-md-5">
        <div class="row">
            <div class="col-md-8 px-4 mb-3 mobile-mg-dc">
                <form method="POST" action="{{ url('/bookRide') }}" class="d-flex flex-column loader-form" id="booking-detail-form">
                    @csrf

                    <input type="hidden" name="vehicle_id" id="hidden-vehicle-id" value="{{ session('vehicle_id') }}">
                    <input type="hidden" name="return_service" id="hidden-return-service"
                        value="{{ session('return_service', 0) }}">
                    <input type="hidden" name="return_pickup_location" id="hidden-return-pickup-location"
                        value="{{ session('return_pickup_location') }}">
                    <input type="hidden" name="return_dropoff_location" id="hidden-return-dropoff-location"
                        value="{{ session('return_dropoff_location') }}">
                    <input type="hidden" name="return_pickup_date" id="hidden-return-pickup-date"
                        value="{{ session('return_pickup_date') }}">
                    <input type="hidden" name="return_pickup_time" id="hidden-return-pickup-time"
                        value="{{ session('return_pickup_time') }}">
                    <input type="hidden" name="return_flight_number" id="hidden-return-flight-number"
                        value="{{ session('return_flight_number') }}">
                    <input type="hidden" name="return_flight_details" id="hidden-return-flight-details"
                        value="{{ session('return_flight_details') }}">
                    <input type="hidden" name="return_no_flight_info" id="hidden-return-no-flight-info"
                        value="{{ session('return_no_flight_info', 0) }}">

                    <div class="mb-4" id="outbound-flight-info-section">
                        <div id="outbound-flight-fields" style="display:none;">
                            <h2 class="mb-3">Flight Information</h2>

                            <!-- Pickup Flight Details -->
                            <div class="floating-bordered-input position-relative mb-3">
                            <span class="floating-label">Pickup Flight Details</span>
                            <input type="text" id="pickup-flight-details" name="pickup_flight_details"
                                class="form-control" placeholder=" "
                                value="{{ session('pickup_flight_details') ?? '' }}">
                            </div>
                            <!-- Flight Number -->
                            <div class="floating-bordered-input position-relative mb-3">
                            <span class="floating-label">Flight Number</span>
                            <input type="text" id="flight-number" name="flight_number"
                                class="form-control" placeholder=" "
                                value="{{ session('flight_number') ?? '' }}">
                            </div>
                            <!-- Meet Option -->
                            <div class="floating-bordered-input position-relative mb-3">
                            <span class="floating-label">Meet Option</span>
                            <select class="form-control" id="meet-option" name="meet_option">
                                <option value="none" {{ session('meet_option') === null ? 'selected' : '' }} disabled>Select Option</option>
                                <option value="curbside" {{ session('meet_option') === 'curbside' ? 'selected' : '' }}>Curbside Pickup</option>
                                <option value="inside" {{ session('meet_option') === 'inside' ? 'selected' : '' }}>Inside Pickup</option>
                            </select>
                            </div>
                        </div>

                        <!-- Inside Pickup Fee (Hidden) -->
                        <input type="hidden" name="inside_pickup_fee" id="inside-pickup-fee"
                            value="{{ session('inside_pickup_fee') ?? 0 }}">

                        <!-- Flight Info Toggle -->
                        <div class="custom-switch-container mt-3">
                            <label class="switch-wrapper">
                                <input type="checkbox" id="no-flight-info-checkbox" name="no_flight_info" value="1">
                                <span class="switch-slider"></span>
                            </label>
                            <label class="form-check-label" for="no-flight-info-checkbox">
                                I have my flight details
                            </label>
                        </div>
                    </div>

                    <div>
                        <h2 class="mb-3">Additional Information (Optional)</h2>

                        <div class="floating-bordered-input position-relative mb-3">
                            <textarea id="note" name="note" class="form-control" placeholder=" " rows="2">{{ session('note') ?? '' }}</textarea>
                        </div>
                    </div>

                    <p class="text-muted small text-start mb-0 mt-1" style="line-height: 1.2rem;">Enter any special
                        requests or important information for your ride, e.g. child car seats, etc.</p>
                    <div class="mt-4 d-none d-md-flex align-items-center">
                        <button type="submit" class="btn btn-outline-primary btn-uniform mr-3 skip-btn">SKIP</button>
                        <button type="submit" class="btn btn-primary btn-uniform flex-fill">CONTINUE TO PAYMENT</button>
                    </div>
                    <div class="mt-4 d-flex justify-content-start d-md-none">
                        <button type="submit" class="btn btn-primary btn-block" style="padding: 0.575rem .75rem !important;">
                            CONTINUE TO PAYMENT
                        </button>
                    </div>
            </div>

            <!-- Right Form Container (summary panel remains unchanged) -->
            @include('booking.right_side_pricing_area')
        </div>
    </div>
    </form>
    <!-- Return Reservation Modal -->
    <div class="modal fade" id="returnReservationModal" tabindex="-1" role="dialog"
        aria-labelledby="returnReservationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold mb-2" id="returnReservationModalLabel">Return Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 2rem;">&times;</span>
                    </button>
                </div>
                <form id="return-service-form" method="POST" action="{{ url('/save-return-service') }}"
                    class="loader-form">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6" style="position:relative;">
                                <div id="modal-map"
                                    style="height: 500px; width: 100%; border-radius: 15px; background-color: #f0f0f0;">
                                </div>
                                <div id="route-info-box"
                                    style="
                  position: absolute;
                  bottom: 20px;
                  left: 20px;
                  background: white;
                  color: black;
                  padding: 12px 16px;
                  border-radius: 10px;
                  box-shadow: 0 0 10px rgba(0,0,0,0.2);
                  font-size: 14px;
                  z-index: 999;
                  display: none;
                ">
                                    <div><strong>Distance:</strong> <span id="route-distance">-</span></div>
                                    <div><strong>Duration:</strong> <span id="route-duration">-</span></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="is_airport_return" id="is-airport_return" value="0">
                                <input type="hidden" name="return_vehicle_id" id="return-vehicle-id" value="">

                                <!-- Pick-up Location -->
                                <div class="input-group-container  mb-3">
                                    <div class="icon-container">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="input-text-container">
                                        <label for="return-pickup-location" class="form-label">From</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="{{ session('return_pickup_location') }}"
                                                name="return_pickup_location" id="return-pickup-location"
                                                placeholder="Address, Airport, Hotel..." onfocus="geolocate()" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Drop-off Location -->
                                <div class="input-group-container  mb-3">
                                    <div class="icon-container">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="input-text-container">
                                        <label for="return-dropoff-location" class="form-label">To</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="return_dropoff_location"
                                                id="return-dropoff-location"
                                                value="{{ session('return_dropoff_location') }}"
                                                placeholder="Address, Airport, Hotel..." onfocus="geolocate()" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pickup Date -->
                                <div class="input-group-container  mb-3">
                                    <div class="icon-container">
                                        <i class="bi bi-calendar"></i>
                                    </div>
                                    <div class="input-text-container">
                                        <label for="return-pickup-date" class="form-label">Date</label>
                                        <div class="input-group">
                                            <div class="ph-wrap">
                                                <input type="date" class="form-control" name="return_pickup_date"
                                                    id="return-pickup-date"
                                                    value="{{ session('return_pickup_date', '') }}"
                                                    placeholder="MM-DD-YYYY" required>
                                                <span class="fake-ph" aria-hidden="true">MM-DD-YYYY</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pickup Time -->
                                <div class="input-group-container  mb-3">
                                    <div class="icon-container">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div class="input-text-container">
                                        <label for="return-pickup-time" class="form-label">Time</label>
                                        <div class="input-group">
                                            <div class="ph-wrap">
                                                <input type="time" class="form-control" name="return_pickup_time"
                                                    id="return-pickup-time" value="{{ session('return_pickup_time') }}"
                                                    placeholder="HH:MM AM" required>
                                                <span class="fake-ph" aria-hidden="true">HH:MM AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if ($is_airport)
                                    <div class="mb-4" id="flight-info-section">
                                        <h2 class="mb-3">Return Flight Information</h2>

                                        <div class="row">
                                            <!-- Flight Details -->
                                            <div class="col-md-6 form-group">
                                                <div class="input-group-container ">
                                                    <div class="icon-container">
                                                        <i class="bi bi-airplane"></i>
                                                    </div>
                                                    <div class="input-text-container">
                                                        <label for="return-flight-details" class="form-label">Pickup
                                                            Flight Details (Recommended)</label>
                                                        <div class="input-group">
                                                            <input type="text" id="return-flight-details"
                                                                name="return_flight_details"
                                                                class="form-control custom-input-style"
                                                                placeholder="Enter pickup flight details"
                                                                value="{{ session('return_flight_details') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Flight Number -->
                                            <div class="col-md-6 form-group">
                                                <div class="input-group-container">
                                                    <div class="icon-container">
                                                        <i class="bi bi-123"></i>
                                                    </div>
                                                    <div class="input-text-container">
                                                        <label for="return-flight-number" class="form-label">Flight
                                                            Number</label>
                                                        <div class="input-group">
                                                            <input type="text" id="return-flight-number"
                                                                name="return_flight_number"
                                                                class="form-control custom-input-style"
                                                                placeholder="Enter flight number"
                                                                value="{{ session('return_flight_number') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- No Flight Info Checkbox -->
                                        <div class="form-check mt-3 d-flex pl-5">
                                            <input type="checkbox" class="form-check-input" id="return-no-flight-info"
                                                {{ session('return_no_flight_info') == 1 ? 'checked' : '' }}
                                                name="return_no_flight_info" value="1" style="position:static">
                                            <label class="form-check-label" for="return-no-flight-info">
                                                I do not have my flight details
                                            </label>
                                        </div>
                                    </div>
                                @endif

                                <!-- Vehicle Selection Button -->
                                <button type="button" class="btn btn-primary btn-sm w-100 toggle_vehicleSelect">SELECT
                                    VEHICLE</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="wrapper bg-white vehicle_container hide col-md-12 mt-4">
                                @foreach ($vehicles_all as $key => $value)
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="vehical-card p-3 mb-3 row text-left text-md-left align-items-center justify-content-center border-bottom"
                                                style="border-color: #8b8b8b;">

                                                <!-- Vehicle Image and Capacity Info -->
                                                <div class="col-12 col-md-4 mb-3 d-flex flex-column align-items-center">
                                                    <img src="{{ 'https://admin.dallasblackcarslimoservice.com/storage/' . $value->vehicle_image }}"
                                                        alt="Vehicle Image" class="img-fluid rounded-3 vehicle_img"
                                                        style="max-height: 200px; object-fit: cover;">

                                                    <div
                                                        class="row justify-content-md-center justify-content-start mt-3 w-100">
                                                        <div
                                                            class="col-4 col-md-6 text-md-center d-flex align-items-md-center justify-content-md-center align-items-start justify-content-start text-left mb-2">
                                                            <img src="/image/user.svg" alt="Passengers" class="mr-2"
                                                                style="height:20px;width:20px;">
                                                            <p class="mb-0 small">Max. {{ $value->number_of_passengers }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="col-4 col-md-6  d-flex text-md-center align-items-md-center justify-content-md-center text-left align-items-start justify-content-start mb-2">
                                                            <img src="/image/bag.svg" alt="Luggage" class="mr-2"
                                                                style="height:20px;width:20px;">
                                                            <p class="mb-0 small">Max. {{ $value->luggage_capacity }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Vehicle Details -->
                                                <div class="col-12 col-md-4 mb-3 px-2">
                                                    <h5 class="font-weight-bold text-left text-md-left">
                                                        {{ $value->vehicle_name }}</h5>
                                                    <div
                                                        class="d-flex flex-column align-items-start align-items-md-start feature_items_cont">
                                                        @isset($features)
                                                            @foreach ($features as $feature)
                                                                    <div class="feature-item">
                                                                        <i class="bi {{ $feature['icon'] }} feature-icon"></i>
                                                                        <span class="feature-text">
                                                                            {{ $feature['text'] }}


                                                                    </span>
                                                                    <span>
                                                                        @if (isset($feature['tooltip']))
                                                                            <i class="bi bi-info-circle info-icon"
                                                                                data-tooltip="{{ $feature['tooltip'] }}"></i>
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                            @endforeach
                                                        @endisset
                                                    </div>
                                                </div>

                                                <!-- Pricing & CTA -->
                                                <div
                                                    class="col-12 col-md-4 mb-2 d-flex flex-column align-items-start align-items-md-end text-left text-md-right">
                                                    @php $vehicleDistance = $distance[$value->id] ?? null; @endphp

                                                    @if ($vehicleDistance && empty($vehicleDistance['error']))
                                                        <div class="car-price font-weight-bold">
                                                            <h4 class="mb-1">
                                                                ${{ number_format($vehicleDistance['price'], 2) }}</h4>
                                                            <br><small>Total Distance:
                                                                {{ number_format($vehicleDistance['distance_km'], 2) }}
                                                                Miles</small>
                                                        </div>
                                                        <div class="mb-2">
                                                            <small class="text-muted font-weight-bold">Includes base fare,
                                                                gratuity & tax</small><br>
                                                            <small class="text-muted">No hidden costs.</small>
                                                        </div>
                                                        <a href="javascript:void(0)"
                                                            data-vehicle-id="{{ $value->id }}"
                                                            class="select-vehicle btn btn-primary btn_dark mt-2 trigger-loader">
                                                            SELECT
                                                        </a>
                                                    @else
                                                        <div class="text-danger font-weight-bold">Fare calculation failed
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="save-return-service">Save Return
                            Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('scripts')
    @include('booking.return_logic')
    <script>
        jQuery(document).ready(function() {
            // Handle flight info toggle
            function toggleFlightInfoFields() {
                const hasFlightDetails = $('#no-flight-info-checkbox').is(':checked');
                const container = $('#outbound-flight-fields');
                if (hasFlightDetails) {
                    container.show();
                    $('input[name="pickup_flight_details"], input[name="flight_number"]').prop('disabled', false);
                    $('#meet-option').prop('disabled', false);
                } else {
                    container.hide();
                    $('input[name="pickup_flight_details"]').val('').prop('disabled', true);
                    $('input[name="flight_number"]').val('').prop('disabled', true);
                    $('#meet-option').val('none').prop('disabled', true);
                }
            }

            // Initialize on page load
            $(document).ready(function() {
                $('#no-flight-info-checkbox').prop('checked', false);
                toggleFlightInfoFields();
                $('#no-flight-info-checkbox').on('change', function() { toggleFlightInfoFields(); });
            });

            const dateInputs = document.querySelectorAll('input[type="date"]');
            dateInputs.forEach(input => {
                input.addEventListener('click', function() {
                    this.showPicker?.();
                });
            });

            const timeInputs = document.querySelectorAll('input[type="time"]');
            timeInputs.forEach(input => {
                input.addEventListener('click', function() {
                    this.showPicker?.();
                });
            });

            // Check if Google Maps API is loaded
            function checkGoogleMapsAPI() {
                if (typeof google === 'undefined' || !google.maps) {
                    console.log('Google Maps API not loaded yet');
                    return false;
                }
                console.log('Google Maps API is loaded');
                return true;
            }

            // Test map initialization
            setTimeout(function() {
                checkGoogleMapsAPI();

                // Test if modal map container exists
                const modalMapContainer = document.getElementById('modal-map');
                if (modalMapContainer) {
                    console.log('Modal map container found:', modalMapContainer);
                    // Add a test message to see if the container is visible
                    modalMapContainer.innerHTML =
                        '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #666; background-color: #f0f0f0;"><i class="bi bi-geo-alt" style="font-size: 2rem; margin-right: 10px;"></i>Map Container Ready</div>';
                } else {
                    console.log('Modal map container not found');
                }
            }, 1000);

            // Return service toggle behavior
            let returnServiceWasChecked = false;
            const returnServiceCheckbox = document.getElementById('return-service');

            if (returnServiceCheckbox) {
                returnServiceCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        returnServiceWasChecked = true;
                        const pickupFromSession = @json(session('pickup_location'));
                        const dropoffFromSession = @json(session('return_dropoff_location') ?: session('dropoff_location'));
                        document.getElementById('return-pickup-location').value = dropoffFromSession;
                        document.getElementById('return-dropoff-location').value = pickupFromSession;

                        // Show modal first, then initialize map
                        $('#returnReservationModal').modal('show');

                        // Initialize map after modal is shown
                        $('#returnReservationModal').on('shown.bs.modal', function() {
                            if (dropoffFromSession && pickupFromSession) {
                                waitForGoogleMaps(function() {
                                    loadInvertedMap(dropoffFromSession, pickupFromSession);
                                });
                            } else {
                                waitForGoogleMaps(function() {
                                    initializeEmptyModalMap();
                                });
                            }
                        });
                    }
                });
            }

            // Initialize empty modal map
            function initializeEmptyModalMap() {
                const modalMapElement = document.getElementById('modal-map');
                if (modalMapElement && typeof google !== 'undefined' && google.maps) {
                    const defaultCenter = {
                        lat: 32.7767,
                        lng: -96.7970
                    }; // Dallas coordinates
                    const modalMap = new google.maps.Map(modalMapElement, {
                        center: defaultCenter,
                        zoom: 10,
                        styles: typeof brandMapStyle !== 'undefined' ? brandMapStyle : [],
                        disableDefaultUI: true
                    });
                } else {
                    // Show loading message if Google Maps is not loaded
                    modalMapElement.innerHTML =
                        '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #666; background-color: #f0f0f0;"><i class="bi bi-geo-alt" style="font-size: 2rem; margin-right: 10px;"></i>Loading map...</div>';

                    // Try to initialize again after a delay
                    setTimeout(function() {
                        if (typeof google !== 'undefined' && google.maps) {
                            initializeEmptyModalMap();
                        }
                    }, 500);
                }
            }

            // Wait for Google Maps API to be fully loaded
            function waitForGoogleMaps(callback, maxAttempts = 20) {
                let attempts = 0;
                const checkInterval = setInterval(function() {
                    attempts++;
                    if (typeof google !== 'undefined' && google.maps) {
                        clearInterval(checkInterval);
                        callback();
                    } else if (attempts >= maxAttempts) {
                        clearInterval(checkInterval);
                        console.log('Google Maps API failed to load after maximum attempts');
                    }
                }, 100);
            }

            // Test if modal map container exists
            const modalMapContainer = document.getElementById('modal-map');
            if (modalMapContainer) {
                console.log('Modal map container found:', modalMapContainer);
                // Add a test message to see if the container is visible
                modalMapContainer.innerHTML =
                    '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #666; background-color: #f0f0f0;"><i class="bi bi-geo-alt" style="font-size: 2rem; margin-right: 10px;"></i>Map Container Ready</div>';
            } else {
                console.log('Modal map container not found');
            }

            // Handle modal close without saving
            $('#returnReservationModal').on('hidden.bs.modal', function() {
                if (returnServiceWasChecked && !returnServiceSaved) {
                    // Revert checkbox if modal was closed without saving
                    returnServiceCheckbox.checked = false;
                    returnServiceWasChecked = false;
                }
            });

            // Ensure map is initialized whenever modal opens
            $('#returnReservationModal').on('shown.bs.modal', function() {
                // Show immediate fallback content
                const modalMapElement = document.getElementById('modal-map');
                if (modalMapElement) {
                    modalMapElement.innerHTML =
                        '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #666; background-color: #f0f0f0;"><i class="bi bi-arrow-clockwise" style="font-size: 2rem; margin-right: 10px; animation: spin 1s linear infinite;"></i>Updating map...</div>';
                }

                // Small delay to ensure DOM is ready
                setTimeout(function() {
                    const pickupLocation = $('#return-pickup-location').val();
                    const dropoffLocation = $('#return-dropoff-location').val();

                    waitForGoogleMaps(function() {
                        if (pickupLocation && dropoffLocation) {
                            drawMapByAddresses(pickupLocation, dropoffLocation);
                        } else {
                            initializeEmptyModalMap();
                        }
                    });
                }, 100);

                // Add event listeners for location changes
                setupLocationChangeListeners();
            });

            // Setup location change listeners for real-time map updates
            function setupLocationChangeListeners() {
                const pickupInput = document.getElementById('return-pickup-location');
                const dropoffInput = document.getElementById('return-dropoff-location');

                if (pickupInput && dropoffInput) {
                    // Debounce function to avoid too many map updates
                    let debounceTimer;
                    const debounceMapUpdate = function() {
                        clearTimeout(debounceTimer);
                        debounceTimer = setTimeout(function() {
                            updateModalMap();
                        }, 500); // Wait 500ms after user stops typing
                    };

                    // Add input event listeners
                    pickupInput.addEventListener('input', debounceMapUpdate);
                    dropoffInput.addEventListener('input', debounceMapUpdate);

                    // Also listen for blur events (when user leaves the field)
                    pickupInput.addEventListener('blur', updateModalMap);
                    dropoffInput.addEventListener('blur', updateModalMap);

                    // Setup Google Places autocomplete for better location handling
                    setupGooglePlacesAutocomplete();
                }
            }

            // Setup Google Places autocomplete for location inputs
            function setupGooglePlacesAutocomplete() {
                if (typeof google !== 'undefined' && google.maps && google.maps.places) {
                    const pickupInput = document.getElementById('return-pickup-location');
                    const dropoffInput = document.getElementById('return-dropoff-location');

                    if (pickupInput && dropoffInput) {
                        // Create autocomplete for pickup location
                        const pickupAutocomplete = new google.maps.places.Autocomplete(pickupInput);
                        pickupAutocomplete.addListener('place_changed', function() {
                            setTimeout(updateModalMap, 100); // Small delay to ensure value is set
                        });

                        // Create autocomplete for dropoff location
                        const dropoffAutocomplete = new google.maps.places.Autocomplete(dropoffInput);
                        dropoffAutocomplete.addListener('place_changed', function() {
                            setTimeout(updateModalMap, 100); // Small delay to ensure value is set
                        });
                    }
                }
            }

            // Update modal map based on current input values
            function updateModalMap() {
                const pickupLocation = $('#return-pickup-location').val().trim();
                const dropoffLocation = $('#return-dropoff-location').val().trim();

                // Show loading indicator
                const modalMapElement = document.getElementById('modal-map');
                if (modalMapElement) {
                    modalMapElement.innerHTML =
                        '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #666; background-color: #f0f0f0;"><i class="bi bi-arrow-clockwise" style="font-size: 2rem; margin-right: 10px; animation: spin 1s linear infinite;"></i>Updating map...</div>';
                }

                if (pickupLocation && dropoffLocation) {
                    waitForGoogleMaps(function() {
                        drawMapByAddresses(pickupLocation, dropoffLocation);
                    });
                } else if (pickupLocation || dropoffLocation) {
                    // If only one location is filled, show a centered map
                    waitForGoogleMaps(function() {
                        initializeEmptyModalMap();
                    });
                } else {
                    // If no locations, show empty state
                    if (modalMapElement) {
                        modalMapElement.innerHTML =
                            '<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: #666; background-color: #f0f0f0;"><i class="bi bi-geo-alt" style="font-size: 2rem; margin-right: 10px;"></i>Enter pickup and dropoff locations to see the route</div>';
                    }
                }
            }

            // Edit return service button
            $('#edit-return-service').on('click', function() {
                // Pre-fill modal with existing data
                $('#return-pickup-location').val(@json(session('return_pickup_location')));
                $('#return-dropoff-location').val(@json(session('return_dropoff_location')));
                $('#return-pickup-date').val(@json(session('return_pickup_date')));
                $('#return-pickup-time').val(@json(session('return_pickup_time')));
                $('#return-flight-number').val(@json(session('return_flight_number')));
                $('#return-flight-details').val(@json(session('return_flight_details')));
                $('#return-no-flight-info').prop('checked', @json(session('return_no_flight_info') == 1));
                $('#return-vehicle-id').val(@json(session('return_vehicle_id')));

                // Mark as editing existing service
                returnServiceWasChecked = true;
                returnServiceSaved = false;

                $('#returnReservationModal').modal('show');

                // Initialize map after modal is shown
                $('#returnReservationModal').on('shown.bs.modal', function() {
                    const pickupLocation = $('#return-pickup-location').val();
                    const dropoffLocation = $('#return-dropoff-location').val();
                    waitForGoogleMaps(function() {
                        if (pickupLocation && dropoffLocation) {
                            drawMapByAddresses(pickupLocation, dropoffLocation);
                        } else {
                            initializeEmptyModalMap();
                        }
                    });
                });
            });

            // Handle return service form submission
            let returnServiceSaved = false;
            $('#return-service-form').on('submit', function(e) {
                e.preventDefault();

                // Get form data
                const formData = new FormData(this);

                // Add return price data if available
                const returnPrice = sessionStorage.getItem('return_price');
                if (returnPrice) {
                    formData.append('return_price', returnPrice);
                    formData.append('return_base_fare', sessionStorage.getItem('return_base_fare') || '0');
                    formData.append('return_per_km_rate', sessionStorage.getItem('return_per_km_rate') ||
                        '0');
                    formData.append('return_km', sessionStorage.getItem('return_km') || '0');
                }

                // Show loading state
                $('#save-return-service').prop('disabled', true).text('Saving...');

                // Submit form via AJAX
                jQuery.ajax({
                    url: '/save-return-service',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.success) {
                            returnServiceSaved = true;

                            // Update the display section with new data
                            updateReturnServiceDisplay(response.data);

                            // Close modal
                            $('#returnReservationModal').modal('hide');

                            // Show success message
                            alert('Return service saved successfully!');
                        } else {
                            alert('Failed to save return service: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Server error occurred while saving return service.');
                    },
                    complete: function() {
                        // Reset button state
                        $('#save-return-service').prop('disabled', false).text(
                            'Save Return Service');
                    }
                });
            });

            // Function to update return service display
            function updateReturnServiceDisplay(data) {
                // Update hidden fields in main form
                $('#hidden-return-service').val(1);
                $('#hidden-return-pickup-location').val(data.return_pickup_location);
                $('#hidden-return-dropoff-location').val(data.return_dropoff_location);
                $('#hidden-return-pickup-date').val(data.return_pickup_date);
                $('#hidden-return-pickup-time').val(data.return_pickup_time);
                $('#hidden-return-flight-number').val(data.return_flight_number);
                $('#hidden-return-flight-details').val(data.return_flight_details);
                $('#hidden-return-no-flight-info').val(data.return_no_flight_info);
                $('#hidden-return-vehicle-id').val(data.return_vehicle_id);

                // If we have return price data, update the pricing display
                if (data.return_price && parseFloat(data.return_price) > 0) {
                    updateReturnTripPricing(data);
                }

                // Calculate return trip price if vehicle is selected and no price data
                if (data.return_vehicle_id && (!data.return_price || parseFloat(data.return_price) <= 0)) {
                    calculateReturnTripPrice(data);
                }

                // Update the top area return summary (if present)
                if ($('#rs-pickup').length) {
                    $('#rs-pickup').text(data.return_pickup_location || '');
                }
                if ($('#rs-dropoff').length) {
                    $('#rs-dropoff').text(data.return_dropoff_location || '');
                }
                if ($('#rs-datetime').length) {
                    const date = data.return_pickup_date ? new Date(data.return_pickup_date) : null;
                    const time = data.return_pickup_time || '';
                    const formattedDate = date ? date.toLocaleDateString('en-US', {
                        year: 'numeric',
                        month: '2-digit',
                        day: '2-digit'
                    }) : '';
                    const formattedTime = time ? new Date('2000-01-01T' + time).toLocaleTimeString('en-US', {
                        hour12: false,
                        hour: '2-digit',
                        minute: '2-digit'
                    }) : '';
                    $('#rs-datetime').text(`${formattedDate} ${formattedTime}`.trim());
                }
                if ($('#return-vehicle-name').length) {
                    $('#return-vehicle-name').text((data.vehicle_name || '').trim() || 'Not selected');
                }
            }

            // Update return trip pricing display
            function updateReturnTripPricing(data) {
                // Show the return trip section
                jQuery('#return-trip-section').show();

                // Update return trip price
                jQuery('#return-trip-price').text(`$${parseFloat(data.return_price).toFixed(2)}`);

                // Calculate new total trip price
                const outwardPriceText = jQuery('.total-trip-price').text().replace('$', '').trim();
                const outwardPrice = parseFloat(outwardPriceText) || 0;
                const returnTripPrice = parseFloat(data.return_price) || 0;
                const totalPrice = outwardPrice + returnTripPrice;

                // Update total price in DOM
                jQuery('.total-trip-price').text(`$${totalPrice.toFixed(2)}`);

                // Store return price in session storage for form submission
                sessionStorage.setItem('return_price', data.return_price);
                sessionStorage.setItem('return_base_fare', data.return_base_fare || '0');
                sessionStorage.setItem('return_per_km_rate', data.return_per_km_rate || '0');
                sessionStorage.setItem('return_km', data.return_km || '0');
            }

            // Calculate return trip price and update total
            function calculateReturnTripPrice(data) {
                const returnData = {
                    vehicle_id: data.return_vehicle_id,
                    pickup_location: data.return_pickup_location,
                    dropoff_location: data.return_dropoff_location,
                    pickup_date: data.return_pickup_date,
                    pickup_time: data.return_pickup_time,
                    flight_number: data.return_flight_number,
                    flight_details: data.return_flight_details,
                    no_flight_info: data.return_no_flight_info,
                    _token: jQuery('meta[name="csrf-token"]').attr('content')
                };

                jQuery.ajax({
                    url: '/calculate-return-trip',
                    method: 'GET',
                    data: returnData,
                    success: function(response) {
                        if (response.success) {
                            const returnData = response.data;

                            // Show the return trip section
                            jQuery('#return-trip-section').show();

                            // Populate the DOM with return trip data
                            jQuery('#return-trip-price').text(`$${returnData.price}`);

                            // Calculate new total trip price
                            const outwardPriceText = jQuery('.total-trip-price').text().replace('$', '')
                                .trim();
                            const outwardPrice = parseFloat(outwardPriceText) || 0;
                            const returnTripPrice = parseFloat(returnData.price) || 0;
                            const totalPrice = outwardPrice + returnTripPrice;

                            // Update total price in DOM
                            jQuery('.total-trip-price').text(`$${totalPrice.toFixed(2)}`);

                            // Store return price in session for form submission
                            sessionStorage.setItem('return_price', returnData.price);
                            sessionStorage.setItem('return_base_fare', returnData.baseFare);
                            sessionStorage.setItem('return_per_km_rate', returnData.perKmRate);
                            sessionStorage.setItem('return_km', returnData.distance_km);
                        } else {
                            console.log('Return trip calculation failed:', response.message);
                        }
                    },
                    error: function(xhr) {
                        console.log('Server error occurred while calculating return trip price.');
                    }
                });
            }

            // Function to create return service display HTML
            function createReturnServiceDisplayHtml(data) {
                const date = new Date(data.return_pickup_date);
                const time = data.return_pickup_time;
                const formattedDate = date.toLocaleDateString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });
                const formattedTime = new Date('2000-01-01T' + time).toLocaleTimeString('en-US', {
                    hour: 'numeric',
                    minute: '2-digit'
                });

                return `
      <div id="return-service-details" class="mt-4 p-4 border rounded" style="background-color: #f8f9fa;">
        <div class="d-flex justify-content-between align-items-start mb-3">
          <h6 class="mb-0  font-weight-bold">Return Service Details</h6>
          <button type="button" class="btn btn-sm btn-outline-primary" id="edit-return-service">
            <i class="bi bi-pencil"></i> Edit
          </button>
        </div>
        <div class="return-inline">
          <div class="return-item">
            <div class="return-item-label">Pickup Location</div>
            <div class="return-item-value" id="rs-pickup">${data.return_pickup_location}</div>
          </div>
          <div class="return-item">
            <div class="return-item-label">Destination</div>
            <div class="return-item-value" id="rs-dropoff">${data.return_dropoff_location}</div>
          </div>
          <div class="return-item">
            <div class="return-item-label">Pick-Up Date & Time</div>
            <div class="return-item-value" id="rs-datetime">${formattedDate} ${formattedTime}</div>
          </div>
          <div class="return-item">
            <div class="return-item-label">Car Type</div>
            <div class="return-item-value" id="return-vehicle-name">${data.vehicle_name || 'Selected'}</div>
          </div>
        </div>
        ${(data.return_flight_details || data.return_flight_number) ? `
            <div class="mt-3 pt-3 border-top">
              <h6 class="mb-2 ">Flight Information</h6>
              <div class="row">
                ${data.return_flight_details ? `
            <div class="col-md-6">
              <strong>Flight Details:</strong><br>
              <span class="text-muted">${data.return_flight_details}</span>
            </div>
            ` : ''}
                ${data.return_flight_number ? `
            <div class="col-md-6">
              <strong>Flight Number:</strong><br>
              <span class="text-muted">${data.return_flight_number}</span>
            </div>
            ` : ''}
              </div>
            </div>
            ` : ''}
      </div>
    `;
            }

            // Vehicle selection in modal
            jQuery('.select-vehicle').on('click', function() {
                const vehicleId = jQuery(this).data('vehicle-id');
                const vehicleName = jQuery(this).closest('.vehical-card').find('h5').text();

                // Store selected vehicle
                jQuery('#return-vehicle-id').val(vehicleId);

                // Hide vehicle selection
                jQuery('.vehicle_container').addClass('hide').removeClass('show');

                // Show success message
                alert('Vehicle selected: ' + vehicleName);

                // Trigger price calculation for return trip
                const returnData = {
                    return_vehicle_id: vehicleId,
                    return_pickup_location: jQuery('#return-pickup-location').val(),
                    return_dropoff_location: jQuery('#return-dropoff-location').val(),
                    return_pickup_date: jQuery('#return-pickup-date').val(),
                    return_pickup_time: jQuery('#return-pickup-time').val(),
                    return_flight_number: jQuery('#return-flight-number').val(),
                    return_flight_details: jQuery('#return-flight-details').val(),
                    return_no_flight_info: jQuery('#return-no-flight-info').is(':checked') ? 1 : 0
                };

                calculateReturnTripPrice(returnData);
            });

            // flatpickr("#return-pickup-date", {
            //     dateFormat: "m-d-Y",
            //     altInput: false
            // });

            // // Time Picker
            // flatpickr("#return-pickup-time", {
            //     enableTime: true,
            //     noCalendar: true,
            //     dateFormat: "h:i", // 12hr format with AM/PM
            //     time_24hr: true
            // });

        });
    </script>
    <script>
        // Toggle fake placeholder visibility based on value
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.ph-wrap').forEach(function(wrap) {
                const input = wrap.querySelector('input');
                if (!input) return;
                const sync = () => {
                    if (input.value && String(input.value).trim() !== '') {
                        wrap.classList.add('has-value');
                    } else {
                        wrap.classList.remove('has-value');
                    }
                };
                sync();
                input.addEventListener('input', sync);
                input.addEventListener('change', sync);
                input.addEventListener('blur', sync);
            });
        });
    </script>
    @endsection
@endsection
