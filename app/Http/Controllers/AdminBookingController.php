<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class AdminBookingController extends Controller
{
    public function finalizeTrip(Request $request)
    {
        if ($request->key !== 'nexus_developer_09') {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'booking_id' => 'required',
            'final_amount' => 'required|numeric|min:0',
            'tolls' => 'nullable|numeric|min:0',
            'extras' => 'nullable|numeric|min:0',
            'note' => 'nullable|string',
        ]);

        $booking = Booking::where('booking_id', $request->booking_id)->first();
        if (!$booking) {
            return response()->json(['success' => false, 'message' => 'Booking not found'], 404);
        }

        $finalAmount = $request->final_amount;
        $finalAmountCents = (int) round($finalAmount * 100);

        $authorizedPayment = $booking->payments()
            ->where('payment_status', 'Authorized')
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$authorizedPayment) {
            return response()->json(['success' => false, 'message' => 'No authorized payment found for this booking'], 400);
        }

        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $paymentIntent = PaymentIntent::retrieve($authorizedPayment->transaction_id);
            $authorizedAmountCents = $paymentIntent->amount;

            if ($finalAmountCents <= $authorizedAmountCents) {
                $paymentIntent->capture(['amount_to_capture' => $finalAmountCents]);

                $authorizedPayment->amount = $finalAmount;
                $authorizedPayment->payment_status = 'Paid';
                $authorizedPayment->save();

                $message = 'Payment captured successfully ($' . number_format($finalAmount, 2) . ')';
            } else {
                $paymentIntent->capture();
                $authorizedPayment->amount = $authorizedAmountCents / 100;
                $authorizedPayment->payment_status = 'Paid';
                $authorizedPayment->save();

                $differenceCents = $finalAmountCents - $authorizedAmountCents;

                if (!$booking->stripe_customer_id || !$booking->stripe_payment_method_id) {
                    return response()->json(['success' => false, 'message' => 'Cannot charge extra: Customer or Payment Method not saved.'], 400);
                }

                $newPaymentIntent = PaymentIntent::create([
                    'amount' => $differenceCents,
                    'currency' => 'usd',
                    'customer' => $booking->stripe_customer_id,
                    'payment_method' => $booking->stripe_payment_method_id,
                    'off_session' => true,
                    'confirm' => true,
                    'description' => 'Additional charges for Booking ' . $booking->booking_id,
                ]);

                $newPayment = new Payment();
                $newPayment->booking_id = $booking->id;
                $newPayment->transaction_id = $newPaymentIntent->id;
                $newPayment->amount = $differenceCents / 100;
                $newPayment->payment_status = 'Paid';
                $newPayment->payment_method = 'card';
                $newPayment->save();

                $message = 'Payment captured ($' . number_format($authorizedAmountCents / 100, 2) . ') + Extra charged ($' . number_format($differenceCents / 100, 2) . ')';
            }

            $booking->payment_status = 'Paid';
            $booking->total_price = $finalAmount;
            if ($request->note) {
                $booking->note = trim(($booking->note ?? '') . "\n[Finalize]: " . $request->note);
            }
            $booking->save();

            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => [
                    'booking_id' => $booking->booking_id,
                    'total_paid' => $finalAmount,
                ],
            ]);
        } catch (\Exception $e) {
            Log::error('Finalize Trip Error: ' . $e->getMessage());

            return response()->json(['success' => false, 'message' => 'Stripe Error: ' . $e->getMessage()], 500);
        }
    }
}
