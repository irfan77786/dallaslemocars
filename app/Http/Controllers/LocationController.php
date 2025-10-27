<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function BlackCarServiceAllenTexas(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Black Car Service Allen TX | Luxury Airport & Corporate Rides',
            'description' => 'Premium Black Car Service in Allen, TX. Luxury sedans, SUVs & minibuses for airport transfers, corporate events & special occasions. Reliable chauffeurs & 24/7 service.',
            'keywords' => 'black car service Allen, Allen luxury car service, Allen airport car service, corporate rides Allen TX',
            'og_title' => 'Black Car Service Allen TX | Luxury Airport & Corporate Rides',
            'og_description' => 'Premium Black Car Service in Allen, TX. Luxury sedans, SUVs & minibuses for airport transfers, corporate events & special occasions. Reliable chauffeurs & 24/7 service.',
            'og_image' => asset('img/black-car-service-dallas.webp')
        ];
        
        return view('locations.black-car-service-allen-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'img/black-car-service-dallas.webp',
            'seo' => $seo
        ]);
    }

    public function BlackCarServiceFortWorthTexas(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Black Car Service Fort Worth – Premium Chauffeur & Airport Transfers',
            'description' => 'Experience luxury and reliability with our Black Car Service in Fort Worth, TX. Offering airport transfers, corporate travel, and special event transportation with professional chauffeurs.',
            'keywords' => 'Black Car Service Fort Worth, Fort Worth limo service, Fort Worth airport transfers',
            'og_title' => 'Black Car Service Fort Worth – Premium Chauffeur & Airport Transfers',
            'og_description' => 'Experience luxury and reliability with our Black Car Service in Fort Worth, TX. Offering airport transfers, corporate travel, and special event transportation with professional chauffeurs.',
            'og_image' => asset('img/black-car-service-dallas.webp')
        ];
        
        return view('locations.black-car-service-fort-worth-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'img/black-car-service-dallas.webp',
            'seo' => $seo
        ]);
    }

    public function BlackCarServiceFriscoTexas(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Black Car Service Frisco TX | Luxury Car & Chauffeur Service',
            'description' => 'Book premium black car service in Frisco, TX for airport transfers, corporate travel & events. Luxury sedans, SUVs & sprinter vans with pro chauffeurs. On-time & reliable service in Frisco.',
            'keywords' => 'black car service frisco, frisco black car service, chauffeur service frisco tx, luxury car service frisco, frisco airport transportation',
            'og_title' => 'Black Car Service Frisco TX | Luxury Car & Chauffeur Service',
            'og_description' => 'Book premium black car service in Frisco, TX for airport transfers, corporate travel & events. Luxury sedans, SUVs & sprinter vans with pro chauffeurs. On-time & reliable service in Frisco.',
            'og_image' => asset('img/black-car-service-dallas.webp')
        ];
        
        return view('locations.black-car-service-frisco-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'img/black-car-service-dallas.webp',
            'seo' => $seo
        ]);
    }

    public function BlackCarServicePlanoTexas(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Black Car Service Plano | Luxury Car & SUV Transportation in Plano, TX',
            'description' => 'Experience premium Black Car Service in Plano, TX. Our luxury sedans, SUVs & professional chauffeurs provide reliable airport transfers, corporate rides & private transportation. 24/7 service with comfort, safety & style.',
            'keywords' => 'Black Car Service Plano, Plano car service, Plano luxury transportation, Plano airport car service, chauffeur service Plano TX',
            'og_title' => 'Black Car Service Plano | Luxury Car & SUV Transportation in Plano, TX',
            'og_description' => 'Experience premium Black Car Service in Plano, TX. Our luxury sedans, SUVs & professional chauffeurs provide reliable airport transfers, corporate rides & private transportation. 24/7 service with comfort, safety & style.',
            'og_image' => asset('img/black-car-service-dallas.webp')
        ];
        
        return view('locations.black-car-service-plano-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'img/black-car-service-dallas.webp',
            'seo' => $seo
        ]);
    }
}
