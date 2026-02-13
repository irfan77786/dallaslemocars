<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function AirportTransfer(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Airport Transfer Service | Reliable Transfers to DFW and Love Field',
            'description' => 'Professional airport transfer service in Dallas. On-time pickups, meet & greet, and comfortable rides to/from all major airports. Book your transfer now!',
            'keywords' => 'black car service, luxury black car service, black car service near me, professional chauffeur service',
            'og_title' => 'Airport Transfer Service | Reliable Transfers to DFW and Love Field',
            'og_description' => 'Professional airport transfer service in Dallas. On-time pickups, meet & greet, and comfortable rides to/from all major airports.',
            'og_image' => asset('img/dallas-airport-transfers-banner.jpg')
        ];

        return view('services.airport-transfer-dallas', [
            'backgroundImage' => '/img/dallas-airport-transfers-banner.jpg',
            'mobileImage' => '/img/dallas-airport-transfers-banner.jpg',
            'seo' => $seo
        ]);
    }

    public function AirportGreeters(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas Airport Greeters – Smooth, Fast, and Personalized Service',
            'description' => 'Make your arrival or departure effortless with our dedicated airport greeter service. From assisting with luggage to guiding you through DFW or Love Field, our courteous team ensures a smooth & stress-free journey. Enjoy personalized attention, comfort, & efficiency. Book your “Dallas airport greeter” today for a welcoming, hassle-free travel experience.',
            'keywords' => 'Dallas Airport Greeters, DFW Airport Meet and Greet, Love Field Airport Greeter Service',
            'og_title' => 'Dallas Airport Greeters – Smooth, Fast, and Personalized Service',
            'og_description' => 'Make your arrival or departure effortless with our dedicated airport greeter service. From assisting with luggage to guiding you through DFW or Love Field, our courteous team ensures a smooth & stress-free journey. Enjoy personalized attention, comfort, & efficiency. Book your “Dallas airport greeter” today for a welcoming, hassle-free travel experience.',
            'og_image' => asset('img/dallas-airport-greeters-banner.jpg')
        ];

        return view('services.dallas-airport-greeters', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function CorporateTransportation(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas Corporate Transportation – Executive Car Service for Business Travel',
            'description' => 'Arrive in style & on time with our premium corporate transportation services. We offer luxury sedans, SUVs, & executive vehicles tailored for business travel, meetings, & events across Dallas. With professional chauffeurs, punctual pickups, & complete comfort, we make every journey seamless. Book your Dallas corporate transportation today for reliable, first-class service.',
            'keywords' => 'Corporate Transportation, Dallas Corporate Transportation, DFW Corporate Transportation',
            'og_title' => 'Dallas Corporate Transportation – Executive Car Service for Business Travel',
            'og_description' => 'Elevate your business travel with our Dallas Corporate Transportation services. Offering luxury sedans, SUVs, and executive vehicles with professional chauffeurs for seamless meetings, events, and airport transfers.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.corporate-transpotation-dallas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function ExecutiveShuttleServices(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Executive Shuttle Dallas TX | Group & Event Transport',
            'description' => 'Reliable and comfortable executive shuttle services in Dallas, Texas. Ideal for corporate events, conferences, and group travel. Book your shuttle today.',
            'keywords' => 'Executive shuttle services Dallas, group transportation Dallas, corporate shuttle service Dallas',
            'og_title' => 'Executive Shuttle Dallas TX | Group & Event Transport',
            'og_description' => 'Reliable and comfortable executive shuttle services in Dallas, Texas. Ideal for corporate events, conferences, and group travel. Book your shuttle today.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.executive-shuttle-services-dallas-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function LuxuryVanRental(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Luxury Van Rental Dallas, TX – Premium Group Transportation',
            'description' => 'Experience comfort and style with our luxury van rentals in Dallas, Texas. Ideal for family trips, corporate outings, and group events. Book your ride today.',
            'keywords' => 'Luxury van rental Dallas, group transportation Dallas, executive van service Dallas',
            'og_title' => 'Luxury Van Rental Dallas, TX – Premium Group Transportation',
            'og_description' => 'Experience comfort and style with our luxury van rentals in Dallas, Texas. Ideal for family trips, corporate outings, and group events. Book your ride today.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.luxury-van-rental-dallas-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function ChauffeurService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Chauffeur Service Dallas TX | Luxury Car for Business & Leisure',
            'description' => 'Experience premium chauffeur services in Dallas, Texas. Whether for business meetings, airport transfers, or special events, our professional drivers ensure timely and comfortable transportation in luxury vehicles.',
            'keywords' => 'Chauffeur service Dallas, Dallas luxury car service, executive chauffeur Dallas',
            'og_title' => 'Chauffeur Service Dallas TX | Luxury Car for Business & Leisure',
            'og_description' => 'Experience premium chauffeur services in Dallas, Texas. Whether for business meetings, airport transfers, or special events, our professional drivers ensure timely and comfortable transportation in luxury vehicles.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.chauffeur-service-dallas-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function PrivateCarService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Private Car Service Dallas, Texas – Luxury Chauffeured Transportation',
            'description' => 'Experience top-tier private car service in Dallas, Texas. Our luxury sedans, SUVs, and executive vehicles offer 24/7 reliable transportation for business, leisure, and special events. Book now for a seamless travel experience.',
            'keywords' => 'Private car service Dallas, luxury car service Dallas, executive car service Dallas, chauffeur service Dallas',
            'og_title' => 'Private Car Service Dallas, Texas – Luxury Chauffeured Transportation',
            'og_description' => 'Experience top-tier private car service in Dallas, Texas. Our luxury sedans, SUVs, and executive vehicles offer 24/7 reliable transportation for business, leisure, and special events. Book now for a seamless travel experience.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.private-car-service-in-dallas-texas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function CityToCityRides(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'City-to-City Car Service Dallas | Luxury Travel Texas',
            'description' => 'Book our City-to-City Car Service Dallas for luxury travel to Fort Worth, Austin, Houston & more. Professional chauffeurs, sedans & SUVs. Reserve your ride today!',
            'keywords' => 'City-to-City Car Service Dallas, Dallas to Fort Worth car service, Dallas to Austin car service',
            'og_title' => 'City-to-City Car Service Dallas | Luxury Travel Texas',
            'og_description' => 'Book our City-to-City Car Service Dallas for luxury travel to Fort Worth, Austin, Houston & more. Professional chauffeurs, sedans & SUVs. Reserve your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.city-to-city-rides', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DfwLimoService(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'DFW Limo Service – Luxury Airport Transfers in Dallas and Fort Worth',
            'description' => 'Experience premium DFW limo service with luxury sedans, SUVs, and minibuses. Ideal for airport transfers, business trips, weddings, and events. Book your ride today!',
            'keywords' => 'DFW limo service, Dallas limo service, Fort Worth limo service',
            'og_title' => 'DFW Limo Service – Luxury Airport Transfers in Dallas and Fort Worth',
            'og_description' => 'Experience premium DFW limo service with luxury sedans, SUVs, and minibuses. Ideal for airport transfers, business trips, weddings, and events. Book your ride today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.dfw-limo-service', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function PrivateAviation(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Private Aviation Service in Dallas, Texas | Luxury Flight Transportation',
            'description' => 'Experience top-tier private aviation service in Dallas, Texas. Our professional pilots offer safe, comfortable, and luxurious flight transportation for business, leisure, and special events. Book now for a seamless travel experience.',
            'keywords' => 'Private aviation service Dallas, luxury aviation service Dallas, chauffeur aviation service Dallas',
            'og_title' => 'Private Aviation Service in Dallas, Texas | Luxury Flight Transportation',
            'og_description' => 'Experience top-tier private aviation service in Dallas, Texas. Our professional pilots offer safe, comfortable, and luxurious flight transportation for business, leisure, and special events. Book now for a seamless travel experience.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('services.private-aviation-dallas', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }
}
