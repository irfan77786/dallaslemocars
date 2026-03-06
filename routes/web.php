<?php

use App\Http\Controllers\AirportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoredLocationsController;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/users', function (Request $request) {

    if ($request->ajax()) {

        $query = User::select('id', 'first_name', 'last_name', 'email', 'phone', 'contact_type', 'email_verified_at')
            ->where('user_id', auth()->id())
            ->orderBy('id', 'desc');

        $searchText = $request->input('search_text');
        $contactType = $request->input('contact_type');
        $status      = $request->input('status');

        if ($searchText) {
            $query->where(function ($q) use ($searchText) {
                $q->where('first_name', 'like', "%$searchText%")
                  ->orWhere('last_name', 'like', "%$searchText%")
                  ->orWhere('email', 'like', "%$searchText%")
                  ->orWhere('phone', 'like', "%$searchText%");
            });
        }

        if (!empty($contactType)) {
            $query->where('contact_type', $contactType);
        }

        if ($status === 'verified') {
            $query->whereNotNull('email_verified_at');
        } elseif ($status === 'unverified') {
            $query->whereNull('email_verified_at');
        }

        return DataTables::eloquent($query)

            ->addColumn('checkbox', fn($row) =>
                '<input type="checkbox" class="user-checkbox" value="'.$row->id.'">'
            )

            ->addColumn('account', fn($row) => $row->id)

            ->addColumn('name', fn($row) => trim(($row->first_name ?? '').' '.($row->last_name ?? '')) ?: '-')

            ->addColumn('phone', fn($row) => $row->phone ?? '-')

            ->addColumn('type', fn($row) => ucfirst($row->contact_type ?? 'Passenger'))

            ->addColumn('status', function ($row) {
                $verified = !is_null($row->email_verified_at);
                $class = $verified ? 'badge bg-success' : 'badge bg-secondary';
                $text  = $verified ? 'Verified' : 'Unverified';
                return "<span class='${class}'>${text}</span>";
            })

            ->rawColumns(['checkbox','status'])
            ->make(true);
    }

    return view('users');
})->middleware(['auth'])->name('users');

Route::get('/users/export/xls', [ExportController::class, 'usersXls'])
    ->middleware(['auth'])
    ->name('users.export.xls');
Route::get('/users/export/pdf', [ExportController::class, 'usersPdf'])
    ->middleware(['auth'])
    ->name('users.export.pdf');

Route::post('/users', function (Request $request) {
    $data = $request->validate([
        'first_name'   => ['required','string','max:100'],
        'last_name'    => ['required','string','max:100'],
        'email'        => ['required','email','max:255'],
        'phone'        => ['nullable','string','max:50'],
        'contact_type' => ['required','in:passenger,billing,booking'],
    ]);

    $exists = User::where('email', $data['email'])->where('user_id', auth()->id())->exists();
    if ($exists) {
        return response()->json(['message' => 'Email already exists'], 422);
    }

    $data['user_id'] = auth()->id();
    $data['password'] = bcrypt(Str::random(12));

    try {
        User::create($data);
    } catch (QueryException $e) {
        if ($e->getCode() === '23000') {
            return response()->json(['message' => 'Email already exists'], 422);
        }
        throw $e;
    }

    return response()->json(['message' => 'Contact created']);
})->middleware(['auth'])->name('users.store');

