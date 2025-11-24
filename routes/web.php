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
use App\Http\Controllers\ProfileController;
use App\Models\Booking;

Route::get('/dashboard', function () {
    $bookings = Booking::with('booker', 'vehicle', 'returnService')
        ->where('user_id', auth()->id())
        ->latest()
        ->paginate(10);
    return view('dashboard', compact('bookings'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/user-login/{id}/{price}', [BookingController::class, 'userLogin'])->name('user_login');

Route::post('/check-email-exists', [ProfileController::class, 'checkEmailExists'])->name('check.email.exists');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
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
