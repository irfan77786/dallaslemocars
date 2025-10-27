<style>
.mt-2 {
margin-top: 6px !important;
}

.mb-2 {
margin-bottom: 6px !important;
}
  
.ph-wrap .fake-ph {
  position: absolute !important;
  top: 50% !important;
  left: 0px !important;
  transform: translateY(-50%) !important;
  pointer-events: none !important;
  z-index: 1 !important;
}

@supports (-webkit-touch-callout: none) {
  @media screen and (max-width: 991.98px) {
    .ph-wrap .fake-ph {
      position: absolute !important;
      top: 50% !important;
      left: 2px !important;
      transform: translateY(-50%) !important;
      pointer-events: none !important;
      z-index: 1 !important;
    }
    .ph-wrap input:focus + .fake-ph,
    .ph-wrap input:valid + .fake-ph {
      display: none !important;
    }
  }
}


</style>
<div class="shadow-card">
  <!-- Nav tabs -->
  <ul class="nav nav-pills mb-3" id="serviceTabs" role="tablist">
    <li class="nav-item mt-0" role="presentation">
      <a class="nav-link {{ !$isHourly ? 'active' : '' }} m-0" id="pointToPoint-tab" data-bs-toggle="pill" href="#pointToPoint" role="tab" aria-controls="pointToPoint" aria-selected="true">Point to Point</a>
    </li>
    <li class="nav-item mt-0" role="presentation">
      <a class="nav-link {{ $isHourly ? 'active' : '' }} m-0" id="hourlyHire-tab" data-bs-toggle="pill" href="#hourlyHire" role="tab" aria-controls="hourlyHire" aria-selected="false">Hourly Hire</a>
    </li>
  </ul>
  <div class="tab-content" id="serviceTabsContent">
    <!-- Point to Point -->
    <div class="tab-pane fade {{ !$isHourly ? 'show active' : '' }}" id="pointToPoint" role="tabpanel" aria-labelledby="pointToPoint-tab">
      <form class="loader-form" action="{{ url('/booking/point-to-point') }}" method="POST">
        @csrf
        <input type="hidden" name="is_airport" id="is-airport" value="{{ session('is_airport') ?? 0 }}">

        <!-- Pick-up Location -->
        <div class="input-group-container mb-1">
          <div class="icon-container"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-location" class="form-label">Pick-up Location</label>
            <div class="input-group">
              <input type="text" class="form-control" value="{{ session('pickup_location') }}" name="pickup_location" id="pickup-location" placeholder="Address, airport, hotel..." onfocus="geolocate()" required>
              <ul id="pickup-suggestions" class="list-group position-absolute w-100 mt-1 shadow" style="z-index:1050; max-height: 300px; overflow-y: auto;"></ul>
            </div>
          </div>
        </div>

        <!-- Drop-off Location -->
        <div class="input-group-container mb-1">
          <div class="icon-container"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="input-text-container">
            <label for="dropoff-location" class="form-label">Destination</label>
            <div class="input-group">
              <input type="text" class="form-control" value="{{ session('dropoff_location') }}" name="dropoff_location" id="dropoff-location" placeholder="Address, airport, hotel..." onfocus="geolocate()" required>
              <ul id="dropoff-suggestions" class="list-group position-absolute w-100 mt-1 shadow" style="z-index:1050; max-height: 300px; overflow-y: auto;"></ul>
              <input type="hidden" id="dropoff-is-airport" />
            </div>
          </div>
        </div>

        <!-- Pick-Up Date -->
        <div class="input-group-container mb-1">
          <div class="icon-container"><i class="bi bi-calendar-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-date" class="form-label">Pick-up Date</label>
            <div class="input-group">
              <div class="ph-wrap">
                <!-- Read-only formatted display -->
                <input
                  type="text"
                  class="form-control date-display"
                  value="@if (session('pickup_date')) {{ \Carbon\Carbon::parse(session('pickup_date'))->format('D, M jS, Y') }} @endif"
                  placeholder="MM-DD-YYYY"
                  id="pickup-date-display"
                  readonly>
                <!-- Native date input: invisible but clickable -->
                <input
                  type="date"
                  min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                  class="form-control hidden-date"
                  value="{{ session('pickup_date', '') }}"
                  name="pickup_date"
                  id="pickup-date"
                  required>
                <span class="fake-ph" aria-hidden="true">MM-DD-YYYY</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pick-Up Time -->
        <div class="input-group-container" style="margin-bottom: 0 !important;">
          <div class="icon-container"><i class="bi bi-clock-fill"></i></div>

          <div class="input-text-container">
            <label for="pickup-time" class="form-label" style="margin-bottom: 4px;">Pick-up Time</label>

            <div class="input-group">
              <div class="ph-wrap" style="position: relative;">
                <input 
                  type="time" 
                  class="form-control" 
                  value="{{ session('pickup_time') ?? '' }}" 
                  name="pickup_time" 
                  id="pickup-time" 
                  required 
                  style="padding-right: 10px; position: relative; z-index: 2;"
                >
                <span 
                  class="fake-ph" 
                  aria-hidden="true" 
                  style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%); color: #aaa; pointer-events: none; z-index: 1;"
                >
                  HH:MM AM
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="text-left mb-1">
          <p class="small text-muted mb-2 mt-2 text-center">Chauffeur will wait 15 minutes free of charge</p>
          <button type="submit" class="btn btn-primary w-100 search_btn">GET MY PRICES</button>
        </div>
      </form>
    </div>

    <!-- Hourly Hire -->
    <div class="tab-pane fade {{ $isHourly ? 'show active' : '' }}" id="hourlyHire" role="tabpanel" aria-labelledby="hourlyHire-tab">
      <form class="loader-form" id="hourForm" action="/booking/hourly-hire/" method="POST">
        @csrf

        <!-- Pick-up Location -->
        <div class="input-group-container mb-1">
          <div class="icon-container"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-location-hourly" class="form-label">Pick-up Location</label>
            <div class="input-group">
              <input type="hidden" name="is_airport_hourly" id="is-airport_hourly" value="{{ session('is_airport') ?? 0 }}">
              <input type="text" class="form-control" value="{{ session('pickup_location', '') }}" name="pickup_location_hourly" id="pickup-location-hourly" placeholder="Address, airport, hotel..." onFocus="geolocate()" required>
              <ul id="pickup-location-hourly-suggestions" class="list-group position-absolute w-100 mt-1 shadow" style="z-index: 1050; max-height: 300px; overflow-y: auto;"></ul>
            </div>
          </div>
        </div>

        <!-- Select Hours -->
        <div class="input-group-container mb-1">
          <div class="icon-container"><i class="bi bi-clock-fill"></i></div>
          <div class="input-text-container">
            <label for="select-hours" class="form-label">Select Hours</label>
            <div class="input-group">
              <select class="form-control" name="select_hours" id="select-hours" required>
                <option value="">Select Hours</option>
                @foreach(range(3, 24) as $hour)
                <option value="{{ $hour }}" {{ session('select_hours') == $hour ? 'selected' : '' }}>{{ $hour }} hour{{ $hour > 1 ? 's' : '' }}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <!-- Pick-Up Date -->
        <div class="input-group-container mb-1">
          <div class="icon-container"><i class="bi bi-calendar-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-date-hourly" class="form-label">Pick-up Date</label>
            <div class="input-group">
              <div class="ph-wrap">
                <!-- Read-only formatted display -->
                <input
                  type="text"
                  class="form-control date-display"
                  value="@if (session('pickup_date')) {{ \Carbon\Carbon::parse(session('pickup_date'))->format('D, M jS, Y') }} @endif"
                  placeholder="MM-DD-YYYY"
                  id="pickup-date-hourly-display"
                  readonly>
                <!-- Native date input: invisible but clickable -->
                <input
                  type="date"
                  min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                  class="form-control hidden-date"
                  value="{{ session('pickup_date') ?? '' }}"
                  name="pickup_date"
                  id="pickup-date-hourly"
                  required>
                <span class="fake-ph" aria-hidden="true">MM-DD-YYYY</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pick-Up Time -->
        <div class="input-group-container" style="margin-bottom: 0px !important;">
          <div class="icon-container"><i class="bi bi-clock-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-time-hourly" class="form-label">Pick-up Time</label>
            <div class="input-group">
              <div class="ph-wrap">
                <input type="time" class="form-control" name="pickup_time" placeholder="HH:MM AM" value="{{ session('pickup_time') ?? '' }}" id="pickup-time-hourly" required>
                <span class="fake-ph" aria-hidden="true">HH:MM AM</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="text-left mb-1">
          <p class="small text-muted mb-2 mt-2 text-center">Chauffeur will wait 15 minutes free of charge</p>
          <button type="submit" class="btn btn-primary w-100 search_btn">GET MY PRICES</button>
        </div>
      </form>
    </div>
  </div> 
  <!-- /tab-content -->
</div>
<script>
  window.addEventListener('DOMContentLoaded', function () {
    const timeInput = document.getElementById('pickup-time-hourly');
    
    // Get current time in HH:MM format
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const currentTime = `${hours}:${minutes}`;
    
    // Set min attribute to current time
    timeInput.min = currentTime;
  });
</script>