Route::get('/dashboard', function (Request $request) {
    if ($request->ajax()) {

        $query = Booking::with(['booker', 'vehicle', 'returnService'])
        ->where('user_id', auth()->id())
        ->latest();

        $rideType = $request->input('ride_type');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $searchText = $request->input('search_text');

        if ($rideType === 'one') {
            $query->where('round_trip', 0);
        } elseif ($rideType === 'round') {
            $query->where('round_trip', 1);
        }

        if ($request->status) {
            $query->where('payment_status', $request->status);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('pickup_date', [$startDate, $endDate]);
        } elseif ($startDate) {
            $query->where('pickup_date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('pickup_date', '<=', $endDate);
        }

        if ($searchText) {
            $query->where(function($q) use ($searchText) {
                $q->where('booking_id', 'like', "%$searchText%")
                  ->orWhere('pickup_location', 'like', "%$searchText%")
                  ->orWhere('dropoff_location', 'like', "%$searchText%")
                  ->orWhereHas('booker', function($qb) use ($searchText) {
                      $qb->where('first_name', 'like', "%$searchText%")
                         ->orWhere('last_name', 'like', "%$searchText%");
                  });
            });
        }

        return DataTables::eloquent($query)

            // Checkbox
            ->addColumn('checkbox', fn($row) =>
                '<input type="checkbox" class="row-checkbox" value="'.$row->id.'">'
            )

            // Conf #
            ->addColumn('confirmation', fn($row) => $row->booking_id)

            // Date
            ->addColumn('date', fn($row) =>
                $row->pickup_date . ' @ ' . $row->pickup_time
            )

            // Passenger
            ->addColumn('passenger', function ($row) {
                if (!$row->booker) return '-';
                return $row->booker->first_name . ' ' . $row->booker->last_name;
            })

            // Routing Information
            ->addColumn('routing', function ($row) {
                $text = "<strong>{$row->pickup_location}</strong> → <strong>{$row->dropoff_location}</strong>";
                if ($row->round_trip == 1) {
                    $text .= "<br><small>Return: {$row->return_date} @ {$row->return_time}</small>";
                }
                return $text;
            })

            // Status
            ->addColumn('status', function ($row) {
                $status = strtolower($row->payment_status);
                $class = match ($status) {
                    'paid' => 'badge bg-success',
                    'pending' => 'badge bg-warning text-dark',
                    'cancelled' => 'badge bg-danger',
                    default => 'badge bg-secondary',
                };
                return "<span class='{$class}'>".ucfirst($status)."</span>";
            })

            // Total
            ->addColumn('total', fn($row) =>
                '$'.number_format($row->total_price, 2)
            )

            // Actions
            ->addColumn('actions', function ($row) {
                return '
                    <button class="btn btn-sm btn-primary"
                        onclick=\'showBookingDetails('.json_encode($row).')\'
                        data-toggle="modal"
                        data-target="#bookingDetailModal">
                        View
                    </button>
                ';
            })

            ->rawColumns(['checkbox','routing','status','actions'])
            ->make(true);
    }

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/export/xls', [ExportController::class, 'dashboardXls'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.export.xls');
Route::get('/dashboard/export/pdf', [ExportController::class, 'dashboardPdf'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.export.pdf');

Route::get('/invoices', function (Request $request) {
    if ($request->ajax()) {
        $query = Booking::with(['booker', 'vehicle', 'returnService'])
            ->where('user_id', auth()->id())
            ->latest();

        $rideType   = $request->input('ride_type');
        $startDate  = $request->input('start_date');
        $endDate    = $request->input('end_date');
        $searchText = $request->input('search_text');

        if ($rideType === 'one') {
            $query->where('round_trip', 0);
        } elseif ($rideType === 'round') {
            $query->where('round_trip', 1);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('pickup_date', [$startDate, $endDate]);
        } elseif ($startDate) {
            $query->where('pickup_date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('pickup_date', '<=', $endDate);
        }

        if ($searchText) {
            $query->where(function($q) use ($searchText) {
                $q->where('booking_id', 'like', "%$searchText%")
                  ->orWhere('pickup_location', 'like', "%$searchText%")
                  ->orWhere('dropoff_location', 'like', "%$searchText%")
                  ->orWhereHas('booker', function($qb) use ($searchText) {
                      $qb->where('first_name', 'like', "%$searchText%")
                         ->orWhere('last_name', 'like', "%$searchText%");
                  });
            });
        }

        return DataTables::eloquent($query)
            ->addColumn('checkbox', fn($row) => '<input type="checkbox" class="row-checkbox" value="'.$row->id.'">')
            ->addColumn('confirmation', fn($row) => $row->booking_id)
            ->addColumn('date', fn($row) => $row->pickup_date . ' @ ' . $row->pickup_time)
            ->addColumn('passenger', function ($row) {
                if (!$row->booker) return '-';
                return $row->booker->first_name . ' ' . $row->booker->last_name;
            })
            ->addColumn('routing', function ($row) {
                $text = "<strong>{$row->pickup_location}</strong> → <strong>{$row->dropoff_location}</strong>";
                if ($row->round_trip == 1) {
                    $text .= "<br><small>Return: {$row->return_date} @ {$row->return_time}</small>";
                }
                return $text;
            })
            ->addColumn('status', function ($row) {
                $status = strtolower($row->payment_status);
                $class = match ($status) {
                    'paid' => 'badge bg-success',
                    'pending' => 'badge bg-warning text-dark',
                    'cancelled' => 'badge bg-danger',
                    default => 'badge bg-secondary',
                };
                return "<span class='{$class}'>".ucfirst($status)."</span>";
            })
            ->addColumn('total', fn($row) => '$'.number_format($row->total_price, 2))
            ->addColumn('actions', function ($row) {
                $downloadUrl = route('invoices.download', ['booking_id' => $row->booking_id]);
                return '<a class="btn btn-sm btn-primary" href="'.$downloadUrl.'">Download Invoice</a>';
            })
            ->rawColumns(['checkbox','routing','status','actions'])
            ->make(true);
    }

    return view('invoices.index');
})->middleware(['auth', 'verified'])->name('invoices.index');

Route::get('/invoices/{booking_id}/download', function ($booking_id) {
    $booking = Booking::with(['booker', 'vehicle'])->where('booking_id', $booking_id)->where('user_id', auth()->id())->firstOrFail();
    $filePath = public_path('pdfs/'.$booking->booking_id.'.pdf');
    if (!file_exists($filePath)) {
        $bookingData = [
            'booking_id' => $booking->booking_id,
            'passenger_name' => $booking->booker ? ($booking->booker->first_name.' '.$booking->booker->last_name) : null,
            'email' => $booking->booker->email ?? null,
            'phone' => $booking->booker->phone_number ?? null,
            'pickup_location' => $booking->pickup_location,
            'dropoff_location' => $booking->dropoff_location,
            'hours' => null,
            'pickup_date' => $booking->pickup_date,
            'pickup_time' => $booking->pickup_time,
            'vehicle_type' => $booking->vehicle->vehicle_name ?? 'Standard',
            'passengers' => 1,
            'total_amount' => $booking->total_price,
            'payment_status' => $booking->payment_status,
            'special_instructions' => $booking->note,
            'flight_details' => null,
            'booker_first_name' => $booking->booker->first_name ?? null,
            'booker_last_name' => $booking->booker->last_name ?? null,
            'booker_email' => $booking->booker->email ?? null,
            'booker_number' => $booking->booker->phone_number ?? null,
            'isBookingForOthers' => false,
        ];
        $pdf = Pdf::loadView('pdfs.booking', ['bookingData' => $bookingData]);
        if (!file_exists(public_path('pdfs'))) { @mkdir(public_path('pdfs'), 0777, true); }
        $pdf->save($filePath);
    }
    return response()->file($filePath, ['Content-Type' => 'application/pdf']);
})->middleware(['auth', 'verified'])->name('invoices.download');

Route::get('/user-login/{id}/{price}', [BookingController::class, 'userLogin'])->name('user_login');

Route::post('/check-email-exists', [ProfileController::class, 'checkEmailExists'])->name('check.email.exists');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ------------------------- Location Routes -----------------------------------------:

    Route::get('/storedLocations/list', [StoredLocationsController::class, 'index'])
        ->name('storedLocations.index');

    // Show create form
    Route::get('/storedLocations/create', [StoredLocationsController::class, 'create'])
        ->name('storedLocations.add');

    // Store new location
    Route::post('/storedLocations/store', [StoredLocationsController::class, 'store'])
        ->name('storedLocations.store');

    // Show edit form
    Route::get('/storedLocations/{id}/edit', [StoredLocationsController::class, 'edit'])
        ->name('storedLocations.edit');

    // Update location
    Route::put('/storedLocations/{id}', [StoredLocationsController::class, 'update'])
        ->name('storedLocations.update');

    // Delete location
    Route::delete('/storedLocations/{id}', [StoredLocationsController::class, 'destroy'])
        ->name('storedLocations.delete');

    // ------------------------- Payment Routes -----------------------------------------:

    Route::get('/payment-methods', [PaymentMethodController::class, 'index'])
    ->name('cards.index');

    Route::get('/payment-methods/create', [PaymentMethodController::class, 'create'])
    ->name('cards.add');

    Route::post('/payment-methods/setup-intent', [PaymentMethodController::class, 'createSetupIntent'])
        ->name('cards.setup');

    Route::post('/payment-methods/preferred', [PaymentMethodController::class, 'savePreferred'])
        ->name('cards.preferred');

    Route::get('/payment-methods/{id}/edit', [PaymentMethodController::class, 'edit'])
        ->name('cards.edit');

    Route::post('/payment-methods/{id}/update', [PaymentMethodController::class, 'update'])
        ->name('cards.update');

    Route::delete('/payment-methods/{id}', [PaymentMethodController::class, 'destroy'])
        ->name('cards.delete');
});

// ------------------------------------- BOOKING ROUTES -------------------------------------------------:

Route::middleware('checkBookingCompletion')->group(function () {
    Route::get('/book-now/', [BookingController::class, 'BookNow'])->name('book_now');
    Route::get('/allVehicle/', [BookingController::class, 'showAll']);
    Route::post('/submit-passengerInfo/{id}', [BookingController::class, 'submitPassengerInfo']);
    Route::match(['get', 'post'], '/bookRide', [BookingController::class, 'bookRide']);
    Route::post('/completeBook', [BookingController::class, 'completeBook']);
    Route::get('/calculate-return-trip/', [BookingController::class, 'CalculateReturnTrip']);
    Route::post('/save-return-service', [BookingController::class, 'saveReturnService']);
    Route::get('/booking/', [BookingController::class, 'showForm'])->name('booking.form');  //step 1
    Route::get('/booking/point-to-point/', [BookingController::class, 'handlePointToPoint'])->name('booking.pointToPoint.show');  //step2 case 1
    Route::get('/booking/hourly-hire/', [BookingController::class, 'handleHourlyHire'])->name('booking.hourlyHire.show');  //step2 case 2
    Route::get('/passengerInfo', [BookingController::class, 'submitPassengerInfo'] )->name('passenger.info'); //step 3
    Route::get('/submit-passengerInfo', [BookingController::class, 'submitPassengerInfo'])->name('submit.passenger.info'); //step 4
    Route::post('/save-booking-form-session', [BookingController::class, 'saveBookingFormSession'])->name('save.booking.form.session');

});

// Other Pages:

Route::prefix('services')->group(function(){
    Route::get('/airport-transfers-dallas/', [ServiceController::class, 'AirportTransfer'])->name('airport_transfer');
    Route::get('/dallas-airport-greeters/', [ServiceController::class, 'AirportGreeters'])->name('airport_greeters');
    Route::get('/corporate-transportation-dallas/', [ServiceController::class, 'CorporateTransportation'])->name('corporate_transportation');
    Route::get("/executive-shuttle-services-dallas/", [ServiceController::class, 'ExecutiveShuttleServices'])->name('executive_shuttle_services');
    Route::get("/luxury-van-rental-dallas/", [ServiceController::class, 'LuxuryVanRental'])->name('luxury_van_rental');
    Route::get('/chauffeur-service-dallas/', [ServiceController::class, 'ChauffeurService'])->name('chauffeur_service');
    Route::get('/private-car-service-in-dallas/', [ServiceController::class, 'PrivateCarService'])->name('private_car_service');
    Route::get('/private-aviation-dallas/', [ServiceController::class, 'PrivateAviation'])->name('private_aviation');
});

    Route::get('/city-to-city-rides/', [ServiceController::class, 'CityToCityRides'])->name('city_to_city_rides');
    Route::get('/limousine-service-dallas/', [ServiceController::class, 'DfwLimoService'])->name('dfw_limo_service');
    Route::get('/dallas-to-austin-car-service', [LocationController::class, 'DallasToAustinCarService'])->name('dallas_to_austin_car_service');
    Route::get('/dallas-to-arlington-car-service', [LocationController::class, 'DallasToArlingtonCarService'])->name('dallas_to_arlington_car_service');
    Route::get('/dallas-to-crowley-car-service', [LocationController::class, 'DallasToCrowleyCarService'])->name('dallas_to_crowley_car_service');
    Route::get('/dallas-to-anna-car-service', [LocationController::class, 'DallasToAnnaCarService'])->name('dallas_to_anna_car_service');
    Route::get('/dallas-to-tyler-car-service', [LocationController::class, 'DallasToTylerCarService'])->name('dallas_to_tyler_car_service');
    Route::get('/dfw-to-waco-car-service', [LocationController::class, 'DfwToWacoCarService'])->name('dfw_to_waco_car_service');
    Route::get('/cancellation-policy', [WebsiteController::class, 'CancellationPolicy'])->name('cancellation_policy');
    Route::get('/terms-and-conditions', [WebsiteController::class, 'TermsAndConditions'])->name('terms_and_conditions');
    Route::get('/privacy-policy', [WebsiteController::class, 'PrivacyPolicy'])->name('privacy_policy');

Route::prefix('airports')->group(function(){
    Route::get('/addison-airport-car-service/', [AirportController::class, 'AddisonAirportCarService'])->name('addison_airport_car_service');
    Route::get('/dfw-car-service/', [AirportController::class, 'CarServiceInDallasFortWorthInternationalAirport'])->name('car_service_in_dallas_fort_worth_international_airport');
    Route::get('/dallas-love-field-airport-car-service/', [AirportController::class, 'DallasLoveFieldBlackCarService'])->name('dallas_love_field_black_car_service');
    Route::get('/mckinney-national-airport-car-service/', [AirportController::class, 'SignatureFlightSupport'])->name('signature_flight_support');
    Route::get('/waco-regional-airport-car-service/', [AirportController::class, 'WacoRegionalAirport'])->name('waco_regional_airport');
});

Route::prefix('texas')->group(function(){
    Route::get('/black-car-service-allen-tx/', [LocationController::class, 'BlackCarServiceAllenTexas'])->name('black_car_service_allen_texas');
    Route::get('/black-car-service-anna-tx/', [LocationController::class, 'BlackCarServiceAnnaTexas'])->name('black_car_service_anna_texas');
    Route::get('/black-car-service-fort-worth-tx/', [LocationController::class, 'BlackCarServiceFortWorthTexas'])->name('black_car_service_fort_worth_texas');
    Route::get('/black-car-service-frisco-tx/', [LocationController::class, 'BlackCarServiceFriscoTexas'])->name('black_car_service_frisco_texas');
    Route::get('/black-car-service-plano-tx/', [LocationController::class, 'BlackCarServicePlanoTexas'])->name('black_car_service_plano_texas');
});

Route::prefix('city-to-city-ride')->group(function(){
    Route::get('/dallas-to-tyler/', [CityController::class, 'DallasToTyler'])->name('dallas_to_tyler');
    Route::get('/dallas-to-college-station/', [CityController::class, 'DallasToCollegeStation'])->name('dallas_to_college_station');
    Route::get('/dallas-to-sherman/', [CityController::class, 'DallasToSherman'])->name('dallas_to_sherman');
    Route::get('/dallas-to-austin/', [CityController::class, 'DallasToAustin'])->name('dallas_to_austin');
    Route::get('/dfw-to-waco/', [CityController::class, 'DallasToWaco'])->name('dfw_to_waco');
});

Route::get('/', [BookingController::class, 'showForm'])->name('booking');
Route::get('/about-us/', [WebsiteController::class, 'aboutUs'])->name('about_us');
Route::get('/contact-us/', [WebsiteController::class, 'contactUs'])->name('contact_us');
Route::post('/contact-us', [WebsiteController::class, 'contactUsPost'])->name('contact_us_post');
Route::get('/our-fleet/', [WebsiteController::class, 'ourFleet'])->name('our_fleet');
Route::get('/get-a-quote/', [WebsiteController::class, 'getAQuote'])->name('get_a_quote');
Route::get('/fifa-world-cup-2026-car-service-dallas/', [WebsiteController::class, 'fifaWorldCup2026CarServiceDallas'])->name('fifa_world_cup_2026_car_service_dallas');
Route::post('/booking/point-to-point', [BookingController::class, 'handlePointToPoint'])->name('booking.pointToPoint');
Route::post('/booking/hourly-hire', [BookingController::class, 'handleHourlyHire'])->name('booking.hourlyHire');
Route::get('/thank-you', [BookingController::class, 'ThankYou'])->name('thankyou');

// ------------------------------------- CONFIGURATION ROUTES -------------------------------------------------:

Route::get('/run-queue', function (Request $request) {
    if ($request->key !== 'nexus_developer_09') {
        abort(403, 'Unauthorized');
    }

    Artisan::call('queue:work --stop-when-empty');
    return response()->json([
        'status' => 'success',
        'message' => 'Queue processed'
    ]);
});

Route::get('test', function(){
    $data = '{"step":2,"data":[{"id":5,"vehicle_name":"Business Sedan","vehicle_code":"SED","number_of_passengers":3,"luggage_capacity":3,"active":1,"vehicle_image":"vehicles\/1747520162_68290aa286936.jpg","greeting_fee":"0.00","base_fare":"95.00","base_hourly_fare":"1.00","per_km_rate":"1.20","description":"Cadillac CT6, Lyriq or similar","slug":"business-sedan","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-05-19T05:43:53.000000Z","car_seat":[{"id":83,"vehicle_id":5,"category":"Infant ages 0-1","quantity":1,"rate":"20.00","created_at":"2025-05-19T05:43:53.000000Z","updated_at":"2025-05-19T05:43:53.000000Z"},{"id":84,"vehicle_id":5,"category":"Toddler ages 1-3","quantity":1,"rate":"20.00","created_at":"2025-05-19T05:43:53.000000Z","updated_at":"2025-05-19T05:43:53.000000Z"},{"id":85,"vehicle_id":5,"category":"Booster ages 3-6","quantity":1,"rate":"20.00","created_at":"2025-05-19T05:43:53.000000Z","updated_at":"2025-05-19T05:43:53.000000Z"}]},{"id":6,"vehicle_name":"EliteX SUV","vehicle_code":"ESUV","number_of_passengers":4,"luggage_capacity":4,"active":1,"vehicle_image":"vehicles\/1747519860_68290974a76f2.png","greeting_fee":"30.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Cadillac XT6, Lincoln Aviator or similar","slug":"elitex-suv","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-05-18T07:11:00.000000Z","car_seat":[{"id":74,"vehicle_id":6,"category":"Infant ages 0-1","quantity":1,"rate":"20.00","created_at":"2025-05-18T07:11:00.000000Z","updated_at":"2025-05-18T07:11:00.000000Z"},{"id":75,"vehicle_id":6,"category":"Toddler ages 1-3","quantity":1,"rate":"20.00","created_at":"2025-05-18T07:11:00.000000Z","updated_at":"2025-05-18T07:11:00.000000Z"},{"id":76,"vehicle_id":6,"category":"Booster ages 3-6","quantity":1,"rate":"20.00","created_at":"2025-05-18T07:11:00.000000Z","updated_at":"2025-05-18T07:11:00.000000Z"}]},{"id":7,"vehicle_name":"Luxury SUV","vehicle_code":"SUV","number_of_passengers":6,"luggage_capacity":6,"active":1,"vehicle_image":"vehicles\/1747519173_682906c5c74e7.jpg","greeting_fee":"30.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Chevrolet Suburban or similar","slug":"luxury-suv","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-05-18T06:59:33.000000Z","car_seat":[{"id":68,"vehicle_id":7,"category":"Infant ages 0-1","quantity":2,"rate":"20.00","created_at":"2025-05-18T06:59:33.000000Z","updated_at":"2025-05-18T06:59:33.000000Z"},{"id":69,"vehicle_id":7,"category":"Toddler ages 1-3","quantity":2,"rate":"20.00","created_at":"2025-05-18T06:59:33.000000Z","updated_at":"2025-05-18T06:59:33.000000Z"},{"id":70,"vehicle_id":7,"category":"Booster ages 3-6","quantity":2,"rate":"20.00","created_at":"2025-05-18T06:59:33.000000Z","updated_at":"2025-05-18T06:59:33.000000Z"}]},{"id":8,"vehicle_name":"Premium SUV","vehicle_code":"PSUV","number_of_passengers":6,"luggage_capacity":6,"active":1,"vehicle_image":"vehicles\/1747519469_682907ed85042.jpg","greeting_fee":"30.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Cadillac Escalade ESV, Lincoln Navigator or similar","slug":"premium-suv","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-05-18T07:04:29.000000Z","car_seat":[{"id":71,"vehicle_id":8,"category":"Infant ages 0-1","quantity":2,"rate":"20.00","created_at":"2025-05-18T07:04:29.000000Z","updated_at":"2025-05-18T07:04:29.000000Z"},{"id":72,"vehicle_id":8,"category":"Toddler ages 1-3","quantity":2,"rate":"20.00","created_at":"2025-05-18T07:04:29.000000Z","updated_at":"2025-05-18T07:04:29.000000Z"},{"id":73,"vehicle_id":8,"category":"Booster ages 3-6","quantity":2,"rate":"20.00","created_at":"2025-05-18T07:04:29.000000Z","updated_at":"2025-05-18T07:04:29.000000Z"}]},{"id":9,"vehicle_name":"Executive Van","vehicle_code":"FordVan","number_of_passengers":10,"luggage_capacity":10,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"70.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Ford Transit Van","slug":"executive-van","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":13,"vehicle_id":9,"category":"Infant ages 0-1","quantity":2,"rate":"20.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":14,"vehicle_id":9,"category":"Toddler ages 1-3","quantity":2,"rate":"20.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":15,"vehicle_id":9,"category":"Booster ages 3-6","quantity":2,"rate":"20.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":10,"vehicle_name":"Executive Sprinter","vehicle_code":"Sprinter","number_of_passengers":14,"luggage_capacity":14,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"70.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Mercedes Benz Sprinter Van or Similar","slug":"executive-sprinter","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":16,"vehicle_id":10,"category":"Booster ages 3-6","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":17,"vehicle_id":10,"category":"Toddler ages 1-3","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":18,"vehicle_id":10,"category":"Infant ages 0-1","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":11,"vehicle_name":"Stretch Limo 9P","vehicle_code":"Limo9P","number_of_passengers":9,"luggage_capacity":3,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"70.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Lincoln MKT","slug":"stretch-limo-9p","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":19,"vehicle_id":11,"category":"Infant ages 0-1","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":12,"vehicle_name":"Stretch Limo 18P","vehicle_code":"Limo18P","number_of_passengers":18,"luggage_capacity":3,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"70.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Hummer","slug":"stretch-limo-18p","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":20,"vehicle_id":12,"category":"Infant ages 0-1","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":21,"vehicle_id":12,"category":"Toddler ages 1-3","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":22,"vehicle_id":12,"category":"Booster ages 3-6","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":13,"vehicle_name":"24 Pax BUS","vehicle_code":"Bus24p","number_of_passengers":24,"luggage_capacity":20,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"100.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Professional Drivers","slug":"24-pax-bus","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":23,"vehicle_id":13,"category":" Infant ages 0-1","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":24,"vehicle_id":13,"category":"Toddler ages 1-3","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":25,"vehicle_id":13,"category":"Booster ages 3-6","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":14,"vehicle_name":"36 PAX BUS","vehicle_code":"BUS36p","number_of_passengers":36,"luggage_capacity":30,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"100.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Professional Drivers","slug":"36-pax-bus","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":26,"vehicle_id":14,"category":"Infant ages 0-1","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":27,"vehicle_id":14,"category":"Toddler ages 1-3","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":28,"vehicle_id":14,"category":"Booster ages 3-6","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":15,"vehicle_name":"56 PAX BUS","vehicle_code":"BUS56p","number_of_passengers":56,"luggage_capacity":50,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"100.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"Professional Drivers","slug":"56-pax-bus","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z","car_seat":[{"id":29,"vehicle_id":15,"category":"Infant ages 0-1","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":30,"vehicle_id":15,"category":"Toddler ages 1-3","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"},{"id":31,"vehicle_id":15,"category":"Booster ages 3-6","quantity":1,"rate":"25.00","created_at":"2025-04-28T16:30:52.000000Z","updated_at":"2025-04-28T16:30:52.000000Z"}]},{"id":16,"vehicle_name":"Test Car","vehicle_code":"234235","number_of_passengers":5,"luggage_capacity":20,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"100.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"this is test for you","slug":"test-car","created_at":"2025-05-13T00:45:37.000000Z","updated_at":"2025-05-13T00:45:37.000000Z","car_seat":[]},{"id":17,"vehicle_name":"Test","vehicle_code":"3243451","number_of_passengers":23,"luggage_capacity":2,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"100.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"sfsfe","slug":"test","created_at":"2025-05-13T00:48:07.000000Z","updated_at":"2025-05-13T00:48:07.000000Z","car_seat":[]},{"id":19,"vehicle_name":"Test Carmj","vehicle_code":"324345567","number_of_passengers":5,"luggage_capacity":67,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"5678.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"dcfvgbfdresgh","slug":"test-carmj","created_at":"2025-05-13T00:53:32.000000Z","updated_at":"2025-05-13T00:53:32.000000Z","car_seat":[]},{"id":21,"vehicle_name":"Testq","vehicle_code":"234235324","number_of_passengers":23,"luggage_capacity":32,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"234.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"324234","slug":"testq","created_at":"2025-05-13T00:57:03.000000Z","updated_at":"2025-05-13T00:57:03.000000Z","car_seat":[]},{"id":24,"vehicle_name":"fdee","vehicle_code":"32434532211","number_of_passengers":34,"luggage_capacity":2,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"2334.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"ewdfghynhgfd","slug":"fdee","created_at":"2025-05-13T01:03:25.000000Z","updated_at":"2025-05-13T01:03:25.000000Z","car_seat":[]},{"id":25,"vehicle_name":"dferk","vehicle_code":"2453efd","number_of_passengers":34,"luggage_capacity":234,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"2343.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"dfegrgfds","slug":"dferk","created_at":"2025-05-13T01:04:31.000000Z","updated_at":"2025-05-13T01:04:31.000000Z","car_seat":[]},{"id":26,"vehicle_name":"wer3f","vehicle_code":"dfwfr","number_of_passengers":34,"luggage_capacity":3424,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"342234.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"dsfegrt","slug":"wer3f","created_at":"2025-05-13T01:05:39.000000Z","updated_at":"2025-05-13T01:05:39.000000Z","car_seat":[]},{"id":32,"vehicle_name":"Testq123","vehicle_code":"123123we","number_of_passengers":2,"luggage_capacity":242,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"1233.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"sdfgergert","slug":"testq123","created_at":"2025-05-13T01:14:55.000000Z","updated_at":"2025-05-13T01:14:55.000000Z","car_seat":[{"id":32,"vehicle_id":32,"category":"Child","quantity":2,"rate":"23453.00","created_at":"2025-05-13T01:14:55.000000Z","updated_at":"2025-05-13T01:14:55.000000Z"}]},{"id":34,"vehicle_name":"Test Carmj234","vehicle_code":"2342324","number_of_passengers":2,"luggage_capacity":345,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"2000.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"this is test","slug":"test-carmj234","created_at":"2025-05-13T01:37:04.000000Z","updated_at":"2025-05-13T01:37:04.000000Z","car_seat":[{"id":33,"vehicle_id":34,"category":"Child","quantity":12,"rate":"234235.00","created_at":"2025-05-13T01:37:04.000000Z","updated_at":"2025-05-13T01:37:04.000000Z"}]},{"id":35,"vehicle_name":"ttt","vehicle_code":"ttt","number_of_passengers":22,"luggage_capacity":22,"active":1,"vehicle_image":"vehicles\/1747185101_6823edcd11c9e.jpg","greeting_fee":"32.00","base_fare":"0.00","base_hourly_fare":"0.00","per_km_rate":"0.00","description":"23","slug":"ttt","created_at":"2025-05-14T09:57:12.000000Z","updated_at":"2025-05-14T09:57:12.000000Z","car_seat":[{"id":34,"vehicle_id":35,"category":"qwe","quantity":2,"rate":"22.00","created_at":"2025-05-14T09:57:12.000000Z","updated_at":"2025-05-14T09:57:12.000000Z"}]},{"id":39,"vehicle_name":"Test 4","vehicle_code":"Test 4","number_of_passengers":5,"luggage_capacity":4,"active":1,"vehicle_image":"vehicles\/1747509273_6828e019298f4.webp","greeting_fee":"35.00","base_fare":"50.00","base_hourly_fare":"20.00","per_km_rate":"10.00","description":"test","slug":"test-4","created_at":"2025-05-18T04:14:33.000000Z","updated_at":"2025-05-18T04:14:33.000000Z","car_seat":[{"id":40,"vehicle_id":39,"category":"2","quantity":1,"rate":"3.00","created_at":"2025-05-18T04:14:33.000000Z","updated_at":"2025-05-18T04:14:33.000000Z"}]}],"distance":{"5":{"distance_km":221.84,"price":361.21,"baseFare":"95.00","hourlyFare":null,"perKmRate":"1.20","hours":null,"type":"PointToPoint"},"6":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"7":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"8":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"9":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"10":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"11":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"12":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"13":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"14":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"15":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"16":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"17":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"19":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"21":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"24":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"25":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"26":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"32":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"34":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"35":{"distance_km":221.84,"price":0,"baseFare":"0.00","hourlyFare":null,"perKmRate":"0.00","hours":null,"type":"PointToPoint"},"39":{"distance_km":221.84,"price":2268.38,"baseFare":"50.00","hourlyFare":null,"perKmRate":"10.00","hours":null,"type":"PointToPoint"}},"userData":{"pickup_location":"Dallas, TX, USA","dropoff_location":"Texas, USA","pickup_datetime":"2025-11-13 7:00 PM","is_airport":"0","pickup_date":"2025-11-13","pickup_time":"7:00"},"service_type":"pointToPoint"}';
    return view('booking.confirmation', json_decode($data, true));
});

Route::get('/seed', function(){
    Artisan::call('db:seed');
});

Route::get('/clear', function(){
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('queue:restart');
});

Route::get('/pdf', function(){
    $bookingData = [
        'booking_id' => 'DBCL-20250926-001',
        'isBookingForOthers' => true,
        'booker_first_name' => 'John',
        'booker_last_name' => 'Doe',
        'booker_number' => '+1 555-123-4567',
        'booker_email' => 'john.doe@example.com',
        'passenger_name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'phone' => '+1 555-987-6543',
        'pickup_location' => 'Dallas Fort Worth International Airport (DFW)',
        'dropoff_location' => '100 Crescent Court, Dallas, TX 75201',
        'pickup_date' => '2025-10-01',
        'pickup_time' => '15:30:00',
        'hours' => null,
        'vehicle_type' => 'Luxury SUV',
        'passengers' => 3,
        'total_amount' => 185.50,
        'payment_status' => 'Paid',
        'special_instructions' => 'Please wait at the arrivals terminal with a sign.',
        'flight_details' => 'AA 1023 arriving from New York (JFK)',
    ];
    return view('pdfs.booking', compact('bookingData'));
});

Route::get('/email', function(){
    $bookingData = [
        'isAdmin' => true,
        'booking_id' => 'DBCL-20250926-001',
        'isBookingForOthers' => true,
        'booker_first_name' => 'John',
        'booker_last_name' => 'Doe',
        'booker_number' => '+1 555-123-4567',
        'booker_email' => 'john.doe@example.com',
        'passenger_name' => 'Jane Smith',
        'email' => 'jane.smith@example.com',
        'phone' => '+1 555-987-6543',
        'pickup_location' => 'Dallas Fort Worth International Airport (DFW)',
        'dropoff_location' => '100 Crescent Court, Dallas, TX 75201',
        'pickup_date' => '2025-10-01',
        'pickup_time' => '15:30:00',
        'hours' => null,
        'vehicle_type' => 'Luxury SUV',
        'passengers' => 3,
        'total_amount' => 185.50,
        'payment_status' => 'Paid',
        'special_instructions' => 'Please wait at the arrivals terminal with a sign.',
        'flight_details' => ['flight_number' => 'AA 1023', 'pickup_flight_details' => 'New York (JFK)'],
    ];
    return view('emails.booking', ['isAdmin' => true, 'bookingData' => $bookingData, 'sendToBooker' => true]);
});

// ------------------------------------- CONFIGURATION ROUTES -------------------------------------------------:

require __DIR__.'/auth.php';
