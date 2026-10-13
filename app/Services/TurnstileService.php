<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TurnstileService
{
    public function isEnabled(): bool
    {
        return filled(config('services.turnstile.site_key'))
            && filled(config('services.turnstile.secret_key'));
    }

    public function verify(?string $token, ?string $remoteIp = null): bool
    {
        if (! $this->isEnabled()) {
            return true;
        }

        if (blank($token)) {
            return false;
        }

        try {
            $payload = [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $token,
            ];

            if ($remoteIp) {
                $payload['remoteip'] = $remoteIp;
            }

            $response = Http::asForm()
                ->timeout(10)
                ->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', $payload);

            if (! $response->successful()) {
                Log::warning('Turnstile siteverify HTTP failure', [
                    'status' => $response->status(),
                ]);

                return false;
            }

            $result = $response->json();

            if (! ($result['success'] ?? false)) {
                Log::info('Turnstile verification failed', [
                    'error-codes' => $result['error-codes'] ?? [],
                ]);

                return false;
            }

            return true;
        } catch (\Throwable $e) {
            Log::error('Turnstile verification exception: '.$e->getMessage());

            return false;
        }
    }
}
