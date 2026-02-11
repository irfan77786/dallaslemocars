<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $details['name'] }} Contacted Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Abel', 'Helvetica', 'Arial', sans-serif; line-height: 1.6; color: #333333; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div class="container" style="max-width: 600px; margin: 0 auto; padding: 12px; background-color: #ffffff;">
        <div class="header" style="padding: 20px 10px; text-align: center;">
            <img src="{{ asset('/img/black-car-service-dallas-logo.png') }}" alt="Company Logo" style="max-width: 250px; margin-bottom: 10px; height: auto;">
            <h2 style="margin: 0; font-size: 22px; color: #222;">New Contact Message</h2>
            <p style="margin: 5px 0 0; font-size: 15px; color: #555;">Details of the inquiry:</p>
        </div>
        <div class="content" style="padding: 10px 5px 20px;">
            <p style="font-size: 14px; margin: 0 0 10px;"><b>Name:</b> {{ $details['name'] }}</p>
            <p style="font-size: 14px; margin: 0 0 10px;"><b>Email:</b> <a href="mailto:{{ $details['email'] }}" style="color: #333333;">{{ $details['email'] }}</a></p>
            
            <p style="font-size: 14px; margin: 15px 0 5px;"><strong>Message:</strong></p>
            
            <div style="background-color: #f8f9fa; border-radius: 4px; padding: 10px; margin-bottom: 20px; border: 1px solid #e1e1e1;">
                <p style="margin: 0; font-size: 15px; color: #333;">{{ $details['message'] }}</p>
            </div>
        </div>
        <div class="footer" style="text-align: center; padding: 20px 10px; font-size: 13px; color: #777; border-top: 1px solid #e1e1e1;">
            <p style="margin: 0 0 5px;">Sent from Dallas Black Cars website.</p>
            <p style="margin: 0; font-size: 11px;">This is an automated message.</p>
        </div>
    </div>
</body>
</html>