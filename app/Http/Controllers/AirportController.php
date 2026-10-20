<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function AddisonAirportCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Addison Airport Car Service Dallas | Private Limo & Chauffeur',
            'description' => 'Book Addison Airport Car Service with luxury sedans, SUVs & limos. Reliable chauffeurs, on-time pickups & 24/7 service in Dallas, Plano & nearby areas.',
            'keywords' => 'Addison Airport Car Service, Addison Black Car Service, Addison Limo Service, Addison Chauffeur Service, Addison Airport Transfers, Private Car Service Addison',
            'og_title' => 'Addison Airport Car Service Dallas | Private Limo & Chauffeur',
            'og_description' => 'Book Addison Airport Car Service with luxury sedans, SUVs & limos. Reliable chauffeurs, on-time pickups & 24/7 service in Dallas, Plano & nearby areas.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('airports.addison-airport-car-service', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function CarServiceInDallasFortWorthInternationalAirport(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'DFW Airport Car Service | Dallas Black Car & Limo Service',
            'description' => 'Reliable DFW Airport Car Service with luxury black cars, limos & SUVs. On-time pickups & professional chauffeurs in Dallas, Plano & Frisco. Book now!',
            'keywords' => 'DFW Airport Car Service, Dallas Airport Car Service, Black Car Service DFW, Limo Service DFW Airport, Chauffeur Service Dallas',
            'og_title' => 'DFW Airport Car Service | Dallas Black Car & Limo Service',
            'og_description' => 'Reliable DFW Airport Car Service with luxury black cars, limos & SUVs. On-time pickups & professional chauffeurs in Dallas, Plano & Frisco. Book now!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('airports.car-service-dallas-fort-worth-international-airport', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasLoveFieldBlackCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Dallas Love Field Black Car Service | Luxury Airport Rides',
            'description' => 'Book Dallas Love Field Black Car Service with luxury sedans, SUVs & limos. Reliable chauffeurs, on-time pickups & 24/7 availability across Dallas & suburbs.',
            'keywords' => 'Dallas Love Field Black Car Service, Love Field Airport Car Service, Dallas Airport Black Car Service, Limo Service Love Field, Chauffeur Service Dallas',
            'og_title' => 'Dallas Love Field Black Car Service | Luxury Airport Rides',
            'og_description' => 'Book Dallas Love Field Black Car Service with luxury sedans, SUVs & limos. Reliable chauffeurs, on-time pickups & 24/7 availability across Dallas & suburbs.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('airports.dallas-love-field-black-car-service', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function SignatureFlightSupport(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Signature Flight Support Dallas Car Service | Love Field Black Cars',
            'description' => 'Private black car & chauffeur service for Signature Flight Support Dallas Love Field. Luxury sedans, SUVs & group transfers with on-time pickups.',
            'keywords' => 'signature flight support dallas car service, dallas love field signature flight support, signature flight support black car service',
            'og_title' => 'Signature Flight Support Dallas Car Service | Love Field Black Cars',
            'og_description' => 'Private black car & chauffeur service for Signature Flight Support Dallas Love Field. Luxury sedans, SUVs & group transfers with on-time pickups.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('airports.signature-flight-support', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function WacoRegionalAirport(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Waco Regional Airport Car Service | Luxury Black Car Dallas',
            'description' => 'Reliable Waco Regional Airport Car Service with luxury sedans, SUVs & group rides. Professional chauffeurs, on-time pickups & 24/7 airport transfers.',
            'keywords' => 'waco regional airport car service, waco airport black car service, private car service waco airport',
            'og_title' => 'Waco Regional Airport Car Service | Luxury Black Car Dallas',
            'og_description' => 'Reliable Waco Regional Airport Car Service with luxury sedans, SUVs & group rides. Professional chauffeurs, on-time pickups & 24/7 airport transfers.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('airports.waco-regional-airport', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }
}
