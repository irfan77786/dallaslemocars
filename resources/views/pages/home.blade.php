@extends('master')

@section('content')

@include('partials.hero')
@include('partials.works', [
    'title' => 'Journey in Three Steps',
    'subtitle' => 'Seamless, reliable, and designed for your comfort.',
    'steps' => [
        [
            'number' => '01',
            'icon' => 'booking.png',
            'title' => 'Book Online or Call',
            'description' => 'Use our form or call to schedule your ride.'
        ],
        [
            'number' => '02',
            'icon' => 'conformation.png',
            'title' => 'Get Confirmation',
            'description' => 'Receive driver and trip details via text or email.'
        ],
        [
            'number' => '03',
            'icon' => 'chauffeur.png',
            'title' => 'Meet Your Chauffeur',
            'description' => 'On-time, professional, and ready to assist'
        ]
    ]
])
@include('partials.right_description', [
    'title' => 'DFW & Love Field Airport Transfers: Always On Time, Every Time',
    'content' => '<div class="pt-section-title-box ">
            <p class="pt-section-description">We specialize in luxury ground transportation across Dallas–Fort Worth. Whether you need an airport pickup, a ride to an executive meeting, or transport for a group event, we deliver luxury with every mile.</p>
            <p>Here’s what our service includes:</p>
            <ul>
              <li><strong class="strong-c-color"><a class="internal-links">Executive Black Car Service</a></strong>: Designed for executives and professionals. Discreet chauffeurs, quiet cabins, Wi-Fi for productivity en route.</li>
              <li><strong class="strong-c-color">Airport Transfers</strong>: We track all flights at <a class="internal-links">DFW Airport</a>, Love Field, and private FBOs. We pick up on time, take you where you go.</li>
              <li><strong class="strong-c-color">Event Transportation</strong>: Great for weddings, birthdays, a night out, or date night. Come in style and luxury.</li>
              <li><strong class="strong-c-color"><a class="internal-links">Sprinter Van for Corporate Groups</a></strong>: Big, cozy, good for work teams, meetings, client shuttles.
              </li>
              <li><strong class="strong-c-color">Door-to-Door Coverage</strong>: Covering every big city and neighborhood of the Dallas metro.</li>

            </ul>
          </div>',
    'image' => 'private-black-car.webp',
    'alt' => 'Striking image placed on the left side',
    'textColor' => 'text-dark',
    'sectionClass' => ''
])
@include('partials.left_description', [
    'title' => 'Why We’re the Preferred Choice for Executive Travel',
    'content' => '<div class="pt-section-title-box ">
    <p class="pt-section-description">Selecting the best transport is key—and it’s an honor for us to provide a service that’s respected, safe, and designed with your ease in mind. Whether you are away for business or pleasure, we bring a high-quality ride every time.</p>
    <p>Here’s why we are the preferred choice:</p>
    <ul>
    <li><strong class="strong-c-color">Licensed &amp; Insured Chauffeurs:</strong> Professional, fully trained drivers.</li>
    <li><strong class="strong-c-color">Punctuality Guaranteed:</strong> We track your flight to ensure timely pickups.</li>
    <li><strong class="strong-c-color">Transparent, Flat Rates:</strong> No hidden fees, no surge pricing.</li>
    <li><strong class="strong-c-color">Luxury, Clean Vehicles:</strong> Immaculately maintained for comfort and style.</li>
    <li><strong class="strong-c-color">24/7 Availability:</strong> Service across Dallas-Fort Worth, anytime you need it.</li>
    <li><strong class="strong-c-color">Preferred by Business Executives &amp; VIPs:</strong> Trusted by professionals who demand the best.</li>
    <li><strong class="strong-c-color">Complimentary Amenities:</strong> Enjoy free Wi-Fi, phone chargers, and cold water on every ride.</li>
    </ul>
    <p>We make sure your ride is smooth and stress-free—every time.</p>
    </div>',
    'image' => 'airport-transfer.jpg',
    'alt' => 'Striking image placed on the left side',
    'textColor' => 'text-dark',
    'sectionClass' => ''
])
@include('partials.promo')
@include('partials.categories')
@include('partials.testimonials')
@include('partials.locations')
@include('partials.startnow')

@endsection
