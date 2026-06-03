{{-- Same header as resources/views/emails/booking.blade.php --}}
<div style="text-align: center; padding: 20px 10px; border-bottom: 1px solid #eeeeee; margin-bottom: 16px;">
    @include('partials.pdf_logo_image', ['logoWidth' => 250])
    <div style="margin: 10px 0 0; font-size: 22px; color: #e52c43; font-weight: 600;">Booking Confirmation</div>
    <div style="margin: 5px 0 0; font-size: 15px; color: #555555;">Your reservation has been confirmed!</div>
</div>
