@extends('layouts.guest')
@section('guest_data')

<style>
#locations-table {
    padding-left: 9%;
    padding-right: 9%;
}
.locations-thead {
    background: #1B9CCC;
    color: white;
}

/* Mobile responsive card-style rows */
@media (max-width: 768px) {
    table thead {
        display: none;
    }
    table, table tbody, table tr, table td {
        display: block;
        width: 100%;
    }
    table tr {
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 0.75rem;
    }
    table td {
        text-align: left;
        padding-left: 0.75rem;
        position: relative;
        border: none !important;
        display: flex;
        flex-direction: column;
        font-size: 0.9rem;
        word-break: break-word;
    }
    table td::before {
        content: attr(data-label);
        font-weight: 600;
        margin-bottom: 0.25rem;
    }
    table td button,
    table td a {
        margin-top: 0.5rem;
    }
}
</style>

<div class="container-fluid pb-5">
    <div class="tab-content">
        @include('partials.dashboard_tabs')
        <div class="tab-pane fade show active" id="locations-table" role="tabpanel">
            <a href="{{ route('storedLocations.add') }}" class="btn mb-3 mt-3 btn-primary">
                Add Location
            </a>
            <table class="table table-bordered">
                <thead class="locations-thead">
                    <tr>
                        <th>Type</th>
                        <th>Address</th>
                        <th>Apt/Suite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($locations as $location)
                    <tr>
                        <td data-label="Type">
                            @if($location->address_type === 'home')
                                <i class="fas fa-home"></i> Home
                            @elseif($location->address_type === 'office')
                                <i class="fas fa-building text-success"></i> Office
                            @else
                                <i class="fas fa-briefcase"></i> {{ $location->location_label ?? ucfirst($location->address_type ) }}
                            @endif
                        </td>

                        <td data-label="Address">{{ $location->address }}</td>

                        <td data-label="Apt/Suite">{{ $location->apt_suite ?? '—' }}</td>

                        <td data-label="Actions">
                            <a href="{{ route('storedLocations.edit', $location->id) }}">✏️</a>

                            <form action="{{ route('storedLocations.delete', $location->id) }}"
                                method="POST" style="display:inline">
                                @csrf @method('DELETE')

                                <button type="submit" class="btn btn-link p-0 text-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No locations found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
