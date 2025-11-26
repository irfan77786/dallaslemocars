@php
    $currentStep = $step ?? 1;
    $steps = [
        1 => ['label' => 'Ride Info', 'route' => route('booking.form',['edit' => 1])],
        2 => ['label' => 'Vehicle Class', 'route' => session('service_type') === 'pointToPoint'
            ? route('booking.pointToPoint.show')
            : route('booking.hourlyHire.show')],
        3 => ['label' => 'Passenger Info', 'route' => (session()->has('vehicle_id') && (session()->has('calculated_price') || session()->has('price') || ($currentStep >= 3)))
                    ? route('user_login', ['id' => session('vehicle_id'), 'price' => session('calculated_price') ?? session('price')])
                    : null],
        4 => ['label' => 'Booking Detail', 'route' => ($currentStep >= 4 || session()->has('first_name'))
                    ? route('submit.passenger.info')
                    : null],
        5 => ['label' => 'Payment', 'route' => null]
    ];
@endphp
<style>
    .pricing_summary_label {
    margin: 0px;
    font-weight: 400;
    line-height: 1.5;
    font-size: 1.2rem;
    color: #000;
}
.pricing_summary_price{
    font-weight: 400;
    line-height: 1.5;
    font-size: 1.2rem;
    color: #000;
}
.pricing_total_label {
    margin: 0px;
    font-weight: 400;
    font-size: 1.5rem;
    line-height: 1.334;
    color: var(--dark-bg-btn);
}
.pricing_total_price{
    margin: 0px;
    font-weight: 400;
    font-size: 1.5rem;
    line-height: 1.334;
    color: var(--dark-bg-btn);
}
.total_price_box{
    margin-top:16px;
}
.price-decimal {
    font-size: 0.75em;
    vertical-align: super;

}
.payment_method_info_box {
    display: grid;
    justify-content: center;
    text-align: center;

}
.payment_method_info_box p{
    margin: 16px 0px 0px;
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.5;
    color: #9e9e9e;
}
.cta-button {
    width: 100%;
    margin: 12px auto 0;
    display: block;
    font-weight: 600;
    letter-spacing: 2px;
}
</style>
<div class="col-md-4 mb-4" id="pricing-area-wrapper">

            @php
                $breakdown = session('breakdown_data');

            @endphp

                <div class="bg-light rounded-lg p-3 shadow-sm mt-3">
                    <!--<h2 class="mb-3 step-title" style="font-size: 16px">Trip Breakdown</h2>-->
                    <!--<h2 class="mb-2 step-title font-weight-bold " style="font-size: 16px">Outward Trip</h2>-->

                    @php
                        $base = session('calculated_price');
                        if ($breakdown && isset($breakdown['hourlyFare'])) {
                            $base = $breakdown['hourlyFare'];
                        }
                        $base = $base ?? 0;
                        $price = number_format($base, 2);
                        [$whole, $decimal] = explode('.', $price);
                    @endphp
                    @php
                        $isRoundTrip = session('round_trip') == 'on';
                    @endphp
                    <div class="d-flex justify-content-between mb-1">
                        <span class="pricing_summary_label">{{ $isRoundTrip ? 'Outward Trip' : 'Base Fare' }}</span>
                        <span id="trip-price" class="pricing_summary_price">
                            ${{ $whole}}<span class="price-decimal">.{{ $decimal }}</span> USD
                        </span>
                    </div>
                    @if($breakdown && isset($breakdown['hours']))
                        <div class="d-flex justify-content-between mb-1">
                            <span class="pricing_summary_label">Total Hours</span>
                            <span class="pricing_summary_price">{{ $breakdown['hours']? $breakdown['hours' ]: session('select_hours') }}</span>
                        </div>
                    @endif
                        <div id="return-trip-section" style="{{ (session('round_trip') == 'on' && session('return_price')) ? '' : 'display: none;' }}">
                            <hr />
                            <!--<h2 class="mb-3 step-title font-weight-bold" style="font-size: 16px">Return Trip</h2>-->

                            <!--<div class="d-flex justify-content-between mb-1">-->
                            <!--    <span class="text-muted">Base Fare (Return)</span>-->
                            <!--    <span id="return-base-fare">${{ session('return_base_fare') }}</span>-->
                            <!--</div>-->
                            <!--<div class="d-flex justify-content-between mb-1">-->
                            <!--    <span class="text-muted">Per Mile Rate</span>-->
                            <!--    <span id="return-per-km-rate">${{ session('return_per_km_rate') }}</span>-->
                            <!--</div>-->
                            <!--<div class="d-flex justify-content-between mb-1">-->
                            <!--    <span class="text-muted">Distance in Miles</span>-->
                            <!--    <span id="return-distance">{{ session('return_km') }} Miles</span>-->
                            <!--</div>-->
