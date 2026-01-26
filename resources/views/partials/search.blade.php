@php
    $isHourly = session('service_type') === 'hourlyHire';
    $tabSuffix = $id_suffix ?? '';
@endphp
<div class="search-tab-wrap">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" style="padding-bottom: 10px;">
        <li class="nav-item" style="flex: 1">
            <a class="nav-link {{ !$isHourly ? 'active' : 'inactive-tab' }} text-center pt-0 sformlink" style="font-size: 14px !important; font-weight: 600;" data-bs-toggle="tab"
                href="#place{{ $tabSuffix }}">POINT TO POINT</a>
        </li>
        <li class="nav-item" style="flex: 1">
            <a class="nav-link {{ $isHourly ? 'active' : 'inactive-tab' }} text-center pt-0 sformlink" style="font-size: 14px !important; font-weight: 600;"
                data-bs-toggle="tab" href="#event{{ $tabSuffix }}">HOURLY</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Point to Point -->
        <div class="tab-pane container p-0 {{ !$isHourly ? 'active show' : '' }}" id="place{{ $tabSuffix }}">
            <div class="search-form-box">
                <form class="search-form loader-form" action="{{ url('/booking/point-to-point') }}" method="POST">
                    @csrf
                    <input type="hidden" name="is_airport" id="is-airport{{ $tabSuffix }}" value="{{ session('is_airport') ?? 0 }}">

                    <!-- Pick-up Location -->
                    <div class="floating-bordered-input position-relative">
                        <span class="floating-label">Pick-up Location</span>
                        <span class="input-icon-left"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#757575" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg></span>

                        <input type="text" name="pickup_location" id="pickup-location{{ $tabSuffix }}" class="form-control"
                            value="{{ session('pickup_location') }}" placeholder=" " required autocomplete="off">
                        <span id="swap-locations{{ $tabSuffix }}" class="swap-locations" style="cursor: pointer; position: absolute; right: 0; top: 27%; z-index: 1; background: white; padding: 0 10px;">
                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(270)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 3.93a.75.75 0 0 1 1.177-.617l4.432 3.069a.75.75 0 0 1 0 1.233l-4.432 3.069A.75.75 0 0 1 16 10.067V8H4a1 1 0 0 1 0-2h12V3.93zm-9.177 9.383A.75.75 0 0 1 8 13.93V16h12a1 1 0 1 1 0 2H8v2.067a.75.75 0 0 1-1.177.617l-4.432-3.069a.75.75 0 0 1 0-1.233l4.432-3.069z" fill="#757575"></path></g></svg>
                        </span>
                        <!-- Suggestions -->
                        <div id="pickup-suggestions{{ $tabSuffix }}" class="location-suggestions"></div>
                    </div>


                    <!-- Drop-off Location -->
                    <div class="floating-bordered-input position-relative">
                        <span class="floating-label">Destination</span>
                        <span class="input-icon-left"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#757575" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg></span>

                        <input type="text" name="dropoff_location" id="dropoff-location{{ $tabSuffix }}" class="form-control"
                            value="{{ session('dropoff_location') }}" placeholder=" " required autocomplete="off">

                        <!-- Suggestions -->
                        <div id="dropoff-suggestions{{ $tabSuffix }}" class="location-suggestions"></div>
                    </div>

                    <div class="mb-1 floating-bordered-input position-relative">
                        <span class="floating-label">Pick-up Date / Time</span>

                        <span class="input-icon-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 384 432">
                                <path fill="currentColor" d="M299 240v107H192V240h107zM277 5h43v43h21q18 0 30.5 12.5T384 91v298q0 18-12.5 30.5T341 432H43q-18 0-30.5-12.5T0 389V91q0-18 12.5-30.5T43 48h21V5h43v43h170V5zm64 384V155H43v234h298z"/>
                            </svg>
                        </span>

                        <input type="text"
                            id="pickup-datetime"
                            name="pickup_datetime"
                            class="form-control"
                            value="{{ session('pickup_datetime') ? \Carbon\Carbon::parse(session('pickup_datetime'))->format('Y-m-d H:i') : '' }}"
                            required
                            placeholder=" ">

                        @error('pickup_datetime')
                            <div class="mt-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-1 d-flex align-items-center">
                        <div class="form-check me-2">
                            <input type="checkbox" name="round_trip" id="round-trip{{ $tabSuffix }}" class="form-check-input"
                                style="height: 18px; width: 18px; cursor: pointer; margin-top: 10px;" @session('round_trip') checked @endsession>
                            <label for="round-trip{{ $tabSuffix }}" class="mb-2 ml-2 form-check-label ms-2" style="cursor: pointer; font-size: 14px; margin-top: 0.4rem; color: black !important; font-weight: 400">
                                Add a return Trip
                            </label>
                        </div>
                    </div>

                    <div class="floating-bordered-input position-relative return-trip" style="display: none;">
                        <span class="floating-label">Return Trip Pick-up Date / Time</span>

                        <span class="input-icon-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 384 432">
                                <path fill="currentColor" d="M299 240v107H192V240h107zM277 5h43v43h21q18 0 30.5 12.5T384 91v298q0 18-12.5 30.5T341 432H43q-18 0-30.5-12.5T0 389V91q0-18 12.5-30.5T43 48h21V5h43v43h170V5zm64 384V155H43v234h298z"/>
                            </svg>
                        </span>

                        <input type="text"
                            name="return_datetime_hourly"
                            id="return-datetime-hourly"
                            class="form-control"
                            value="{{ session('return_datetime_hourly') ? \Carbon\Carbon::parse(session('return_datetime_hourly'))->format('Y-m-d H:i') : '' }}"
                            placeholder=" ">

                        @error('return_datetime_hourly')
                            <div class="mt-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <style>
                        .input-icon-right {
                            position: absolute;
                            right: 15px;
                            top: 50%;
                            transform: translateY(-50%);
                            color: #757575;
                        }

                        @supports (-webkit-overflow-scrolling: touch) {
                            .swap-locations {
                                transform: rotate(90deg);
                                transform-origin: 50% 50%;
                                display: inline-block;
                                -webkit-transform: rotate(90deg); /* iOS-specific */
                            }
                        }
                    </style>

