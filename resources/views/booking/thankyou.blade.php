@extends('master')
@section('content')

@section('styles')
<style>
.thankyou-wrapper{padding:120px 0 40px}
.thankyou-card{max-width:760px;margin:0 auto;background:#fff;border-radius:12px;padding:32px; padding-top: 0px !important;}
.success-icon{width:56px;height:56px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:#e7f3f7;color:#1A6982;font-size:28px;margin-bottom:16px}
.thankyou-subtitle{font-size:18px;color:#6c757d}
.thankyou-img{border-radius:10px}
@media (min-width:767px){.thankyou-img{max-width:520px}}
</style>
@endsection

<div class="thankyou-wrapper">
    <div class="container">
        <div class="thankyou-card text-center">
            <h2 class="fw-bold mb-2 text-primary"><i class="bi bi-check-circle-fill"></i> Reservation Submitted</h2>
            <p class="thankyou-subtitle mb-3">Your confirmation number <strong class="text-primary">{{ $booking->booking_id }}</strong></p>

            <div class="d-flex flex-column align-items-center mb-4">
                <img src="{{ asset('assets/img/site/black-car-service.webp') }}" alt="Black Car Service" class="img-fluid thankyou-img" />
            </div>

            <p class="text-secondary mb-4">Your reservation has been successfully confirmed. We look forward to providing you with a seamless and luxurious travel experience.</p>

            <a href="{{ route('booking') }}" class="btn btn-primary btn-lg px-4">Back to Home</a>
        </div>
    </div>
</div>

@endsection
