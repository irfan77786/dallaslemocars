<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $isAdmin ? $details['full_name'] . ' Quote Request' : 'Your Quote Request' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Abel', 'Helvetica', 'Arial', sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 12px; background-color: #ffffff;">
        <div class="header" style="padding: 20px 10px; text-align: center; border-bottom: 1px solid #eee;">
            <img src="https://dallaslimoandblackcars.com/new_assets/assets/black-car-service-dallas-logo.png" alt="Dallas Black Cars" style="max-width: 250px; margin-bottom: 10px; height: auto;">
            @if($isAdmin)
                <h2 style="margin: 0; font-size: 22px; color: #12143e;">New Quote Request</h2>
                <p style="margin: 5px 0 0; font-size: 15px; color: #555;">Details of the quote request:</p>
            @else
                <h2 style="margin: 0; font-size: 22px; color: #12143e;">Your Quote Request Received</h2>
                <p style="margin: 5px 0 0; font-size: 15px; color: #555;">We're preparing your quote and will send it shortly</p>
            @endif
        </div>

        <div class="content" style="padding: 10px 4px 20px;">
            @if($isAdmin)
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear Admin,</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">A new quote request has been received. Please find the details below:</p>
                <div class="admin-note" style="background-color: #baddfc; border-left: 4px solid #12143e; padding: 12px; margin: 15px 0; font-size: 12px; color: #333;">
                    <strong>New Quote Inquiry:</strong> Please review this request and send a quote to the customer.
                </div>
            @else
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear {{ $details['full_name'] }},</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">Thank you for requesting a quote from Dallas Black Cars. We have received your quote request and our team is preparing a customized quote based on your trip details. You can expect to receive your quote within 24 hours.</p>
            @endif

            {{-- Trip Details --}}
            <div class="trip-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Trip Details</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Vehicle Type:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $details['vehicle_type'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Trip Type:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $details['trip_type'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Passengers:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $details['number_of_passengers'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Trip Date:</td>
                        <td style="color: #333; padding: 4px 0;">{{ \Carbon\Carbon::parse($details['trip_date'])->format('F j, Y') }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Trip Time:</td>
                        <td style="color: #333; padding: 4px 0;">{{ \Carbon\Carbon::parse($details['trip_time'], 'UTC')->format('g:i A') }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Pickup Address:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $details['pickup_address'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Drop Off Address:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $details['dropoff_address'] }}</td>
                    </tr>
                </table>
            </div>

            {{-- Contact Details --}}
            <div class="contact-details" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Contact Information</h3>
                <table cellpadding="0" cellspacing="0" width="100%" style="font-size: 12px; padding: 10px;">
                    <tr>
                        <td style="font-weight: bold; color: #666; width: 40%; padding: 4px 0;">Full Name:</td>
                        <td style="color: #333; padding: 4px 0;">{{ $details['full_name'] }}</td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Email:</td>
                        <td style="color: #333; padding: 4px 0;"><a href="mailto:{{ $details['email'] }}" style="color: #12143e; text-decoration: none;">{{ $details['email'] }}</a></td>
                    </tr>
                </table>
            </div>

            @if(!empty($details['message']))
                {{-- Message --}}
                <div class="message-section" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                    <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Additional Notes</h3>
                    <div style="padding: 10px;">
                        <p style="margin: 0; font-size: 12px; color: #333; white-space: pre-wrap; word-wrap: break-word;">{{ $details['message'] }}</p>
                    </div>
                </div>
            @endif

            @if(!$isAdmin)
                <div class="next-steps" style="background-color: #e8f5e9; border-radius: 4px; padding: 12px; margin: 20px 0; border: 1px solid #c8e6c9; font-size: 12px; color: #333;">
                    <p style="margin: 0 0 8px;"><strong>What happens next?</strong></p>
                    <ul style="margin: 0; padding-left: 20px;">
                        <li style="margin: 4px 0;">Our team will review your trip details</li>
                        <li style="margin: 4px 0;">We'll send you a customized quote within 24 hours</li>
                        <li style="margin: 4px 0;">Feel free to call us anytime: <strong>+1 214-897-8056</strong></li>
                    </ul>
                </div>
            @endif
        </div>

        <div class="footer" style="text-align: center; padding: 20px 10px; font-size: 12px; color: #777; border-top: 1px solid #e1e1e1;">
            <p style="margin: 0 0 5px;"><strong>Dallas Black Cars</strong></p>
            <p style="margin: 0 0 8px;">Premium Black Car & Limo Service in Dallas</p>
            <p style="margin: 0 0 5px;"><a href="tel:+12148978056" style="color: #12143e; text-decoration: none;">+1 214-897-8056</a> | <a href="mailto:info@dallaslimoandblackcars.com" style="color: #12143e; text-decoration: none;">info@dallaslimoandblackcars.com</a></p>
            <p style="margin: 0; font-size: 11px;">This is an automated message. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>
