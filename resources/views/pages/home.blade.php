@extends('master')

@section('content')

@include('partials.hero')
@include('partials.categories', [
    'title' => 'Our Premium Fleet – Ride in Comfort and Style',
    'customClass' => 'fleet-section',
    'description' => 'We have different kinds of luxury vehicles that can meet your requirements, be it individual travel, group travel, or corporate travel.',
    'features' => [
                [
                    'title' => 'Luxury Sedans',
                    'link' => '/luxury-sedans', // optional route
                    'description' => 'Pick from the Cadillac CT6, Volvo S90, or Mercedes-Benz S-Class for effortless driving to the DFW airport, meetings, or any other special event.',
                ],
                [
                    'title' => 'Black SUVs',
                    'link' => '/black-suvs',
                    'description' => 'Our Cadillac Escalade, Chevy Suburban, and GMC Yukon XL provide spacious, stylish transportation for groups, corporate travelers, or extra luggage.',
                ],
                [
                    'title' => 'Executive Sprinter Vans',
                    'link' => '/executive-sprinters',
                    'description' => 'Ideal for large gatherings such as meetings and weddings events, our Mercedes-Benz Sprinter Vans offer ample storage as well as comfortable and spacious seating.',
                ],
                [
                    'title' => 'Mini Bus Luxury Bus (23–27 Passengers)',
                    'link' => '/mini-luxury-bus-23-27',
                    'description' => 'Comfortable seating & Wi-Fi make our Luxury Mini Buses best for smaller groups, corporate meetings, or airport transfers. Comfortably seats 23–27 passengers.',
                ],
                [
                    'title' => 'Mini Bus (31–38 Passengers)',
                    'link' => '/mini-bus-31-38',
                    'description' => 'For big gatherings, our Mini Buses can comfortably seat between 31 and 38 people, making them ideal for corporate functions, weddings, and group travel all over Dallas.',
                ],
            ],
    'items' => [
            [
                'image' => asset('assets/img/site/mercedes-s-class.webp'),
                'title' => 'Mercedes S550, BMW 750 or similar',
                'link' => 'listing-single-details.html',
                'features' => [
                    ['icon' => 'fa fa-user', 'label' => 'Max', 'value' => 6],
                    ['icon' => 'fa fa-suitcase', 'label' => 'Max', 'value' => 6],
                ],
            ],
            [
                'image' => asset('assets/img/site/cadillac-escalade.webp'),
                'title' => 'Cadillac Escalade ESV, Lincoln Navigator',
                'link' => 'listing-single-details.html',
                'features' => [
                    ['icon' => 'fa fa-user', 'label' => 'Max', 'value' => 6],
                    ['icon' => 'fa fa-suitcase', 'label' => 'Max', 'value' => 6],
                ],
            ],
            [
                'image' => asset('assets/img/site/tesla-model-x.webp'),
                'title' => 'Tesla Model X or similar',
                'link' => 'listing-single-details.html',
                'features' => [
                    ['icon' => 'fa fa-user', 'label' => 'Max', 'value' => 3],
                    ['icon' => 'fa fa-suitcase', 'label' => 'Max', 'value' => 3],
                ],
            ],
            [
                'image' => asset('assets/img/site/cadillac-xts.webp'),
                'title' => 'Cadillac XTS, Volvo S90 or similar',
                'link' => 'listing-single-details.html',
                'features' => [
                    ['icon' => 'fa fa-user', 'label' => 'Max', 'value' => 3],
                    ['icon' => 'fa fa-suitcase', 'label' => 'Max', 'value' => 3],
                ],
            ],
            [
                'image' => asset('assets/img/site/mercedes-sprinter.webp'),
                'title' => 'Mercedes Sprinter or similar',
                'link' => 'listing-single-details.html',
                'features' => [
                    ['icon' => 'fa fa-user', 'label' => 'Max', 'value' => 12],
                    ['icon' => 'fa fa-suitcase', 'label' => 'Max', 'value' => 12],
                ],
            ],
        ]]);

        @include('partials.right_description', [
            'customClass' => 'airport-section',
            'title' => 'DFW & Love Field Airport Transfers: Always On Time, Every Time',
            'serviceSection' => [
            'description' => 'We specialize in luxury ground transportation across Dallas–Fort Worth. Whether you need an airport pickup, a ride to an executive meeting, or transport for a group event, we deliver luxury with every mile.',
            'intro' => 'Here’s what our service includes:',
            'items' => [
                [
                    'title' => 'Executive Black Car Service',
                    'link' => null,
                    'description' => 'Designed for executives and professionals. Discreet chauffeurs, quiet cabins, Wi-Fi for productivity en route.',
                ],
                [
                    'title' => 'Airport Transfers',
                    'link' => null,
                    'description' => 'We track all flights at DFW Airport, Love Field, and private FBOs. We pick up on time, take you where you go.',
                ],
                [
                    'title' => 'Event Transportation',
                    'link' => null,
                    'description' => 'Great for weddings, birthdays, a night out, or date night. Come in style and luxury.',
                ],
                [
                    'title' => 'Sprinter Van for Corporate Groups',
                    'link' => null,
                    'description' => 'Big, cozy, good for work teams, meetings, client shuttles.',
                ],
                [
                    'title' => 'Door-to-Door Coverage',
                    'link' => null,
                    'description' => 'Covering every big city and neighborhood of the Dallas metro.',
                ],
            ],
            ],
            'image' => 'private-black-car.webp',
            'alt' => 'Striking image placed on the left side',
            'textColor' => 'text-dark',
            'sectionClass' => ''
        ])
