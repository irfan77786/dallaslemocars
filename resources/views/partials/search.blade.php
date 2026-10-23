@php
$isHourly = session('service_type') === 'hourlyHire';
$tabSuffix = $id_suffix ?? '';
@endphp
<div class="search-tab-wrap">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ !$isHourly ? 'active' : 'inactive-tab' }} text-center pt-0 sformlink"
                data-bs-toggle="tab"
                href="#place{{ $tabSuffix }}">POINT TO POINT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $isHourly ? 'active' : 'inactive-tab' }} text-center pt-0 sformlink"
                data-bs-toggle="tab"
                href="#event{{ $tabSuffix }}">HOURLY</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Point to Point -->
        <div class="tab-pane container p-0 {{ !$isHourly ? 'active show' : '' }}" id="place{{ $tabSuffix }}">
            <div class="search-form-box">
                <form class="search-form loader-form" action="{{ url('/booking/point-to-point') }}" method="POST">
                    @csrf
                    <input type="hidden" name="is_airport" id="is-airport{{ $tabSuffix }}"
                        value="{{ session('is_airport') ?? 0 }}">

                    <!-- Pick-up Location -->
                    <div class="floating-bordered-input position-relative">
                        <span class="floating-label">Pick-up Location</span>
                        <span class="input-icon-left"><svg class="ic" width="20" height="20" aria-hidden="true"><use href="#ic-pin"></use></svg></span>

                        <input type="text" name="pickup_location" id="pickup-location{{ $tabSuffix }}"
                            class="form-control" value="{{ session('pickup_location') }}" placeholder=" " required
                            autocomplete="off">
                        <span id="swap-locations{{ $tabSuffix }}" class="swap-locations"
                           >
                            <svg class="ic ic-swap" width="18" height="18" aria-hidden="true"><use href="#ic-swap"></use></svg>
                        </span>
                        <!-- Suggestions -->
                        <div id="pickup-suggestions{{ $tabSuffix }}" class="location-suggestions"></div>
                    </div>


                    <!-- Drop-off Location -->
                    <div class="floating-bordered-input position-relative">
                        <span class="floating-label">Destination</span>
                        <span class="input-icon-left"><svg class="ic" width="20" height="20" aria-hidden="true"><use href="#ic-pin"></use></svg></span>

                        <input type="text" name="dropoff_location" id="dropoff-location{{ $tabSuffix }}"
                            class="form-control" value="{{ session('dropoff_location') }}" placeholder=" " required
                            autocomplete="off">

                        <!-- Suggestions -->
                        <div id="dropoff-suggestions{{ $tabSuffix }}" class="location-suggestions"></div>
                    </div>

                    <div class="row g-2">
                        <div class="col-6">
                            <div class="mb-1 floating-bordered-input position-relative">
                                <span class="floating-label">Pick-up Date</span>
                                <span class="input-icon-left">
                                    <svg class="ic" width="18" height="18" aria-hidden="true"><use href="#ic-calendar"></use></svg>
                                </span>
                                <input type="date" id="pickup-date{{ $tabSuffix }}" name="pickup_date"
                                    class="form-control" value="{{ session('pickup_date') ?? '' }}" required>
                                @error('pickup_date')
                                <div class="mt-1 text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1 floating-bordered-input position-relative">
                                <span class="floating-label">Pick-up Time</span>
                                <span class="input-icon-left">
                                    <svg class="ic" width="18" height="18" aria-hidden="true"><use href="#ic-clock"></use></svg>
                                </span>
                                <input type="time" id="pickup-time{{ $tabSuffix }}" name="pickup_time"
                                    class="form-control" value="{{ session('pickup_time') ?? '' }}" required>
                                @error('pickup_time')
                                <div class="mt-1 text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-1 d-flex align-items-center">
                        <div class="form-check me-2">
                            <input type="checkbox" name="round_trip" id="round-trip{{ $tabSuffix }}"
                                class="form-check-input round-trip-check"
                                @session('round_trip') checked @endsession>
                            <label for="round-trip{{ $tabSuffix }}" class="mb-2 ml-2 form-check-label ms-2 round-trip-label">
                                Add a return Trip
                            </label>
                        </div>
                    </div>

                    <div class="return-trip">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="mb-1 floating-bordered-input position-relative">
                                    <span class="floating-label">Return Trip Pick-up Date</span>
                                    <span class="input-icon-left">
                                        <svg class="ic" width="18" height="18" aria-hidden="true"><use href="#ic-calendar"></use></svg>
                                    </span>
                                    <input type="date" id="return-date{{ $tabSuffix }}" name="return_date"
                                        class="form-control" value="{{ session('return_date') ?? '' }}" placeholder=" ">
                                    @error('return_date')
                                    <div class="mt-1 text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1 floating-bordered-input position-relative">
                                    <span class="floating-label">Return Trip Pick-up Time</span>
                                    <span class="input-icon-left">
                                        <svg class="ic" width="18" height="18" aria-hidden="true"><use href="#ic-clock"></use></svg>
                                    </span>
                                    <input type="time" id="return-time{{ $tabSuffix }}" name="return_time"
                                        class="form-control"
                                        value="{{ session('return_time') ? \Carbon\Carbon::parse(session('return_time'))->format('H:i') : '' }}"
                                        placeholder=" ">
                                    @error('return_time')
                                    <div class="mt-1 text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <button type="submit" class="btn btn-primary w-100 search_btn point-button"
                       >
                        Get My Prices
                        <svg class="ic" width="14" height="14" aria-hidden="true"><use href="#ic-arrow"></use></svg>
                    </button>

                </form>
            </div>
        </div>

        <!-- Hourly Hire -->
        <div class="tab-pane container p-0 {{ $isHourly ? 'active show' : '' }}" id="event{{ $tabSuffix }}">
            <div class="search-form-box">
                <form class="search-form loader-form" action="{{ url('/booking/hourly-hire') }}" method="POST">
                    @csrf
                    <!-- Pick-up Location (Hourly) -->
                    <div class="floating-bordered-input position-relative">
                        <span class="floating-label">Pick-up Location</span>
                        <span class="input-icon-left"><svg class="ic" width="20" height="20" aria-hidden="true"><use href="#ic-pin"></use></svg></span>

                        <input type="text" name="pickup_location_hourly" id="pickup-location-hourly{{ $tabSuffix }}"
                            class="form-control" value="{{ session('pickup_location', '') }}" placeholder=" " required
                            autocomplete="off">

                        <!-- Suggestions -->
                        <div id="pickup-location-hourly-suggestions{{ $tabSuffix }}" class="location-suggestions"></div>
                    </div>


                    <!-- Select Hours -->
                    <div class="floating-bordered-input position-relative rlx-theme">
                        <span class="floating-label">Select Duration</span>
                        <span class="input-icon-left"><svg class="ic" width="16" height="16" aria-hidden="true"><use href="#ic-duration"></use></svg></span>

                        <div class="rlx-select" id="rlx-hours{{ $tabSuffix }}" data-name="select_hours"
                            data-initial="{{ session('select_hours') ?? '' }}">
                            <button type="button" class="rlx-trigger" aria-haspopup="listbox" aria-expanded="false">
                                <span class="rlx-value">{{ session('select_hours') ? session('select_hours').'
                                    hour'.(session('select_hours') > 1 ? 's' : '') : '' }}</span>
                                <svg class="ic rlx-arrow" width="16" height="16" aria-hidden="true"><use href="#ic-caret"></use></svg>
                            </button>
                            <ul class="rlx-list" role="listbox" tabindex="-1">
                                @foreach (range(3, 12) as $hour)
                                <li role="option"
                                    class="rlx-option {{ session('select_hours') == $hour ? 'selected' : '' }}"
                                    aria-selected="{{ session('select_hours') == $hour ? 'true' : 'false' }}"
                                    data-value="{{ $hour }}">
                                    {{ $hour }} hour{{ $hour > 1 ? 's' : '' }}
                                </li>
                                @endforeach
                            </ul>
                            <input type="hidden" name="select_hours" value="{{ session('select_hours') ?? '' }}">
                        </div>
                    </div>


                    <div class="row g-2">
                        <div class="col-6">
                            <div class="mb-1 floating-bordered-input position-relative">
                                <span class="floating-label">Pick-up Date</span>
                                <span class="input-icon-left">
                                    <svg class="ic" width="18" height="18" aria-hidden="true"><use href="#ic-calendar"></use></svg>
                                </span>
                                <input type="date" name="pickup_date" id="pickup-date-hourly{{ $tabSuffix }}"
                                    class="form-control" value="{{ session('pickup_date') ?? '' }}" required>
                                @error('pickup_date')
                                <div class="mt-1 text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-1 floating-bordered-input position-relative">
                                <span class="floating-label">Pick-up Time</span>
                                <span class="input-icon-left">
                                    <svg class="ic" width="18" height="18" aria-hidden="true"><use href="#ic-clock"></use></svg>
                                </span>
                                <input type="time" name="pickup_time" id="pickup-time-hourly{{ $tabSuffix }}"
                                    class="form-control" value="{{ session('pickup_time') ?? '' }}" required>
                                @error('pickup_time')
                                <div class="mt-1 text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary w-100 search_btn point-button"
                       >
                        Get My Prices
                        <svg class="ic" width="14" height="14" aria-hidden="true"><use href="#ic-arrow"></use></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>



