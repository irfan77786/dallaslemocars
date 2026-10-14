<?php

namespace App\Http\Middleware;

use App\Services\TurnstileService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

class VerifyTurnstile
{
    public function __construct(private TurnstileService $turnstile)
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        if (! $this->turnstile->isEnabled()) {
            return $next($request);
        }

        // Authenticated booking continue uses GET — skip captcha.
        if ($request->isMethod('GET')) {
            return $next($request);
        }

        // Booking funnel login/register posts to /login or /register without captcha.
        if ($request->input('login_type') === 'booking') {
            return $next($request);
        }

        $token = $request->input('cf-turnstile-response');

        if (! $this->turnstile->verify(is_string($token) ? $token : null, $request->ip())) {
            throw ValidationException::withMessages([
                'cf-turnstile-response' => 'Captcha verification failed. Please try again.',
            ]);
        }

        return $next($request);
    }
}
