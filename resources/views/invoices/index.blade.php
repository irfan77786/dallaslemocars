@extends('layouts.guest')
@section('guest_data')
<style>
.booking-thead {
    background: #1B9CCC;
    color: white;
}
.table-responsive {
    overflow-x: hidden !important;
}
.nav-link {
    color: black !important;
}
@media (max-width: 768px) {
    .container-fluid {
        padding-top: 30px !important;
        padding-bottom: 30px !important;
    }
    .desktopTabs {
        display: none !important;
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

<div class="container-fluid">
    @include('partials.dashboard_tabs')
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-invoice" role="tabpanel" aria-labelledby="invoices-tab">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="col-12 mb-3 d-flex align-items-center gap-2" style="padding: 0px;">
                        <button type="button" class="btn btn-primary" id="invoice-filter-toggle">Filter <span class="ml-1">-</span></button>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="invoiceDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Export
                            </button>
                            <div class="dropdown-menu" aria-labelledby="invoiceDropdownMenuLink">
                                <a class="dropdown-item" href="#" id="invoice-export-pdf">Download as PDF</a>
                                <a class="dropdown-item" href="#" id="invoice-export-xls">Download as XLS</a>
                            </div>
                        </div>
                    </div>

                    <div id="invoice-filters-panel" class="card card-body mb-3 pl-0 pr-0" style="display:none; padding-top: 0px; padding-bottom: 0px; border: none !important;">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <select class="form-control" id="invoice-filter-ride-type">
                                    <option value="">All Rides</option>
                                    <option value="one">One-way</option>
                                    <option value="round">Round Trip</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-5 mb-2 mb-md-0">
                                <input type="text" class="form-control" id="invoice-date-range" placeholder="Select range">
                            </div>
                            <div class="col-12 col-md-2 mb-2 mb-md-0">
                                <input type="text" class="form-control" id="invoice-filter-search-text" placeholder="Conf #, Pax Name, etc.">
                            </div>
                            <div class="col-12 col-md-2 text-md-right">
                                <button type="button" class="btn btn-primary" id="invoice-go-filter">Go</button>
                                <a href="javascript:void(0)" style="color: #1B9CCC" class="ml-3" id="invoice-clear-filter">Clear Filter</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="invoices-table" class="table table-bordered">
                            <thead class="booking-thead">
                                <tr>
                                    <th><input type="checkbox" id="invoice-select-all"></th>
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
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css"/>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script>
$(function () {
    function getColumns() {
        return window.innerWidth <= 768 ? 1 : 2;
    }

    const invoiceDateInput = document.getElementById('invoice-date-range');
    const invoicePicker = new Litepicker({
        element: invoiceDateInput,
        singleMode: false,
        numberOfMonths: getColumns(),
        numberOfColumns: getColumns(),
        autoApply: false,
        autoHide: false,
        format: 'YYYY-MM-DD',
    });

    var dtInvoices = $('#invoices-table').DataTable({
        processing: true,
        serverSide: true,
        lengthChange: false,
        searching: false,
        ajax: {
            url: "{{ route('invoices.index') }}",
            data: function (d) {
                let start = invoicePicker.getStartDate();
                let end   = invoicePicker.getEndDate();
                if (start && end) {
                    d.start_date = start.format('YYYY-MM-DD');
                    d.end_date   = end.format('YYYY-MM-DD');
                } else {
                    d.start_date = null;
                    d.end_date   = null;
                }
                d.ride_type   = $('#invoice-filter-ride-type').val();
                d.search_text = $('#invoice-filter-search-text').val();
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

    $('#invoice-filter-toggle').on('click', function () {
        $('#invoice-filters-panel').toggle();
    });
    $('#invoice-go-filter').on('click', function () {
        dtInvoices.ajax.reload();
    });
    $('#invoice-clear-filter').on('click', function () {
        $('#invoice-filter-ride-type').val('');
        $('#invoice-filter-search-text').val('');
        invoicePicker.clearSelection();
        dtInvoices.ajax.reload();
    });

    $('#invoice-export-xls').on('click', function (e) {
        e.preventDefault();
        let start = invoicePicker.getStartDate();
        let end   = invoicePicker.getEndDate();
        const params = new URLSearchParams();
        if (start && end) {
            params.set('start_date', start.format('YYYY-MM-DD'));
            params.set('end_date', end.format('YYYY-MM-DD'));
        }
        const rideType = $('#invoice-filter-ride-type').val();
        const searchText = $('#invoice-filter-search-text').val();
        if (rideType) params.set('ride_type', rideType);
        if (searchText) params.set('search_text', searchText);
        const baseUrl = "{{ route('dashboard.export.xls') }}";
        window.location.href = baseUrl + (params.toString() ? ('?' + params.toString()) : '');
    });

    $('#invoice-export-pdf').on('click', function (e) {
        e.preventDefault();
        let start = invoicePicker.getStartDate();
        let end   = invoicePicker.getEndDate();
        const params = new URLSearchParams();
        if (start && end) {
            params.set('start_date', start.format('YYYY-MM-DD'));
            params.set('end_date', end.format('YYYY-MM-DD'));
        }
        const rideType = $('#invoice-filter-ride-type').val();
        const searchText = $('#invoice-filter-search-text').val();
        if (rideType) params.set('ride_type', rideType);
        if (searchText) params.set('search_text', searchText);
        const baseUrl = "{{ route('dashboard.export.pdf') }}";
        window.location.href = baseUrl + (params.toString() ? ('?' + params.toString()) : '');
    });
});

// Adjust Litepicker columns on resize
window.addEventListener('resize', () => {
    if (typeof invoicePicker !== 'undefined' && invoicePicker) {
        invoicePicker.setOptions({
            numberOfMonths: window.innerWidth <= 768 ? 1 : 2,
            numberOfColumns: window.innerWidth <= 768 ? 1 : 2,
        });
    }
});
</script>
@endsection
