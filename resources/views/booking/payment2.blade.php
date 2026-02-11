@extends('master')
@section('content')

@section('head-scripts')
<script src="https://js.stripe.com/v3/"></script>
<style>
    .ElementsApp .Icon-fill {
      fill: black !important;
    }
    #card-element{
        background:transparent !important;
        padding: 1.2rem!important;
        background-color: #EEEFF1 !important;
    }
    #card-errors{
        line-height: 18px !important;
        margin-left: 5px;
        margin-top: 55px;
    }
    @media (min-width: 769px) {
        #card-errors {
            margin-top: 110px !important;
        }
    }
  .form-control {
    -webkit-appearance: none;
    padding-left: 15px !important;
    border: 1px solid rgba(0, 0, 0, 0.23) !important;
    font-size: 16px;
        height: 45px;  /* Adjust as needed */
    max-width: 100%;
}
 #card-name, #card-element {
        border-radius: 3px; /* Optional: rounded corners */
    }
     .text-primary{
        color:var(--dark-bg-btn) !important;
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

    </style>
@endsection

@include('partials.bookig-top_area')

<div class="container py-5 only-for-payments">
    <div class="row">
        <div class="col-md-8">
            <h5 class="font-weight-bold mb-2">Payment Information</h5>
            <p class="text-muted small mb-4">
                All transactions are secure and encrypted. Safe and secure payments powered by <strong>Stripe</strong>
            </p>

            <form id="payment-form">
                <div class=" mb-4 margin-pc-payment ">
                    <div class="input-text-container">
                        <div class="p-1">
                            <input type="text" id="card-name" class="form-control border border-secondary" placeholder="Name on Card" style="height: 60px; background-color: #EEEFF1 !important;" required>
                        </div>
                    </div>
                </div>

                <div class="input mb-3 margin-pc-payment">

                    <div class="input-text-container">
                        <div class=" p-1">
                            <div id="card-element" class="form-control border border-secondary p-1" style="height: 60px; background-color: #EEEFF1 !important;">
                            </div>
                        </div>
                    </div>
                    <div id="card-errors" class="text-danger small "></div>
                </div>
                <p class="text-muted small mt-4 mb-3 d-none d-md-block text-center" style="margin-top: 40px !important;">
                    By clicking "BOOK NOW", you agree to our
                    <a href="/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a>
                </p>
                <div class="d-md-flex justify-content-between">
                    <img src="{{ asset('image/credit-cards.png') }}" alt="Supported Credit Cards" class="img-fluid" style="max-width: 400px;">
                    <button
                        style="width: 100%; max-width: 250px;"
                        type="submit"
                        class="btn btn-primary d-none d-md-block"
                        id="submit-button">
                        BOOK NOW
                    </button>

                </div>
        </div>
        @include('booking.right_side_pricing_area')
        </form>
    </div>
</div>

<script>
    const stripe = Stripe('pk_live_51QyQOZFlbIize3KE9VSxVGbrPthMjVMb4RADtVEAevlfTJCgyaBldJwzqqSNRbA4bZDJGzDV9ESSX7JuhnmIHjA700B4rIW2jw');
    const elements = stripe.elements();
    const card = elements.create('card', {
        style: {
            base: {
                fontSize: '16px',
                color: '#212529',
                fontFamily: 'inherit',
                '::placeholder': {
                    color: '#6C757D'
                }
            },
            invalid: {
                color: '#dc3545'
            }
        }
    });
    card.mount('#card-element');

    function updatePricingAreaMargin(hasError) {
        const pricingArea = document.getElementById('pricing-area-wrapper');

        if (hasError) {
            const isMobile = window.innerWidth <= 768;
            pricingArea.style.marginTop = isMobile ? '55px' : '110px';
        } else {
            pricingArea.style.marginTop = '';
        }
    }

    card.on('change', function(event) {
        updatePricingAreaMargin(!!event.error || event.empty || !event.complete);
    });

    const form = document.getElementById('payment-form');
    const errorDiv = document.getElementById('card-errors');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        fetch('/completeBook', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                payment_method_id: 123
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                window.location.href = '/thank-you/' + data.booking_id;
            } else if (data.requires_action) {
                stripe.confirmCardPayment(data.payment_intent_client_secret).then(result => {
                    if (result.error) {
                        errorDiv.textContent = result.error.message;
                        updatePricingAreaMargin(true);
                    } else {
                        window.location.href = '/thank-you/' + data.booking_id;
                    }
                });
            } else {
                errorDiv.textContent = data.message || "Payment failed.";
                updatePricingAreaMargin(true);
            }
        });
    });
</script>
@endsection
