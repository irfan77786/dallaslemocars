<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $isAdmin ? $details['full_name'] . ' Corporate Support Request' : 'Thank You for Your Corporate Support Request' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Abel', 'Helvetica', 'Arial', sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 12px; background-color: #ffffff;">
        <div class="header" style="padding: 20px 10px; text-align: center; border-bottom: 1px solid #eee;">
            <img src="https://dallaslimoandblackcars.com/new_assets/assets/black-car-service-dallas-logo.png" alt="Dallas Black Cars" style="max-width: 250px; margin-bottom: 10px; height: auto;">
            @if($isAdmin)
                <h2 style="margin: 0; font-size: 22px; color: #12143e;">New Corporate Support Request</h2>
                <p style="margin: 5px 0 0; font-size: 15px; color: #555;">Details of the request:</p>
            @else
                <h2 style="margin: 0; font-size: 22px; color: #12143e;">Thank You for Your Request</h2>
                <p style="margin: 5px 0 0; font-size: 15px; color: #555;">We've received your corporate support request and will get back to you soon</p>
            @endif
        </div>

        <div class="content" style="padding: 10px 4px 20px;">
            @if($isAdmin)
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear Admin,</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">A new corporate support request has been received. Please find the details below:</p>
                <div class="admin-note" style="background-color: #baddfc; border-left: 4px solid #12143e; padding: 12px; margin: 15px 0; font-size: 12px; color: #333;">
                    <strong>New Corporate Inquiry:</strong> Please review this request and respond to the client accordingly.
                </div>
            @else
                <p style="font-size: 12px; margin: 0 0 10px;"><b>Dear {{ $details['full_name'] }},</b></p>
                <p style="font-size: 12px; margin: 0 0 10px;">Thank you for reaching out to Dallas Black Cars for corporate support. We have received your request and appreciate your interest. Our team will review your inquiry and get back to you shortly.</p>
            @endif

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
                    <tr>
                        <td style="font-weight: bold; color: #666; padding: 4px 0;">Phone:</td>
                        <td style="color: #333; padding: 4px 0;"><a href="tel:{{ $details['phone'] }}" style="color: #12143e; text-decoration: none;">{{ $details['phone'] }}</a></td>
                    </tr>
                </table>
            </div>

            {{-- Message --}}
            <div class="message-section" style="background-color: #f8f9fa; border-radius: 4px; margin: 20px 0; border: 1px solid #e0e0e0;">
                <h3 style="background: #12143e; margin: 0; padding: 8px 12px; font-size: 14px; color: #ffffff; border-radius: 4px 4px 0 0;">Request Details</h3>
                <div style="padding: 10px;">
                    <p style="margin: 0; font-size: 12px; color: #333; white-space: pre-wrap; word-wrap: break-word;">{{ $details['message'] }}</p>
                </div>
            </div>

            @if(!$isAdmin)
                <div class="next-steps" style="background-color: #e8f5e9; border-radius: 4px; padding: 12px; margin: 20px 0; border: 1px solid #c8e6c9; font-size: 12px; color: #333;">
                    <p style="margin: 0 0 8px;"><strong>What happens next?</strong></p>
                    <ul style="margin: 0; padding-left: 20px;">
                        <li style="margin: 4px 0;">Our corporate team will review your request</li>
                        <li style="margin: 4px 0;">We'll respond to your email within 24 hours</li>
                        <li style="margin: 4px 0;">You can also reach us at <strong>+1 214-897-8056</strong></li>
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
