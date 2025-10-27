@php
$features = [
    ['text' => 'Real-time updates for every flight', 'icon' => 'bi-airplane-fill'],
    [
        'text' => 'Free 30-minute airport waiting time',
        'icon' => 'bi-clock-fill',
        'tooltip' => 'Extra waiting time will be charged after the free waiting period as follows: Sedan: $1.00 per minute, SUV and Business SUV: $1.50 per minute, Sprinter and Stretch Limo: $2.00 per minute.'
    ],
    ['text' => 'Cancel without charge 24 hours prior', 'icon' => 'bi-x-circle-fill'],
    ['text' => 'Complimentary bottled water onboard', 'icon' => 'bi-cup-fill'],
    ['text' => 'Experienced, reliable chauffeur service', 'icon' => 'bi-car-front-fill']
];
@endphp




<style>
.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    gap:6px;
}
.feature_items_cont{
    padding-right: 30px;
    margin-top: 15px;
}

.feature-icon {
    font-size: 1rem;
}

.feature-text {
    margin: 0px;
    font-weight: 400;
    font-size: 0.875rem;
    line-height: 1.43;
     color: #1E1E1E !important;
 }
.info-icon {
    font-size: 0.9rem;
    color: #6c757d;
    margin-left: 0.4rem;
    cursor: pointer;
    position: relative;
}



/* Tooltip styling */
.info-icon::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 125%; /* above the icon */
    left: 50%;
    transform: translateX(-50%);
    background-color: #2B3252;
    color: #fff;
    padding: 6px 10px;
    border-radius: 4px;
    white-space: normal;
    font-size: 0.75rem;
    max-width: 220px;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.2s ease;
    z-index: 10;
    text-align: center;
        width: max-content;

}

.info-icon:hover::after {
    opacity: 1;
}
    .car-name > h5{
        font-size:2.125rem;
    }
    .car-price > h4{
        font-size:2.125rem;
    }
    .btn_dark{
        background-color:#1981A1;
        color:#fff !important;

        width: 100%;
    }
    .btn_dark:hover{
          background-color: #1981A1;
    color: #ffffff !important;
    }

    @media (min-width: 767.98px) {
        .select_car_btn{
            max-width: 150px;
        }
         .vehicle_img{
        max-height:143.59px;
    }
        .side_section{
            padding-left:48px;
        }
        .side_section .card .card-body a.number_side{
            font-size: 21px !important;
        }
    }
    .side_section .card{
    box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px;
    padding-top: 24px;
    padding-bottom: 24px;
    padding-left: 16px;
    padding-right: 16px;
    background-color: rgb(250, 250, 250);
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1);
    border-radius: 16px;
    }

    .side_section .card .card-body{
     padding:0;
    }
    .side_section .card .card-body .card-text{
     margin: 12px 0px 0px;
    font-family: Mukta, sans-serif;
    font-weight: 400;
    font-size: 0.875rem;
    line-height: 1.43;
    }
    .text-primary{
        color:var(--dark-txt) !important;
    }
    .side_section .card .card-body .card-title{
            font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 8px;
    line-height: 1.5;
    margin: 0;
    color: var(--dark-txt) !important;

    }
     .side_section .card .card-body a.mail_side{
        margin-top: 4px;
        margin-bottom: 12px !important;
    }
    .side_section .card .card-body a.number_side{
          margin-bottom: 0 !important;
    font-weight: 500;
    line-height: 1.75;
    font-size: 21px;
    letter-spacing: normal;
    margin-top: 0px;
    }







    .side_section .card .card-body .call_heading{
    font-size: 1rem;
    line-height: 1.5;
    margin-top: 20px;
    margin-bottom: 0;
    display: flex;
    gap: 8px;
    }
    .feaures_ul{
        margin-top:16px;
            margin-bottom: 0;
    }
    .feaures_ul li{
    font-weight: 400;
    font-size: 16px;
    line-height: 1.5;
    margin: 0px;
    display: flex;
    align-items: center;
    gap: 8px;
    }


    .side_section .card .card-body .card-title.hassle_free{
        margin-bottom:12px;
    }

   .mc-6{

       margin-top:24px;
   }
</style>



<div class="container">

