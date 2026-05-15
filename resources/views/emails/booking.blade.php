@php
    $fd = isset($bookingData['flight_details']) && is_array($bookingData['flight_details']) ? $bookingData['flight_details'] : null;
    $hasFlightBlock = $fd
        && !empty($fd['flight_number'])
        && !empty($fd['pickup_flight_details']);
@endphp
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
            <img src="{{ config('branding.mail_logo_url') }}" alt="Dallas Black Cars" width="250" style="max-width: 250px; width: 250px; height: auto; margin-bottom: 10px; display: block; margin-left: auto; margin-right: auto; border: 0; outline: none; text-decoration: none;">
            <h2 style="margin: 0; font-size: 22px; color: #12143e;">Booking {{ $isAdmin ? 'Notification' : 'Confirmation' }}</h2>
            <p style="margin: 5px 0 0; font-size: 15px; color: #555;">{{ $isAdmin ? 'New booking received' : 'Your reservation has been confirmed!' }}</p>
        </div>

        <div class="content" style="padding: 10px 4px 20px;">
            {{-- Greeting / Intro --}}
            @if ($isAdmin)
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear Admin,</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">A new booking has been received. Please find the details below:</p>
                <div class="admin-note" style="background-color: #baddfc; border-left: 4px solid #12143e; padding: 12px; margin: 15px 0; font-size: 15px; color: #333;">
                    <strong>Action Required:</strong> Please review and confirm this booking at your earliest convenience.
                </div>
            @elseif ($sendToBooker)
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear {{ trim(($bookingData['booker_first_name'] ?? '') . ' ' . ($bookingData['booker_last_name'] ?? '')) ?: 'Booker' }},</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">Thank you for booking on behalf of {{ $bookingData['passenger_name'] ?? 'the passenger' }}. Your booking has been successfully confirmed. Below are the booking details :</p>
            @else
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear {{ $bookingData['passenger_name'] ?? 'Valued Customer' }},</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">Thank you for choosing our service. Your booking has been successfully confirmed. Below are your booking details :</p>
            @endif

            {{-- FIFA World Cup 2026 event notice (above booking confirmation header) --}}
            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 0 20px; border-collapse: collapse;">
                <tr>
                    <td style="background-color: #faf6ef; border: 1px solid #9a7738; border-radius: 14px; padding: 14px 16px;">
                        <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                                <td style="width: 44px; vertical-align: top; padding: 2px 12px 0 0;">
                                    <div style="width: 36px; height: 36px; border-radius: 50%; border: 2px solid #7a5c1e; background-color: #f5ead4; text-align: center; line-height: 32px; font-size: 18px; font-weight: 700; color: #5c4515; font-family: Georgia, 'Times New Roman', serif;">
                                        i
                                    </div>
                                </td>
                                <td style="vertical-align: top; color: #4a3b2a;">
                                    <p style="margin: 0 0 10px; font-size: 13px; font-weight: 700; color: #3d2914;">
                                        Important Event Notice &ndash; FIFA World Cup 2026 (June 13 &ndash; July 15, 2026):
                                    </p>
                                    <p style="margin: 0 0 12px; font-size: 12px; line-height: 1.55; color: #554433; font-style: italic;">
                                        If this booking falls within the FIFA World Cup 2026 event dates, all rates, fees, and minimums are subject to change without notice based on event demand, availability, and operational conditions. You acknowledge and agree that these rates are not guaranteed until final payment is made in accordance with our policy. By confirming this reservation, you expressly authorize any rate adjustments and agree that such changes are not a basis for refund, credit, cancellation, or chargeback.
                                    </p>
                                    <p style="margin: 0; font-size: 11px; line-height: 1.45; color: #4a4035;">
                                        Complete FIFA 2026 (Dallas&ndash;Fort Worth) event terms are included in your attached booking PDF.
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            {{-- Booking Confirmation #… (aligned with PDF fields) --}}
            <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">
                    Booking Confirmation #{{ $bookingData['booking_id'] ?? 'N/A' }}</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 11px; color: #666; padding: 8px 0 10px;">
                            <strong>Last Modified On:</strong> {{ now()->format('m/d/Y h:i A') }}
                        </td>
                    </tr>
                    @if (!empty($bookingData['pickup_date']))
                        <tr>
                            <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0; vertical-align: top;">Pick-up Date:</td>
                            <td style="color: #333; padding: 4px 0;">{{ \Carbon\Carbon::parse($bookingData['pickup_date'])->format('m/d/Y - l') }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['pickup_time']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Pick-up Time:</td>
                            <td style="color: #333; padding: 4px 0;">{{ \Carbon\Carbon::parse($bookingData['pickup_time'])->format('h:i A') }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['return_date']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Return Date:</td>
                            <td style="color: #333; padding: 4px 0;">{{ \Carbon\Carbon::parse($bookingData['return_date'])->format('m/d/Y - l') }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['return_time']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Return Time:</td>
                            <td style="color: #333; padding: 4px 0;">{{ \Carbon\Carbon::parse($bookingData['return_time'])->format('h:i A') }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['hours']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Hours:</td>
                            <td style="color: #333; padding: 4px 0;">{{ $bookingData['hours'] }}</td>
                        </tr>
                    @endif
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Service Type:</td>
                        <td style="color: #333; padding: 4px 0;">
                            @if (!empty($bookingData['hours']))
                                Hourly/As Directed
                            @else
                                To Airport
                            @endif
                        </td>
                    </tr>
                    @if (!empty($bookingData['passenger_name']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Passenger:</td>
                            <td style="color: #333; padding: 4px 0;">{{ $bookingData['passenger_name'] }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['booking_id']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Client Ref#:</td>
                            <td style="color: #333; padding: 4px 0;">N/A</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['phone']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Phone Number:</td>
                            <td style="color: #333; padding: 4px 0;">{{ $bookingData['phone'] }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['passengers']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">No. of Pass:</td>
                            <td style="color: #333; padding: 4px 0;">{{ $bookingData['passengers'] }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['vehicle_type']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Vehicle Type:</td>
                            <td style="color: #333; padding: 4px 0;">{{ $bookingData['vehicle_type'] }}</td>
                        </tr>
                    @endif
                    @if (!empty($bookingData['booker_first_name']) || !empty($bookingData['booker_last_name']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Primary/Billing Contact:</td>
                            <td style="color: #333; padding: 4px 0;">{{ trim(($bookingData['booker_first_name'] ?? '') . ' ' . ($bookingData['booker_last_name'] ?? '')) }}</td>
                        </tr>
                    @endif
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Passenger Email:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $bookingData['email'] ?? '—' }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Payment Method:</td>
                        <td style="color: #333; padding: 4px 0;">Credit Card</td>
                    </tr>
                    @if (!empty($bookingData['payment_status']))
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Payment Status:</td>
                            <td style="color: #333; padding: 4px 0;">{{ $bookingData['payment_status'] }}</td>
                        </tr>
                    @endif
                </table>
            </div>

            {{-- Booker Information (same structure as PDF) --}}
            @if (!empty($bookingData['isBookingForOthers'])
                && (!empty($bookingData['booker_first_name']) || !empty($bookingData['booker_last_name']) || !empty($bookingData['booker_email']) || !empty($bookingData['booker_number'])))
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Booker Information</h3>
                    <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                        @if (!empty($bookingData['booker_first_name']) || !empty($bookingData['booker_last_name']))
                            <tr>
                                <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0; vertical-align: top;">Booker Name:</td>
                                <td style="color: #333; padding: 4px 0;">{{ trim(($bookingData['booker_first_name'] ?? '') . ' ' . ($bookingData['booker_last_name'] ?? '')) }}</td>
                            </tr>
                        @endif
                        @if (!empty($bookingData['booker_email']))
                            <tr>
                                <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Booker Email:</td>
                                <td style="color: #333; padding: 4px 0;">{{ $bookingData['booker_email'] }}</td>
                            </tr>
                        @endif
                        @if (!empty($bookingData['booker_number']))
                            <tr>
                                <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Booker Phone:</td>
                                <td style="color: #333; padding: 4px 0;">{{ $bookingData['booker_number'] }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            @else
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Booker Information:</h3>
                    <p style="font-size: 12px; margin: 0; padding: 12px; color: #555;">****** Information not provided ******</p>
                </div>
            @endif

            {{-- Trip Routing Information (same as PDF) --}}
            @if (!empty($bookingData['pickup_location']) || !empty($bookingData['dropoff_location']) || !empty($bookingData['hours']))
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Trip Routing Information:</h3>
                    <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                        @if (!empty($bookingData['pickup_location']))
                            <tr>
                                <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0; vertical-align: top;">Pick-up Location:</td>
                                <td style="color: #333; padding: 4px 0;">{{ $bookingData['pickup_location'] }}</td>
                            </tr>
                        @endif
                        @if (!empty($bookingData['hours']))
                            <tr>
                                <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Stop Location:</td>
                                <td style="color: #333; padding: 4px 0;">STOP AS DIRECTED</td>
                            </tr>
                        @endif
                        @if (!empty($bookingData['dropoff_location']))
                            <tr>
                                <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Drop-off Location:</td>
                                <td style="color: #333; padding: 4px 0;">{{ $bookingData['dropoff_location'] }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            @else
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Trip Routing Information:</h3>
                    <p style="font-size: 12px; margin: 0; padding: 12px; color: #555;">****** Information not provided ******</p>
                </div>
            @endif

            {{-- Flight/Airport Information (same gate as PDF) --}}
            @if ($hasFlightBlock)
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Flight/Airport Information</h3>
                    <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                        @if (!empty($fd['flight_number']))
                            <tr>
                                <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0; vertical-align: top;">Flight Number:</td>
                                <td style="color: #333; padding: 4px 0;">{{ $fd['flight_number'] }}</td>
                            </tr>
                        @endif
                        @if (!empty($fd['pickup_flight_details']))
                            <tr>
                                <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Pickup Flight Details:</td>
                                <td style="color: #333; padding: 4px 0;">{{ $fd['pickup_flight_details'] }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Meet Option:</td>
                            <td style="color: #333; padding: 4px 0;">{{ !empty($fd['meet_option']) ? ucfirst((string) $fd['meet_option']) : 'Not Specified!' }}</td>
                        </tr>
                    </table>
                </div>
            @else
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Flight/Airport Information:</h3>
                    <p style="font-size: 12px; margin: 0; padding: 12px; color: #555;">****** Information not provided ******</p>
                </div>
            @endif

            {{-- Notes/Comments (PDF framing) --}}
            <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Notes/Comments:</h3>
                <p style="font-size: 12px; margin: 0; padding: 12px; color: #333;">
                    ****** {{ !empty($bookingData['special_instructions']) ? $bookingData['special_instructions'] : 'Information not provided' }} ******
                </p>
            </div>

            {{-- Charges & Fees (same lines as PDF) --}}
            @if (isset($bookingData['total_amount']))
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Charges &amp; Fees:</h3>
                    <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                        <tr>
                            <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0; vertical-align: top;">Fare (All inclusive):</td>
                            <td style="color: #333; padding: 4px 0;"><strong>${{ number_format((float) $bookingData['total_amount'], 2) }}</strong></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; color: #666; padding: 4px 0; vertical-align: top;">Other charges:</td>
                            <td style="color: #333; padding: 4px 0;"><strong>$0.00</strong></td>
                        </tr>
                        <tr style="color: #28a745;">
                            <td style="font-weight: bold; color: #28a745; padding: 4px 0; vertical-align: top;">Payment/Deposits:</td>
                            <td style="color: #28a745; padding: 4px 0;"><strong>$0.00</strong></td>
                        </tr>
                        <tr style="color: #dc3545;">
                            <td style="font-weight: bold; padding: 4px 0; vertical-align: top;">Total Due:</td>
                            <td style="padding: 4px 0;"><strong>${{ number_format((float) $bookingData['total_amount'], 2) }}</strong></td>
                        </tr>
                    </table>
                </div>
            @else
                <div class="booking-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #baddfc; margin: 0; padding: 8px 12px; font-size: 14px; color: #12143e; border-radius: 4px 4px 0 0;">Charges &amp; Fees:</h3>
                    <p style="font-size: 12px; margin: 0; padding: 12px; color: #555;">****** Information not provided ******</p>
                </div>
            @endif

            <p style="font-size: 11px; color: #777; margin: 16px 0 10px;">
                Full cancellation and service policies are attached as a PDF where applicable.
            </p>

            <p style="font-size: 12px; margin: 20px 0 10px;"><b>Best regards,<br>{{ config('app.name') }} Team</b></p>
        </div>

        <div class="footer" style="text-align: center; padding: 20px 10px; font-size: 13px; color: #777; border-top: 1px solid #e1e1e1;">
            <p style="margin: 0 0 5px;">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p style="margin: 4px 0 0;">214-897-8056 | info@dallaslimoandblackcars.com</p>
        </div>
    </div>
</body>

</html>
