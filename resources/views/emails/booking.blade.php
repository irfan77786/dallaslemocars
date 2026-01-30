<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking {{ $isAdmin ? 'Notification' : 'Confirmation' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Abel', 'Helvetica', 'Arial', sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 6px; background-color: #ffffff;">
        <div class="header" style="padding: 20px 10px; text-align: center; border-bottom: 1px solid #eee;">
            <img src="{{ $message->embed(public_path('assets/img/site/black-car-service-dallas-logo.png')) }}" alt="Company Logo" style="max-width: 250px; margin-bottom: 10px; height: auto;">
            <h2 style="margin: 0; font-size: 22px; color: #12143e;">Booking {{ $isAdmin ? 'Notification' : 'Confirmation' }}</h2>
            <p style="margin: 5px 0 0; font-size: 15px; color: #555;">{{ $isAdmin ? 'New booking received' : 'Your reservation has been confirmed!' }}</p>
        </div>

        <div class="content" style="padding: 10px 4px 20px;">
            {{-- Greeting / Intro --}}
            @if($isAdmin)
            <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear Admin,</b></p>
            <p style="font-size: 12px; margin: 0 0 10px;">A new booking has been received. Please find the details below:</p>
            <div class="admin-note" style="background-color: #baddfc; border-left: 4px solid #12143e; padding: 12px; margin: 15px 0; font-size: 15px; color: #333;">
                <strong>Action Required:</strong> Please review and confirm this booking at your earliest convenience.
            </div>
            @elseif($sendToBooker)
            <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear {{ $bookingData['booker_first_name'] . ' ' . $bookingData['booker_last_name'] ?? 'Booker' }},</b></p>
            <p style="font-size: 12px; margin: 0 0 10px;">Thank you for booking on behalf of {{ $bookingData['passenger_name'] ?? 'the passenger' }}. Your booking has been successfully confirmed. Below are the booking details:</p>
            @else
            <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear {{ $bookingData['passenger_name'] ?? 'Valued Customer' }},</b></p>
            <p style="font-size: 12px; margin: 0 0 10px;">Thank you for choosing our service. Your booking has been successfully confirmed. Below are your booking details:</p>
            @endif

            {{-- Booker Information --}}
            @if($bookingData['isBookingForOthers'] && !$sendToBooker)
            <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Booker Information</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Booker Name:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['booker_first_name'] . ' ' . $bookingData['booker_last_name'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Booker Email:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['booker_email'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Booker Phone:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['booker_number'] }}</td>
                    </tr>
                </table>
            </div>
            @endif

            {{-- Booking Information --}}
            <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Booking Information #{{ $bookingData['booking_id'] }}</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Pickup Date & Time:</td>
                        <td style="color: #333; padding: 4px 0;">
                            @if(isset($bookingData['pickup_date']) && isset($bookingData['pickup_time']))
                            {{ \Carbon\Carbon::parse($bookingData['pickup_date'].' '.$bookingData['pickup_time'])->format('F j, Y \a\t g:i A') }}
                            @else N/A @endif
                        </td>
                    </tr>
                    @if(!empty($bookingData['return_date']))
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Return Date & Time:</td>
                        <td style="color: #333; padding: 4px 0;">
                            {{ \Carbon\Carbon::parse($bookingData['return_date'].' '.($bookingData['return_time'] ?? ''))->format('F j, Y \a\t g:i A') }}
                        </td>
                    </tr>
                    @endif
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Service Type:</td>
                        <td style="color: #333; padding: 4px 0;">{{ !empty($bookingData['hours']) ? 'Hourly/As Directed' : 'To Airport' }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Vehicle Type:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['vehicle_type'] ?? 'Standard' }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #28a745; padding: 4px 0;">Total Due:</td>
                        <td style="color: #12143e; padding: 4px 0; font-size: 14px;"><b>${{ number_format($bookingData['total_amount'] ?? 0, 2) }}</b></td>
                    </tr>
                </table>
            </div>

            {{-- Trip Routing --}}
            <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Trip Routing Information</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Pick-up Location:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['pickup_location'] }}</td>
                    </tr>
                    @if(!empty($bookingData['dropoff_location']))
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Drop-off Location:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['dropoff_location'] }}</td>
                    </tr>
                    @endif
                </table>
            </div>

            {{-- Flight Information --}}
            @if(!empty($bookingData['flight_details']))
            <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Flight Information</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    @if(!empty($bookingData['flight_details']['pickup_flight_details']))
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Pickup Flight Details:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['flight_details']['pickup_flight_details'] }}</td>
                    </tr>
                    @endif
                    @if(!empty($bookingData['flight_details']['flight_number']))
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Flight Number:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['flight_details']['flight_number'] }}</td>
                    </tr>
                    @endif
                    @if(!empty($bookingData['flight_details']['meet_option']))
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Meet Option:</td>
                        <td style="color: #333; padding: 4px 0;">{{ ucfirst($bookingData['flight_details']['meet_option']) }}</td>
                    </tr>
                    @endif
                </table>
            </div>
            @endif

            <p style="font-size: 12px; margin: 20px 0 10px;"><b>Best regards,<br>{{ config('app.name') }} Team</b></p>
        </div>

        <div class="footer" style="text-align: center; padding: 20px 10px; font-size: 13px; color: #777; border-top: 1px solid #e1e1e1;">
            <p style="margin: 0 0 5px;">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>

</html>
