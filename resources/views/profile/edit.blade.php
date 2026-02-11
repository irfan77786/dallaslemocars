@extends('layouts.guest')
<style>
    .container-fluid > .row {
        justify-content: center !important;
    }
</style>
@section('guest_data')
    <div class="container-fluid">
        @include('partials.dashboard_tabs')
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">

                            <div class="card mb-4">
                                <h6 class="card-header">Update Profile Information</h6>
                                <div class="card-body">
                                    <form method="post" action="{{ route('profile.update') }}">
                                        @csrf
                                        @method('patch')

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">First Name</label>
                                                <input type="text" name="first_name" class="form-control"
                                                    value="{{ old('first_name', $user->first_name) }}" required
                                                    autocomplete="given-name">
                                                @if ($errors->has('first_name'))
                                                    <small class="text-danger">{{ $errors->first('first_name') }}</small>
                                                @endif
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" name="last_name" class="form-control"
                                                    value="{{ old('last_name', $user->last_name) }}" required
                                                    autocomplete="family-name">
                                                @if ($errors->has('last_name'))
                                                    <small class="text-danger">{{ $errors->first('last_name') }}</small>
                                                @endif
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email', $user->email) }}" required autocomplete="username">
                                            @if ($errors->has('email'))
                                                <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                            <div class="clearfix"></div>
                                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                                <div class="alert alert-warning mt-3 mb-0">
                                                    Your email address is unverified.
                                                    <form id="send-verification" method="post"
                                                        action="{{ route('verification.send') }}" class="d-inline">
                                                        @csrf
                                                        <button class="btn btn-sm btn-outline-warning">Resend verification
                                                            email</button>
                                                    </form>
                                                </div>
                                                @if (session('status') === 'verification-link-sent')
                                                    <small class="text-success d-block mt-2">A new verification link has
                                                        been sent to your email address.</small>
                                                @endif
                                            @endif
                                        </div>

                                        @if (session('status') === 'profile-updated')
                                            <div class="alert alert-success">Saved.</div>
                                        @endif

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <h6 class="card-header">Update Password</h6>
                                <div class="card-body">
                                    <form method="post" action="{{ route('password.update') }}">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" name="current_password" class="form-control"
                                                autocomplete="current-password">
                                            @if ($errors->updatePassword->has('current_password'))
                                                <small
                                                    class="text-danger">{{ $errors->updatePassword->first('current_password') }}</small>
                                            @endif
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label">New Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    autocomplete="new-password">
                                                @if ($errors->updatePassword->has('password'))
                                                    <small
                                                        class="text-danger">{{ $errors->updatePassword->first('password') }}</small>
                                                @endif
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    autocomplete="new-password">
                                                @if ($errors->updatePassword->has('password_confirmation'))
                                                    <small
                                                        class="text-danger">{{ $errors->updatePassword->first('password_confirmation') }}</small>
                                                @endif
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>

                                        @if (session('status') === 'password-updated')
                                            <div class="alert alert-success">Saved.</div>
                                        @endif

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                            <div class="card mb-4">
                                <h6 class="card-header">Delete Account</h6>
                                <div class="card-body">
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteAccountModal">Delete Account</button>
                                </div>
                            </div>

                            <div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog"
                                aria-labelledby="deleteAccountLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteAccountLabel">Confirm Account Deletion</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="{{ route('profile.destroy') }}">
                                            @csrf
                                            @method('delete')
                                            <div class="modal-body">
                                                <p>Once your account is deleted, all of its resources and data will be
                                                    permanently deleted. Please enter your password to confirm.</p>
                                                <div class="form-group">
                                                    <label class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Password">
                                                    @if ($errors->userDeletion->has('password'))
                                                        <small
                                                            class="text-danger">{{ $errors->userDeletion->first('password') }}</small>
                                                    @endif
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Delete Account</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
