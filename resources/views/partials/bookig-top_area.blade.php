@php
    $currentStep = $step ?? 1;
    $steps = [
        1 => ['label' => 'Ride Info', 'route' => route('booking.form',['edit' => 1])],
        2 => ['label' => 'Vehicle Class', 'route' => session('service_type') === 'pointToPoint'
                    ? route('booking.pointToPoint.show')
                    : route('booking.hourlyHire.show')],
        3 => ['label' => 'Login', 'route' => session()->has('vehicle_id') && session()->has('calculated_price')
                    ? route('passenger.info', ['id' => session('vehicle_id'), 'price' => session('calculated_price')])
                    : null],
        4 => ['label' => 'Booking Detail', 'route' => session()->has('first_name')
                    ? url('/submit-passengerInfo/' . session('vehicle_id'))
                    : null],
        5 => ['label' => 'Payment', 'route' => null] // future step
    ];
@endphp

<style id="stepper">
.return-inline {
  display: flex;
  flex-wrap: wrap;
  gap: 10px; /* optional spacing between items */
}

.return-item {
  flex: 1 1 auto; /* allow items to grow/shrink */
  min-width: 150px; /* don’t go too small on mobile */
}

/* First two items: cap them at 350px */
.return-item:nth-child(1),
.return-item:nth-child(2) {
  flex: 1 1 350px; /* preferred width */
  max-width: 350px; /* hard cap */
}

/* Make them stack on very small screens */
@media (max-width: 480px) {
  .return-item {
    flex: 1 1 100%;
    max-width: 100%;
  }
}

.btn-primary{
    background-color:#1E1E1E;
    border-color: #1E1E1E;
}

.step{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    gap: 6px;
    flex: 1 1 0;
}
.step-label {
    font-size: 0.875rem;
    color: #2c3550;
    margin: 0px;
}
.step-header {
    font-size: 0.75rem;
    color:rgb(110, 110, 110);
    font-weight: 400;
    letter-spacing: normal;
}

.step-title {
    font-size: 1.5rem;
    color: #1E1E1E;
    font-weight: 400;
    line-height: 1.334em;
}


.stepper {
    position: relative;
    gap: 0;
}

.stepper::before{
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 44px; /* sits between label and dots */
    height: 2px;
    background: #e6e8ef;
}

.step-dot{
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 2px solid #e5e7eb;
    background: #fff;
    display: inline-block;
    position: relative;
    top: 22px; /* aligns to the connector line */
}

