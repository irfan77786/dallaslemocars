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
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.black-car-service-allen-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
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
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.black-car-service-fort-worth-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
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
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.black-car-service-frisco-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
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
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.black-car-service-plano-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function BlackCarServiceAnnaTexas(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Black Car Service Anna TX | Luxury Car & Chauffeur Service',
            'description' => 'Book premium black car service in Anna, TX for airport transfers, corporate travel & events. Luxury sedans, SUVs & sprinter vans with pro chauffeurs. On-time & reliable service in Anna.',
            'keywords' => 'black car service anna, anna black car service, chauffeur service anna tx, luxury car service anna, anna airport transportation',
            'og_title' => 'Black Car Service Anna TX | Luxury Car & Chauffeur Service',
            'og_description' => 'Book premium black car service in Anna, TX for airport transfers, corporate travel & events. Luxury sedans, SUVs & sprinter vans with pro chauffeurs. On-time & reliable service in Anna.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.black-car-service-anna-texas', [
            'backgroundImage' => '/img/black-car-service-anna.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToAustinCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas to Austin Car Service | Luxury Travel Texas',
            'description' => 'Experience top-tier Dallas to Austin car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'keywords' => 'Dallas to Austin car service, Fort Worth to Austin car service, Houston to Austin car service',
            'og_title' => 'Dallas to Austin Car Service | Luxury Travel Texas',
            'og_description' => 'Experience top-tier Dallas to Austin car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.black-car-service-dallas-texas', [
            'backgroundImage' => '/new_assets/assets/black-car-service-dallas-logo.png',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToArlingtonCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas to Arlington Car Service | Luxury Travel Texas',
            'description' => 'Experience top-tier Dallas to Arlington car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'keywords' => 'Dallas to Arlington car service, Fort Worth to Arlington car service, Houston to Arlington car service',
            'og_title' => 'Dallas to Arlington Car Service | Luxury Travel Texas',
            'og_description' => 'Experience top-tier Dallas to Arlington car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.dallas-to-arlington-car-service', [
            'backgroundImage' => '/new_assets/assets/black-car-service-dallas-logo.png',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToCrowleyCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas to Crowley Car Service | Luxury Travel Texas',
            'description' => 'Experience top-tier Dallas to Crowley car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'keywords' => 'Dallas to Crowley car service, Fort Worth to Crowley car service, Houston to Crowley car service',
            'og_title' => 'Dallas to Crowley Car Service | Luxury Travel Texas',
            'og_description' => 'Experience top-tier Dallas to Crowley car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.dallas-to-crowley-car-service', [
            'backgroundImage' => '/new_assets/assets/black-car-service-dallas-logo.png',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToAnnaCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas to Anna Car Service | Luxury Travel Texas',
            'description' => 'Experience top-tier Dallas to Anna car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'keywords' => 'Dallas to Anna car service, Fort Worth to Anna car service, Houston to Anna car service',
            'og_title' => 'Dallas to Anna Car Service | Luxury Travel Texas',
            'og_description' => 'Experience top-tier Dallas to Anna car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.dallas-to-anna-car-service', [
            'backgroundImage' => '/new_assets/assets/black-car-service-dallas-logo.png',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToTylerCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas to Tyler Car Service | Luxury Travel Texas',
            'description' => 'Experience top-tier Dallas to Tyler car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'keywords' => 'Dallas to Tyler car service, Fort Worth to Tyler car service, Houston to Tyler car service',
            'og_title' => 'Dallas to Tyler Car Service | Luxury Travel Texas',
            'og_description' => 'Experience top-tier Dallas to Tyler car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.dallas-to-tyler-car-service', [
            'backgroundImage' => '/new_assets/assets/black-car-service-dallas-logo.png',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DfwToWacoCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Fort Worth to Waco Car Service | Luxury Travel Texas',
            'description' => 'Experience top-tier Fort Worth to Waco car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'keywords' => 'Fort Worth to Waco car service, Houston to Waco car service',
            'og_title' => 'Fort Worth to Waco Car Service | Luxury Travel Texas',
            'og_description' => 'Experience top-tier Fort Worth to Waco car service with luxury sedans, SUVs, and minibuses. Ideal for business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('locations.dfw-to-waco-car-service', [
            'backgroundImage' => '/new_assets/assets/black-car-service-dallas-logo.png',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }
}
