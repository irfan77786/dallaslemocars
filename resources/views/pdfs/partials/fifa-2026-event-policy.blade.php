@include('partials.booking_pdf_section_header', [
    'title' => 'FIFA World Cup 2026 Event Policy (Dallas–Fort Worth Market)',
    'variant' => 'primary',
])
<p style="margin-top: 0;">For all services scheduled between June 13, 2026 through July 15, 2026, the following strict policies apply due to high-demand operations related to the FIFA World Cup 2026:</p>

@include('partials.booking_pdf_section_header', ['title' => 'Special Event Rates (Non-Negotiable)', 'variant' => 'light'])
<p>- All reservations within these dates are subject to FIFA 2026 special event pricing<br>
  - Standard rates, discounts, or previously quoted pricing are void and do not apply<br>
  - Pricing is dynamic and may increase based on demand, logistics, and availability</p>

@include('partials.booking_pdf_section_header', ['title' => 'Mandatory Deposit & Payment Terms', 'variant' => 'light'])
<p>- A 50% non-refundable deposit is required to confirm all FIFA reservations<br>
  - Full balance must be paid no later than 30 days prior to service date<br>
  - Failure to complete payment within required timeframe results in automatic cancellation with forfeiture of deposit</p>

@include('partials.booking_pdf_section_header', ['title' => 'Strict 30-Day Cancellation Policy (No Exceptions)', 'variant' => 'light'])
<p>- All FIFA 2026 bookings are classified as high-demand, non-replaceable inventory<br>
  - Cancellations must be made at least 30 days prior to scheduled service<br>
  - Any cancellation within 30 days of service = 100% of total reservation is immediately non-refundable and fully chargeable<br>
  - This applies regardless of reason, including but not limited to change of plans, flight cancellations or delays, and personal, medical, or business-related issues</p>

@include('partials.booking_pdf_section_header', ['title' => 'No Refund / No Credit Policy', 'variant' => 'light'])
<p>- No refunds, credits, or rescheduling will be issued within the 30-day window<br>
  - Funds collected are allocated toward reserved vehicles, staffing, and event logistics<br>
  - Client expressly agrees that all payments within this period are final and non-disputable</p>

@unless($trimFifaSections ?? false)
@include('partials.booking_pdf_section_header', ['title' => 'Operational & Event Conditions', 'variant' => 'light'])
<p>Service is subject to uncontrollable conditions including road closures, law enforcement restrictions, stadium security perimeters, and traffic congestion. Client acknowledges that timing may be impacted and no refunds or discounts will be issued due to delays outside company control.</p>
@endunless

@include('partials.booking_pdf_section_header', ['title' => 'Minimum Service & Billing Conditions', 'variant' => 'light'])
<p>- Minimum hourly requirements will be enforced based on vehicle type<br>
  - Garage-to-garage billing applies to all FIFA services<br>
  - Additional charges may apply for extended wait time, route changes, parking, tolls, and event access fees</p>

@include('partials.booking_pdf_section_header', ['title' => 'Client Authorization & Chargeback Protection', 'variant' => 'light'])
<p>By confirming a reservation, the client expressly agrees and authorizes pre-authorization and/or full payment charges, enforcement of the 30-day cancellation policy, and charge of full reservation amount for late cancellations or no-shows. Client further agrees that these terms constitute clear advance disclosure, this agreement serves as binding authorization for all charges, and any attempt to dispute valid charges will be supported with this signed policy and service agreement.</p>

@unless($trimFifaSections ?? false)
@include('partials.booking_pdf_section_header', ['title' => 'Acknowledgment of Terms', 'variant' => 'light'])
<p>By booking services during FIFA 2026 dates, the client acknowledges limited availability and high-demand conditions, acceptance of all special event pricing and strict cancellation terms, and understanding that this is a non-flexible, event-specific contract.</p>
@endunless