<div class="px-2 py-5">
    <div class="row ">
        <div class="col-12 col-md-9 col-lg-9">

            @foreach ($data as $key => $value)

    <div class="row no-gutters">
        <div class="col-12">
            <div class="vehical-card p-3 mb-3 row text-left text-md-left align-items-center justify-content-center border-bottom" style="border-color: #8b8b8b;">
                <div class="col-12 col-md-4 mb-3 d-flex flex-column align-items-center ">
                    <img src="{{ 'https://admin.dallasblackcarslimoservice.com/storage/' . $value->vehicle_image }}" alt="Vehicle Image" class="img-fluid rounded-3 vehicle_img" style="max-height: 200px; object-fit: cover;">
                </div>
                <div class="col-12 col-md-4 mb-3 px-2">
                    <div class="row justify-content-start mt-3 w-100">
                        <div class="col-auto mb-2">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-people-fill me-1" style="margin-right: 2px;"></i>
                                <p class="mb-0 small">Max. {{ $value->number_of_passengers }}</p>
                            </div>
                        </div>
                        <div class="col-auto mb-2">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-bag-fill me-1" style="margin-right: 2px;"></i>
                                <p class="mb-0 small">Max. {{ $value->luggage_capacity }}</p>
                            </div>
                        </div>
                    </div>
                    <h5 class="font-weight-bold text-left text-md-left">{{ $value->vehicle_name }}</h5>
                      <!-- Vehicle Description -->
    <h6 class="text-left text-md-left ">
        {{ $value->description ?? 'No description available' }}
    </h6>
                    <div class="d-flex flex-column align-items-start align-items-md-start feature_items_cont">
                        @foreach ($features as $feature)
                            <div class="feature-item">
                                <i class="bi {{ $feature['icon'] }} feature-icon"></i>
                                <span class="feature-text">
                                    {{ $feature['text'] }}


                                </span>
                                <span>
                                     @if (isset($feature['tooltip']))
                                        <i class="bi bi-info-circle info-icon" data-tooltip="{{ $feature['tooltip'] }}"></i>
                                    @endif
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pricing & CTA -->
                <div class="col-12 col-md-4 mb-2 d-flex flex-column align-items-start align-items-md-end text-left text-md-right">
                    @php $vehicleDistance = $distance[$value->id] ?? null; @endphp

                    @if($vehicleDistance && empty($vehicleDistance['error']))
                        <div class="car-price font-weight-bold">
                            @php
                                $price = number_format($vehicleDistance['price'], 2);
                                [$whole, $decimal] = explode('.', $price);
                            @endphp
                            <h4 class="mb-1"><span class="pricing_summary_price">${{ $whole}}<span class="price-decimal">.{{ $decimal }}</span></span> USD</h4>

                          <!--    <br><small>Total Distance: {{ number_format($vehicleDistance['distance_km'], 2) }} Miles</small> -->

                        </div>
                        <div class="mb-2">
                            <small class="text-muted font-weight-bold"> <i class="bi bi-shield-check feature-icon"></i>  Trip Price includes base fare, gratuity and tax</small><br>
                            <small class="text-muted">No hidden costs.</small>
                        </div>
                        <a href="{{ route('passenger.info', ['id' => $value->id, 'price' => $vehicleDistance['price']]) }}" class="select_car_btn btn btn_dark mt-2 trigger-loader">
                            SELECT
                        </a>
                    @else
                        <div class="text-danger font-weight-bold">Fare calculation failed</div>
                    @endif
                </div>

            </div>
        </div>
    </div>



            @endforeach
        </div>
        <div class="col-lg-3 side_section">
          <!-- Help Card -->

  <!-- Perks Card -->
          <div class="card ">
            <div class="card-body">
              <h6 class="card-title hassle_free text-primary ">Stress-Free Travel</h6>
              <hr>
              <ul class="list-unstyled small  feaures_ul">
                <li><i class="bi bi-check-circle-fill  mr-2"></i>All fares include tolls and gratuity</li>
                <li><i class="bi bi-check-circle-fill  mr-2"></i>Timely reliable arrivals guaranteed</li>
                <li><i class="bi bi-check-circle-fill  mr-2"></i>Courteous professional drivers</li>
                <li><i class="bi bi-check-circle-fill  mr-2"></i>Simple all-inclusive price system</li>
                <li><i class="bi bi-check-circle-fill  mr-2"></i>Premium luxury vehicles provided</li>
              </ul>
            </div>
          </div>
          <!-- Payment Card -->
          <div class="card mb-4 mc-6">
            <div class="card-body">
              <h6 class="card-title">Secure payments</h6>
              {{-- <img src="/image/stripe-powered.svg" alt="Payment methods" class="img-fluid" >
              <img src="/image/credit-cards.png" alt="Payment methods" class="img-fluid card-img" > --}}
            </div>
          </div>

             <div class="card mb-4 ">
            <div class="card-body">
              <h6 class="card-title text-primary ">
                <i class="bi bi-chat-left-text-fill"></i>Email Support
              </h6>
              <p class="card-text ">Reach us anytime for quick assistance.</p>
              <a href="mailto:info@dallasblackcarslimoservice.com" class="mail_side d-block text-decoration-none small text-primary">info@dallasblackcarslimoservice.com</a>
              <hr>
              <p class="mb-0 call_heading text-primary"><i class="bi  bi-telephone-fill"></i>Call Support</p>
              <p class="mb-0">
                  <a href="tel:+12143058671" class="number_side d-block text-decoration-none  text-primary ">+1 214-305-8671</a>

             </p>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
             </p>
            </div>
          </div>
        </div>
    </div>
</div>
</div>
