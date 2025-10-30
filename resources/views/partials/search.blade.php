@php
    $isHourly = session('service_type') === 'hourlyHire';
@endphp
<div class="search-tab-wrap">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" style="padding-left: 18px; padding-right: 18px; padding-bottom: 15px;">
        <li class="nav-item" style="flex: 1">
            <a class="nav-link {{ !$isHourly ? 'active' : '' }} text-center pt-0" style="font-size: 13px" data-toggle="tab" href="#place">Point to Point</a>
        </li>
        <li class="nav-item" style="flex: 1">
            <a class="nav-link {{ $isHourly ? 'active' : '' }} text-center pt-0" style="font-size: 13px" data-toggle="tab" href="#event">Hourly</a>
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
                        <span class="input-icon-left"><i class="bi bi-geo-alt-fill"></i></span>

                        <input type="text" name="pickup_location" id="pickup-location" class="form-control"
                            value="{{ session('pickup_location') }}" placeholder=" " required autocomplete="off">

                        <!-- Suggestions -->
                        <div id="pickup-suggestions" class="location-suggestions"></div>
                    </div>


                    <!-- Drop-off Location -->
                    <div class="floating-bordered-input mb-[10px] position-relative">
                        <span class="floating-label">Drop-off Location</span>
                        <span class="input-icon-left"><i class="bi bi-geo-alt-fill"></i></span>

                        <input type="text" name="dropoff_location" id="dropoff-location" class="form-control"
                            value="{{ session('dropoff_location') }}" placeholder=" " required autocomplete="off">

                        <!-- Suggestions -->
                        <div id="dropoff-suggestions" class="location-suggestions"></div>
                    </div>


                    <div class="floating-bordered-input mb-1 position-relative">
                        <span class="floating-label">Pick-up Date & Time</span>
                        <span class="input-icon-left"><i class="bi bi-calendar-date"></i></span>

                        <input type="text" name="pickup_datetime" id="pickup-datetime" class="form-control flatpickr"
                            value="{{ session('pickup_datetime') ? \Carbon\Carbon::parse(session('pickup_datetime'))->format('Y-m-d H:i') : '' }}"
                            placeholder="Select Date & Time" required>
                    </div>



                    <p class="small text-muted text-center mt-1 mb-1">Chauffeur will wait 15 minutes free of charge</p>

                    <button type="submit" class="btn w-100 search_btn" style="text-transform: uppercase; background: linear-gradient(to right, #1A6982, #1B9CCC); letter-spacing: 2px;">Get My Prices
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
                        <span class="input-icon-left"><i class="bi bi-geo-alt-fill"></i></span>

                        <input type="text" name="pickup_location_hourly" id="pickup-location-hourly"
                            class="form-control" value="{{ session('pickup_location', '') }}" placeholder=" " required
                            autocomplete="off">

                        <!-- Suggestions -->
                        <div id="pickup-location-hourly-suggestions" class="location-suggestions"></div>
                    </div>


                    <!-- Select Hours -->
                    <div class="floating-bordered-input mb-[10px] position-relative">
                        <span class="floating-label">Select Hours</span>
                        <span class="input-icon-left"><i class="bi bi-clock-fill"></i></span>

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
                    <div class="floating-bordered-input mb-1 position-relative">
                        <span class="floating-label">Pick-up Date & Time</span>
                        <span class="input-icon-left"><i class="bi bi-calendar-date"></i></span>

                        <input type="text" name="pickup_datetime_hourly" id="pickup-datetime-hourly"
                            class="form-control flatpickr"
                            placeholder="Select Date & Time"
                            value="{{ session('pickup_datetime_hourly') ? \Carbon\Carbon::parse(session('pickup_datetime_hourly'))->format('Y-m-d H:i') : '' }}"
                            required>
                    </div>


                    <p class="small text-muted text-center mt-1 mb-1">Chauffeur will wait 15 minutes free of charge</p>

                    <button type="submit" class="btn btn-primary w-100" style="text-transform: uppercase; background: linear-gradient(to right, #1A6982, #1B9CCC); letter-spacing: 2px;">Get My
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
