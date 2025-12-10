@extends('layouts.guest')
@section('guest_data')
<style>
/* Container padding */
#payments-table {
    padding-left: 9%;
    padding-right: 9%;
}
.payments-thead {
    background: #1B9CCC;
    color: white;
}
/* Card-style rows on mobile */
@media (max-width: 768px) {
    table thead {
        display: none; /* hide headers */
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
        text-align: left;           /* align content left */
        padding-left: 0.75rem;      /* reduce padding */
        position: relative;
        border: none !important;
        display: flex;
        flex-direction: column;     /* stack label and value */
        justify-content: flex-start;
        font-size: 0.9rem;
        word-break: break-word;     /* wrap long text */
    }

    table td::before {
        content: attr(data-label);
        font-weight: 600;
        margin-bottom: 0.25rem;
        display: block;
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

        <div class="tab-pane fade show active" id="payments-table" role="tabpanel" aria-labelledby="bookings-tab">

            <a href="{{ route('cards.add') }}" class="btn mb-3 mt-3 btn-primary">Add Credit Card</a>

            <table class="table table-bordered">
                <thead class="payments-thead">
                    <tr>
                        <th>Credit Card #</th>
                        <th>Exp Date</th>
                        <th>Name</th>
                        <th>Billing Address</th>
                        <th>Preferred</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($cards as $card)
                    <tr>
                        <td data-label="Credit Card #">
                            @php $brand = strtolower($card->card->brand); @endphp
                            @if($brand === 'visa')
                                <i class="fab fa-cc-visa text-primary"></i>
                            @elseif($brand === 'mastercard')
                                <i class="fab fa-cc-mastercard text-danger"></i>
                            @elseif($brand === 'amex')
                                <i class="fab fa-cc-amex text-info"></i>
                            @elseif($brand === 'discover')
                                <i class="fab fa-cc-discover text-warning"></i>
                            @else
                                <i class="far fa-credit-card"></i>
                            @endif
                            <strong class="ms-1">{{ strtoupper($card->card->brand) }}</strong>
                            •• {{ $card->card->last4 }}
                        </td>
                        <td data-label="Exp Date">{{ $card->card->exp_month }}/{{ substr($card->card->exp_year, -2) }}</td>
                        <td data-label="Name">{{ $card->billing_details->name }}</td>
                        <td data-label="Billing Address">
                            {{ $card->billing_details->address->line1 }},
                            {{ $card->billing_details->address->city }},
                            {{ $card->billing_details->address->state }}
                            {{ $card->billing_details->address->postal_code }},
                            {{ $card->billing_details->address->country }}
                        </td>
                        <td data-label="Preferred" class="text-center">@if($default === $card->id) ✅ @endif</td>
                        <td data-label="Actions">
                            <a href="{{ route('cards.edit',$card->id) }}">✏️</a>
                            <form action="{{ route('cards.delete',$card->id) }}" method="POST" style="display:inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-link p-0 text-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">No cards found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection
