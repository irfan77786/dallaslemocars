@extends('layouts.guest')
@section('guest_data')
<div class="container-fluid pb-5">
<div class="tab-content">
<div class="tab-pane fade show active" id="tab-bookings" role="tabpanel" aria-labelledby="bookings-tab">
<div class="container pb-10">
    <a href="{{ route('cards.index') }}">← Back to Payment Methods</a>

    <h3 class="mt-3 mb-3">Add Credit Card</h3>

    <div class="card">
        <div class="card-body">

            <form id="payment-form">

                {{-- ✅ Card Holder Name --}}
                <div class="mb-3">
                    <label>Card Holder Name</label>
                    <input type="text" id="card_holder_name" class="form-control" required>
                </div>

                {{-- ✅ Street --}}
                <div class="mb-3">
                    <label>Street</label>
                    <input type="text" id="street" class="form-control" required>
                </div>

                {{-- ✅ Apt / Suite --}}
                <div class="mb-3">
                    <label>Apt / Suite</label>
                    <input type="text" id="apt" class="form-control">
                </div>

                {{-- ✅ City --}}
                <div class="mb-3">
                    <label>City</label>
                    <input type="text" id="city" class="form-control" required>
                </div>

                {{-- ✅ State --}}
                <div class="mb-3">
                    <label>State Code</label>
                    <input type="text" id="state" class="form-control" required>
                </div>

                {{-- ✅ Postal Code --}}
                <div class="mb-3">
                    <label>Postal Code</label>
                    <input type="text" id="zip" class="form-control" required>
                </div>

                {{-- ✅ Country --}}
                <div class="mb-3">
                    <label>Country</label>
                    <select id="country" class="form-control">
                        <option value="US">United States</option>
                        <option value="PK">Pakistan</option>
                        <option value="CA">Canada</option>
                        <option value="GB">United Kingdom</option>
                    </select>
                </div>

                {{-- ✅ Preferred Card --}}
                <div class="mb-3">
                    <label>
                        <input type="checkbox" id="preferred">
                        Preferred Card
                    </label>
                </div>

                <hr>

                {{-- ✅ SECURE STRIPE CARD ELEMENT --}}
                <div class="mb-3">
                    <label>Credit Card Details</label>
                    <div id="card-element" class="form-control p-3"></div>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Save Card 
                </button>
            </form>

        </div>
    </div>
</div>
</div>
</div>
</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
const stripe = Stripe("{{ config('services.stripe.key') }}");
const elements = stripe.elements();
const card = elements.create("card");
card.mount("#card-element");

document.getElementById("payment-form").addEventListener("submit", async function(e){
    e.preventDefault();

    const res = await fetch("{{ route('cards.setup') }}", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        }
    });

    const data = await res.json();

    const result = await stripe.confirmCardSetup(data.client_secret, {
        payment_method: {
            card: card,
            billing_details: {
                name: document.getElementById("card_holder_name").value,
                address: {
                    line1: document.getElementById("street").value,
                    line2: document.getElementById("apt").value,
                    city: document.getElementById("city").value,
                    state: document.getElementById("state").value,
                    postal_code: document.getElementById("zip").value,
                    country: document.getElementById("country").value,
                }
            }
        }
    });

    if (result.error) {
        alert(result.error.message);
        return;
    }

    // ✅ Save Preferred Card If Checked
    if (document.getElementById("preferred").checked) {
        await fetch("{{ route('cards.preferred') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                payment_method_id: result.setupIntent.payment_method
            })
        });
    }

    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Card Saved Successfully ✅',
        confirmButtonText: 'OK'
    });
    window.location.href = "{{ route('cards.index') }}";

});
</script>
@endsection
