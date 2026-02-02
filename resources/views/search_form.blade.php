
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
/* Hide native date/time picker icon (2nd icon) */
input[type="date"]::-webkit-calendar-picker-indicator,
input[type="time"]::-webkit-calendar-picker-indicator {
    display: none !important;
    -webkit-appearance: none;
}
</style>
<div class="shadow-card">
  <!-- Nav tabs -->
  <ul class="mb-3 nav nav-pills" id="serviceTabs" role="tablist">
    <li class="mt-0 nav-item" role="presentation">
      <a class="nav-link {{ !$isHourly ? 'active' : '' }} m-0" id="pointToPoint-tab" data-bs-toggle="pill" href="#pointToPoint" role="tab" aria-controls="pointToPoint" aria-selected="true">Point to Point</a>
    </li>
    <li class="mt-0 nav-item" role="presentation">
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
        <div class="mb-1 input-group-container">
          <div class="icon-container"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-location" class="form-label">Pick-up Location</label>
            <div class="input-group">
              <input type="text" class="form-control" value="{{ session('pickup_location') }}" name="pickup_location" id="pickup-location" placeholder="Address, airport, hotel..." onfocus="geolocate()" required>
              <ul id="pickup-suggestions" class="mt-1 shadow list-group position-absolute w-100" style="z-index:1050; max-height: 300px; overflow-y: auto;"></ul>
            </div>
          </div>
        </div>

        <!-- Drop-off Location -->
        <div class="mb-1 input-group-container">
          <div class="icon-container"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="input-text-container">
            <label for="dropoff-location" class="form-label">Destination</label>
            <div class="input-group">
              <input type="text" class="form-control" value="{{ session('dropoff_location') }}" name="dropoff_location" id="dropoff-location" placeholder="Address, airport, hotel..." onfocus="geolocate()" required>
              <ul id="dropoff-suggestions" class="mt-1 shadow list-group position-absolute w-100" style="z-index:1050; max-height: 300px; overflow-y: auto;"></ul>
              <input type="hidden" id="dropoff-is-airport" />
            </div>
          </div>
        </div>

        <!-- Pick-Up Date and Time -->
        <div class="row g-2">
          <div class="col-6">
            <div class="mb-1 input-group-container">
              <div class="icon-container"><i class="bi bi-calendar-fill"></i></div>
              <div class="input-text-container">
                <label for="pickup-date" class="form-label">Pick-up Date</label>
                <div class="input-group">
                  <input
                    type="date"
                    min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                    class="form-control"
                    value="{{ session('pickup_date', '') }}"
                    name="pickup_date"
                    id="pickup-date"
                    required>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="mb-1 input-group-container">
              <div class="icon-container"><i class="bi bi-clock-fill"></i></div>
              <div class="input-text-container">
                <label for="pickup-time" class="form-label" style="margin-bottom: 4px;">Pick-up Time</label>
                <div class="input-group">
                    <input
                      type="time"
                      class="form-control"
                      value="{{ session('pickup_time') ?? '' }}"
                      name="pickup_time"
                      id="pickup-time"
                      required
                    >
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="mb-1 text-left">
          <p class="mt-2 mb-2 text-center small text-muted">Chauffeur will wait 15 minutes free of charge</p>
          <button type="submit" class="btn btn-primary w-100 search_btn">GET MY PRICES</button>
        </div>
      </form>
    </div>

    <!-- Hourly Hire -->
    <div class="tab-pane fade {{ $isHourly ? 'show active' : '' }}" id="hourlyHire" role="tabpanel" aria-labelledby="hourlyHire-tab">
      <form class="loader-form" id="hourForm" action="/booking/hourly-hire/" method="POST">
        @csrf

        <!-- Pick-up Location -->
        <div class="mb-1 input-group-container">
          <div class="icon-container"><i class="bi bi-geo-alt-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-location-hourly" class="form-label">Pick-up Location</label>
            <div class="input-group">
              <input type="hidden" name="is_airport_hourly" id="is-airport_hourly" value="{{ session('is_airport') ?? 0 }}">
              <input type="text" class="form-control" value="{{ session('pickup_location', '') }}" name="pickup_location_hourly" id="pickup-location-hourly" placeholder="Address, airport, hotel..." onFocus="geolocate()" required>
              <ul id="pickup-location-hourly-suggestions" class="mt-1 shadow list-group position-absolute w-100" style="z-index: 1050; max-height: 300px; overflow-y: auto;"></ul>
            </div>
          </div>
        </div>

        <!-- Select Hours -->
        <div class="mb-1 input-group-container">
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
        <div class="mb-1 input-group-container">
          <div class="icon-container"><i class="bi bi-calendar-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-date-hourly" class="form-label">Pick-up Date</label>
            <div class="input-group">
              <input
                type="date"
                min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                class="form-control"
                value="{{ session('pickup_date', '') }}"
                name="pickup_date"
                id="pickup-date-hourly"
                required>
            </div>
          </div>
        </div>

        <!-- Pick-Up Time -->
        <div class="input-group-container" style="margin-bottom: 0px !important;">
          <div class="icon-container"><i class="bi bi-clock-fill"></i></div>
          <div class="input-text-container">
            <label for="pickup-time-hourly" class="form-label">Pick-up Time</label>
            <div class="input-group">
              <input type="time" class="form-control" name="pickup_time" value="{{ session('pickup_time') ?? '' }}" id="pickup-time-hourly" required>
            </div>
          </div>
        </div>

        <!-- Submit -->
        <div class="mb-1 text-left">
          <p class="mt-2 mb-2 text-center small text-muted">Chauffeur will wait 15 minutes free of charge</p>
          <button type="submit" class="btn btn-primary w-100 search_btn">GET MY PRICES</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /tab-content -->
</div>
<script>
  window.addEventListener('DOMContentLoaded', function () {
    function enforceBookingRestrictions(dateId, timeId) {
        const dateInput = document.getElementById(dateId);
        const timeInput = document.getElementById(timeId);
        if (!dateInput || !timeInput) return;

        function updateRestrictions() {
            const now = new Date();
            // Add 2 hours buffer
            now.setHours(now.getHours() + 2);

            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const minDateStr = `${year}-${month}-${day}`;

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const minTimeStr = `${hours}:${minutes}`;

            // Set min date
            dateInput.min = minDateStr;

            // If current date value is invalid or empty, set to min date
            if (!dateInput.value || dateInput.value < minDateStr) {
                dateInput.value = minDateStr;
            }

            // Time restriction logic
            if (dateInput.value === minDateStr) {
                timeInput.min = minTimeStr;
                // If current time value is invalid or empty, set to min time
                if (!timeInput.value || timeInput.value < minTimeStr) {
                     timeInput.value = minTimeStr;
                }
            } else {
                timeInput.removeAttribute('min');
                // If empty, set a default time (e.g., 12:00)
                if (!timeInput.value) {
                    timeInput.value = "12:00";
                }
            }
        }

        // Run on load
        updateRestrictions();

        // Run on date change
        dateInput.addEventListener('change', updateRestrictions);

        // Optional: Update periodically to handle time passing while page is open
        setInterval(updateRestrictions, 60000);
    }

    enforceBookingRestrictions('pickup-date', 'pickup-time');
    enforceBookingRestrictions('pickup-date-hourly', 'pickup-time-hourly');
  });
</script>
