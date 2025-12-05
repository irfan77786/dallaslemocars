@extends('layouts.guest')
<style>
.booking-thead {
    background: #1B9CCC;
    color: white;
}
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
        <ul class="mb-4 desktopTabs" id="dashboardTabs" role="tablist" style="border-bottom: 0px !important; justify-content: center; margin-top: 35px;">
            <li class="nav-item mr-3">
                <a class="btn @if(Route::is('dashboard')) btn-primary @else btn-primary-transparent-hover @endif" id="bookings-tab" href="#tab-bookings" role="tab">
                    <i class="fas fa-car"></i> Rides
                </a>
            </li>
            <li class="nav-item mr-3">
                <a class="@if(Route::is('users')) btn-primary @else btn-primary-transparent-hover @endif" id="users-tab" href="#tab-users" role="tab">
                    <i class="fas fa-users"></i> Users
                </a>
            </li>
            <li class="nav-item mr-3">
                <a class="@if(Route::is('payment_methods')) btn-primary @else btn-primary-transparent-hover @endif" id="payments-tab" href="#tab-payments" role="tab">
                    <i class="fas fa-credit-card"></i> Payment Methods
                </a>
            </li>
            <li class="nav-item mr-3">
                <a class="@if(Route::is('invoices')) btn-primary @else btn-primary-transparent-hover @endif" id="invoices-tab" href="#tab-invoice" role="tab">
                    <i class="fas fa-file-invoice"></i> Invoices
                </a>
            </li>
            <li class="nav-item mr-3">
                <a class="@if(Route::is('account_info')) btn-primary @else btn-primary-transparent-hover @endif" id="profile-tab" href="#tab-profile" role="tab">
                    <i class="fas fa-user-circle"></i> Account Info
                </a>
            </li>
            <li class="nav-item mr-3">
                <a class="@if(Route::is('stored_locations')) btn-primary @else btn-primary-transparent-hover @endif" id="locations-tab" href="#tab-locations" role="tab">
                    <i class="fas fa-map-marker-alt"></i> Stored Locations
                </a>
            </li>
        </ul>

        <div class="tab-content">
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
