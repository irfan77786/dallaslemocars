<?php

namespace App\Support;

use App\Models\User;
use Stripe\Customer;
use Stripe\Exception\InvalidRequestException;
use Stripe\Stripe;

class StripeCustomerResolver
{
    public static function resolveForUser(User $user): string
    {
        self::ensureApiKey();

        if ($user->stripe_customer_id && self::customerExists($user->stripe_customer_id)) {
            return $user->stripe_customer_id;
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
            if ($e->getHttpStatus() === 404 || $e->getStripeCode() === 'resource_missing') {
                return false;
            }

            throw $e;
        }
    }

    private static function formatName(?string $firstName, ?string $lastName): ?string
    {
        $name = trim(($firstName ?? '') . ' ' . ($lastName ?? ''));

        return $name !== '' ? $name : null;
    }
}