@if(session('return_price'))
    <div class="d-flex justify-content-between mb-1">
        <span class="pricing_summary_label">Return Trip</span>
        @php
            $price = number_format(session('return_price'), 2);
            [$whole, $decimal] = explode('.', $price);
        @endphp
        <span id="return-trip-price" class="pricing_summary_price">
            ${{ $whole }}<span class="price-decimal">.{{ $decimal }}</span>
        </span>
    </div>
@endif

                        </div>

                    <div class="d-flex justify-content-between total_price_box">
                        <span class="pricing_total_label" style="color: #1A6982;">Total</span>
                        @php
                            $base = session('calculated_price');
                            if ($base === null && $breakdown && isset($breakdown['hourlyFare'])) {
                                $base = $breakdown['hourlyFare'];
                            }
                            $base = $base ?? 0;
                            $return = session('return_price') ?? 0;
                            $rawTotal = $base + $return;
                            $formattedTotal = number_format($rawTotal, 2);
                            [$whole, $decimal] = explode('.', $formattedTotal);
                        @endphp
                        <span class="pricing_total_price total-trip-price" style="color: #1A6982;">
                            ${{ $whole }}<span class="price-decimal">.{{ $decimal }}</span> USD
                        </span>
                    </div>
<div class="text-center mt-3">
    @php $targetForm = $currentStep == 5 ? 'payment-form' : 'booking-detail-form'; @endphp
    <button type="submit"
            class="btn btn-primary w-100 btn-uniform cta-button"
            id="submit-button"
            style="width: 100%; text-transform: uppercase; padding: 0.575rem .75rem !important; border-color: unset;"
            form="{{ $targetForm }}">
        @if($currentStep == 5)
            BOOK NOW
        @else
            CONTINUE TO PAYMENT
        @endif
    </button>
    </div>

@if($currentStep == 5)
    <p class="text-muted small mt-3 text-center mb-0">
        By clicking "BOOK NOW", you agree to our
        <a href="#" class="hover-black" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Terms &amp; Conditions</a>
    </p>
@endif

                    <div class="payment_method_info_box">
                        <p class="mb-0 mt-2">Secure payments</p>
                        <img src="{{ asset('assets/img/credit-cards.png') }}" alt="Payment methods" class="img-fluid payment-methods" >

                    </div>
                </div>





                        <!--<ul>-->
                        <!--    <li>-->
                        <!--        <div class="d-flex items-center "><span-->
                        <!--                class="text-[#2B3252] mx-1 text-xl ml-[-2.5px]"><svg stroke="currentColor"-->
                        <!--                    fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"-->
                        <!--                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">-->
                        <!--                    <path stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">-->
                        <!--                    </path>-->
                        <!--                </svg></span>-->
                        <!--            <p class="text-sm  ml-[5px] pb-0 mb-0" style="font-size: 14px">Tolls will be-->
                        <!--                additional if applicable.</p>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <div class="d-flex items-center "><span-->
                        <!--                class="text-[#2B3252] mx-1 text-xl ml-[-2.5px]"><svg stroke="currentColor"-->
                        <!--                    fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"-->
                        <!--                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">-->
                        <!--                    <path stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">-->
                        <!--                    </path>-->
                        <!--                </svg></span>-->
                        <!--            <p class="text-sm  ml-[5px] pb-0 mb-0" style="font-size: 14px">Trip Price includes-->
                        <!--                base fare, gratuity and tax.</p>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--    <li>-->
                        <!--        <div class="d-flex items-center "><span-->
                        <!--                class="text-[#2B3252] mx-1 text-xl ml-[-2.5px]"><svg stroke="currentColor"-->
                        <!--                    fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"-->
                        <!--                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">-->
                        <!--                    <path stroke-linecap="round" stroke-linejoin="round"-->
                        <!--                        d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z">-->
                        <!--                    </path>-->
                        <!--                </svg></span>-->
                        <!--            <p class="text-sm  ml-[5px] pb-0 mb-0" style="font-size: 14px">All transactions-->
                        <!--                are safe and secure.</p>-->
                        <!--        </div>-->
                        <!--    </li>-->
                        <!--</ul>-->
                    </div>
                </div>
            </div>