@include('partials.mobile-startnow', [
    'image' => 'fifa-car-service.webp',
    'action_name' => 'Visit our fifa world cup 2026 page',
])
@include('partials.left_description', [
    'py' => 4,
    'textColor' => 'white',
    'title' => 'Areas We Serve',
    'customClass' => 'areas-section',
    'serviceSection' => [
    'items' => [
        [
            'title' => 'Cities and Suburbs',
            'link' => null,
            'description' => 'Dallas, Fort Worth, Plano, Frisco, McKinney, Arlington, Addison, Irving, Coppell, Grapevine, Southlake, Trophy Club, University Park, Highland Park, Richardson, Las Colinas.'
        ],
        [
            'title' => 'Airports',
            'link' => null,
            'description' => 'DFW International Airport, Dallas Love Field, Addison Airport, McKinney National Airport, Fort Worth Alliance Airport, Private FBO Terminals.'
        ],
        [
            'title' => 'Business and Entertainment Districts',
            'link' => null,
            'description' => 'Legacy West (Plano), The Star (Frisco), Las Colinas (Irving), Downtown Dallas, Dallas Arts District, Sundance Square (Fort Worth).'
        ],
        [
            'title' => 'Sporting and Event Venues',
            'link' => null,
            'description' => 'AT&T Stadium, Globe Life Field, American Airlines Center, Toyota Stadium, PGA Frisco, Texas Motor Speedway, Toyota Music Factory.'
        ],
    ],
    ],
    'image' => 'areas.jpg',
    'alt' => 'Striking image placed on the left side',
    'textColor' => 'text-dark',
    'sectionClass' => ''
])
@include('partials.works', [
    'title' => 'Journey in Three Steps',
    'customClass' => 'works-section',
    'subtitle' => 'Seamless, reliable, and designed for your comfort.',
    'steps' => [
        [
            'number' => '01',
            'icon' => 'fas fa-calendar-check',
            'title' => 'Book Online or Call',
            'description' => 'Use our form or call to schedule your ride.'
        ],
        [
            'number' => '02',
            'icon' => 'fas fa-check',
            'title' => 'Get Confirmation',
            'description' => 'Receive driver and trip details via text or email.'
        ],
        [
            'number' => '03',
            'icon' => 'fas fa-user',
            'title' => 'Meet Your Chauffeur',
            'description' => 'On-time, professional, and ready to assist'
        ]
    ]
])