.completed { border-color: #c7cbd6; background: #c7cbd6; }

.select_car_btn{
    border: none !important;
}
.select_car_btn:active{
    background-color: #1981A1 !important;
}
.active {
    border-color: #1A6982 !important;
    background: #1A6982 !important;
}

.upcoming { border-color: #e5e7eb; background: #fff; }

.step-label-pill{
    display: inline-block;
    padding: 6px 12px;
    border-radius: 999px;
    font-size: 0.875rem;
    line-height: 1;
    color: #6b7280;
    background: transparent;
    border: 1px solid transparent;
}
.step-label-pill.is-active{
    color: white;
    font-weight: 600;
    background: #1981A1;
    border-color: #1981A1;
}


.summary_toggle_container{
        color: #1E1E1E;
        font-size:1rem;
        line-height:1.5rem;
}

.summary_text {
    margin: 0 0 12px!important;
    line-height: 1.4!important;
    font-size: 1rem!important;
    font-weight:400!important;
    color: #646e73 !important;
}
.mob_top_summary{
    margin-top:12px;
}
.summary_label{
    margin: 0;
    font-size: 0.75rem;
    line-height: 1.66;
    color:rgb(124, 124, 124) !important;

}
.summary_text{
     margin: 0 0 12px;
         line-height: 1.4;
    font-size: 1rem;
    color: black !important;
}
.summary-row{ display:flex; align-items:center; gap:8px; }
.summary-label-inline{ white-space:nowrap; margin:0; font-size:0.95rem; line-height:1.4; color:#000 !important; font-weight:600; }
.summary-leader{ flex:1; height:0; border-bottom:1px dashed #e0e0e0; }
.summary-value-inline{ margin:0; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; font-size:0.9rem; color:black !important; }
.summary_info_box{
    position:relative;
}

.summary_devider{
    height: 20px;
    background: #2b325252;
    max-width: 1px !important;
    padding: 0 !important;
    width: 1px;
}
/* Return inline summary (return service) */
.return-inline { display:flex; align-items:flex-start; width:100%; flex:1 1 auto; flex-wrap:nowrap; }
.return-item { flex:1 1 0; max-width:none; min-width:0; padding-right:16px; border-right:1px solid #e6e8ef; }
.return-item:last-of-type { border-right:none; padding-right:0; }
.return-item-label { color:#2B3252; font-weight:600; font-size:14px; margin-bottom:4px; }
.return-item-label:empty { display:none; margin-bottom:0; }
.return-item-value { color:#1f2937; font-weight:500; font-size:18px; line-height:1.3; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
@media (max-width:768px){ .return-inline{flex-wrap:wrap;} .return-item{ flex:0 0 100%; max-width:100%; border-right:none; padding-right:0; } }
/* Ensure EDIT button text is white */
#edit-return-service.btn, .btn-primary { color:#fff !important; }

/*.summary_info_box::after{*/
/*    content:"";*/
/*    position:absolute;*/
/*    left:0;*/
/*    top:0;*/
/*    width:1px;*/
/*    height:100%;*/
/*    background-color:#e0e0e0;*/
/*}*/
@media screen and (max-width:768px){
    .stepper{
        gap:8px;
    }

    .mob_stepper_container{
        display:flex;
        padding:0;
        justify-content:space-between;
    }


    .booking_step_container >div{
        padding:0 !important;
    }
    .booking_step_container .step-label{
        display:none !important;
    }
    .step{
        position:relative;
        /*padding-right:35px;*/
    }

    /*.step::after{*/
    /*    content: "";*/
    /*    position: absolute;*/
    /*    width: 20px;*/
    /*    height: 2px;*/
    /*    background: rgb(189, 189, 189);*/
    /*    right: 5px;*/
    /*    top: 50%;*/
    /*}*/
    /*.step:last-child::after {*/
    /*content: unset;*/
    /*}*/
}
@media screen and (max-width:353px){
    .step{
        position:relative;
        padding-right:25px;
    }

    .step::after{
        content: "";
        position: absolute;
        width: 10px;
        height: 2px;
        background: rgb(189, 189, 189);
        right: 5px;
        top: 50%;
    }

}
</style>
<div class="container-fluid step-wrapper md-py-3">
    <div class="row container align-items-center justify-content-between ml-auto mr-auto px-md-0 px-sm-0 px-0 booking_step_container">
        <div class="col-12 col-md-12 d-none d-md-block">
            <div class=" stepper d-flex justify-content-start justify-content-md-end flex-nowrap pt-1 w-100 mt-4">
              @foreach ($steps as $index => $stepData)
                @php
                    $isCompleted = ($index < $currentStep);
                    $isActive = ($index === $currentStep);
                    $isUpcoming = ($index > $currentStep);
                @endphp

                @if($stepData['route'])
                    <a href="{{ $stepData['route'] }}" class="step text-center trigger-loader">
                @else
                    <div class="step text-center disabled-link" style="pointer-events: none;">
                @endif

                    <div class="step-label-pill {{ $isActive ? 'is-active' : '' }}">{{ $stepData['label'] }}</div>
                    <span class="step-dot @if($isCompleted) completed @elseif($isActive) active @else upcoming @endif"></span>

                @if($stepData['route'])
                    </a>
                @else
                    </div>
                @endif
              @endforeach

            </div>
        </div>
    </div>
</div>

<div class="d-md-none mb-3">
    <!-- Header with "Booking Summary" and Expand toggle -->
 <div class="d-flex justify-content-between align-items-center px-3 py-2 bg-white" data-toggle="collapse" data-target="#mobileRideSummary" aria-expanded="false" style="cursor: pointer;" onclick="toggleCollapse()">
        <h6 class="step-label-pill is-active">Booking Summary</h6>
        <div class="d-flex align-items-center summary_toggle_container">
            <span id="expandText" class="mr-1">Expand</span>
            <svg id="expandArrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 320 512">
                <path d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"/>
            </svg>
        </div>
    </div>

    <!-- Collapsible Ride Info Summary -->
    <div class="collapse " id="mobileRideSummary">
        <div class="px-3  mob_top_summary">
            <div class="summary-row">
                <p class="summary-label-inline">Pickup Location</p>
                <span class="summary-leader"></span>
                <p class="summary-value-inline">{{ session('pickup_location') }}</p>
            </div>
            <div class="summary-row">
                <p class="summary-label-inline">{{ session('dropoff_location') ? 'Destination' : 'Selected Hours' }}</p>
                <span class="summary-leader"></span>
                <p class="summary-value-inline">
                    @if(session('dropoff_location'))
                        {{ session('dropoff_location') }}
                    @else
                        Hours {{ session('select_hours') }}
                    @endif
                </p>
            </div>
            <div class="summary-row">
                <p class="summary-label-inline">Pick-Up Date & Time</p>
                <span class="summary-leader"></span>
                <p class="summary-value-inline">
                    @if(session('pickup_date') && session('pickup_time'))
                        {{ \Carbon\Carbon::parse(session('pickup_date'))->format('D, M jS, Y') }} {{ \Carbon\Carbon::parse(session('pickup_time'))->format('h:i A') }}
                    @endif
                </p>
            </div>
            <?php if($step > 2){ ?>
            <div class="summary-row">
                <p class="summary-label-inline">Car Type</p>
                <span class="summary-leader"></span>
                <p class="summary-value-inline">
                    @php
                        $selectedVehicleName = null;
                        try {
                            $selId = session('vehicle_id');
                            if ($selId) {
                                $v = \App\Models\Vehicle::find($selId);
                                $selectedVehicleName = $v ? $v->vehicle_name : null;
                            }
                        } catch (\Throwable $e) {
                            $selectedVehicleName = null;
                        }
                    @endphp
                    {{ $selectedVehicleName ?? 'Sedan' }}
                </p>
            </div>
            <?php } ?>
            <div class="mt-2">
                <a href="/booking?edit=1">
                    <button class="btn btn-primary btn-sm px-3 py-1 font-weight-bold" style="font-size: 14px;padding: 5px 8px !important;">
                        EDIT
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- DESKTOP VIEW (hidden on small devices) -->
<div class="container px-3 py-3 d-none d-md-block bg-white">
  <div class="d-flex align-items-start justify-content-between">
    <div class="return-inline">
      <div class="return-item">
        <p class="summary_label">Pickup Location</p>
        <p class="summary_text mb-0">{{ session('pickup_location') }}</p>
      </div>
      <div class="return-item">
        <p class="summary_label">{{ session('dropoff_location') ? 'Destination' : 'Selected Hours' }}</p>
        <p class="summary_text mb-0">
          @if(session('dropoff_location'))
              {{ session('dropoff_location') }}
          @else
              Hours {{ session('select_hours') }}
          @endif
        </p>
      </div>
      <div class="return-item">
        <p class="summary_label">Pick-Up Date & Time</p>
        <p class="summary_text mb-0">@if(session('pickup_date') && session('pickup_time'))
                        {{ \Carbon\Carbon::parse(session('pickup_date'))->format('D, M jS, Y') }}
                        {{ \Carbon\Carbon::parse(session('pickup_time'))->format('h:i A') }}
                    @endif</p>
      </div>
      <div class="return-item">
        <p class="summary_label">Car Type</p>
        <p class="summary_text mb-0">
          @php
              $selectedVehicleName = null;
              try {
                  $selId = session('vehicle_id');
                  if ($selId) {
                      $v = \App\Models\Vehicle::find($selId);
                      $selectedVehicleName = $v ? $v->vehicle_name : null;
                  }
              } catch (\Throwable $e) {
                  $selectedVehicleName = null;
              }
          @endphp
          {{ $selectedVehicleName ?? 'Sedan' }}
        </p>
      </div>
    </div>
    <div>
      <a href="/booking?edit=1">
        <button class="select_car_btn btn btn_dark mt-2 btn-primary trigger-loader" style="font-size: 14px;padding: 5px 8px !important;">EDIT</button>
      </a>
    </div>
  </div>
</div>

@if(session('return_service') == 1 && session('return_pickup_location'))
<!-- Return Service summary row under top area (desktop only for now) -->
<div class="container px-3 py-3 d-none d-md-block bg-white mt-2">
  <div class="d-flex align-items-center justify-content-between">
    <div class="return-inline">
      <div class="return-item">
        <div class="return-item-label"></div>
        <div class="return-item-value" id="rs-pickup">{{ session('return_pickup_location') }}</div>
      </div>
      <div class="return-item">
        <div class="return-item-label"></div>
        <div class="return-item-value" id="rs-dropoff">{{ session('return_dropoff_location') }}</div>
      </div>
      <div class="return-item">
        <div class="return-item-label"></div>
        <div class="return-item-value" id="rs-datetime">
          @php
            $rd = session('return_pickup_date');
            $rt = session('return_pickup_time');
            $prettyDate = $rd ? \Carbon\Carbon::parse($rd)->format('Y-m-d') : '';
            $prettyTime = $rt ? \Carbon\Carbon::parse($rt)->format('H:i') : '';
          @endphp
          {{ trim($prettyDate . ' ' . $prettyTime) }}
        </div>
      </div>
      <div class="return-item">
        <div class="return-item-label"></div>
        <div class="return-item-value" id="return-vehicle-name">
          @php
            $returnVehicleName = null;
            try {
                $rid = session('return_vehicle_id');
                if ($rid) {
                    $rv = \App\Models\Vehicle::find($rid);
                    $returnVehicleName = $rv ? $rv->vehicle_name : null;
                }
            } catch (\Throwable $e) {
                $returnVehicleName = null;
            }
          @endphp
          {{ $returnVehicleName ?? 'Not selected' }}
        </div>
      </div>
    </div>
    <div>
      <button type="button" class="btn btn-primary px-3 py-1 font-weight-bold" id="edit-return-service">EDIT</button>
    </div>
  </div>
  @if(session('return_flight_details') || session('return_flight_number'))
    <div class="pt-3 mt-2 border-top">
      <div class="row">
        @if(session('return_flight_details'))
        <div class="col-md-6">
          <div class="return-item-label">Flight Details</div>
          <div class="summary_text mb-0">{{ session('return_flight_details') }}</div>
        </div>
        @endif
        @if(session('return_flight_number'))
        <div class="col-md-6">
          <div class="return-item-label">Flight Number</div>
          <div class="summary_text mb-0">{{ session('return_flight_number') }}</div>
        </div>
        @endif
      </div>
    </div>
  @endif
</div>
@endif

</div>

<script>
    function toggleCollapse() {
        const expandText = document.getElementById('expandText');
        const expandArrow = document.getElementById('expandArrow');

        // Toggle text and arrow based on collapse state
        if (expandText.innerText === 'Expand') {
            expandText.innerText = 'Collapse';
            expandArrow.style.transform = 'rotate(180deg)'; // Rotate the arrow to point down
        } else {
            expandText.innerText = 'Expand';
            expandArrow.style.transform = 'rotate(0deg)'; // Rotate the arrow back to the original position
        }
    }
</script>
