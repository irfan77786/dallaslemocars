<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cancellation Policy</title>
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <style>
    /* Load the font-face definition */
    @page { margin: 0; }
    body {
      font-family: 'Abel', 'Helvetica', 'Arial', sans-serif;
      color: #333;
      line-height: 1.5;
      padding: 15px;
      margin: 0;
      font-size: 13px;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 1px solid #eee;
    }
    .logo img {
      max-height: 60px;
    }
    .header-info {
      text-align: right;
    }
    .contact {
      font-size: 12px;
      color: #666;
    }
    .section {
      margin-bottom: 25px;
      background: #fff;
      border: 1px solid #e0e0e0;
      border-radius: 5px;
      overflow: hidden;
    }
    .section h2 {
      background: #9e7c1e !important;
      margin: 0;
      padding: 7px 15px;
      font-size: 16px;
      color: #ffffff;
      letter-spacing: 0.7px;
      border-bottom: 1px solid #e0e0e0;
    }
    .section-content {
      padding: 15px;
    }
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 15px;
      padding: 20px;
    }
    .info-item {
      display: flex;
      flex-direction: column;
    }
    .label {
      font-size: 13px;
      font-weight: 700;
      color: #666;
      margin-bottom: 3px;
    }
    .value {
      font-size: 13px;
      font-weight: 500;
      color: #333;
    }
    .status-confirmed {
      color: #28a745;
      font-weight: 600;
    }
    .status-pending {
      color: #ffc107;
      font-weight: 600;
    }
    .status-cancelled {
      color: #dc3545;
      font-weight: 600;
    }
    .total-amount {
      font-size: 16px;
      font-weight: 600;
      color: #333;
    }
    .payment-method {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .payment-method img {
      width: 30px;
      height: 20px;
      object-fit: contain;
    }
  </style>
</head>

<body>
  <div class="container">
    <header style="width: 100%; display: table; margin-bottom: 20px;">
      <div style="display: table-row;">
        <div style="display: table-cell; vertical-align: middle; width: 62%;">
          @php
            $logoUrl = 'https://dallaslimoandblackcars.com/img/black-car-service-dallas-logo.webp';
            $context = stream_context_create(['ssl' => ['verify_peer' => false, 'verify_peer_name' => false]]);
            $logoData = base64_encode(file_get_contents($logoUrl, false, $context));
          @endphp
          <img src="data:image/png;base64,{{ $logoData }}" alt="Logo" style="height: 60px;" />
        </div>
        <div style="text-align: right;">
          <div style="font-size: 12px; text-align: left;">
            <div style="font-weight: bold; font-size: 12px;">Dallas Limo And Black Cars Service</div>
            <div>100 Crescent Court, 7th Floor</div>
            <div>Dallas, TX 75201</div>
            <div><strong>Phone:</strong>&nbsp;+1 (214) 305-8671</div>
            <div><strong>Email:</strong>&nbsp;info@dallaslimoandblackcars.com</div>
            <div><strong>Website:</strong>&nbsp;www.dallaslimoandblackcars.com</div>
          </div>
        </div>
      </div>
    </header>
    <div class="section">
      <h2>Cancellation, Deposit & Service Policy</h2>
      <div class="section-content">
        <p><strong>Cancellation, Deposit & Service Policy</strong><br>
          Dallas Limo And Black Cars Service strives to provide excellent service while maintaining a clear, fair, and simple cancellation, deposit, and service policy. By booking with us, you agree to the following terms.</p>

        <p><strong>Contact:</strong><br>
          Email: info@dallaslimoandblackcars.com<br>
          Phone: +1 (214) 305-8671</p>

        <p><strong>1. General Cancellation Policy:</strong><br>
          Cancellations must occur during the stated timeframes for each vehicle type. Cancellations outside these periods will result in full charges for the reserved services.</p>

        <p><strong>2. Vehicle-Specific Cancellation Policy:</strong><br>
          - <strong>Sedans and Luxury Sedans:</strong> Cancel at least 24 hours prior. Late cancellations: 100% charge.<br>
          - <strong>SUVs:</strong> Cancel at least 24 hours prior. Late cancellations: 100% charge.<br>
          - <strong>Mercedes Sprinters and Luxury Vans:</strong> Cancel at least 72 hours prior. Late cancellations: Full charge applies.<br>
          - <strong>Mini Buses:</strong> Cancel at least 7 days prior. Late cancellations: Full charge applies.<br>
          - <strong>Motor Coaches:</strong> Cancel at least 7 days prior. Late cancellations: Full charge including any deposits.</p>

        <p><strong>3. Deposit Policy:</strong><br>
          - 50% non-refundable deposit due within 24 hours of signing the agreement.<br>
          - Final payment due at least 7 days before the reservation date.<br>
          - Written notice required for cancellations as per policy.<br>
          - If proper notice is not given, all payments are non-refundable.<br>
          - Credit card authorization form required for all bookings.</p>

        <p><strong>4. Alcohol and Illegal Substances:</strong><br>
          - Alcohol permitted only for passengers 21 and older.<br>
          - Illegal substances strictly prohibited. Immediate cancellation with no refund.<br>
          - Smoking is not allowed in any vehicle.</p>

        <p><strong>5. Damage To Vehicle:</strong><br>
          The client is responsible for any damage caused by passengers, including:<br>
          - Spills or stains needing special cleaning<br>
          - Burns, tears, or physical damage to interior/exterior<br>
          - Loss of revenue due to vehicle being out of service<br>
          Minimum charge for damage or cleaning is $250. Additional fees may apply.</p>

        <p><strong>6. Force Majeure:</strong><br>
          We are not liable for interruptions or cancellations due to events beyond our control (e.g., weather, disasters, terrorism, mechanical issues). We will attempt to reschedule or refund (minus non-refundable costs).</p>

        <p><strong>7. Indemnification:</strong><br>
          By booking, you agree to indemnify and hold Dallas Limo And Black Cars Service harmless for any claims arising from:<br>
          - Your use of services<br>
          - Policy violations<br>
          - Damage caused by you or your party</p>

        <p><strong>8. Wait Time Policy:</strong><br>
          - <strong>Airport Transfers:</strong> 30-minute grace period (domestic), 60 minutes (international). After that: $15 per 15 minutes.<br>
          - <strong>Point-to-Point & Hourly:</strong> 15-minute grace period. After that: $15 per 15 minutes.</p>

        <p><strong>9. No-Show Policy:</strong><br>
          No-shows are charged the full booking amount. Clients must confirm pickup details and stay in contact.</p>

        <p><strong>10. Special Event Policies:</strong><br>
          - Events (weddings, concerts, etc.) require 14-day cancellation notice.<br>
          - 50% deposit required to confirm reservation.<br>
          - No refund if cancelled within 14 days of the event.</p>

        <p><strong>11. Refund Policy:</strong><br>
          - Approved refunds are processed within 5–7 business days.<br>
          - No refunds for Motor Coaches, Mini Buses, or Special Events after cancellation window closes.</p>

        <p><strong>Thank you for choosing Dallas Limo And Black Cars Service.</strong><br>
          We are committed to fair and professional service.<br>
          Contact us: info@dallaslimoandblackcars.com | +1 (214) 305-8671</p>

      </div>
    </div>

    <footer style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee; text-align: center; font-size: 12px; color: #666;">
    <p>Thank you for choosing Dallas Black Car Service. If you have any questions about your booking, please contact our customer support.</p>
    <p>214-897-8056 | info@dallaslimoandblackcars.com</p>
  </footer>
  </div>
</body>
</html>
