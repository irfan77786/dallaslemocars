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
.bi-chevron-down::before{
    font-size: 10px !important;
}
.collapseCardBody {
    padding: 0px !important;
    border: none !important;
}
.feature-section{
    color: #1981A1 !important;
    font-weight: bold;
}
.btn-primary {
    background-color: #1981A1 !important;
    border: none !important;
    box-shadow: none !important;
}
.vehical-card {
    border: 1.5px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
    padding: 1rem;
    margin-bottom: 1rem;
    position: relative;
    transition: border-color 0.3s ease, background-color 0.3s ease;
    background-color: #fff;
}

.vehical-card:hover {
    border-color: #1981A1;
}

.vehical-card.selected {
    border-color: #1981A1 !important;
    background-color: transparent !important;
}

.vehical-card.selected .tick-overlay {
    display: block;
}

.tick-overlay {
    position: absolute;
    right: 20px;
    top: 6px;
    font-size: 1.5rem;
    color: #1981A1;
    display: none; /* hidden by default */
}

/* ==== Vehicle Image ==== */
.vehicle_img {
    max-height: 100px;
    object-fit: contain;
}

/* ==== Vehicle Info Section ==== */
.vehicle-info {
    flex-grow: 1;
    margin-left: 1rem;
    min-width: 220px;
}

.vehicle-info > .vehicle-name {
    font-weight: 700;
    font-size: 1.1rem;
    color: #1E1E1E;
}

.vehicle-info > .vehicle-description {
    font-size: 0.85rem;
    color: #555;
    margin-top: 0.2rem;
}

/* ==== Passengers and Luggage Info ==== */
.pass-luggage-info {
    display: flex;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
    color: #222;
}

.pass-luggage-info > div {
    display: flex;
    align-items: center;
    margin-right: 1.5rem;
}

.pass-luggage-info i {
    margin-right: 0.3rem;
    font-size: 1rem;
    color: #333;
}

/* ==== Features Section ==== */
.feature_items_cont {
    padding-right: 30px;
    margin-top: 15px;
    margin-left: 48px !important;
    font-size: 0.85rem;
    color: #444;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    gap: 6px;
    display: inline-flex;
    margin-right: 1rem;
}

.feature-icon {
    font-size: 1rem;
}

