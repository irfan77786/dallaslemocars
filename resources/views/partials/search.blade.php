@php
    $isHourly = session('service_type') === 'hourlyHire';
@endphp
<div class="search-tab-wrap">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" style="padding-left: 18px; padding-right: 18px; padding-bottom: 10px;">
        <li class="nav-item" style="flex: 1">
            <a class="nav-link {{ !$isHourly ? 'active' : '' }} text-center pt-0 sformlink" style="font-size: 13px; color: #757575" data-toggle="tab"
                href="#place">Point to Point</a>
        </li>
        <li class="nav-item" style="flex: 1">
            <a class="nav-link {{ $isHourly ? 'active' : '' }} text-center pt-0 sformlink" style="font-size: 13px; color: #757575"
                data-toggle="tab" href="#event">Hourly</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Point to Point -->
        <div class="tab-pane container {{ !$isHourly ? 'active show' : '' }}" id="place">
            <div class="search-form-box">
                <form class="search-form loader-form" action="{{ url('/booking/point-to-point') }}" method="POST">
                    @csrf
                    <input type="hidden" name="is_airport" id="is-airport" value="{{ session('is_airport') ?? 0 }}">

                    <!-- Pick-up Location -->
                    <div class="floating-bordered-input mb-[10px] position-relative">
                        <span class="floating-label">Pick-up Location</span>
                        <span class="input-icon-left"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#757575" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg></span>

                        <input type="text" name="pickup_location" id="pickup-location" class="form-control"
                            value="{{ session('pickup_location') }}" placeholder=" " required autocomplete="off">
                        <span id="swap-locations" class="swap-locations" style="cursor: pointer; position: absolute; right: 0; top: 27%; z-index: 1; background: white; padding: 0 10px;">
                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(270)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 3.93a.75.75 0 0 1 1.177-.617l4.432 3.069a.75.75 0 0 1 0 1.233l-4.432 3.069A.75.75 0 0 1 16 10.067V8H4a1 1 0 0 1 0-2h12V3.93zm-9.177 9.383A.75.75 0 0 1 8 13.93V16h12a1 1 0 1 1 0 2H8v2.067a.75.75 0 0 1-1.177.617l-4.432-3.069a.75.75 0 0 1 0-1.233l4.432-3.069z" fill="#757575"></path></g></svg>
                        </span>
                        <!-- Suggestions -->
                        <div id="pickup-suggestions" class="location-suggestions"></div>
                    </div>


                    <!-- Drop-off Location -->
                    <div class="floating-bordered-input mb-[10px] position-relative">
                        <span class="floating-label">Destination</span>
                        <span class="input-icon-left"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#757575" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg></span>

                        <input type="text" name="dropoff_location" id="dropoff-location" class="form-control"
                            value="{{ session('dropoff_location') }}" placeholder=" " required autocomplete="off">

                        <!-- Suggestions -->
                        <div id="dropoff-suggestions" class="location-suggestions"></div>
                    </div>


                    <div class="floating-bordered-input mb-1 position-relative pl-3">
                        <input type="text" name="pickup_datetime" id="pickup-datetime" class="form-control flatpickr"
                            value="{{ session('pickup_datetime') ? \Carbon\Carbon::parse(session('pickup_datetime'))->format('Y-m-d H:i') : '' }}"
                            placeholder="Pick-up Data / Time" required>
                        <span class="input-icon-right"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="31" height="31">
                            <path d="M0 0 C10.23 0 20.46 0 31 0 C31 10.23 31 20.46 31 31 C20.77 31 10.54 31 0 31 C0 20.77 0 10.54 0 0 Z " fill="#FEFEFE" transform="translate(0,0)"/>
                            <path d="M0 0 C0.66 0 1.32 0 2 0 C2 0.66 2 1.32 2 2 C4.64 2 7.28 2 10 2 C10 1.34 10 0.68 10 0 C10.66 0 11.32 0 12 0 C12 0.66 12 1.32 12 2 C12.99 2.33 13.98 2.66 15 3 C15.02684679 5.64590014 15.04676357 8.29153096 15.0625 10.9375 C15.07087891 11.69224609 15.07925781 12.44699219 15.08789062 13.22460938 C15.09652441 15.14994313 15.05224333 17.07535581 15 19 C13.17883997 20.82116003 10.69328236 20.1323508 8.2734375 20.13671875 C7.52320313 20.13285156 6.77296875 20.12898438 6 20.125 C4.87464844 20.13080078 4.87464844 20.13080078 3.7265625 20.13671875 C-1.87338947 20.12661053 -1.87338947 20.12661053 -3 19 C-3.07319621 16.30345146 -3.09242537 13.63308542 -3.0625 10.9375 C-3.05798828 10.17888672 -3.05347656 9.42027344 -3.04882812 8.63867188 C-3.0370068 6.75908129 -3.01907078 4.87953101 -3 3 C-2.01 2.67 -1.02 2.34 0 2 C0 1.34 0 0.68 0 0 Z " fill="#757575" transform="translate(9,6)"/>
                            <path d="M0 0 C4.62 0 9.24 0 14 0 C14 3.63 14 7.26 14 11 C9.38 11 4.76 11 0 11 C0 7.37 0 3.74 0 0 Z " fill="#FFFFFF" transform="translate(8,13)"/>
                            <path d="M0 0 C1.65 0 3.3 0 5 0 C5 1.65 5 3.3 5 5 C3.35 5 1.7 5 0 5 C0 3.35 0 1.7 0 0 Z " fill="#757575" transform="translate(15,17)"/>
                            </svg>
                        </span>
                    </div>
                    <style>
                        .input-icon-right {
                            position: absolute;
                            right: 15px;
                            top: 50%;
                            transform: translateY(-50%);
                            color: #757575;
                        }
                        .flatpickr-input {
                            padding-right: 40px !important;
                        }
                    </style>

                    <button type="submit" class="btn w-100 search_btn mt-4"
                        style="text-transform: uppercase; background: linear-gradient(to right, #1A6982, #1B9CCC); letter-spacing: 2px;">Get
                        My Prices
                        <i class="bi bi-arrow-right" style="font-size: 20px; margin: 2px;"></i></button>
                </form>
            </div>
        </div>

        <!-- Hourly Hire -->
        <div class="tab-pane container {{ $isHourly ? 'active show' : '' }}" id="event">
            <div class="search-form-box">
                <form class="search-form loader-form" action="{{ url('/booking/hourly-hire') }}" method="POST">
                    @csrf
                    <!-- Pick-up Location (Hourly) -->
                    <div class="floating-bordered-input mb-[10px] position-relative">
                        <span class="floating-label">Pick-up Location</span>
                        <span class="input-icon-left"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#757575" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg></span>

                        <input type="text" name="pickup_location_hourly" id="pickup-location-hourly"
                            class="form-control" value="{{ session('pickup_location', '') }}" placeholder=" " required
                            autocomplete="off">

                        <!-- Suggestions -->
                        <div id="pickup-location-hourly-suggestions" class="location-suggestions"></div>
                    </div>


                    <!-- Select Hours -->
                    <div class="floating-bordered-input mb-[10px] position-relative" style="padding-right: 10px;">
                        <span class="floating-label">Select Duration</span>
                        <span class="input-icon-left" style="margin-top: 4px;"><i class="bi bi-clock-fill"></i></span>

                        <select name="select_hours" id="select-hours" class="form-control" required>
                            <option value=""></option>
                            @foreach (range(3, 24) as $hour)
                                <option value="{{ $hour }}"
                                    {{ session('select_hours') == $hour ? 'selected' : '' }}>
                                    {{ $hour }} hour{{ $hour > 1 ? 's' : '' }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <!-- Pick-up Date & Time (Hourly) -->
                    <div class="floating-bordered-input mb-1 position-relative pl-3">
                        <input type="text" name="pickup_datetime_hourly" id="pickup-datetime-hourly"
                            class="form-control flatpickr" placeholder="Pick-up Data / Time"
                            value="{{ session('pickup_datetime_hourly') ? \Carbon\Carbon::parse(session('pickup_datetime_hourly'))->format('Y-m-d H:i') : '' }}"
                            required>
                        <span class="input-icon-right"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="31" height="31">
                            <path d="M0 0 C10.23 0 20.46 0 31 0 C31 10.23 31 20.46 31 31 C20.77 31 10.54 31 0 31 C0 20.77 0 10.54 0 0 Z " fill="#FEFEFE" transform="translate(0,0)"/>
                            <path d="M0 0 C0.66 0 1.32 0 2 0 C2 0.66 2 1.32 2 2 C4.64 2 7.28 2 10 2 C10 1.34 10 0.68 10 0 C10.66 0 11.32 0 12 0 C12 0.66 12 1.32 12 2 C12.99 2.33 13.98 2.66 15 3 C15.02684679 5.64590014 15.04676357 8.29153096 15.0625 10.9375 C15.07087891 11.69224609 15.07925781 12.44699219 15.08789062 13.22460938 C15.09652441 15.14994313 15.05224333 17.07535581 15 19 C13.17883997 20.82116003 10.69328236 20.1323508 8.2734375 20.13671875 C7.52320313 20.13285156 6.77296875 20.12898438 6 20.125 C4.87464844 20.13080078 4.87464844 20.13080078 3.7265625 20.13671875 C-1.87338947 20.12661053 -1.87338947 20.12661053 -3 19 C-3.07319621 16.30345146 -3.09242537 13.63308542 -3.0625 10.9375 C-3.05798828 10.17888672 -3.05347656 9.42027344 -3.04882812 8.63867188 C-3.0370068 6.75908129 -3.01907078 4.87953101 -3 3 C-2.01 2.67 -1.02 2.34 0 2 C0 1.34 0 0.68 0 0 Z " fill="#757575" transform="translate(9,6)"/>
                            <path d="M0 0 C4.62 0 9.24 0 14 0 C14 3.63 14 7.26 14 11 C9.38 11 4.76 11 0 11 C0 7.37 0 3.74 0 0 Z " fill="#FFFFFF" transform="translate(8,13)"/>
                            <path d="M0 0 C1.65 0 3.3 0 5 0 C5 1.65 5 3.3 5 5 C3.35 5 1.7 5 0 5 C0 3.35 0 1.7 0 0 Z " fill="#757575" transform="translate(15,17)"/>
                            </svg>
                        </span>
                    </div>

                    <div class="d-flex align-items-center mb-2">
                        <div class="form-check me-2">
                            <input type="checkbox" name="round_trip" id="round-trip" class="form-check-input"
                                style="height: 18px; width: 18px; cursor: pointer; margin-top: 10px;">
                            <label for="round-trip" class="form-check-label ms-2 ml-2" style="cursor: pointer; font-size: 18px; margin-top: 0.4rem; color: black !important; font-weight: 100">
                                Add a return Trip
                            </label>
                        </div>
                    </div>

                    <div class="floating-bordered-input mb-1 position-relative return-trip pl-3" style="display: none;">
                        <input type="text" name="return_datetime_hourly" id="return-datetime-hourly"
                            class="form-control flatpickr" placeholder="Return Trip Pick-up Data / Time"
                            value="{{ session('return_datetime_hourly') ? \Carbon\Carbon::parse(session('return_datetime_hourly'))->format('Y-m-d H:i') : '' }}"
                            required>
                        <span class="input-icon-right"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="31" height="31">
                            <path d="M0 0 C10.23 0 20.46 0 31 0 C31 10.23 31 20.46 31 31 C20.77 31 10.54 31 0 31 C0 20.77 0 10.54 0 0 Z " fill="#FEFEFE" transform="translate(0,0)"/>
                            <path d="M0 0 C0.66 0 1.32 0 2 0 C2 0.66 2 1.32 2 2 C4.64 2 7.28 2 10 2 C10 1.34 10 0.68 10 0 C10.66 0 11.32 0 12 0 C12 0.66 12 1.32 12 2 C12.99 2.33 13.98 2.66 15 3 C15.02684679 5.64590014 15.04676357 8.29153096 15.0625 10.9375 C15.07087891 11.69224609 15.07925781 12.44699219 15.08789062 13.22460938 C15.09652441 15.14994313 15.05224333 17.07535581 15 19 C13.17883997 20.82116003 10.69328236 20.1323508 8.2734375 20.13671875 C7.52320313 20.13285156 6.77296875 20.12898438 6 20.125 C4.87464844 20.13080078 4.87464844 20.13080078 3.7265625 20.13671875 C-1.87338947 20.12661053 -1.87338947 20.12661053 -3 19 C-3.07319621 16.30345146 -3.09242537 13.63308542 -3.0625 10.9375 C-3.05798828 10.17888672 -3.05347656 9.42027344 -3.04882812 8.63867188 C-3.0370068 6.75908129 -3.01907078 4.87953101 -3 3 C-2.01 2.67 -1.02 2.34 0 2 C0 1.34 0 0.68 0 0 Z " fill="#757575" transform="translate(9,6)"/>
                            <path d="M0 0 C4.62 0 9.24 0 14 0 C14 3.63 14 7.26 14 11 C9.38 11 4.76 11 0 11 C0 7.37 0 3.74 0 0 Z " fill="#FFFFFF" transform="translate(8,13)"/>
                            <path d="M0 0 C1.65 0 3.3 0 5 0 C5 1.65 5 3.3 5 5 C3.35 5 1.7 5 0 5 C0 3.35 0 1.7 0 0 Z " fill="#757575" transform="translate(15,17)"/>
                            </svg>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 point-button"
                        style="text-transform: uppercase; background: linear-gradient(to right, #1A6982, #1B9CCC); letter-spacing: 2px;">Get
                        My
                        Prices <i class="bi bi-arrow-right" style="font-size: 20px; margin: 2px;"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        (function() {
            if (typeof window.flatpickr !== 'function') return;

            var commonOpts = {
                enableTime: true,
                dateFormat: 'Y-m-d H:i',
                minDate: 'today',
                time_24hr: false,
                defaultHour: 9,
                defaultMinute: 30,
                disableMobile: true,
                appendTo: document.body
            };

            var p2pEl = document.querySelector('#pickup-datetime');
            if (p2pEl) window.flatpickr(p2pEl, commonOpts);

            var hourlyEl = document.querySelector('#pickup-datetime-hourly');
            if (hourlyEl) window.flatpickr(hourlyEl, commonOpts);
        })();
    </script>
@endpush
