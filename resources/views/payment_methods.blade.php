@extends('layouts.guest')
@section('guest_data')
<form id="payment-form">
    <input type="text" id="card_holder_name" placeholder="Card Holder Name" required>

    <input type="text" id="street" placeholder="Street" required>
    <input type="text" id="apt" placeholder="Apt / Suite">
    <input type="text" id="city" placeholder="City" required>
    <input type="text" id="state" placeholder="State Code" required>
    <input type="text" id="zip" placeholder="Postal Code" required>

    <select id="country">
        <option value="US">United States</option>
        <option value="PK">Pakistan</option>
    </select>

    <label>
        <input type="checkbox" id="preferred"> Preferred Card
    </label>

    <!-- ✅ Stripe Secure Card Field -->
    <div id="card-element"></div>

    <button type="submit">Save Card</button>
</form>
@endsection
<script src="https://js.stripe.com/v3/"></script>
<script>
const stripe = Stripe("pk_test_xxxxx");
const elements = stripe.elements();
const card = elements.create("card");
card.mount("#card-element");

document.getElementById('payment-form').addEventListener('submit', async (e) => {
    e.preventDefault();

    const res = await fetch('/create-setup-intent');
    const { client_secret } = await res.json();

    const result = await stripe.confirmCardSetup(client_secret, {
        payment_method: {
            card: card,
            billing_details: {
                name: document.getElementById('card_holder_name').value,
                address: {
                    line1: document.getElementById('street').value,
                    line2: document.getElementById('apt').value,
                    city: document.getElementById('city').value,
                    state: document.getElementById('state').value,
                    postal_code: document.getElementById('zip').value,
                    country: document.getElementById('country').value,
                }
            }
        }
    });

    if (result.error) {
        alert(result.error.message);
    } else {
        await fetch('/save-preferred-card', {
            method: 'POST',
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({
                payment_method_id: result.setupIntent.payment_method,
                preferred: document.getElementById('preferred').checked
            })
        });

        alert("Card Saved Successfully ✅");
        location.reload();
    }
});
</script>
