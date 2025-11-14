@extends('layouts.guest')

@section('guest_data')

<div class="container d-flex align-items-center justify-content-center" style="min-height: -webkit-fill-available;">
    <div class="card shadow-sm" style="max-width: 420px; width: 100%;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4">{{ __('Forgot Password') }}</h3>

            <p class="text-muted small mb-4">
                {{ __('Forgot your password? No problem. Just enter your email and we will send you a password reset link.') }}
            </p>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success mb-3">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autofocus
                           placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Email Password Reset Link') }}
                </button>

                <!-- Back to login -->
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="text-decoration-none small">
                        ← {{ __('Back to Login') }}
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
