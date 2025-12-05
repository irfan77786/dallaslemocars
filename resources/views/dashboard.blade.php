@extends('layouts.guest')
<style>
.table-responsive{
  overflow-x: hidden !important;
}
.nav-link {
    color: black !important;
}
/* Desktop layout */
.litepicker .layout-wrapper {
    display: flex;
    background: #fff;
}

/* Presets panel */
.litepicker .preset-panel {
    width: 180px;
    border-right: 1px solid #e3e3e3;
    background: #fff;
    padding: 10px 0;
    flex-shrink: 0;
}

.litepicker .preset-panel button {
    width: 100%;
    padding: 8px 14px;
    border: none;
    background: transparent;
    text-align: left;
    cursor: pointer;
    font-size: 14px;
}

.litepicker .preset-panel button:hover {
    background: #f0f6ff;
}

/* --- MOBILE RESPONSIVE --- */
@media (max-width: 768px) {
    .container-fluid {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }
    .desktopTabs {
        display: none !important;
    }
    /* Stack vertically */
    .litepicker .layout-wrapper {
        flex-direction: column;
    }

    /* Full width presets */
    .litepicker .preset-panel {
        width: 100%;
        border-right: none;
        border-bottom: 1px solid #e3e3e3;
    }

    /* Single-month calendar */
    .litepicker .container__main {
        width: 100%;
        padding-left: 0;
    }
}

@media (min-width: 768px) {
    .container-fluid {
        padding-top: 0px !important;
        padding-bottom: 30px !important;
    }
    .desktopTabs {
        display: flex !important;
    }
}

