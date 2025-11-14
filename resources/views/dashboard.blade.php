<x-app-layout>
    <x-slot name="header">
        <h2 class="h3 font-weight-bold text-dark leading-tight">
            {{ __('Bookings') }}
        </h2>
        <!-- BOOTSTRAP CSS ADDED HERE TO ENSURE STYLING AND MODAL COMPONENT ARE AVAILABLE -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </x-slot>

    <div class="py-5 bg-light font-sans">
        <div class="container">
            <div class="card shadow-lg rounded-3">
                <div class="card-body p-4 p-md-5">
                    <!-- Desktop Table View -->
                    <div class="table-responsive d-none d-md-block">
                        <table class="table table-hover table-striped">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" class="py-3">ID</th>
                                    <th scope="col" class="py-3">Route</th>
                                    <th scope="col" class="py-3">Date/Time</th>
                                    <th scope="col" class="py-3">Total</th>
                                    <th scope="col" class="py-3">Status</th>
                                    <th scope="col" class="py-3">Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bookings as $booking)
                                    @php
                                        $status = strtolower($booking->payment_status);
                                        $status_class = match ($status) {
                                            'paid' => 'badge bg-success',
                                            'pending' => 'badge bg-warning text-dark',
                                            'cancelled' => 'badge bg-danger',
                                            default => 'badge bg-secondary',
                                        };
                                        // Prepare JSON data for JavaScript function
                                        // Ensure all relationships are eager loaded in the controller (Booking::with('booker', 'vehicle'))
                                        $bookingJson = $booking->toJson();
                                    @endphp
                                    <tr>
                                        <td class="align-middle font-weight-bold">{{ $booking->booking_id }}</td>
                                        <td class="align-middle">
                                            <div class="text-dark">{{ $booking->pickup_location }}</div>
                                            <small class="text-muted">to {{ $booking->dropoff_location }}</small>
                                        </td>
                                        <td class="align-middle">
                                            <div>{{ $booking->pickup_date }}</div>
                                            <small class="text-muted">{{ $booking->pickup_time }}</small>
                                        </td>
                                        <td class="align-middle font-weight-bold">${{ number_format($booking->total_price, 2) }}</td>
                                        <td class="align-middle">
                                            <span class="{{ $status_class }}">{{ ucfirst($booking->payment_status) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <button
                                                class="btn btn-sm btn-outline-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#bookingDetailModal"
                                                onclick="showBookingDetails({{ $bookingJson }})"
                                            >
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-5 text-muted bg-light">
                                            😔 No bookings found in your history.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile Card View -->
                    <div class="space-y-4 d-md-none">
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
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="mb-0 text-primary">ID: {{ $booking->booking_id }}</h5>
                                        <span class="h4 mb-0 font-weight-bold text-success">${{ number_format($booking->total_price, 2) }}</span>
                                    </div>
                                    <p class="mb-1"><strong>Route:</strong> {{ $booking->pickup_location }} to {{ $booking->dropoff_location }}</p>
                                    <p class="mb-1"><strong>Date/Time:</strong> {{ $booking->pickup_date }} @ {{ $booking->pickup_time }}</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <span class="{{ $status_class }}">{{ ucfirst($booking->payment_status) }}</span>
                                        <button
                                            class="btn btn-sm btn-outline-primary"
                                            data-bs-toggle="modal"
                                            data-bs-target="#bookingDetailModal"
                                            onclick="showBookingDetails({{ $bookingJson }})"
                                        >
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @empty
                        <div class="text-center py-4 text-muted bg-white rounded-3 shadow-sm border">
                            😔 No bookings found in your history.
                        </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $bookings->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap Booking Detail Modal -->
    <div class="modal fade" id="bookingDetailModal" tabindex="-1" aria-labelledby="bookingDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title font-weight-bold" id="bookingDetailModalLabel">
                        Booking Details: <span id="modal-booking-id"></span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <span class="text-muted d-block">Status</span>
                            <span id="modal-status" class="badge"></span>
                        </div>
                        <div class="col-6 text-end">
                            <span class="text-muted d-block">Total Price</span>
                            <span id="modal-total-price" class="h4 text-success font-weight-bold"></span>
                        </div>
                    </div>

                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-primary">Route & Schedule</h6>
                            <ul class="list-group list-group-flush bg-light">
                                <li class="list-group-item bg-light d-flex justify-content-between">
                                    <strong>Pickup:</strong> <span id="modal-pickup-location"></span>
                                </li>
                                <li class="list-group-item bg-light d-flex justify-content-between">
                                    <strong>Dropoff:</strong> <span id="modal-dropoff-location"></span>
                                </li>
                                <li class="list-group-item bg-light d-flex justify-content-between">
                                    <strong>Date:</strong> <span id="modal-pickup-date"></span>
                                </li>
                                <li class="list-group-item bg-light d-flex justify-content-between">
                                    <strong>Time:</strong> <span id="modal-pickup-time"></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Vehicle Block: Updated to include Capacity and Luggage IDs --}}
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-primary">Vehicle & Passenger</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Vehicle:</strong> <span id="modal-vehicle-name"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Max Passengers:</strong> <span id="modal-vehicle-capacity"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Max Luggage:</strong> <span id="modal-vehicle-luggage"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <strong>Booked By:</strong> <span id="modal-booker-name"></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" id="modal-note-card" style="display:none;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-primary">Special Instructions</h6>
                            <p class="card-text small text-muted fst-italic" id="modal-note"></p>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- This link assumes you have a route like /dashboard/{booking_id} --}}
                    <a href="#" id="modal-booking-link" class="btn btn-primary">Go to Booking Page</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bootstrap Modal -->

    <!-- BOOTSTRAP JAVASCRIPT BUNDLE ADDED HERE TO ENABLE MODAL FUNCTIONALITY -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Custom JavaScript for Modal Population -->
    <script>
        /**
         * Converts the status string into the appropriate Bootstrap badge class.
         * @param {string} status
         * @returns {string}
         */
        function getStatusClass(status) {
            if (!status) return 'badge bg-secondary';
            const s = status.toLowerCase();
            if (s === 'paid') return 'badge bg-success';
            if (s === 'pending') return 'badge bg-warning text-dark';
            if (s === 'cancelled') return 'badge bg-danger';
            return 'badge bg-secondary';
        }

        /**
         * Populates the detail modal with the clicked booking data.
         * @param {object} bookingData - The booking object passed from Laravel Blade (via toJson).
         */
        function showBookingDetails(bookingData) {
            // Get necessary elements
            const statusElement = document.getElementById('modal-status');
            const noteCard = document.getElementById('modal-note-card');
            const vehicle = bookingData.vehicle;

            // Console log removed, as the correct property (vehicle_name) is now known
            // console.log("Debugging Vehicle Object:", vehicle);

            // Set simple details
            document.getElementById('modal-booking-id').textContent = bookingData.booking_id;
            document.getElementById('modal-total-price').textContent = `$${parseFloat(bookingData.total_price).toFixed(2)}`;
            document.getElementById('modal-pickup-location').textContent = bookingData.pickup_location;
            document.getElementById('modal-dropoff-location').textContent = bookingData.dropoff_location;
            document.getElementById('modal-pickup-date').textContent = bookingData.pickup_date;
            document.getElementById('modal-pickup-time').textContent = bookingData.pickup_time;

            // Set dynamic details (handling relationships)

            // VEHICLE DETAILS FIX: Using the correct 'vehicle_name', 'number_of_passengers', and 'luggage_capacity' properties
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

            // Set Status Badge
            statusElement.className = getStatusClass(bookingData.payment_status);
            statusElement.textContent = bookingData.payment_status ? bookingData.payment_status.charAt(0).toUpperCase() + bookingData.payment_status.slice(1) : 'Unknown';

            // Handle Special Note visibility
            if (bookingData.note) {
                document.getElementById('modal-note').textContent = bookingData.note;
                noteCard.style.display = 'block';
            } else {
                noteCard.style.display = 'none';
            }

            // Update the link in the footer
            // NOTE: Replace 'dashboard' with the actual route name if different
            const bookingLink = document.getElementById('modal-booking-link');
            const baseUrl = "{{ route('dashboard') }}";
            bookingLink.href = `${baseUrl}/${bookingData.id}`;
        }
    </script>
</x-app-layout>
