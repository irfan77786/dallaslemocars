<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBookingCompletion
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('booking_completed')) {
            session()->flush();
            $request->session()->regenerateToken();
            session(['booking_completed' => true]);
            return redirect()->route('booking');
        }
        return $next($request);
    }
}
