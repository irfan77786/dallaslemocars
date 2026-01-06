<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function DallasToTyler(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Dallas to Tyler Private Car Service | Luxury City-to-City Transfers',
            'description' => 'Enjoy a comfortable Dallas to Tyler ride with our luxury private car service — professional chauffeurs and clean vehicles for every trip.',
            'keywords' => 'Dallas to Tyler private car service, luxury transfer, black car Dallas to Tyler, city to city ride',
            'og_title' => 'Dallas to Tyler Private Car Service | Luxury City-to-City Transfers',
            'og_description' => 'Enjoy a comfortable Dallas to Tyler ride with our luxury private car service — professional chauffeurs and clean vehicles for every trip.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('cities.dallas-to-tyler', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToCollegeStation(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Dallas to College Station Chauffeur Service | Luxury Private Transfers',
            'description' => 'Enjoy a smooth Dallas to College Station ride with our luxury chauffeur service — private, on-time, and professional transfers.',
            'keywords' => 'Dallas to College Station chauffeur service, luxury private transfer, city to city ride, black car Dallas to College Station',
            'og_title' => 'Dallas to College Station Chauffeur Service | Luxury Private Transfers',
            'og_description' => 'Enjoy a smooth Dallas to College Station ride with our luxury chauffeur service — private, on-time, and professional transfers.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('cities.dallas-to-college-station', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToSherman(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Dallas to Sherman Black Car Service | Private Luxury Transfers',
            'description' => 'Book a reliable Dallas to Sherman black car service for comfortable, on-time, and private transfers with professional chauffeurs.',
            'keywords' => 'Dallas to Sherman black car service, private transfer, luxury chauffeur Dallas Sherman, city to city ride',
            'og_title' => 'Dallas to Sherman Black Car Service | Private Luxury Transfers',
            'og_description' => 'Book a reliable Dallas to Sherman black car service for comfortable, on-time, and private transfers with professional chauffeurs.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('cities.dallas-to-sherman', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToAustin(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'Dallas to Austin Black Car Service | Luxury Private Transfers',
            'description' => 'Travel in comfort from Dallas to Austin with our premium black car service. Enjoy private, on-time transfers, professional chauffeurs, and luxury vehicles for every trip.',
            'keywords' => 'Dallas to Austin black car service, private car transfer, luxury chauffeur Dallas Austin, city to city ride',
            'og_title' => 'Dallas to Austin Black Car Service | Luxury Private Transfers',
            'og_description' => 'Experience premier black car service in Dallas, TX. Perfect for airport transfers, events, or business travel. Book your luxury ride today.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('cities.dallas-to-austin', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function DallasToWaco(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }
        
        $seo = [
            'title' => 'DFW to Waco Car Service | Luxury Private Transfers',
            'description' => 'Travel from DFW to Waco in comfort with our premium black car service — private rides, professional chauffeurs, and luxury vehicles.',
            'keywords' => 'DFW to Waco car service, private transfer, luxury chauffeur DFW Waco, black car service',
            'og_title' => 'DFW to Waco Car Service | Luxury Private Transfers',
            'og_description' => 'Travel from DFW to Waco in comfort with our premium black car service — private rides, professional chauffeurs, and luxury vehicles.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];
        
        return view('cities.dfw-to-waco', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }
}
