<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 11px; color: #333; margin: 0; padding: 8px 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 6px; }
        th, td { border: 1px solid #e0e4e8; padding: 4px 6px; }
        th { background: #e52c43; color: #fff; text-align: left; font-size: 10px; }
        h2 { margin: 0 0 6px; font-size: 14px; color: #0b1422; }
    </style>
</head>
<body>
    @include('partials.booking_pdf_document_header')
    <h2>Contacts</h2>
    <table>
        <thead>
            <tr>
                <th>Account #</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rows as $row)
            @php
                $type = ucfirst($row->contact_type ?? 'Passenger');
                $verified = !is_null($row->email_verified_at) ? 'Verified' : 'Unverified';
            @endphp
            <tr>
                <td>{{ (int)$row->id }}</td>
                <td>{{ $row->first_name ?? '' }}</td>
                <td>{{ $row->last_name ?? '' }}</td>
                <td>{{ $row->email ?? '' }}</td>
                <td>{{ $row->phone ?? '' }}</td>
                <td>{{ $type }}</td>
                <td>{{ $verified }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
