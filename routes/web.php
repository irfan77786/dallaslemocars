<?php

use App\Http\Controllers\AirportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ------------------------------------- BOOKING ROUTES -------------------------------------------------:

Route::middleware('checkBookingCompletion')->group(function () {
    Route::get('/book-now/', [BookingController::class, 'BookNow'])->name('book_now');
    Route::get('/allVehicle/', [BookingController::class, 'showAll']);
    Route::post('/submit-passengerInfo/{id}', [BookingController::class, 'submitPassengerInfo']);
    Route::post('/bookRide', [BookingController::class, 'bookRide']);
    Route::post('/completeBook', [BookingController::class, 'completeBook']);
    Route::get('/calculate-return-trip/', [BookingController::class, 'CalculateReturnTrip']);
    Route::post('/save-return-service', [BookingController::class, 'saveReturnService']);
    Route::get('/booking/', [BookingController::class, 'showForm'])->name('booking.form');  //step 1
    Route::get('/booking/point-to-point/', [BookingController::class, 'handlePointToPoint'])->name('booking.pointToPoint.show');  //step2 case 1
    Route::get('/booking/hourly-hire/', [BookingController::class, 'handleHourlyHire'])->name('booking.hourlyHire.show');  //step2 case 2
    Route::get('/passengerInfo/{id}/{price}', [BookingController::class, 'passengerInfo'] )->where(['id' => '[0-9]+', 'price' => '[0-9.]+'])
    ->name('passenger.info'); //step 3
    Route::get('/submit-passengerInfo/{id}', [BookingController::class, 'submitPassengerInfo']);//step 4
});

// Other Pages:

Route::prefix('services')->group(function(){
    Route::get('/dallas-airport-transfers/', [ServiceController::class, 'AirportTransfer'])->name('airport_transfer');
    Route::get('/dallas-airport-greeters/', [ServiceController::class, 'AirportGreeters'])->name('airport_greeters');
    Route::get('/dallas-corporate-transportation/', [ServiceController::class, 'CorporateTransportation'])->name('corporate_transportation');
    Route::get("/executive-shuttle-services-dallas-texas/", [ServiceController::class, 'ExecutiveShuttleServices'])->name('executive_shuttle_services');
    Route::get("/luxury-van-rental-dallas-texas/", [ServiceController::class, 'LuxuryVanRental'])->name('luxury_van_rental');
    Route::get('/chauffeur-service-dallas-texas/', [ServiceController::class, 'ChauffeurService'])->name('chauffeur_service');
    Route::get('/private-car-service-in-dallas-texas/', [ServiceController::class, 'PrivateCarService'])->name('private_car_service');
    Route::get('/city-to-city-rides/', [ServiceController::class, 'CityToCityRides'])->name('city_to_city_rides');
    Route::get('/dfw-limo-service/', [ServiceController::class, 'DfwLimoService'])->name('dfw_limo_service');
});

Route::prefix('airport')->group(function(){
    Route::get('/addison-airport-car-service/', [AirportController::class, 'AddisonAirportCarService'])->name('addison_airport_car_service');
    Route::get('/car-service-dallas-fort-worth-international-airport/', [AirportController::class, 'CarServiceInDallasFortWorthInternationalAirport'])->name('car_service_in_dallas_fort_worth_international_airport');
    Route::get('/dallas-love-field-black-car-service/', [AirportController::class, 'DallasLoveFieldBlackCarService'])->name('dallas_love_field_black_car_service');
    Route::get('/signature-flight-support/', [AirportController::class, 'SignatureFlightSupport'])->name('signature_flight_support');
    Route::get('/waco-regional-airport/', [AirportController::class, 'WacoRegionalAirport'])->name('waco_regional_airport');
});

Route::prefix('locations')->group(function(){
    Route::get('/black-car-service-allen-texas/', [LocationController::class, 'BlackCarServiceAllenTexas'])->name('black_car_service_allen_texas');
    Route::get('/black-car-service-fort-worth-texas/', [LocationController::class, 'BlackCarServiceFortWorthTexas'])->name('black_car_service_fort_worth_texas');
    Route::get('/black-car-service-frisco-texas/', [LocationController::class, 'BlackCarServiceFriscoTexas'])->name('black_car_service_frisco_texas');
    Route::get('/black-car-service-plano-texas/', [LocationController::class, 'BlackCarServicePlanoTexas'])->name('black_car_service_plano_texas');
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
