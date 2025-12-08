<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\PaymentMethod;
use Stripe\SetupIntent;
use Stripe\Customer;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    // ✅ LIST CARDS
    public function index()
    {
        $user = auth()->user();

        // ✅ SAFETY CHECK
        if (!$user->stripe_customer_id) {
            // Auto-create Stripe customer if missing
            $customer = \Stripe\Customer::create([
                'email' => $user->email,
                'name'  => $user->name,
            ]);

            $user->stripe_customer_id = $customer->id;
            $user->save();
        } else {
            $customer = \Stripe\Customer::retrieve($user->stripe_customer_id);
        }

        $cards = \Stripe\PaymentMethod::all([
            'customer' => $user->stripe_customer_id,
            'type' => 'card',
        ]);

        return view('payment-methods.index', [
            'cards'   => $cards->data,
            'default' => $customer->invoice_settings->default_payment_method ?? null
        ]);
    }

    // ✅ ADD CARD UI
    public function create()
    {
        return view('payment-methods.create');
    }

    // ✅ CREATE SETUP INTENT
    public function createSetupIntent()
    {
        $intent = SetupIntent::create([
            'customer' => auth()->user()->stripe_customer_id,
            'payment_method_types' => ['card'],
        ]);

        return response()->json([
            'client_secret' => $intent->client_secret,
        ]);
    }

    // ✅ SET PREFERRED
    public function savePreferred(Request $request)
    {
        Customer::update(auth()->user()->stripe_customer_id, [
            'invoice_settings' => [
                'default_payment_method' => $request->payment_method_id,
            ],
        ]);

        return response()->json(['status' => 'success']);
    }

    // ✅ EDIT CARD UI
    public function edit($id)
    {
        $card = PaymentMethod::retrieve($id);
        return view('payment-methods.edit', compact('card'));
    }

    // ✅ UPDATE BILLING DETAILS
    public function update(Request $request, $id)
    {
        PaymentMethod::update($id, [
            'billing_details' => [
                'name' => $request->name,
                'address' => [
                    'line1' => $request->line1,
                    'line2' => $request->line2,
                    'city' => $request->city,
                    'state' => $request->state,
                    'postal_code' => $request->postal_code,
                    'country' => $request->country,
                ]
            ]
        ]);

        return redirect()->route('cards.index')->with('success', 'Card updated');
    }

    // ✅ DELETE CARD
    public function destroy($id)
    {
        $card = PaymentMethod::retrieve($id);
        $card->detach();

        return back()->with('success', 'Card deleted');
    }
}
