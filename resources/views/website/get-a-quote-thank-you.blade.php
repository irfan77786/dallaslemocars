@extends('master')

@section('content')
    <style>
        .quote-thank-you-page {
            min-height: calc(100vh - 120px);
            display: flex;
            align-items: center;
        }

        .quote-thank-you-card {
            max-width: min(1120px, 96vw);
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 18px 48px rgba(0, 0, 0, 0.22), 0 4px 14px rgba(0, 0, 0, 0.12);
        }

        .quote-thank-you-inner {
            position: relative;
            min-height: clamp(380px, 58vh, 560px);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2.75rem 1.5rem;
        }

        @media (min-width: 768px) {
            .quote-thank-you-inner {
                padding: 4rem 3rem;
                min-height: clamp(460px, 62vh, 640px);
            }
        }

        .quote-thank-you-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .quote-thank-you-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.58);
        }

        .quote-thank-you-content {
            position: relative;
            z-index: 2;
            max-width: 640px;
            margin: 0 auto;
        }

        .quote-thank-you-title {
            font-size: clamp(2.15rem, 5.5vw, 3.1rem);
            font-weight: 800;
            letter-spacing: -0.02em;
            color: #fff;
            margin-bottom: 1.25rem;
            line-height: 1.15;
        }

        .quote-thank-you-text {
            color: rgba(255, 255, 255, 0.96);
            font-size: 1.05rem;
            line-height: 1.55;
            margin-bottom: 0.5rem;
        }

        .quote-thank-you-text:last-of-type {
            margin-bottom: 2rem;
        }

        @media (min-width: 768px) {
            .quote-thank-you-text:last-of-type {
                margin-bottom: 2.5rem;
            }
        }

        .quote-thank-you-btn {
            display: inline-block;
            padding: 0.85rem 2.75rem;
            border-radius: 999px;
            border: none;
            font-weight: 600;
            font-size: 1rem;
            color: #fff !important;
            text-decoration: none !important;
            background: linear-gradient(180deg, #e6c65c 0%, #c9a227 45%, #a67c00 100%);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.35), inset 0 1px 0 rgba(255, 255, 255, 0.25);
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .quote-thank-you-btn:hover {
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .quote-thank-you-btn:active {
            transform: translateY(0);
        }
    </style>

    <section class="quote-thank-you-page bg-gray py-50 py-sm-60 py-md-70">
        <div class="ah-container">
            <div class="quote-thank-you-card">
                <div class="quote-thank-you-inner">
                    <div class="quote-thank-you-bg"
                         style="background-image: url('https://www.dallaslimoandblackcars.com/new_assets/assets/fleet-img.webp');"
                         role="img"
                         aria-label="Luxury black car fleet"></div>
                    <div class="quote-thank-you-overlay" aria-hidden="true"></div>
                    <div class="quote-thank-you-content">
                        <h1 class="quote-thank-you-title">Thank You!</h1>
                        <p class="quote-thank-you-text mb-0">Your request has been successfully submitted.</p>
                        @if(session('quote_number'))
                            <p class="quote-thank-you-text mb-0">Your quote reference number is <strong>{{ session('quote_number') }}</strong>.</p>
                        @endif
                        <p class="quote-thank-you-text">Our team will contact you shortly.</p>
                        <a href="{{ url('/') }}" class="quote-thank-you-btn">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
