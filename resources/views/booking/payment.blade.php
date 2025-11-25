@extends('master')
@section('content')

@section('styles')
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
            margin-top: 50px !important;
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
            <h5 class="font-weight-bold mb-2">Payment Information</h5>
            <p class="text-muted small mb-4">
                All transactions are secure and encrypted. Safe and secure payments powered by <strong>Stripe</strong>
            </p>

            <!-- FORM START -->
            <form id="payment-form" method="POST" action="{{ url('/completeBook') }}" data-submitted="false">
                @csrf
                <input type="hidden" name="form_token" value="{{ session('form_token') }}">
                <input type="hidden" name="payment_method_id" id="payment_method_id">

                <!-- NAME ON CARD -->
                <div class="mb-4 margin-pc-payment">
                    <div class="input-text-container">
                        <div class="p-1">
                            <input type="text" id="card-name" class="form-control border border-secondary"
                                placeholder="Name on Card"
                                style="height: 60px; background-color: #EEEFF1 !important;" required>
                        </div>
                    </div>
                </div>

                <!-- CARD ELEMENT -->
                <div class="input mb-3 margin-pc-payment">
                    <div class="input-text-container">
                        <div class="p-1">
                            <div id="card-element"
                                class="form-control border border-secondary p-1"
                                style="height: 60px; background-color: #EEEFF1 !important;">
                            </div>
                        </div>
                    </div>
                    <div id="card-errors" class="text-danger small"></div>
                </div>

                <p class="text-muted small mt-4 mb-3 d-none d-md-block text-center" style="margin-top: 40px !important;">
                    By clicking "BOOK NOW", you agree to our
                    <a href="#" class="hover-black" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">Terms & Conditions</a>
                </p>

                <!-- BUTTON + SUPPORTED CARDS -->
                <div class="d-md-flex justify-content-between">
                    <img src="{{ asset('assets/img/credit-cards.png') }}" alt="Supported Credit Cards"
                        class="img-fluid" style="max-width: 280px;">

                    <button type="submit"
                        style="width: 100%; max-width: 250px;"
                        class="btn btn-primary d-none d-md-block"
                        id="final-pay-button">
                        <span id="button-text">BOOK NOW</span>
                        <span id="button-spinner"
                            class="spinner-border spinner-border-sm d-none"
                            role="status" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
            <!-- FORM END -->

        </div>
        <!-- RIGHT SIDE PRICING INSIDE THE FORM (IMPORTANT) -->
        @include('booking.right_side_pricing_area')
        <!-- TERMS & CONDITIONS MODAL -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header pb-0" style="height: 65px !important;">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="font-size: 24px;">
                            Terms & Conditions
                        </h1>
                        <p data-bs-dismiss="modal" aria-label="Close"
                            style="font-size: 18px; cursor: pointer;">
                            <svg fill="#000000" width="30px" height="30px"
                                viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.8,16l5.5-5.5c0.8-0.8,0.8-2,0-2.8l0,0C24,7.3,23.5,7,23,7c-0.5,0-1,0.2-1.4,0.6L16,13.2l-5.5-5.5  c-0.8-0.8-2.1-0.8-2.8,0C7.3,8,7,8.5,7,9.1s0.2,1,0.6,1.4l5.5,5.5l-5.5,5.5C7.3,21.9,7,22.4,7,23c0,0.5,0.2,1,0.6,1.4  C8,24.8,8.5,25,9,25c0.5,0,1-0.2,1.4-0.6l5.5-5.5l5.5,5.5c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L18.8,16z" />
                            </svg>
                        </p>
                    </div>

                    <div class="modal-body">
                        <!-- Your Terms Content Here -->
                        <div style="font-size: 14px; line-height: 1.6; color: #333;">

                            <p class="terms-paragraph">
                                Welcome to Dallas Black Cars Limo Service! These Terms and Conditions govern your use of this website
                                and our services. By accessing and using this website and our services, you agree to be bound by these Terms.
                                If you do not agree, you may not use our services or this website. Dallas Black Cars Limo Service may update
                                these Terms at any time without notice. Please review them periodically.
                            </p>

                            <p class="terms-paragraph">
                                For any questions or concerns, contact us at <strong>info@dallaslimoandblackcars.com</strong> or call.
                            </p>

                            <h4 class="terms-heading">1. Definitions</h4>
                            <p class="terms-paragraph"><strong>Dallas Black Cars Limo Service, "we", "our", or "us":</strong> Refers to the company, the website, its owners, operators, and affiliates.</p>
                            <p class="terms-paragraph"><strong>"You" or "User":</strong> Individuals or entities using our website or services.</p>
                            <p class="terms-paragraph"><strong>Services:</strong> Chauffeured limousine arrangements, bookings, customer interactions, and related services.</p>

                            <h4 class="terms-heading">2. Acknowledgment And Agreement To Terms</h4>
                            <p class="terms-paragraph">By using our site or services, you acknowledge that you have read and agreed to these Terms. If you disagree, do not use our site or services.</p>
                            <p class="terms-paragraph">We may revise the Terms at any time. Continued use means you accept the updates.</p>

                            <h4 class="terms-heading">3. Services Offered</h4>
                            <p class="terms-paragraph">We offer professional chauffeured services, including:</p>
                            <ul>
                                <li>Airport Transfers</li>
                                <li>Corporate and Executive Transportation</li>
                                <li>Special Event Services</li>
                                <li>Hourly and Point-to-Point Services</li>
                            </ul>
                            <p class="terms-paragraph">Users must confirm all booking details. Confirmations will be sent via email or SMS.</p>

                            <h4 class="terms-heading">4. Booking And Payment Policy</h4>
                            <ul>
                                <li>Book online or by phone.</li>
                                <li>Payment is required at booking. Debit/credit cards accepted.</li>
                                <li>Booking confirmation is sent via email or SMS.</li>
                                <li><strong>Automatic Charges:</strong> Charged one day before service.</li>
                                <li><strong>Declined Payments:</strong> May result in cancellation if not resolved.</li>
                            </ul>

                            <h4 class="terms-heading">5. User Responsibilities</h4>
                            <p class="terms-paragraph">Users must:</p>
                            <ul>
                                <li>Provide accurate booking details.</li>
                                <li>Use services legally and ethically.</li>
                                <li>Respect staff and chauffeurs.</li>
                                <li>Non-compliance may lead to service refusal or cancellation.</li>
                            </ul>

                            <h4 class="terms-heading">6. Forbidden Actions</h4>
                            <p class="terms-paragraph">The following are prohibited:</p>
                            <ul>
                                <li>Illegal use of the website.</li>
                                <li>Copying or altering content without permission.</li>
                                <li>Distributing malware or spam.</li>
                                <li>Hacking or bypassing site security.</li>
                            </ul>

                            <h4 class="terms-heading">7. Disputes And Arbitration</h4>
                            <ul>
                                <li>Contact us first for dispute resolution.</li>
                                <li>If unresolved, disputes go to binding arbitration.</li>
                                <li>Class action waivers apply.</li>
                            </ul>

                            <h4 class="terms-heading">8. Data Protection And Privacy</h4>
                            <p class="terms-paragraph">We value your privacy. By using our services, you consent to data collection as per our Privacy Policy.</p>
                            <ul>
                                <li><strong>Data Usage:</strong> Information is securely stored and used only as needed.</li>
                                <li><strong>User Rights:</strong> You may request data access, edits, or deletion.</li>
                            </ul>

                            <h4 class="terms-heading">9. Liability And Indemnification</h4>
                            <ul>
                                <li>We are not liable for delays due to weather, traffic, or third parties.</li>
                                <li>You agree to indemnify us from claims arising from your use of our services.</li>
                            </ul>

                            <h4 class="terms-heading">10. Copyright And Intellectual Property</h4>
                            <p class="terms-paragraph">All content is protected. Unauthorized use is prohibited.</p>
                            <p class="terms-paragraph">
                                <strong>Reporting Infringements:</strong> Contact us with a description of the content, your contact info,
                                and proof of ownership at <strong>info@dallaslimoandblackcars.com</strong>.
                            </p>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@if(session('error'))
    <div class="alert alert-danger" role="alert" style="margin-top:12px;">
        {{ session('error') }}
    </div>
