<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking Confirmation</title>
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
  <style>
    /* Load the font-face definition */
    @page {
      margin: 0;
    }

    body {
      font-family: 'Abel', 'Helvetica', 'Arial', sans-serif;
      color: #333;
      line-height: 1.48;
      padding: 10px 12px;
      margin: 0;
      font-size: 12px;
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

    .sections.booking-block {
      background-color: #ffffff;
      border: 1px solid #e0e4e8;
      border-radius: 3px;
      margin: 4px 0;
    }

    .sections.booking-block .section-content {
      padding: 8px 8px 4px;
    }

    .pdf-section-header {
      margin-bottom: 8px;
    }

    .section-content .pdf-subsection-header {
      margin: 6px 0 8px;
    }

    .charges-block-end {
      margin-bottom: 0;
      padding-bottom: 0;
    }

    .mian-cc {
      color: #666666;
      font-weight: 700;
    }

    .section-content {
      padding: 0;
      margin: 0;
      line-height: 1.48;
    }

    .section-content p {
      margin: 5px 0;
      line-height: 1.48;
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

    .bottom-policy-content h3 {
      margin-top: 28px;
      font-size: 24px;
      margin-bottom: 15px;
    }

    .row {
      display: table;
      width: 100%;
      table-layout: fixed;
      border-spacing: 0;
    }

    .col-sm-3,
    .col-sm-9 {
      display: table-cell;
      vertical-align: top;
      padding: 4px 8px;
      line-height: 1.48;
      box-sizing: border-box;
    }

    .row + .row .col-sm-3,
    .row + .row .col-sm-9 {
      padding-top: 3px;
    }

    .col-sm-3 {
      width: 25%;
    }

    .no-top-padding {
      padding-top: 0px !important;
    }

    .col-sm-9 {
      width: 75%;
    }

    .section-light {
      margin-bottom: 8px !important;
    }

    .pdf-page-break-before {
      page-break-before: always;
      break-before: page;
    }

  </style>
</head>

<body>
  <div class="container">
    @include('partials.booking_pdf_document_header')

    <div class="sections booking-block">
      @include('partials.booking_pdf_section_header', [
          'title' => 'Booking Confirmation #' . ($bookingData['booking_id'] ?? 'N/A'),
          'variant' => 'primary',
      ])
      <div class="section-content">
          <div style="text-align: right; font-size: 11px; margin-bottom: 4px;">
            <strong>Last Modified On:</strong> {{ now()->format('m/d/Y h:i A') }}
          </div>
            {{-- Pickup Date --}}
            @if(!empty($bookingData['pickup_date']))
            <div class="row">
              <div class="col-sm-3 no-top-padding"><strong class="mian-cc">Pick-up Date:</strong></div>
              <div class="col-sm-9 no-top-padding">
                {{ \Carbon\Carbon::parse($bookingData['pickup_date'])->format('m/d/Y - l') }}
              </div>
            </div>
            @endif

            {{-- Pickup Time --}}
            @if(!empty($bookingData['pickup_time']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Pick-up Time:</strong></div>
              <div class="col-sm-9">{{ \Carbon\Carbon::parse($bookingData['pickup_time'])->format('h:i A') }}</div>
            </div>
            @endif

            {{-- Return Date --}}
            @if(!empty($bookingData['return_date']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Return Date:</strong></div>
              <div class="col-sm-9">{{ \Carbon\Carbon::parse($bookingData['return_date'])->format('m/d/Y - l') }}</div>
            </div>
            @endif

            {{-- Return Time --}}
            @if(!empty($bookingData['return_time']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Return Time:</strong></div>
              <div class="col-sm-9">{{ \Carbon\Carbon::parse($bookingData['return_time'])->format('h:i A') }}</div>
            </div>
            @endif

            {{-- Hours --}}
            @if(!empty($bookingData['hours']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Hours:</strong></div>
              <div class="col-sm-9">{{ $bookingData['hours'] ?? 'N/A' }}</div>
            </div>
            @endif

            {{-- Service Type --}}
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Service Type:</strong></div>
              <div class="col-sm-9">
                @if(!empty($bookingData['hours']))
                Hourly/As Directed
                @else
                To Airport
                @endif
              </div>
            </div>

            {{-- Passenger --}}
            @if(!empty($bookingData['passenger_name']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Passenger:</strong></div>
              <div class="col-sm-9">{{ $bookingData['passenger_name'] }}</div>
            </div>
            @endif

            {{-- Client Ref# --}}
            @if(!empty($bookingData['booking_id']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Client Ref#:</strong></div>
              <div class="col-sm-9">N/A</div>
            </div>
            @endif

            {{-- Phone Number --}}
            @if(!empty($bookingData['phone']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Phone Number:</strong></div>
              <div class="col-sm-9">{{ $bookingData['phone'] }}</div>
            </div>
            @endif

            {{-- No. of Pass --}}
            @if(!empty($bookingData['passengers']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">No. of Pass:</strong></div>
              <div class="col-sm-9">{{ $bookingData['passengers'] }}</div>
            </div>
            @endif

            {{-- Vehicle Type --}}
            @if(!empty($bookingData['vehicle_type']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Vehicle Type:</strong></div>
              <div class="col-sm-9">{{ $bookingData['vehicle_type'] }}</div>
            </div>
            @endif

            {{-- Primary/Billing Contact --}}
            @if(!empty($bookingData['booker_first_name']) || !empty($bookingData['booker_last_name']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Primary/Billing Contact:</strong></div>
              <div class="col-sm-9">{{ trim($bookingData['booker_first_name'] . ' ' . $bookingData['booker_last_name'])
                }}</div>
            </div>
            @endif

            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Passenger Email:</strong></div>
              <div class="col-sm-9">{{ $bookingData['email'] }}</div>
            </div>

            {{-- Payment Method --}}
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Payment Method:</strong></div>
              <div class="col-sm-9">Credit Card</div>
            </div>

        {{-- Booker Info (if booking for others) --}}
        @if(!empty($bookingData['isBookingForOthers']) && ($bookingData['booker_first_name'] ||
        $bookingData['booker_last_name'] || $bookingData['booker_email'] || $bookingData['booker_number']))
          @include('partials.booking_pdf_section_header', ['title' => 'Booker Information', 'variant' => 'light'])
            @if($bookingData['booker_first_name'] || $bookingData['booker_last_name'])
            <div class="row">
              <div class="col-sm-3 no-top-padding"><strong class="mian-cc">Booker Name:</strong></div>
              <div class="col-sm-9 no-top-padding">{{ trim($bookingData['booker_first_name'] . ' ' .
                $bookingData['booker_last_name']) }}</div>
            </div>
            @endif

            @if($bookingData['booker_email'])
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Booker Email:</strong></div>
              <div class="col-sm-9">{{ $bookingData['booker_email'] }}</div>
            </div>
            @endif

            @if($bookingData['booker_number'])
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Booker Phone:</strong></div>
              <div class="col-sm-9">{{ $bookingData['booker_number'] }}</div>
            </div>
            @endif
        @endif

        {{-- Trip Routing Information --}}
        @if(!empty($bookingData['pickup_location']) || !empty($bookingData['dropoff_location']) ||
        !empty($bookingData['hours']))
          @include('partials.booking_pdf_section_header', ['title' => 'Trip Routing Information:', 'variant' => 'light'])
            @if(!empty($bookingData['pickup_location']))
            <div class="row">
              <div class="col-sm-3 no-top-padding"><strong class="mian-cc">Pick-up Location:</strong></div>
              <div class="col-sm-9 no-top-padding">{{ $bookingData['pickup_location'] }}</div>
            </div>
            @endif

            @if(!empty($bookingData['hours']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Stop Location:</strong></div>
              <div class="col-sm-9">STOP AS DIRECTED</div>
            </div>
            @endif

            @if(!empty($bookingData['dropoff_location']))
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Drop-off Location:</strong></div>
              <div class="col-sm-9">{{ $bookingData['dropoff_location'] }}</div>
            </div>
            @endif
        @endif

        @if($bookingData['flight_details'] && $bookingData['flight_details']['flight_number'] &&
        $bookingData['flight_details']['pickup_flight_details'])
          @include('partials.booking_pdf_section_header', ['title' => 'Flight/Airport Information', 'variant' => 'primary'])
            @if($bookingData['flight_details']['flight_number'])
            <div class="row">
              <div class="col-sm-3 no-top-padding"><strong class="mian-cc">Flight Number:</strong></div>
              <div class="col-sm-9 no-top-padding">{{ $bookingData['flight_details']['flight_number'] }}</div>
            </div>
            @endif
            @if($bookingData['flight_details']['pickup_flight_details'])
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Pickup Flight Details:</strong></div>
              <div class="col-sm-9">{{ $bookingData['flight_details']['pickup_flight_details'] }}</div>
            </div>
            @endif
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Meet Option:</strong></div>
              <div class="col-sm-9">{{ $bookingData['flight_details']['meet_option'] ?? 'Not Specified!' }}</div>
            </div>
        @endif

        @if(!empty($bookingData['special_instructions']))
          @include('partials.booking_pdf_section_header', ['title' => 'Notes/Comments:', 'variant' => 'light'])
          <p style="margin: 0;">{{ $bookingData['special_instructions'] }}</p>
        @endif

        {{-- Charges & Fees --}}
        @if(isset($bookingData['total_amount']))
          @include('partials.booking_pdf_section_header', ['title' => 'Charges & Fees:', 'variant' => 'light'])
            <div class="charges-block-end">
            <div class="row">
              <div class="col-sm-3 no-top-padding"><strong class="mian-cc">Fare (All inclusive):</strong></div>
              <div class="col-sm-9 no-top-padding"><strong>${{ number_format($bookingData['total_amount'], 2)
                  }}</strong></div>
            </div>

            {{-- Other Charges --}}
            <div class="row">
              <div class="col-sm-3"><strong class="mian-cc">Other charges:</strong></div>
              <div class="col-sm-9"><strong>$0.00</strong></div>
            </div>

            {{-- Payment Deposits --}}
            <div class="row" style="color: #28a745;">
              <div class="col-sm-3"><strong class="mian-cc">Payment/Deposits:</strong></div>
              <div class="col-sm-9"><strong>$0.00</strong></div>
            </div>

            {{-- Total Amount --}}
            <div class="row" style="color: #dc3545; margin-bottom: 0;">
              <div class="col-sm-3"><strong class="mian-cc">Total Due:</strong></div>
              <div class="col-sm-9"><strong>${{ number_format($bookingData['total_amount'], 2) }}</strong></div>
            </div>
            </div>
        @endif

      @include('partials.booking_pdf_section_header', [
          'title' => 'Cancellation Policy: Cancellation, Deposit & Service Policy',
          'variant' => 'primary',
          'pageBreak' => true,
      ])
        <p style="margin: 4px 0 0;">Dallas Limo Black Crs strives to provide excellent service while maintaining a clear, fair, and simple cancellation, deposit, and service policy. By booking with us, you agree to the following terms.</p>
        <div class="row">
          <div class="col-sm-3"><strong class="mian-cc">Contact:</strong></div>
          <div class="col-sm-9">Email: info@dallaslimoandblackcars.com<br>Phone: +1 214-897-8056</div>
        </div>

        @include('partials.booking_pdf_section_header', ['title' => '1. General Cancellation Policy:', 'variant' => 'light'])
        <p>Cancellations must occur during the stated timeframes for each vehicle type. Cancellations outside these periods will result in full charges for the reserved services.</p>

        @include('partials.booking_pdf_section_header', ['title' => '2. Vehicle-Specific Cancellation Policy:', 'variant' => 'light'])
        <div class="row">
          <div class="col-sm-3 no-top-padding"><strong>Luxury Sedans:</strong></div>
          <div class="col-sm-9 no-top-padding">Cancel at least 24 hours prior. Late cancellations: 100% charge.</div>
        </div>
        <div class="row">
          <div class="col-sm-3"><strong>SUVs:</strong></div>
          <div class="col-sm-9">Cancel at least 24 hours prior. Late cancellations: 100% charge.</div>
        </div>
        <div class="row">
          <div class="col-sm-3"><strong>Luxury Vans:</strong></div>
          <div class="col-sm-9">Cancel at least 72 hours prior. Late cancellations: Full charge applies.</div>
        </div>
        <div class="row">
          <div class="col-sm-3"><strong>Mini Buses:</strong></div>
          <div class="col-sm-9">Cancel at least 7 days prior. Late cancellations: Full charge applies.</div>
        </div>
        <div class="row">
          <div class="col-sm-3"><strong>Motor Coaches:</strong></div>
          <div class="col-sm-9">Cancel at least 7 days prior. Late cancellations: Full charge including any deposits.</div>
        </div>

        @include('partials.booking_pdf_section_header', ['title' => '3. Deposit Policy:', 'variant' => 'light'])
        <p>- 50% non-refundable deposit due shortly of signing the agreement.<br>
          - Final payment due at least 7 days before the reservation date.<br>
          - Written notice required for cancellations as per policy.<br>
          - If proper notice is not given, all payments are non-refundable.<br>
          - Credit card authorization form required for all bookings.</p>

        @include('partials.booking_pdf_section_header', ['title' => '4. Alcohol and Illegal Substances:', 'variant' => 'light'])
        <p>- Alcohol permitted only for passengers 21 and older.<br>
          - Illegal substances strictly prohibited. Immediate cancellation with no refund.<br>
          - Smoking is not allowed in any vehicle.</p>

        @include('partials.booking_pdf_section_header', ['title' => '5. Damage To Vehicle:', 'variant' => 'light'])
        <p>The client is responsible for any damage caused by passengers, including:<br>
          - Spills or stains needing special cleaning<br>
          - Burns, tears, or physical damage to interior/exterior<br>
          - Loss of revenue due to vehicle being out of service<br>
          Minimum charge for damage or cleaning is $250. Additional fees may apply.</p>

        @include('partials.booking_pdf_section_header', ['title' => '6. Force Majeure:', 'variant' => 'light'])
        <p>We are not liable for interruptions or cancellations due to events beyond our control (e.g., weather, disasters, terrorism, mechanical issues). We will attempt to reschedule or refund (minus non-refundable costs).</p>

        @include('partials.booking_pdf_section_header', ['title' => '7. Indemnification:', 'variant' => 'light'])
        <p>By booking, you agree to indemnify and hold Dallas Limo Black Crs harmless for any claims arising from:<br>
          - Your use of services<br>
          - Policy violations<br>
          - Damage caused by you or your party</p>

        @include('partials.booking_pdf_section_header', ['title' => '8. Wait Time Policy:', 'variant' => 'light'])
        <div class="row">
          <div class="col-sm-3 no-top-padding"><strong>Airport Transfers:</strong></div>
          <div class="col-sm-9 no-top-padding">30-minute grace period (domestic), 60 minutes (international). After that: $15 per 15 minutes.</div>
        </div>
        <div class="row">
          <div class="col-sm-3"><strong>Point-to-Point & Hourly:</strong></div>
          <div class="col-sm-9">15-minute grace period. After that: $15 per 15 minutes.</div>
        </div>

        @include('partials.booking_pdf_section_header', ['title' => '9. No-Show Policy:', 'variant' => 'light'])
        <p>No-shows are charged the full booking amount. Clients must confirm pickup details and stay in contact.</p>

        @include('partials.booking_pdf_section_header', ['title' => '10. Special Event Policies:', 'variant' => 'light'])
        <p>- Events (weddings, concerts, etc.) require 14-day cancellation notice.<br>
          - 50% deposit required to confirm reservation.<br>
          - No refund if cancelled within 14 days of the event.</p>

        @include('partials.booking_pdf_section_header', ['title' => '11. Refund Policy:', 'variant' => 'light'])
        <p>- Approved refunds are processed within 5–7 business days.<br>
          - No refunds for Motor Coaches, Mini Buses, or Special Events after cancellation window closes.</p>

        @include('pdfs.partials.fifa-2026-event-policy', ['trimFifaSections' => $trimFifaSections ?? false])

        <p style="margin: 8px 0 0;"><strong>Thank you for choosing Dallas Limo Black Crs.</strong><br>
          We are committed to fair and professional service.<br>
          Contact us: info@dallaslimoandblackcars.com | +1 214-897-8056</p>
      </div>
    </div>

    <footer style="margin-top: 10px; padding-top: 8px; border-top: 1px solid #e0e4e8; text-align: center; font-size: 11px; color: #666;">
      <p style="margin: 4px 0;">Questions about your booking? +1 214-897-8056 | info@dallaslimoandblackcars.com</p>
    </footer>
  </div>
</body>

</html>