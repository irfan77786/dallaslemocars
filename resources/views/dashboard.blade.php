@extends('layouts.admin')

@section('content')
    <h4 class="font-weight-bold py-3 mb-4">{{ __('Bookings') }}</h4>
    <div class="container-fluid">
        <div class="row">
            @forelse ($bookings as $booking)
                @php
                    $status = strtolower($booking->payment_status);
                    $status_class = match ($status) {
                        'paid' => 'badge bg-success',
                        'pending' => 'badge bg-warning text-dark',
                        'cancelled' => 'badge bg-danger',
                        default => 'badge bg-secondary',
                    };
                    $bookingJson = $booking->toJson();
                @endphp
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">{{ $booking->booking_id }}</h5>
                                <span class="h5 mb-0 text-success">${{ number_format($booking->total_price, 2) }}</span>
                            </div>
                            <p class="mb-1"><strong>Route:</strong> {{ $booking->pickup_location }} to {{ $booking->dropoff_location }}</p>
                            <p class="mb-1"><strong>Date/Time:</strong> {{ $booking->pickup_date }} @ {{ $booking->pickup_time }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="{{ $status_class }}">{{ ucfirst($booking->payment_status) }}</span>
                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bookingDetailModal" onclick="showBookingDetails({{ $bookingJson }})">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-4 text-muted">No bookings found in your history.</div>
                </div>
            @endforelse
        </div>
        <div class="mt-4">{{ $bookings->links() }}</div>
    </div>

    <div class="modal fade" id="bookingDetailModal" tabindex="-1" aria-labelledby="bookingDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title font-weight-bold mb-2" id="bookingDetailModalLabel">Booking Details: <span id="modal-booking-id"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="card-body py-2">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted d-block mb-1">Status</span>
                                    <span id="modal-status" class="badge"></span>
                                </div>
                                <div class="col-6 text-end">
                                    <span class="text-muted d-block mb-1">Total Price</span>
                                    <span id="modal-total-price" class="h4 text-success font-weight-bold mb-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-3">Route & Schedule</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Pickup:</strong> <span id="modal-pickup-location"></span></li>
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Dropoff:</strong> <span id="modal-dropoff-location"></span></li>
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Date:</strong> <span id="modal-pickup-date"></span></li>
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Time:</strong> <span id="modal-pickup-time"></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-p2">Vehicle & Passenger</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between"><strong>Vehicle:</strong> <span id="modal-vehicle-name"></span></li>
                                <li class="list-group-item d-flex justify-content-between"><strong>Max Passengers:</strong> <span id="modal-vehicle-capacity"></span></li>
                                <li class="list-group-item d-flex justify-content-between"><strong>Max Luggage:</strong> <span id="modal-vehicle-luggage"></span></li>
                                <li class="list-group-item d-flex justify-content-between"><strong>Booked By:</strong> <span id="modal-booker-name"></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="modal-note-card" style="display:none;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-p2">Special Instructions</h6>
                            <p class="card-text small text-muted fst-italic" id="modal-note"></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function getStatusClass(status) {
            if (!status) return 'badge bg-secondary';
            const s = status.toLowerCase();
            if (s === 'paid') return 'badge bg-success';
            if (s === 'pending') return 'badge bg-warning text-dark';
            if (s === 'cancelled') return 'badge bg-danger';
            return 'badge bg-secondary';
        }

        function showBookingDetails(bookingData) {
            const statusElement = document.getElementById('modal-status');
            const noteCard = document.getElementById('modal-note-card');
            const vehicle = bookingData.vehicle;

            document.getElementById('modal-booking-id').textContent = bookingData.booking_id;
            document.getElementById('modal-total-price').textContent = `$${parseFloat(bookingData.total_price).toFixed(2)}`;
            document.getElementById('modal-pickup-location').textContent = bookingData.pickup_location;
            document.getElementById('modal-dropoff-location').textContent = bookingData.dropoff_location;
            document.getElementById('modal-pickup-date').textContent = bookingData.pickup_date;
            document.getElementById('modal-pickup-time').textContent = bookingData.pickup_time;

            if (vehicle) {
                document.getElementById('modal-vehicle-name').textContent = vehicle.vehicle_name || 'N/A';
                document.getElementById('modal-vehicle-capacity').textContent = vehicle.number_of_passengers ? `${vehicle.number_of_passengers} people` : 'N/A';
                document.getElementById('modal-vehicle-luggage').textContent = vehicle.luggage_capacity ? `${vehicle.luggage_capacity} bags` : 'N/A';
            } else {
                document.getElementById('modal-vehicle-name').textContent = 'Vehicle Unavailable';
                document.getElementById('modal-vehicle-capacity').textContent = 'N/A';
                document.getElementById('modal-vehicle-luggage').textContent = 'N/A';
            }

            document.getElementById('modal-booker-name').textContent = bookingData.booker ? `${bookingData.booker.first_name} ${bookingData.booker.last_name}` : 'Self';

            statusElement.className = getStatusClass(bookingData.payment_status);
            statusElement.textContent = bookingData.payment_status ? bookingData.payment_status.charAt(0).toUpperCase() + bookingData.payment_status.slice(1) : 'Unknown';

            if (bookingData.note) {
                document.getElementById('modal-note').textContent = bookingData.note;
                noteCard.style.display = 'block';
            } else {
                noteCard.style.display = 'none';
            }

            const bookingLink = document.getElementById('modal-booking-link');
            const baseUrl = "{{ route('dashboard') }}";
            bookingLink.href = `${baseUrl}/${bookingData.id}`;
        }
    </script>
@endsection
