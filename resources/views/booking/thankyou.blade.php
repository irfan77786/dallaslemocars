@extends('app')
@section('content')

@section('head-scripts')
<style>
#card-element{
    background:transparent !important;
}
    .form-control{
    padding-left:15px !important;
    border:1px solid rgba(0, 0, 0, 0.23) !important;
    
}
    .text-primary{
    color:var(--dark-bg-btn) !important;
}

#payment-form {
    width: 100%;
    margin: 0 auto;
}

button {
    padding: 10px 16px;
    background-color: #5469d4;
    color: white;
    border: none;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background-color: #4254b2;
}
.text-orange{
    color:#f79421;
}

@media screen and (min-width:767px){
    .thankyou-img{
        max-width:500px;
    }
}
</style>
@endsection

<a href="tel:+1888375547" class="float" target="_blank">
    <img src="{{ asset('images/platinum-cls-phone.webp') }}" width="256" height="41" alt="premierCLS Black Car Service">
</a>
<h2 class="fw-bold mb-3 text-primary bg-light text-center p-4">Thank You for Booking with Dallas Black Cars Limo Service</h2>
<div class="container d-flex flex-column justify-content-center text-center">
    <div class="mb-4">
        <img src="{{ asset('images/5b6560a7-d0e0-4187-8504-f3ff1b4d9cb2.png') }}" alt="Driver and Car Illustration" class="img-fluid thankyou-img" >
    </div>
    <h4 class="text-uppercase text-primary mb-2">Reservation Submitted</h4>
    <p class="mb-1 fs-5 text-secondary">
        Your Confirmation Number <span class="text-orange fw-semibold">{{ $booking->booking_id }}</span>
    </p>
    <p class="text-muted">
        Your reservation has been successfully confirmed. We look forward to providing you with a seamless and luxurious travel experience.
    </p>
    <a href="/" class="btn btn-dark mt-4 px-4 py-2">Back to Home</a>
</div>

@endsection