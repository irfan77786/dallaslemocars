@extends('master')

@section('content')
    <style>
        .booking-thank-you-page {
            min-height: calc(100vh - 120px);
            display: flex;
            align-items: center;
        }

        .booking-thank-you-card {
            max-width: min(1120px, 96vw);
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 18px 48px rgba(0, 0, 0, 0.22), 0 4px 14px rgba(0, 0, 0, 0.12);
        }

        .booking-thank-you-inner {
            position: relative;
            min-height: clamp(380px, 58vh, 560px);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2.75rem 1.5rem;
        }

        @media (min-width: 768px) {
            .booking-thank-you-inner {
                padding: 4rem 3rem;
                min-height: clamp(460px, 62vh, 640px);
            }
        }

        .booking-thank-you-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .booking-thank-you-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.58);
        }

        .booking-thank-you-content {
            position: relative;
            z-index: 2;
            max-width: 640px;
            margin: 0 auto;
        }

        .booking-thank-you-title {
            font-size: clamp(2.15rem, 5.5vw, 3.1rem);
            font-weight: 800;
            letter-spacing: -0.02em;
            color: #fff;
            margin-bottom: 1.25rem;
            line-height: 1.15;
        }

        .booking-thank-you-text {
            color: rgba(255, 255, 255, 0.96);
            font-size: 1.05rem;
            line-height: 1.55;
            margin-bottom: 0.5rem;
        }

        .booking-thank-you-confirmation {
            display: inline-block;
            margin-top: 0.25rem;
            margin-bottom: 0.5rem;
            padding: 0.5rem 1.25rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            color: #fff;
            font-size: 1.05rem;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .booking-thank-you-confirmation strong {
            color: #e6c65c;
            font-weight: 700;
        }

        .booking-thank-you-text:last-of-type {
            margin-bottom: 2rem;
        }

        @media (min-width: 768px) {
            .booking-thank-you-text:last-of-type {
                margin-bottom: 2.5rem;
            }
        }

    </style>

    <section class="booking-thank-you-page bg-gray py-50 py-sm-60 py-md-70">
        <div class="ah-container">
            <div class="booking-thank-you-card">
                <div class="booking-thank-you-inner">
                    <div class="booking-thank-you-bg"
                         style="background-image: url('{{ asset('new_assets/assets/fleet-img.webp') }}');"
                         role="img"
                         aria-label="Luxury black car fleet"></div>
                    <div class="booking-thank-you-overlay" aria-hidden="true"></div>
                    <div class="booking-thank-you-content">
                        <h1 class="booking-thank-you-title">Thank You!</h1>
                        <p class="booking-thank-you-text mb-0">Your reservation has been successfully confirmed.</p>
                        <p class="booking-thank-you-confirmation">Confirmation # <strong>{{ $booking->booking_id }}</strong></p>
                        <p class="booking-thank-you-text">We look forward to serving you. Check your email for booking details.</p>
                        <a href="{{ url('/') }}" class="btn btn-primary">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