@include('partials.left_description', [
    'py' => 5,
    'title' => 'Why We’re the Preferred Choice for Executive Travel',
    'customClass' => 'choice-section',
    'serviceSection' => [
    'items' => [
        [
            'title' => 'Licensed & Insured Chauffeurs',
            'description' => 'Professional, fully trained drivers.',
            'link' => '/chauffeurs', // optional link (can be null)
        ],
        [
            'title' => 'Punctuality Guaranteed',
            'description' => 'We track your flight to ensure timely pickups.',
            'link' => '/flight-tracking',
        ],
        [
            'title' => 'Transparent, Flat Rates',
            'description' => 'No hidden fees, no surge pricing.',
            'link' => null,
        ],
        [
            'title' => 'Luxury, Clean Vehicles',
            'description' => 'Immaculately maintained for comfort and style.',
            'link' => '/fleet',
        ],
        [
            'title' => '24/7 Availability',
            'description' => 'Service across Dallas-Fort Worth, anytime you need it.',
            'link' => null,
        ],
        [
            'title' => 'Preferred by Business Executives & VIPs',
            'description' => 'Trusted by professionals who demand the best.',
            'link' => '/corporate-service',
        ],
        [
            'title' => 'Complimentary Amenities',
            'description' => 'Enjoy free Wi-Fi, phone chargers, and cold water on every ride.',
            'link' => null,
        ],
        ],
    ],
    'image' => 'airport-transfer.jpg',
    'alt' => 'Striking image placed on the left side',
    'textColor' => 'text-dark',
    'sectionClass' => ''
])
@include('partials.right_description', [
            'py' => 5,
            'customClass' => 'fifa-section',
            'title' => 'Why Choose Us for FIFA 2026 Transportation',
            'serviceSection' => [
            'description' => 'The FIFA World Cup 2026 is coming to Dallas, and the city is ready to welcome fans from across the globe. AT&T Stadium in Arlington will host nine matches, including a semi-final on Tuesday, July 14, 2026.',
            'intro' => 'Here’s what our service includes:',
            'items' => [
                    [
                        'title' => 'Professional Chauffeurs',
                        'link' => '/professional-chauffeurs',
                        'description' => 'Courteous, experienced, and trained for high-profile events.',
                    ],
                    [
                        'title' => 'On-Time Guarantee',
                        'link' => '/on-time-guarantee',
                        'description' => 'We track traffic patterns and game-day road closures.',
                    ],
                    [
                        'title' => 'Luxury Fleet Options',
                        'link' => '/luxury-fleet',
                        'description' => 'From sedans to motor coaches, we have the right vehicle for your group.',
                    ],
                    [
                        'title' => 'Airport & Hotel Transfers',
                        'link' => '/airport-hotel-transfers',
                        'description' => 'Serving DFW, Love Field, and private FBO terminals.',
                    ],
                    [
                        'title' => 'Group Travel Specialists',
                        'link' => '/group-travel',
                        'description' => 'Perfect for fan clubs, media teams, and corporate hospitality.',
                    ],
                ],
            ],
            'image' => 'fifacar.jpg',
            'alt' => 'Striking image placed on the left side',
            'textColor' => 'text-dark',
            'sectionClass' => ''
        ])
@include('partials.startnow', [
    'title' => 'Book a Ride Now!',
    'description' => 'Choose your destination, confirm, and you’re ready to go.',
    'action_name' => 'Contact Now',
])
@include('partials.testimonials')
@include('partials.faq', $faqs = [
            [
                'question' => 'Can I book transportation for multiple matches?',
                'answer' => 'Yes! You can schedule rides for multiple World Cup matches or events in advance. Our team will coordinate all transfers to ensure you arrive on time for each game.',
            ],
            [
                'question' => 'Do you provide direct service to AT&T Stadium in Arlington?',
                'answer' => 'Absolutely. We offer direct drop-off and pickup service at AT&T Stadium, as well as other major venues and fan zones across Dallas–Fort Worth.',
            ],
            [
                'question' => 'What’s the best vehicle for a group of 25 fans?',
                'answer' => 'Our Luxury Mini Bus (23–27 passengers) is perfect for groups of around 25 fans, offering Wi-Fi, plush seating, and plenty of luggage space.',
            ],
            [
                'question' => 'Can you handle last-minute reservations during the World Cup?',
                'answer' => 'We do our best to accommodate last-minute requests, especially during high-demand events. Booking early is recommended, but our team is available 24/7 to assist you.',
            ],
            [
                'question' => 'Do you provide airport transfers for international fans?',
                'answer' => 'Yes, we provide reliable airport transfers from DFW, Love Field, and private FBO terminals. Meet-and-greet services and multilingual chauffeurs are also available upon request.',
            ],
            [
                'question' => 'Are there custom packages for corporate and VIP clients?',
                'answer' => 'Yes. We offer tailored transportation packages for VIPs, executives, sponsors, and corporate groups, including premium vehicles, dedicated chauffeurs, and event coordination support.',
            ],
        ]);
{{-- @include('partials.locations') --}}
@endsection
