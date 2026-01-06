<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class WebsiteController extends Controller
{
    public function aboutUs(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'About Us | Dallas Limo And Black Cars Service',
            'description' => 'Learn about Dallas Limo And Black Cars Service, Dallas–Fort Worth’s premier luxury black car & limousine service. Professional chauffeurs, premium fleet, DFW & Love Field coverage.',
            'keywords' => 'Black Car Service in Dallas, Executive Chauffeur Service DFW, Luxury Airport Transfer Love Field, DFW Car Service',
            'og_title' => 'About Us | Dallas Limo And Black Cars Service',
            'og_description' => 'Learn about Dallas Limo And Black Cars Service, Dallas–Fort Worth’s premier luxury black car & limousine service. Professional chauffeurs, premium fleet, DFW & Love Field coverage.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.about', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function fifaWorldCup2026CarServiceDallas(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'FIFA 2026 Car Service Dallas | Luxury Rides to AT&T Stadium',
            'description' => 'Experience premium car service for FIFA World Cup 2026 in Dallas. Luxury sedans, SUVs, and buses for seamless transfers to AT&T Stadium. Book your ride today!',
            'keywords' => 'FIFA World Cup 2026 Dallas car service, AT&T Stadium transportation, luxury car service Dallas',
            'og_title' => 'FIFA 2026 Car Service Dallas | Luxury Rides to AT&T Stadium',
            'og_description' => 'Experience premium car service for FIFA World Cup 2026 in Dallas. Luxury sedans, SUVs, and buses for seamless transfers to AT&T Stadium. Book your ride today!',
            'og_image' => asset('img/black-car-service-fifa-world-cup-banner.webp')
        ];

        return view('website.fifa-world-cup-2026-car-service-dallas', [
            'backgroundImage' => '/img/black-car-service-fifa-world-cup-banner.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function ourFleet(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Dallas Black Car Service Fleet – Luxury Sedans, SUVs, Sprinter Vans',
            'description' => 'Discover our Dallas black car service fleet – luxury sedans, SUVs & Sprinter vans for business trips, airport transfers & group events.',
            'keywords' => 'Dallas black car service, luxury car service Dallas, airport car service Dallas',
            'og_title' => 'Dallas Black Car Service Fleet – Luxury Sedans, SUVs, Sprinter Vans',
            'og_description' => 'Discover our Dallas black car service fleet – luxury sedans, SUVs & Sprinter vans for business trips, airport transfers & group events.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.our-fleet', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function getAQuote(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Get a Quote – Dallas Black Car and Limousine Service',
            'description' => 'Instantly receive a transparent quote for your luxury ride in Dallas. Choose from sedans, SUVs, or Sprinter vans for airport transfers, corporate events, and more.',
            'keywords' => 'Dallas black car service quote, luxury car service Dallas, airport transfer quote Dallas',
            'og_title' => 'Get a Quote – Dallas Black Car and Limousine Service',
            'og_description' => 'Instantly receive a transparent quote for your luxury ride in Dallas. Choose from sedans, SUVs, or Sprinter vans for airport transfers, corporate events, and more.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.get-a-quote', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function contactUs(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Contact Dallas Black Car Service – Luxury Airport & Corporate Transportation',
            'description' => 'Reach Dallas Black Car Service for reliable black car rides, airport transfers, corporate travel, and group transportation. Call, email, or book online today!',
            'keywords' => 'Dallas black car service contact, luxury car service Dallas, airport car service Dallas',
            'og_title' => 'Contact Dallas Black Car Service – Luxury Airport & Corporate Transportation',
            'og_description' => 'Reach Dallas Black Car Service for reliable black car rides, airport transfers, corporate travel, and group transportation. Call, email, or book online today!',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.contact-us', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function contactUsPost(Request $request)
    {
        $contactData = $request->formInput;
        try {
            $details = ['name' => $contactData['first_name'] . ' ' . $contactData['last_name'], 'email' => $contactData['email'], 'phone' => $contactData['phone'], 'message' => $contactData['message'],];
            Mail::to('nexusdeveloper09@gmail.com')->send(new ContactMail($details));
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Mail not sent: ' . $e->getMessage());
        }
    }

    public function CancellationPolicy(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Cancellation Policy – Dallas Black Car Service',
            'description' => 'Learn about our cancellation policy for Dallas black car service. Book your ride today and experience our transparent and flexible cancellation process.',
            'keywords' => 'Dallas black car service cancellation policy, luxury car service cancellation policy Dallas, airport car service cancellation policy Dallas',
            'og_title' => 'Cancellation Policy – Dallas Black Car Service',
            'og_description' => 'Learn about our cancellation policy for Dallas black car service. Book your ride today and experience our transparent and flexible cancellation process.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.cancellation-policy', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function TermsAndConditions(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Terms and Conditions – Dallas Black Car Service',
            'description' => 'Review our terms and conditions for Dallas black car service. Understand your rights and obligations when using our services.',
            'keywords' => 'Dallas black car service terms and conditions, luxury car service terms and conditions Dallas, airport car service terms and conditions Dallas',
            'og_title' => 'Terms and Conditions – Dallas Black Car Service',
            'og_description' => 'Review our terms and conditions for Dallas black car service. Understand your rights and obligations when using our services.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.terms-and-conditions', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }

    public function PrivacyPolicy(Request $request){
        if($request->edit){
            session(['edit'=>1]);
        }else{
            session()->flush();
            $request->session()->regenerateToken();
        }

        $seo = [
            'title' => 'Privacy Policy – Dallas Black Car Service',
            'description' => 'Review our privacy policy for Dallas black car service. Understand how we collect, use, and safeguard your personal information.',
            'keywords' => 'Dallas black car service privacy policy, luxury car service privacy policy Dallas, airport car service privacy policy Dallas',
            'og_title' => 'Privacy Policy – Dallas Black Car Service',
            'og_description' => 'Review our privacy policy for Dallas black car service. Understand how we collect, use, and safeguard your personal information.',
            'og_image' => asset('new_assets/assets/black-car-service-dallas-logo.png')
        ];

        return view('website.privacy-policy', [
            'backgroundImage' => '/img/black-car-service-frisco.webp',
            'mobileImage' => 'new_assets/assets/black-car-service-dallas-logo.png',
            'seo' => $seo
        ]);
    }
}
