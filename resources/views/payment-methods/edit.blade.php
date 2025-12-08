@extends('layouts.guest')
@section('guest_data')
<div class="container-fluid pb-5">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-bookings" role="tabpanel" aria-labelledby="bookings-tab">
            <div class="container">
                <a href="{{ route('cards.index') }}">← Back to Payment Methods</a>

                <h3 class="mt-3 mb-3">Edit Credit Card</h3>

                <div class="card">
                    <div class="card-body">

                        <form id="payment-form">

                            {{-- Card Holder Name --}}
                            <div class="mb-3">
                                <label>Card Holder Name</label>
                                <input type="text" id="card_holder_name" class="form-control" value="{{ $card->billing_details->name ?? '' }}" required>
                            </div>

                            {{-- Street --}}
                            <div class="mb-3">
                                <label>Street</label>
                                <input type="text" id="street" class="form-control" value="{{ $card->billing_details->address->line1 ?? '' }}" required>
                            </div>

                            {{-- Apt / Suite --}}
                            <div class="mb-3">
                                <label>Apt / Suite</label>
                                <input type="text" id="apt" class="form-control" value="{{ $card->billing_details->address->line2 ?? '' }}">
                            </div>

                            {{-- City --}}
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" id="city" class="form-control" value="{{ $card->billing_details->address->city ?? '' }}" required>
                            </div>

                            {{-- State --}}
                            <div class="mb-3">
                                <label>State Code</label>
                                <input type="text" id="state" class="form-control" value="{{ $card->billing_details->address->state ?? '' }}" required>
                            </div>

                            {{-- Postal Code --}}
                            <div class="mb-3">
                                <label>Postal Code</label>
                                <input type="text" id="zip" class="form-control" value="{{ $card->billing_details->address->postal_code ?? '' }}" required>
                            </div>

                            {{-- Country --}}
                            <div class="mb-3">
                                <label>Country</label>
                                <select id="country" class="form-control">
                                    <option value="US" @if(($card->billing_details->address->country ?? '') == 'US') selected @endif>United States</option>
                                    <option value="PK" @if(($card->billing_details->address->country ?? '') == 'PK') selected @endif>Pakistan</option>
                                    <option value="CA" @if(($card->billing_details->address->country ?? '') == 'CA') selected @endif>Canada</option>
                                    <option value="GB" @if(($card->billing_details->address->country ?? '') == 'GB') selected @endif>United Kingdom</option>
                                </select>
                            </div>

                            {{-- Preferred Card --}}
                            <div class="mb-3">
                                <label>
                                    <input type="checkbox" id="preferred" @if($card->is_preferred) checked @endif>
                                    Preferred Card
                                </label>
                            </div>

                            <hr>

                            {{-- Optional: Replace Card --}}
                            <div class="mb-3">
                                <label>Replace Credit Card (Optional)</label>
                                <div id="card-element" class="form-control p-3"></div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Update Card
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

    let payment_method_id = "{{ $card->id }}"; // existing card

    // If user entered new card, confirmCardSetup
    if (document.getElementById("card-element").querySelector("iframe")) {
        const res = await fetch("{{ route('cards.setup') }}", {
            method: "POST",
            headers: { "X-CSRF-TOKEN": "{{ csrf_token() }}" }
        });
        const data = await res.json();

        const result = await stripe.confirmCardSetup(data.client_secret, {
            payment_method: { card: card }
        });

        if (result.error) {
            alert(result.error.message);
            return;
        }

        payment_method_id = result.setupIntent.payment_method;
    }

    // Update card billing details / preferred
    await fetch("{{ route('cards.update', $card->id) }}", {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
            payment_method_id: payment_method_id,
            name: document.getElementById("card_holder_name").value,
            street: document.getElementById("street").value,
            apt: document.getElementById("apt").value,
            city: document.getElementById("city").value,
            state: document.getElementById("state").value,
            zip: document.getElementById("zip").value,
            country: document.getElementById("country").value,
            preferred: document.getElementById("preferred").checked
        })
    });

    alert("Card Updated Successfully ✅");
    window.location.href = "{{ route('cards.index') }}";
});
</script>
@endsection
