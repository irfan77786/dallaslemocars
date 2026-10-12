<?php

namespace App\Support;

use App\Models\User;
use Stripe\Customer;
use Stripe\Exception\InvalidRequestException;
use Stripe\PaymentMethod;
use Stripe\Stripe;

class StripeCustomerResolver
{
    public static function resolveForUser(User $user): string
    {
        self::ensureApiKey();

        $existingId = $user->stripe_customer_id;

        if (is_string($existingId) && $existingId !== '' && self::customerExists($existingId)) {
            return $existingId;
        }

        // Stale/mismatched ID from another Stripe mode or deleted customer.
        if ($existingId) {
            $user->stripe_customer_id = null;
        }

        $customer = Customer::create([
            'email' => $user->email,
            'name' => self::formatName($user->first_name, $user->last_name),
        ]);

        $user->stripe_customer_id = $customer->id;
        $user->save();

        return $customer->id;
    }

    public static function resolveForGuestSession(?string $email, ?string $firstName = null, ?string $lastName = null): string
    {
        self::ensureApiKey();

        $sessionId = session('stripe_customer_id');

        if (is_string($sessionId) && $sessionId !== '' && self::customerExists($sessionId)) {
            return $sessionId;
        }

        $customer = Customer::create([
            'email' => $email,
            'name' => self::formatName($firstName, $lastName),
        ]);

        session(['stripe_customer_id' => $customer->id]);

        return $customer->id;
    }

    /**
     * Resolve a valid Stripe customer and return attached card payment methods.
     *
     * @return array{0: string, 1: array<int, mixed>}
     */
    public static function cardsForUser(User $user): array
    {
        self::ensureApiKey();

        $stripeCustomerId = self::resolveForUser($user);

        try {
            $cardsList = PaymentMethod::all([
                'customer' => $stripeCustomerId,
                'type' => 'card',
            ]);

            return [$stripeCustomerId, $cardsList->data ?? []];
        } catch (InvalidRequestException $e) {
            if (!self::isMissingCustomerError($e)) {
                throw $e;
            }

            // Race / stale ID: recreate customer and retry once with empty cards.
            $user->stripe_customer_id = null;
            $user->save();
            $stripeCustomerId = self::resolveForUser($user->fresh());

            return [$stripeCustomerId, []];
        }
    }

    private static function ensureApiKey(): void
    {
        Stripe::setApiKey(config('services.stripe.secret'));
    }

    private static function customerExists(string $customerId): bool
    {
        try {
            Customer::retrieve($customerId);

            return true;
        } catch (InvalidRequestException $e) {
            if (self::isMissingCustomerError($e)) {
                return false;
            }

            throw $e;
        }
    }

    private static function isMissingCustomerError(InvalidRequestException $e): bool
    {
        if ($e->getHttpStatus() === 404 || $e->getStripeCode() === 'resource_missing') {
            return true;
        }

        return str_contains(strtolower($e->getMessage()), 'no such customer');
    }

    private static function formatName(?string $firstName, ?string $lastName): ?string
    {
        $name = trim(($firstName ?? '') . ' ' . ($lastName ?? ''));

        return $name !== '' ? $name : null;
    }
}