</style>
@section('guest_data')
    <div class="container-fluid">
        <ul class="nav nav-tabs mb-4 desktopTabs" id="dashboardTabs" role="tablist" style="border-bottom: 0px !important; justify-content: center; margin-top: 35px;">
            <li class="nav-item">
                <a class="nav-link active" id="bookings-tab" href="#tab-bookings" role="tab">Rides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="users-tab" href="#tab-users" role="tab">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="payments-tab" href="#tab-payments" role="tab">Payment Methods</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="invoices-tab" href="#tab-invoice" role="tab">Invoices</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" href="#tab-profile" role="tab">Account Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="locations-tab" href="#tab-locations" role="tab">Stored Locations</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-bookings" role="tabpanel" aria-labelledby="bookings-tab">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="col-12 mb-3 d-flex align-items-center gap-2" style="padding: 0px;">
                            <button type="button" class="btn btn-primary" id="filter-toggle">Filter <span class="ml-1">-</span></button>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Download as PDF</a>
                                    <a class="dropdown-item" href="#">Download as XLS</a>
                                </div>
                            </div>
                        </div>
                    <div id="filters-panel" class="card card-body mb-3 pl-0 pr-0" style="display:none; padding-top: 0px; padding-bottom: 0px; border: none !important;">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <select class="form-control" id="filter-ride-type">
                                    <option value="">All Rides</option>
                                    <option value="one">One-way</option>
                                    <option value="round">Round Trip</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-5 mb-2 mb-md-0">
                                <input type="text" class="form-control" id="date-range" placeholder="Select range">
                            </div>
                            <div class="col-12 col-md-2 mb-2 mb-md-0">
                                <input type="text" class="form-control" id="filter-search-text" placeholder="Conf #, Pax Name, etc.">
                            </div>
                            <div class="col-12 col-md-2 text-md-right">
                                <button type="button" class="btn btn-primary" id="go-filter">Go</button>
                                <a href="javascript:void(0)" class="ml-3" id="clear-filter">Clear Filter</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                    <table id="bookings-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="select-all"></th>
                                <th>Conf. #</th>
                                <th>Date</th>
                                <th>Passenger</th>
                                <th>Routing Information</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
                @php $user = auth()->user(); @endphp
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card mb-4">
                            <h6 class="card-header">Update Profile Information</h6>
                            <div class="card-body">
                                <form method="post" action="{{ route('profile.update') }}">
                                    @csrf
                                    @method('patch')

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $user->first_name ?? '') }}" required autocomplete="given-name">
                                            @if($errors->has('first_name'))
                                                <small class="text-danger">{{ $errors->first('first_name') }}</small>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $user->last_name ?? '') }}" required autocomplete="family-name">
                                            @if($errors->has('last_name'))
                                                <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required autocomplete="username">
                                        @if($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                        @endif
                                        <div class="clearfix"></div>
                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                            <div class="alert alert-warning mt-3 mb-0">
                                                Your email address is unverified.
                                                <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-sm btn-outline-warning">Resend verification email</button>
                                                </form>
                                            </div>
                                            @if (session('status') === 'verification-link-sent')
                                                <small class="text-success d-block mt-2">A new verification link has been sent to your email address.</small>
                                            @endif
                                        @endif
                                    </div>

                                    @if (session('status') === 'profile-updated')
                                        <div class="alert alert-success">Saved.</div>
                                    @endif

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <h6 class="card-header">Update Password</h6>
                            <div class="card-body">
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    @method('put')

                                    <div class="form-group">
                                        <label class="form-label">Current Password</label>
                                        <input type="password" name="current_password" class="form-control" autocomplete="current-password">
                                        @if($errors->updatePassword->has('current_password'))
                                            <small class="text-danger">{{ $errors->updatePassword->first('current_password') }}</small>
                                        @endif
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="form-label">New Password</label>
                                            <input type="password" name="password" class="form-control" autocomplete="new-password">
                                            @if($errors->updatePassword->has('password'))
                                                <small class="text-danger">{{ $errors->updatePassword->first('password') }}</small>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" autocomplete="new-password">
                                            @if($errors->updatePassword->has('password_confirmation'))
                                                <small class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</small>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    @if (session('status') === 'password-updated')
                                        <div class="alert alert-success">Saved.</div>
                                    @endif

                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <h6 class="card-header">Delete Account</h6>
                            <div class="card-body">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteAccountModal">Delete Account</button>
                            </div>
                        </div>

                        <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="deleteAccountLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteAccountLabel">Confirm Account Deletion</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ route('profile.destroy') }}">
                                        @csrf
                                        @method('delete')
                                        <div class="modal-body">
                                            <p>Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm.</p>
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Password">
                                                @if($errors->userDeletion->has('password'))
                                                    <small class="text-danger">{{ $errors->userDeletion->first('password') }}</small>
                                                @endif
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger">Delete Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bookingDetailModal" tabindex="-1" aria-labelledby="bookingDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title font-weight-bold mb-2 text-white" id="bookingDetailModalLabel">Booking Details: <span class="text-white" id="modal-booking-id"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="card mb-3">
                        <div class="card-body py-2">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted d-block mb-1">Status</span>
                                    <span id="modal-status" class="badge" style="color: white !important;"></span>
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
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Pickup Date &amp; Time:</strong> <span id="modal-pickup-datetime"></span></li>
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Trip Type:</strong> <span id="modal-trip-type"></span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-3" id="return-card" style="display:none;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-3">Return Details</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Return Pickup:</strong> <span id="modal-return-pickup-location"></span></li>
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Return Dropoff:</strong> <span id="modal-return-dropoff-location"></span></li>
                                <li class="list-group-item d-flex justify-content-between py-2"><strong>Return Date &amp; Time:</strong> <span id="modal-return-datetime"></span></li>
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
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css"/>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
    <script>
        (function() {
            var links = document.querySelectorAll('#dashboardTabs .nav-link');
            var panes = {
                '#tab-bookings': document.getElementById('tab-bookings'),
                '#tab-profile': document.getElementById('tab-profile')
            };
            links.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    links.forEach(function(l){ l.classList.remove('active'); });
                    Object.values(panes).forEach(function(p){ p.classList.remove('show'); p.classList.remove('active'); });
                    link.classList.add('active');
                    var target = link.getAttribute('href');
                    if (panes[target]) { panes[target].classList.add('show'); panes[target].classList.add('active'); }
                });
            });
        })();

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
            const returnService = bookingData.returnService || bookingData.return_service || null;

            document.getElementById('modal-booking-id').textContent = bookingData.booking_id;
            document.getElementById('modal-total-price').textContent = `$${parseFloat(bookingData.total_price).toFixed(2)}`;
            document.getElementById('modal-pickup-location').textContent = bookingData.pickup_location;
            document.getElementById('modal-dropoff-location').textContent = bookingData.dropoff_location;
            const pickupDate = bookingData.pickup_date || '';
            const pickupTime = bookingData.pickup_time || '';
            document.getElementById('modal-pickup-datetime').textContent = (pickupDate && pickupTime) ? `${pickupDate} @ ${pickupTime}` : (pickupDate || pickupTime);
            document.getElementById('modal-trip-type').textContent = bookingData.round_trip == 1 ? 'Round Trip' : 'One-way';

            const returnCard = document.getElementById('return-card');
            if (returnService) {
                document.getElementById('modal-return-pickup-location').textContent = returnService.pickup_location || '';
                document.getElementById('modal-return-dropoff-location').textContent = returnService.dropoff_location || '';
                const returnDate = returnService.pickup_date || '';
                const returnTime = returnService.pickup_time || '';
                document.getElementById('modal-return-datetime').textContent = (returnDate && returnTime) ? `${returnDate} @ ${returnTime}` : (returnDate || returnTime);
                returnCard.style.display = 'block';
            } else if (bookingData.round_trip == 1) {
                document.getElementById('modal-return-pickup-location').textContent = bookingData.dropoff_location || '';
                document.getElementById('modal-return-dropoff-location').textContent = bookingData.pickup_location || '';
                const returnDate = bookingData.return_date || '';
                const returnTime = bookingData.return_time || '';
                document.getElementById('modal-return-datetime').textContent = (returnDate && returnTime) ? `${returnDate} @ ${returnTime}` : (returnDate || returnTime);
                returnCard.style.display = 'block';
            } else {
                returnCard.style.display = 'none';
            }

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
$(function () {

    const dateInput = document.getElementById('date-range');

    // --- LITEPICKER RANGE PICKER ---
    const picker = new Litepicker({
        element: dateInput,
        singleMode: false,
        numberOfMonths: getColumns(),
        numberOfColumns: getColumns(),
        autoApply: false,
        autoHide: false,
        format: 'YYYY-MM-DD',
    });

    // DataTable
    var dt = $('#bookings-table').DataTable({
        processing: true,
        serverSide: true,
        lengthChange: false,
        searching: false,

        ajax: {
            url: "{{ route('dashboard') }}",
            data: function (d) {

                // ---- READ DATES FROM LITEPICKER ----
                let start = picker.getStartDate();
                let end   = picker.getEndDate();

                if (start && end) {
                    d.start_date = start.format('YYYY-MM-DD');
                    d.end_date   = end.format('YYYY-MM-DD');
                } else {
                    d.start_date = null;
                    d.end_date   = null;
                }

                // Other filters
                d.ride_type   = $('#filter-ride-type').val();
                d.search_text = $('#filter-search-text').val();
            }
        },

        responsive: true,

        columns: [
            { data: 'checkbox', orderable: false, searchable: false },
            { data: 'confirmation', name: 'booking_id' },
            { data: 'date', name: 'pickup_date' },
            { data: 'passenger', name: 'booker.first_name' },
            { data: 'routing', name: 'pickup_location' },
            { data: 'status', name: 'payment_status' },
            { data: 'total', name: 'total_price' },
            { data: 'actions', orderable: false, searchable: false }
        ]
    });

    // Toggle filter panel
    $('#filter-toggle').on('click', function () {
        $('#filters-panel').toggle();
    });

    // Apply filters
    $('#go-filter').on('click', function () {
        dt.ajax.reload();
    });

    // Clear filters
    $('#clear-filter').on('click', function () {
        $('#filter-ride-type').val('');
        $('#filter-search-text').val('');
        picker.clearSelection();  // ⭐ Properly clears range in Litepicker

        dt.ajax.reload();
    });

});

    </script>
<script>
const dateInput = document.getElementById('date-range');

function getColumns() {
    return window.innerWidth <= 768 ? 1 : 2; // 1 month on mobile, 2 on desktop
}

// Update number of months dynamically on resize
window.addEventListener('resize', () => {
    picker.setOptions({
        numberOfMonths: getColumns(),
        numberOfColumns: getColumns(),
    });
});
</script>

@endsection
