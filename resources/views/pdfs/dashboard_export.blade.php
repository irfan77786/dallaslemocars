<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bookings</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 10px; color: #333; margin: 0; padding: 8px 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 6px; }
        th, td { border: 1px solid #e0e4e8; padding: 4px 5px; }
        th { background: #e52c43; color: #fff; text-align: left; font-size: 9px; }
        h2 { margin: 0 0 6px; font-size: 14px; color: #0b1422; }
    </style>
</head>
<body>
    @include('partials.booking_pdf_document_header')
    <h2>Bookings</h2>
    <table>
        <thead>
            <tr>
                <th>Confirmation</th>
                <th>Pickup Date</th>
                <th>Pickup Time</th>
                <th>Passenger</th>
                <th>Pickup</th>
                <th>Dropoff</th>
                <th>Trip Type</th>
                <th>Return Date</th>
                <th>Return Time</th>
                <th>Payment Status</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            @php
                $passenger = $row->booker ? trim(($row->booker->first_name ?? '').' '.($row->booker->last_name ?? '')) : '';
                $tripType = $row->round_trip == 1 ? 'Round Trip' : 'One-way';
                $returnDate = '';
                $returnTime = '';
                if ($row->round_trip == 1) {
                    $returnDate = $row->returnService->pickup_date ?? $row->return_date ?? '';
                    $returnTime = $row->returnService->pickup_time ?? $row->return_time ?? '';
                }
            @endphp
            <tr>
                <td>{{ $row->booking_id }}</td>
                <td>{{ $row->pickup_date }}</td>
                <td>{{ $row->pickup_time }}</td>
                <td>{{ $passenger ?: '-' }}</td>
                <td>{{ $row->pickup_location }}</td>
                <td>{{ $row->dropoff_location }}</td>
                <td>{{ $tripType }}</td>
                <td>{{ $returnDate }}</td>
                <td>{{ $returnTime }}</td>
                <td>{{ ucfirst(strtolower($row->payment_status)) }}</td>
                <td>${{ number_format((float)$row->total_price, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
