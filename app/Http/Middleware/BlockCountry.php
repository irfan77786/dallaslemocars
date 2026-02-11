<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use GeoIP;

class BlockCountry
{
    // List of blocked country codes (ISO 3166-1 alpha-2)
    protected $blockedCountries = [
        'PK', // Pakistan
        'BD', // Bangladesh
        'NG', // Nigeria
        'IN', // India
        'AF', // Afghanistan
        'EG', // Egypt
        'KE', // Kenya
        'ID', // Indonesia
        'GH', // Ghana
    ];

    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $location = geoip($ip);
        Log::info("IP: {$ip}, Country: {$location->iso_code}");
    
        if (in_array($location->iso_code, $this->blockedCountries)) {
            Log::warning("Blocked IP {$ip} from country {$location->iso_code}");
            abort(403, 'Access denied from your location.');
        }

        $location = geoip($request->ip());

        if (in_array($location->iso_code, $this->blockedCountries)) {
            abort(403, 'Access denied from your location.');
        }

        return $next($request);
    }
}
