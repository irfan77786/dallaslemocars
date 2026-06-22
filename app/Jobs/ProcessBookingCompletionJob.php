<?php

namespace App\Jobs;

use App\Models\Booking;
use App\Models\Booker;
use App\Models\FlightDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessBookingCompletionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 300;

    public function __construct(
        public int $bookingDbId,
        public int $passengerId,
        public array $payload,
    ) {}

    public function handle(): void
    {
        $booking = Booking::find($this->bookingDbId);

        if (! $booking) {
            Log::error('ProcessBookingCompletionJob: booking not found', [
                'booking_db_id' => $this->bookingDbId,
            ]);

            return;
        }

        $booker = Booker::create([
            'first_name' => $this->payload['booker_first_name'] ?? null,
            'last_name' => $this->payload['booker_last_name'] ?? null,
            'email' => $this->payload['booker_email'] ?? null,
            'phone_number' => $this->payload['booker_number'] ?? null,
        ]);
        $bookerId = $booker->id;

        $returnServiceId = null;
        if (! empty($this->payload['return_service'])) {
            $returnService = \App\Models\ReturnService::create([
                'vehicle_id' => $this->payload['vehicle_id'],
                'pickup_location' => $this->payload['return_pickup_location'],
                'dropoff_location' => $this->payload['return_dropoff_location'],
                'pickup_date' => $this->payload['return_pickup_date'],
                'pickup_time' => $this->payload['return_pickup_time'],
            ]);
            $returnServiceId = $returnService->id;
        }

        $booking->passengers()->where('id', $this->passengerId)->update(['booker_id' => $bookerId]);

        $updates = ['booker_id' => $bookerId];

        if ($returnServiceId) {
            $updates['return_service_id'] = $returnServiceId;
        }

        if ($updates !== []) {
            $booking->update($updates);
        }

        $breakdown = $this->payload['breakdown'] ?? null;
        if (is_array($breakdown) && $breakdown !== []) {
            $booking->breakdown()->create($breakdown);
        }

        $flight = $this->payload['flight'] ?? null;
        if (is_array($flight) && ($flight['should_create'] ?? false)) {
            FlightDetail::create([
                'passenger_id' => $this->passengerId,
                'pickup_flight_details' => $flight['pickup_flight_details'] ?? null,
                'flight_number' => $flight['flight_number'] ?? null,
                'meet_option' => $flight['meet_option'] ?? null,
                'no_flight_info' => $flight['no_flight_info'] ?? false,
                'inside_pickup_fee' => 0.00,
            ]);
        }

        $bookingData = $this->payload['booking_data'] ?? null;
        $customBookingId = $this->payload['custom_booking_id'] ?? $booking->booking_id;

        if (is_array($bookingData) && $customBookingId) {
            CreateBookingDocs::dispatch($bookingData, $customBookingId);
        }
    }
}