<button type="submit" class="btn btn-primary w-100 search_btn point-button"
    style="text-transform: uppercase; letter-spacing: 2px;">
    Get My Prices
    <i class="fa-solid fa-arrow-right" style="font-size: 20px; margin: 2px;"></i>
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
                        <span class="input-icon-left"><svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#757575" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"></path> </g></svg></span>

                        <input type="text" name="pickup_location_hourly" id="pickup-location-hourly{{ $tabSuffix }}"
                            class="form-control" value="{{ session('pickup_location', '') }}" placeholder=" " required
                            autocomplete="off">

                        <!-- Suggestions -->
                        <div id="pickup-location-hourly-suggestions{{ $tabSuffix }}" class="location-suggestions"></div>
                    </div>


                    <!-- Select Hours -->
                    <div class="floating-bordered-input position-relative" style="padding-right: 10px;">
                        <span class="floating-label">Select Duration</span>
                        <span class="input-icon-left" style="margin-top: 4px;"><i class="bi bi-clock-fill"></i></span>

                        <select name="select_hours" id="select-hours{{ $tabSuffix }}" class="form-control" required>
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
                    <div class="mb-1 floating-bordered-input position-relative">
                        <span class="floating-label">Pick-up Date / Time</span>

                        <span class="input-icon-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 384 432">
                                <path fill="currentColor" d="M299 240v107H192V240h107zM277 5h43v43h21q18 0 30.5 12.5T384 91v298q0 18-12.5 30.5T341 432H43q-18 0-30.5-12.5T0 389V91q0-18 12.5-30.5T43 48h21V5h43v43h170V5zm64 384V155H43v234h298z"/>
                            </svg>
                        </span>

                        <input type="text"
                            name="pickup_datetime_hourly"
                            id="pickup-datetime-hourly{{ $tabSuffix }}"
                            class="form-control"
                            value="{{ session('pickup_datetime_hourly') ? \Carbon\Carbon::parse(session('pickup_datetime_hourly'))->format('Y-m-d H:i') : '' }}"
                            required
                            placeholder=" ">

                        @error('pickup_datetime_hourly')
                            <div class="mt-1 text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Spacer to match Point-to-Point form height (Hidden "Add Return Trip" equivalent) -->
                    <div class="mb-1 d-flex align-items-center" style="visibility: hidden;">
                        <div class="form-check me-2">
                            <input type="checkbox" class="form-check-input" style="height: 18px; width: 18px; margin-top: 10px;" disabled>
                            <label class="mb-2 ml-2 form-check-label ms-2" style="font-size: 16px; margin-top: 0.4rem; font-weight: 600">
                                Add a return Trip
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100"
                        style="text-transform: uppercase; letter-spacing: 2px;">Get
                        My
                        Prices <i class="fa-solid fa-arrow-right" style="font-size: 20px; margin: 2px;"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
