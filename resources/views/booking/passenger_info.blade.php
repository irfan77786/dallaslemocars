@extends('master')
@section('content')

<a href="tel:+1888375547" class="float" target="_blank">
    <img src="{{ asset('images/platinum-cls-phone.webp') }}" width="256" height="41" alt="premierCLS Black Car Service">
</a>

@php
    $step = 3;
@endphp

@include('partials.bookig-top_area')

<style>
.passenger-info-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 15px 20px 100px 20px; /* Reduced top padding */
}

.info-card {
    background: #fff;
    border-radius: 8px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.section-title {
    font-size: 18px;
    font-weight: 500;
    color: #1E1E1E;
    margin-bottom: 18px;
}

.form-row-custom {
    display: flex;
    gap: 12px;
    margin-bottom: 0;
}

.form-row-custom > div {
    flex: 1;
}

.input-group-container {
    margin-bottom: 12px;
}

.input-group-container label {
    display: block;
    font-size: 13px;
    color: #666;
    margin-bottom: 5px;
    font-weight: 400;
}

.input-group-container input {
    width: 100%;
    padding: 9px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.input-group-container input:focus {
    outline: none;
    border-color: #1A6982;
}

.continue-btn {
    width: 100%;
    padding: 11px;
    background: #fff;
    border: 2px solid #1E1E1E;
    color: #1E1E1E;
    font-size: 14px;
    font-weight: 500;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s;
    margin-top: 12px;
}

.continue-btn:hover {
    background: #1E1E1E;
    color: #fff;
}

.benefits-section {
    background: #fff;
    border-radius: 8px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.benefits-title {
    font-size: 16px;
    font-weight: 500;
    color: #1E1E1E;
    margin-bottom: 12px;
}

.benefit-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
    color: #666;
    font-size: 13px;
}

.benefit-item i {
    color: #1A6982;
    margin-right: 8px;
    margin-top: 2px;
    font-size: 14px;
    flex-shrink: 0;
}

.login-section {
    margin-top: 20px;
    padding-top: 18px;
    border-top: 1px solid #e0e0e0;
}

.login-title {
    font-size: 16px;
    font-weight: 500;
    color: #1E1E1E;
    margin-bottom: 12px;
}

.login-btn {
    width: 100%;
    padding: 11px;
    background: #1A6982;
    border: none;
    color: #fff;
    font-size: 14px;
    font-weight: 500;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.3s;
}

.login-btn:hover {
    background: #145570;
}

@media (max-width: 768px) {
    .form-row-custom {
        flex-direction: column;
        gap: 0;
    }

    .info-card, .benefits-section {
        padding: 20px;
    }

    .passenger-info-container {
        padding-bottom: 20px;
    }
}
</style>

<div class="passenger-info-container">
    <div class="row">
        <!-- Left Column: Guest Form -->
        <div class="col-lg-6 mb-4">
            <div class="info-card">
                <h2 class="section-title">Continue as Guest</h2>
                <form id="passengerForm" method="POST" action="{{ url('/submit-passengerInfo/' . $id) }}">
                    @csrf
                    @method('POST')

                    <!-- Email -->
                    <div class="input-group-container">
                        <label for="email">Email address *</label>
                        <input type="email" id="email" name="email" value="{{ old('email', session('email')) }}" placeholder="Enter your email" autocomplete="email" required>
                        <div class="text-danger small mt-1" id="error_email"></div>
                    </div>

                    <!-- First Name & Last Name -->
                    <div class="form-row-custom">
                        <div>
                            <div class="input-group-container">
                                <label for="first_name">First name *</label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name', session('first_name')) }}" placeholder="Enter your first name" autocomplete="given-name" required>
                                <div class="text-danger small mt-1" id="error_first_name"></div>
                                @error('first_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>
                        <div>
                            <div class="input-group-container">
                                <label for="last_name">Last name *</label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name', session('last_name')) }}" placeholder="Enter your last name" autocomplete="family-name" required>
                                <div class="text-danger small mt-1" id="error_last_name"></div>
                                @error('last_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="input-group-container">
                        <label for="number">Phone *</label>
                        <input type="tel" id="number" name="number" value="{{ old('number', session('number')) }}" placeholder="+1 (888) 346-9886" autocomplete="tel" required>
                        <div class="text-danger small mt-1" id="error_number"></div>
                        @error('number')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>

                    <!-- Hidden fields for booking for someone else -->
                    <input type="hidden" name="bookingForSomeoneElse" value="0">
                    <input type="hidden" id="booker_first_name" name="booker_first_name" value="">
                    <input type="hidden" id="booker_last_name" name="booker_last_name" value="">
                    <input type="hidden" id="booker_email" name="booker_email" value="">
                    <input type="hidden" id="booker_number" name="booker_number" value="">

                    <button type="submit" class="continue-btn d-md-none">CONTINUE AS GUEST</button>
                </form>
            </div>
        </div>

        <!-- Right Column: Login/Account Benefits -->
        <div class="col-lg-6 mb-4">
            <div class="benefits-section">
                <h2 class="section-title">Login or Create account</h2>

                <!-- Login Form -->
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Login Email Input -->
                    <div class="input-group-container">
                        <label for="email_login">Email address</label>
                        <input type="email" id="email_login" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
                        @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>

                    <!-- Login Password Input -->
                    <div class="input-group-container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        @error('password')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="login-btn">Login</button>
                </form>

                <!-- Benefits Section -->
                <div class="login-section">
                    <h3 class="benefits-title">Why do I need an account?</h3>

                    <div class="benefit-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Book rides even faster using stored account details.</span>
                    </div>

                    <div class="benefit-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Modify trip details.</span>
                    </div>

                    <div class="benefit-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Access invoices and payment receipts.</span>
                    </div>

                    <div class="benefit-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Reporting tools.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.proceed_bar')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('passengerForm');

        form.addEventListener('submit', function(e) {
            let isValid = true;

            document.querySelectorAll('.text-danger').forEach(el => el.innerHTML = '');

            const requiredFields = ['first_name', 'last_name', 'email', 'number'];
            requiredFields.forEach(name => {
                const input = document.getElementsByName(name)[0];
                const errorEl = document.getElementById(`error_${name}`);
                if (!input.value.trim()) {
                    errorEl.innerText = 'This field is required.';
                    isValid = false;
                } else if (name === 'email' && !/^\S+@\S+\.\S+$/.test(input.value)) {
                    errorEl.innerText = 'Enter a valid email address.';
                    isValid = false;
                }
            });

            if (!isValid) {
                e.preventDefault();
            } else {
                if (typeof $ !== 'undefined' && $('#loader').length) {
                    $('#loader').show();
                }
            }
        });
    });
</script>
@endsection
