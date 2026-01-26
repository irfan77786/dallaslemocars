@extends('master')
@section('content')

@section('styles')
    <style>
        .payment-card-option {
            background: linear-gradient(90deg, #e52c43, #ff6c00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: bold;
        }
    #card-element{
        background: transparent !important;
        padding: 0 !important;
    }
    #card-errors{
        line-height: 18px !important;
        margin-left: 0;
    }
  .form-control {
    -webkit-appearance: none;
    padding-left: 15px !important;
    border: 1px solid rgba(0, 0, 0, 0.23) !important;
    font-size: 16px;
    height: 45px;
    max-width: 100%;
}

 .floating-bordered-input {
   padding-left: 14px;
   padding-right: 14px;
 }

 .floating-bordered-input .form-control {
   border: none !important;
   box-shadow: none !important;
   margin-top: 10px !important;
 }

        #card-element.form-control {
        height: 45px;
        padding: 0 10px;
        }
        #payment-form {
            width: 100%;
            margin: 0 auto;
        }

        button {
            padding: 10px 16px;
            background-color: #5469d4;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #4254b2;
        }
        .input-group-container {
    overflow: hidden;
    width: 100%;
}
    .hover-black:hover {
        color: black !important;
    }
    .hover-black:focus {
        color: black !important;
    }
    .terms-paragraph {
        margin-bottom: 10px;
    }

    .terms-heading {
        font-size: 16px;
        font-style: normal;
        line-height: 25px;
        font-weight: 700;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    </style>
@endsection

@include('partials.bookig-top_area')

<div class="container py-5 only-for-payments">
<div class="row">
<div class="col-md-8">

<h5 class="fw-bold mb-2">Payment Information</h5>

<form id="payment-form" method="POST" action="{{ url('/completeBook') }}">
@csrf
<input type="hidden" name="payment_method_id" id="payment_method_id">

<label class="d-flex align-items-center mb-3 border p-3 rounded payment-card-option">
    <input type="radio"
           name="payment_method"
           class="me-2 saved-card-radio"
           value=""
           checked> <!-- default selected -->

    <i class="far fa-credit-card fs-2 me-3"></i>
    <span>Pay with a new card</span>
</label>

{{-- ✅ SAVED CARDS --}}
@forelse($cards as $card)
@php
    $brand = strtolower($card->card->brand);
    $holder = $card->billing_details->name ?? '';
@endphp

<label class="d-flex align-items-center mb-3 border p-3 rounded payment-card-option">
    <input type="radio"
           name="payment_method"
           class="me-2 saved-card-radio"
           value="{{ $card->id }}"
           data-holder="{{ $holder }}">

    {{-- FONT AWESOME ICON --}}
    @if($brand === 'visa')
        <i class="fab fa-cc-visa text-primary fs-2 me-3"></i>
    @elseif($brand === 'mastercard')
        <i class="fab fa-cc-mastercard text-danger fs-2 me-3"></i>
    @elseif($brand === 'amex')
        <i class="fab fa-cc-amex text-info fs-2 me-3"></i>
    @elseif($brand === 'discover')
        <i class="fab fa-cc-discover text-warning fs-2 me-3"></i>
    @else
        <i class="far fa-credit-card fs-2 me-3"></i>
    @endif

    <span>
        **** **** **** {{ $card->card->last4 }}
        ({{ strtoupper($card->card->brand) }})
        Exp: {{ $card->card->exp_month }}/{{ $card->card->exp_year }}
    </span>
</label>
@empty
<p class="text-danger">No saved cards found — Please enter card below</p>
@endforelse


{{-- ✅ FULL NAME + CARD NUMBER (SAME GROUP) --}}
<div id="new-card-fields">

    <!-- Full Name -->
    <div class="floating-bordered-input position-relative mb-3">
        <input type="text" id="card-name" class="form-control" required>
        <span class="floating-label">Full Name</span>
    </div>

    <!-- Card Number -->
    <div class="floating-bordered-input position-relative mb-3">
        <span class="floating-label">Card Number</span>
        <div id="card-element" class="form-control"></div>
    </div>

    <div id="card-errors" class="text-danger small mb-2"></div>
</div>



<div id="card-errors" class="text-danger small mb-2"></div>

{{-- ✅ BUTTON --}}
<button type="submit" id="final-pay-button" class="btn btn-primary mt-3 w-100">
BOOK NOW
</button>

</form>
</div>

@include('booking.right_side_pricing_area')

</div>
</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const stripe = Stripe("{{ config('services.stripe.key') }}");
    const elements = stripe.elements();
    const card = elements.create('card');
    card.mount('#card-element');

    const form = document.getElementById('payment-form');
    const errorDiv = document.getElementById('card-errors');
    const cardNameInput = document.getElementById('card-name');
    const hiddenPaymentMethod = document.getElementById('payment_method_id');
    const savedRadios = document.querySelectorAll('.saved-card-radio');
    const newCardFields = document.getElementById('new-card-fields');

    function toggleNewCardFields(show) {
        newCardFields.style.display = show ? 'block' : 'none';

        // Enable/disable input based on visibility
        cardNameInput.required = show;   // required only if showing
        cardNameInput.disabled = !show;  // disable if hidden

        // For Stripe Card Element, you can't set disabled, but hiding is enough
        if (!show) cardNameInput.value = '';
    }



    // ✅ INITIAL STATE: SHOW NEW CARD FIELDS
    toggleNewCardFields(true);

    // ✅ WHEN RADIO CHANGES
    savedRadios.forEach(radio => {
        radio.addEventListener('change', function () {
            hiddenPaymentMethod.value = radio.value;

            if (radio.value) {
                // saved card selected → hide new card
                const holderName = radio.dataset.holder || '';
                cardNameInput.value = holderName;
                toggleNewCardFields(false);
            } else {
                // custom card selected → show new card
                toggleNewCardFields(true);
            }

            errorDiv.innerText = '';
        });
    });


    // ✅ IF USER TYPES MANUALLY → SWITCH TO NEW CARD MODE
    cardNameInput.addEventListener('input', function () {
        savedRadios.forEach(r => r.checked = false);
        hiddenPaymentMethod.value = '';
        toggleNewCardFields(true);
    });

    // ✅ FINAL PAYMENT HANDLER
form.addEventListener('submit', async function (event) {
    event.preventDefault();
    errorDiv.innerText = '';

    // If a saved card is selected, submit form directly
    if (hiddenPaymentMethod.value && hiddenPaymentMethod.value !== '') {
        form.submit();
        return;
    }

    // Otherwise, new card → validate and create PaymentMethod
    const cardholder = cardNameInput.value.trim();
    if (!cardholder) {
        errorDiv.innerText = 'Card holder name is required.';
        return;
    }

    const { paymentMethod, error } = await stripe.createPaymentMethod({
        type: 'card',
        card: card,
        billing_details: {
            name: cardholder
        }
    });

    if (error) {
        errorDiv.innerText = error.message;
        return;
    }

    hiddenPaymentMethod.value = paymentMethod.id;
    form.submit();
});

});
</script>
@endsection