.feature-text {
    margin: 0;
    font-weight: 400;
    font-size: 13px !important;
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

/* ==== Tooltip styling ==== */
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

/* ==== Pricing Section ==== */
.car-price {
    font-weight: 700;
    font-size: 1.3rem;
    color: #000;
}

.car-price small {
    vertical-align: top;
    color: #555;
    font-size: 0.85rem;
    margin-left: 0.1rem;
}

/* ==== Pricing description ==== */
.price-desc {
    font-size: 0.75rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.price-desc i {
    margin-right: 0.3rem;
}

/* ==== Select Button ==== */
.vehical-card .select_car_btn {
    display: none !important;
}

.vehical-card .bi {
    vertical-align: middle;
}

/* Ensure the expand arrow can rotate and animate smoothly */
.featureExpandArrow {
    display: inline-block;
    transition: transform 0.2s ease;
}

.select_car_btn:hover,
.select_car_btn:focus {
    background-color: #1981A1;
    color: #fff !important;
    text-decoration: none;
}

/* ==== Responsive adjustments ==== */
@media (max-width: 767.98px) {
    .vehical-card {
        padding: 0.75rem;
    }
    .vehical-card .d-flex {
        flex-wrap: nowrap !important;
        align-items: center;
    }
    .vehicle-img-container {
        width: auto;
        flex: 0 0 auto;
    }
    .vehicle_img {
        max-height: 56px;
    }
    .vehicle-info {
        min-width: 0 !important;
        margin: 0 8px !important;
        flex: 1 1 auto;
    }
    .vehicle-info > .vehicle-name {
        font-size: 1rem;
        margin-bottom: 2px;
    }
    .vehicle-info > .vehicle-description {
        display: none;
    }
    .pass-luggage-info {
        display: block;
        margin-top: 0.1rem;
        margin-bottom: 0;
        font-size: 0.8rem;
        gap: 6px;
        flex-wrap: nowrap;
    }
    .pass-luggage-info > div {
        margin-right: 0.75rem;
    }
    .car-price-container {
        position: absolute;
        right: 0;
        flex: 0 0 auto;
        min-width: 88px !important;
        max-width: 34%;
        text-align: right !important;
        margin-top: 0;
        white-space: normal; /* allow wrapping inside price container */
        display: flex;
        flex-direction: column;
        align-items: flex-end; /* keep wrapped lines right-aligned */
    }
    .car-price h4 {
        font-size: 1.05rem;
        margin-bottom: 0.25rem !important;
    }
    .pricing_summary_price {
        font-size: 22px;
    }
    .car-price .pricing_summary_price {
        white-space: nowrap; /* keep numeric part on one line; USD may wrap */
    }
    .car-price-container .btn {
        display: inline-block !important;
        padding: 0.2rem 0.5rem;
        font-size: 0.72rem;
        line-height: 1.2;
        margin-top: 2px;
    }
    .feature_items_cont {
        margin-left: 0 !important;
        padding-right: 0;
        margin-left: 10px !important;
    }
}

/* ==== Legacy / Old classes unrelated to vehicle cards - untouched ==== */
.side_section .card {
    box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px,
        rgba(0, 0, 0, 0.14) 0px 1px 1px 0px,
        rgba(0, 0, 0, 0.12) 0px 1px 3px 0px;
    padding-top: 24px;
    padding-bottom: 24px;
    padding-left: 16px;
    padding-right: 16px;
    background-color: rgb(250, 250, 250);
    transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1);
    border-radius: 16px;
}

.side_section .card .card-body {
    padding: 0;
}

.side_section .card .card-body .card-text {
    margin: 12px 0px 0px;
    font-family: Mukta, sans-serif;
    font-weight: 400;
    font-size: 0.875rem;
    line-height: 1.43;
}

.text-primary {
    color: var(--dark-txt) !important;
}

.side_section .card .card-body .card-title {
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 8px;
    line-height: 1.5;
    margin: 0;
    color: var(--dark-txt) !important;
}

.side_section .card .card-body a.mail_side {
    margin-top: 4px;
    margin-bottom: 12px !important;
}

.side_section .card .card-body a.number_side {
    margin-bottom: 0 !important;
    font-weight: 500;
    line-height: 1.75;
    font-size: 21px;
    letter-spacing: normal;
    margin-top: 0px;
}

.side_section .card .card-body .call_heading {
    font-size: 1rem;
    line-height: 1.5;
    margin-top: 20px;
    margin-bottom: 0;
    display: flex;
    gap: 8px;
}

.feaures_ul {
    margin-top: 16px;
    margin-bottom: 0;
}

.feaures_ul li {
    font-weight: 400;
    font-size: 16px;
    line-height: 1.5;
    margin: 0px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.side_section .card .card-body .card-title.hassle_free {
    margin-bottom: 12px;
}

.mc-6 {
    margin-top: 24px;
}

@media (min-width: 992px) {
  .side_section {
    position: sticky;
    top: 24px;
  }
}

.side_section .card {
  border: 0 !important;
  background: linear-gradient(180deg, #ffffff 0%, #f7fbfd 100%);
  outline: 1px solid rgba(25, 129, 161, 0.12);
}

.side_section .card + .card {
  margin-top: 16px;
}

.side_section .card .card-title {
  color: #12323c !important;
}

.side_section .card .card-title i {
  color: #1981A1 !important;
}

.side_section .card hr {
  border: 0;
  height: 1px;
  background: linear-gradient(90deg, rgba(25,129,161,0.25), rgba(25,129,161,0.05));
  margin: 30px 0 14px 0;
}

.feaures_ul li {
  margin-bottom: 8px;
  color: #1E1E1E;
}

.feaures_ul li i {
  color: #1981A1;
}

.side_section .card .card-text {
  color: #2b2b2b;
}

.side_section a.mail_side,
.side_section a.number_side {
  transition: color 0.2s ease, text-decoration-color 0.2s ease;
}

.side_section a.mail_side:hover,
.side_section a.number_side:hover {
  color: #0f5e76 !important;
  text-decoration: underline;
  text-decoration-thickness: 1.5px;
}

.side_section .card:nth-of-type(1) {
  background: linear-gradient(180deg, #ffffff 0%, #eef8fb 100%);
}

.side_section .card:nth-of-type(2) {
  background: linear-gradient(180deg, #ffffff 0%, #f9fbff 100%);
}

.side_section .card:nth-of-type(3) {
  background: linear-gradient(180deg, #ffffff 0%, #f7fcf9 100%);
}

</style>



<div class="container pl-0 pr-0">

<div class="px-2">
    <div class="row">
        <div class="col-12 col-md-9 col-lg-9">
            @foreach ($data as $key => $value)
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="vehical-card selectable-card" data-id="{{ $value['id'] }}">
                        <div class="d-flex align-items-center justify-content-between w-100 mb-2">
                            <!-- Vehicle Image -->
                            <div class="vehicle-img-container d-flex align-items-center">
                                <img src="{{ 'https://admin.dallasblackcarslimoservice.com/storage/' . $value['vehicle_image'] }}" alt="Vehicle Image" class="img-fluid rounded-3 vehicle_img">
                            </div>

                            <!-- Vehicle Info -->
                            <div class="vehicle-info flex-grow-1 mx-3">
                                <h5 class="vehicle-name">{{ $value['vehicle_name'] }}</h5>
                                <div class="pass-luggage-info">
                                    <div><i class="bi bi-people-fill"></i> Max. {{ $value['number_of_passengers'] }}</div>
                                    <div><i class="bi bi-bag-fill"></i> Max. {{ $value['luggage_capacity'] }}</div>
                                </div>
                                <h6 class="vehicle-description">{{ $value['description'] ?? 'No description available' }}</h6>
                            </div>

                            <!-- Price -->
                            <div class="car-price-container text-right mr-2">
                                @php $vehicleDistance = $distance[$value['id']] ?? null; @endphp
                                @if($vehicleDistance && empty($vehicleDistance['error']))
                                    @php
                                        $price = number_format($vehicleDistance['price'], 2);
                                        [$whole, $decimal] = explode('.', $price);
                                    @endphp
                                    <div class="car-price">
                                        <h4 class="mb-1 mt-4">
                                            <span class="pricing_summary_price">${{ $whole }}<span class="price-decimal">.{{ $decimal }}</span></span> USD
                                        </h4>
                                    </div>
                                @else
                                    <div class="text-danger font-weight-bold">Fare calculation failed</div>
                                @endif
                                <a class="feature-section" style="z-index: 7;" data-toggle="collapse" href="#collapse-{{ $value['id'] }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $value['id'] }}" data-id="{{ $value['id'] }}" onclick="toggleFeatureCollapse(event)">
                                    <span class="mr-1 featureExpandText">Features</span>
                                    <i class="bi bi-chevron-down featureExpandArrow"></i>
                                </a>
                            </div>
                        </div>
                        <div class="collapse" id="collapse-{{ $value['id'] }}">
                            <div class="card card-body collapseCardBody">
                                <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="feature_items_cont">
                                            <hr>
                                            @foreach ($features as $feature)
                                                <div class="feature-item">
                                                    <i class="bi {{ $feature['icon'] }} feature-icon"></i>
                                                    <span class="feature-text">{{ $feature['text'] }}</span>
                                                    @if (isset($feature['tooltip']))
                                                        <i class="bi bi-info-circle info-icon" data-tooltip="{{ $feature['tooltip'] }}"></i>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tick icon -->
                        <div class="tick-overlay">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-12 col-md-3 col-lg-3 side_section mb-4">
            <!-- Help Card -->

            <!-- Perks + Payments + Support Combined Card -->
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title hassle_free text-primary">Stress-Free Travel</h6>
                    <hr>
                    <ul class="list-unstyled small feaures_ul">
                        <li><i class="bi bi-check-circle-fill mr-2"></i>All fares include tolls and gratuity</li>
                        <li><i class="bi bi-check-circle-fill mr-2"></i>Timely reliable arrivals guaranteed</li>
                        <li><i class="bi bi-check-circle-fill mr-2"></i>Courteous professional drivers</li>
                        <li><i class="bi bi-check-circle-fill mr-2"></i>Simple all-inclusive price system</li>
                        <li><i class="bi bi-check-circle-fill mr-2"></i>Premium luxury vehicles provided</li>
                    </ul>

                    <hr>
                    <h6 class="card-title">Secure payments</h6>
                    <img src="{{ asset('assets/img/credit-cards.png') }}" alt="Payment methods" class="img-fluid" >
                    <hr>
                    <h6 class="card-title text-primary"><i class="bi bi-chat-left-text-fill"></i>Email Support</h6>
                    <p class="card-text">Reach us anytime for quick assistance.</p>
                    <a href="mailto:info@dallaslimoandblackcars.com" class="mail_side d-block text-decoration-none small text-primary">info@dallaslimoandblackcars.com</a>
                    <hr>
                    <p class="mb-0 call_heading text-primary"><i class="bi bi-telephone-fill"></i>Call Support</p>
                    <p class="mb-0">
                        <a href="tel:+12148978056" class="number_side d-block text-decoration-none text-primary">214-897-8056</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    function toggleFeatureCollapse(event) {
        const featureSection = event.currentTarget.closest('.feature-section');
        const expandText = featureSection.querySelector('.featureExpandText');
        const expandArrow = featureSection.querySelector('.featureExpandArrow');
        if (expandText.innerText === 'Features') {
            expandText.innerText = 'Hide';
            expandArrow.style.transform = 'rotate(180deg)';
        } else {
            expandText.innerText = 'Features';
            expandArrow.style.transform = 'rotate(0deg)';
        }
    }
</script>
