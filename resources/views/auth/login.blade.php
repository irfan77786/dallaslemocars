@extends('layouts.guest')

@section('guest_data')

<div class="container d-flex align-items-center justify-content-center" style="min-height: -webkit-fill-available;">
    <div class="card shadow-sm" style="max-width: 420px; width: 100%;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4">{{ __('Login') }}</h3>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success mb-3">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
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

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           name="password" required
                           placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-1">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                    <label class="form-check-label" for="remember_me">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <!-- Submit + Forgot Password -->
                <div>
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none small" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary px-4 w-100 mt-2">
                    {{ __('Log in') }}
                </button>
            </form>

            <p class="text-lg text-center mt-3">OR</p>

            <button class="btn btn-default px-4 w-100" style="border: 1px solid black"><i class="bi bi-google mr-2"></i>Continue with Google</button>
            <button class="btn btn-default px-4 w-100 mt-3" style="border: 1px solid black"><i class="bi bi-facebook mr-1"></i> Continue with Facebook</button>
            <!-- Register Link -->
            @if (Route::has('register'))
                <div class="text-center mt-3">
                    <p class="mb-0 small">
                        {{ __("Don't have an account?") }}
                        <a href="{{ route('register') }}" class="text-primary text-decoration-none">
                            {{ __('Register') }}
                        </a>
                    </p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