@endif

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('pk_test_51S81pVPvyAVXbs5QJfcsADAnQWcmEs5UjwJ5xoVEK6Hv5Zj4wFC08ogmw9zReRvAZIN4UVyECK6TEmMmAlEDm2iV00n6mftUq0');
    const elements = stripe.elements();

    const card = elements.create('card', {
        style: {
            base: {
                fontSize: '16px',
                color: '#212529',
            }
        }
    });

    card.mount('#card-element');

    // Enable button on load
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('final-pay-button').disabled = false;
    });

    function setLoading(isLoading) {
        const submitButton = document.getElementById('final-pay-button');
        const buttonText = document.getElementById('button-text');
        const buttonSpinner = document.getElementById('button-spinner');

        submitButton.disabled = isLoading;
        buttonText.textContent = isLoading ? 'Processing...' : 'BOOK NOW';
        buttonSpinner.classList.toggle('d-none', !isLoading);
    }

    function updatePricingAreaMargin(hasError) {
        const pricingArea = document.getElementById('pricing-area-wrapper');
        const isMobile = window.innerWidth <= 768;

        pricingArea.style.marginTop = hasError && isMobile ? '55px' : '';
    }

    card.on('change', function(event) {
        updatePricingAreaMargin(!!event.error || event.empty || !event.complete);
    });

    const form = document.getElementById('payment-form');
    const errorDiv = document.getElementById('card-errors');

    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        setLoading(true);
        errorDiv.textContent = '';
        updatePricingAreaMargin(false);

        try {
            const { paymentMethod, error } = await stripe.createPaymentMethod({
                type: 'card',
                card,
                billing_details: {
                    name: document.getElementById('card-name').value
                }
            });

            if (error) throw error;

            // Store payment method id in hidden input
            document.getElementById('payment_method_id').value = paymentMethod.id;

            // Mark form as submitted (for back button logic)
            form.dataset.submitted = 'true';

            // Now safely submit POST request to Laravel
            form.submit();

        } catch (error) {
            errorDiv.textContent = error.message;
            updatePricingAreaMargin(true);
            setLoading(false);
        }
    });
</script>

@endsection
