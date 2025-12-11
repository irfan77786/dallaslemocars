@extends('layouts.guest')
<style>
.users-thead {
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
        @include('partials.dashboard_tabs')
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-bookings" role="tabpanel" aria-labelledby="bookings-tab">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="col-12 mb-3 d-flex align-items-center gap-2" style="padding: 0px;">
                            <button class="btn btn-primary-transparent-hover mr-3" id="filter-toggle">Filter</button>

                            <div class="dropdown mr-3">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="addUserDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Add User
                                </button>
                                <div class="dropdown-menu" aria-labelledby="addUserDropdown">
                                    <a class="dropdown-item" href="#" data-contact-type="passenger" id="add-passenger">Add Passenger</a>
                                    <a class="dropdown-item" href="#" data-contact-type="billing" id="add-billing">Add Billing Contact</a>
                                    <a class="dropdown-item" href="#" data-contact-type="booking" id="add-booking">Add Booking Contact</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="exportDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="exportDropdown">
                                    <a class="dropdown-item" href="#" id="export-users-pdf">Download as PDF</a>
                                    <a class="dropdown-item" href="#" id="export-users-xls">Download as XLS</a>
                                </div>
                            </div>
                        </div>

                        <div id="filters-panel" class="card card-body mb-3 pl-0 pr-0" style="display:none; padding-top: 0px; padding-bottom: 0px; border: none !important;">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-3 mb-2 mb-md-0">
                                    <select class="form-control" id="filter-contact-type">
                                        <option value="">Type: All</option>
                                        <option value="passenger">Passenger</option>
                                        <option value="billing">Billing Contact</option>
                                        <option value="booking">Booking Contact</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-3 mb-2 mb-md-0">
                                    <select class="form-control" id="filter-status">
                                        <option value="">Status: All</option>
                                        <option value="verified">Verified</option>
                                        <option value="unverified">Unverified</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-4 mb-2 mb-md-0">
                                    <input type="text" class="form-control" id="filter-search-text" placeholder="keyword">
                                </div>
                                <div class="col-12 col-md-2 text-md-right">
                                    <button type="button" class="btn btn-primary" id="go-filter">Go</button>
                                    <a href="javascript:void(0)" style="color: #1B9CCC" class="ml-3" id="clear-filter">Clear Filter</a>
                                </div>
                            </div>
                        </div>
                    <div class="table-responsive">
                        <table id="users-table" class="table table-bordered">
                            <thead class="users-thead">
                                <tr>
                                    <th><input type="checkbox" id="select-all"></th>
                                    <th>Account #</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="userCreateModal" tabindex="-1" aria-labelledby="userCreateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-3 shadow-lg">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title font-weight-bold mb-2 text-white" id="userCreateModalLabel">Add Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white"><span aria-hidden="true">&times;</span></button>
                </div>
                <form id="create-user-form">
                    <div class="modal-body">
                        <input type="hidden" name="contact_type" id="modal-contact-type" value="passenger">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function () {
    var dtUsers = $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        lengthChange: false,
        searching: false,
        responsive: true,
        paging: true,
        pageLength: 10,

        ajax: {
            url: "{{ route('users') }}",
            data: function(d) {
                d.search_text = $('#filter-search-text').val();
                d.contact_type = $('#filter-contact-type').val();
                d.status = $('#filter-status').val();
            }
        },

        columns: [
            { data: 'checkbox', orderable: false, searchable: false },
            { data: 'account', name: 'id' },
            { data: 'name', name: 'first_name' },
            { data: 'phone', name: 'phone' },
            { data: 'type', name: 'contact_type' },
            { data: 'status', orderable: false, searchable: false }
        ]
    });

    $('#filter-toggle').on('click', function () {
        $('#filters-panel').toggle();
    });

    $('#go-filter').on('click', function () {
        dtUsers.ajax.reload();
    });

    $('#clear-filter').on('click', function () {
        $('#filter-contact-type').val('');
        $('#filter-status').val('');
        $('#filter-search-text').val('');
        dtUsers.ajax.reload();
    });

    function openCreateModal(type) {
        $('#modal-contact-type').val(type);
        $('#userCreateModal').modal('show');
    }

    $('#add-passenger').on('click', function(){ openCreateModal('passenger'); });
    $('#add-billing').on('click', function(){ openCreateModal('billing'); });
    $('#add-booking').on('click', function(){ openCreateModal('booking'); });

    $('#create-user-form').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        $.ajax({
            method: 'POST',
            url: "{{ route('users.store') }}",
            data: form.serialize(),
            success: function(){
                $('#userCreateModal').modal('hide');
                form[0].reset();
                dtUsers.ajax.reload();
            },
            error: function(xhr){
                var msg = 'Failed to save contact';
                if (xhr && xhr.responseJSON && xhr.responseJSON.message) {
                    msg = xhr.responseJSON.message;
                }
                try {
                    Swal.fire({
                        icon: 'error',
                        title: 'Duplicate Email',
                        text: msg
                    });
                } catch(e) {
                    alert(msg);
                }
            }
        });
    });

    $('#export-users-xls').on('click', function (e) {
        e.preventDefault();
        const params = new URLSearchParams();
        const searchText = $('#filter-search-text').val();
        const contactType = $('#filter-contact-type').val();
        const status = $('#filter-status').val();
        if (searchText) params.set('search_text', searchText);
        if (contactType) params.set('contact_type', contactType);
        if (status) params.set('status', status);
        const baseUrl = "{{ route('users.export.xls') }}";
        window.location.href = baseUrl + (params.toString() ? ('?' + params.toString()) : '');
    });

    $('#export-users-pdf').on('click', function (e) {
        e.preventDefault();
        const params = new URLSearchParams();
        const searchText = $('#filter-search-text').val();
        const contactType = $('#filter-contact-type').val();
        const status = $('#filter-status').val();
        if (searchText) params.set('search_text', searchText);
        if (contactType) params.set('contact_type', contactType);
        if (status) params.set('status', status);
        const baseUrl = "{{ route('users.export.pdf') }}";
        window.location.href = baseUrl + (params.toString() ? ('?' + params.toString()) : '');
    });

    });

function getColumns() {
    return window.innerWidth <= 768 ? 1 : 2;
}
</script>

@endsection
