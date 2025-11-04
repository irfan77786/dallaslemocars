@extends('master')
@section('content')

<a href="tel:+1888375547" class="float" target="_blank">
    <img src="{{ asset('images/platinum-cls-phone.webp') }}" width="256" height="41" alt="premierCLS Black Car Service">
</a>

@include('partials.bookig-top_area')

<div class="container p-info-margin">
    <div class="row align-items-start">
        <div class="col-md-6 mb-4">
            <img src="{{ asset('images/black-car-service.webp') }}" alt="Passenger Info" class="img-fluid rounded w-100 shadow-sm">
        </div>

        <div class="col-md-6">
            <h5 class="mb-3">Passenger Details</h5>
            <form id="passengerForm" method="POST" action="{{ url('/submit-passengerInfo/' . $id) }}">
                @csrf
                @method('POST')

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-text-container">
                            <div class="input-group-container mb-1">
                                <div class="icon-container"><i class="bi bi-person-fill"></i></div>
                                <div class="input-text-container">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', session('first_name')) }}" placeholder="Enter your first name" autocomplete="given-name" required>
                                    </div>
                                    <div class="text-danger small mt-1" id="error_first_name"></div>
                                    @error('first_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <div class="input-text-container">
                            <div class="input-group-container mb-1">
                                <div class="icon-container"><i class="bi bi-person-fill"></i></div>
                                <div class="input-text-container">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', session('last_name')) }}" placeholder="Enter your last name" autocomplete="family-name" required>
                                    </div>
                                    <div class="text-danger small mt-1" id="error_last_name"></div>
                                    @error('last_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-text-container">
                        <div class="input-group-container mb-1">
                            <div class="icon-container"><i class="bi bi-envelope-fill"></i></div>
                            <div class="input-text-container">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', session('email')) }}" placeholder="Enter your email" autocomplete="email" required>
                                </div>
                                <div class="text-danger small mt-1" id="error_email"></div>
                                @error('email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-text-container">
                        <div class="input-group-container mb-1">
                            <div class="icon-container"><i class="bi bi-telephone-fill"></i></div>
                            <div class="input-text-container">
                                <label for="number" class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <input type="tel" class="form-control" id="number" name="number" value="{{ old('number', session('number')) }}" placeholder="Enter your phone number" autocomplete="tel" required>
                                </div>
                                <div class="text-danger small mt-1" id="error_number"></div>
                                @error('number')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group form-check mb-3 pt-2 pl-1 d-flex">
                    <input type="hidden" name="bookingForSomeoneElse" value="0">
                    <input type="checkbox" class="" id="bookingForSomeoneElse" name="bookingForSomeoneElse" value="1"
                        {{ old('bookingForSomeoneElse', session('bookingForSomeoneElse')) == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="bookingForSomeoneElse">Are you booking for someone else?</label>
                </div>

                <div id="bookerDetails" style="display:{{session('bookingForSomeoneElse') == '1' ? 'block':'none'}} ;">
                    <h5 class="mb-3">Booker Details</h5>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="input-text-container">
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-person-fill"></i></div>
                                    <div class="input-text-container">
                                        <label for="booker_first_name" class="form-label">Booker's First Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="booker_first_name" name="booker_first_name" value="{{ old('booker_first_name', session('booker_first_name')) }}" autocomplete="given-name" placeholder="Enter booker's first name">
                                        </div>
                                        <div class="text-danger small mt-1" id="error_booker_first_name"></div>
                                        @error('booker_first_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="input-text-container">
                                <div class="input-group-container mb-1">
                                    <div class="icon-container"><i class="bi bi-person-fill"></i></div>
                                    <div class="input-text-container">
                                        <label for="booker_last_name" class="form-label">Booker's Last Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="booker_last_name" name="booker_last_name" value="{{ old('booker_last_name', session('booker_last_name')) }}" autocomplete="family-name" placeholder="Enter booker's last name">
                                        </div>
                                        <div class="text-danger small mt-1" id="error_booker_last_name"></div>
                                        @error('booker_last_name')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


    <div class="form-group">
                        <div class="input-text-container">
                            <div class="input-group-container mb-1">
                                <div class="icon-container"><i class="bi bi-envelope-fill"></i></div>
                                <div class="input-text-container">
                                    <label for="booker_email" class="form-label">Booker's Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="booker_email" name="booker_email" value="{{ old('booker_email', session('booker_email')) }}" autocomplete="email" placeholder="Enter booker's email">
                                    </div>
                                    <div class="text-danger small mt-1" id="error_booker_email"></div>
                                    @error('booker_email')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-text-container">
                            <div class="input-group-container mb-1">
                                <div class="icon-container"><i class="bi bi-telephone-fill"></i></div>
                                <div class="input-text-container">
                                    <label for="booker_number" class="form-label">Booker's Phone Number</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" id="booker_number" name="booker_number" value="{{ old('booker_number', session('booker_number')) }}" autocomplete="tel" placeholder="Enter booker's phone number">
                                    </div>
                                    <div class="text-danger small mt-1" id="error_booker_number"></div>
                                    @error('booker_number')<div class="text-danger small mt-1">{{ $message }}</div>@enderror
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <button type="submit" class="btn btn-primary w-100 search_btn mt-3">CONTINUE TO PAYMENT</button>
            </form>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('passengerForm');
        const bookingCheckbox = document.getElementById('bookingForSomeoneElse');
        const bookerDetails = document.getElementById('bookerDetails');

        document.getElementById('bookingForSomeoneElse').addEventListener('change', function() {
            bookerDetails.style.display = this.checked ? 'block' : 'none';
        });

        bookingCheckbox.addEventListener('change', function() {
            bookerDetails.style.display = this.checked ? 'block' : 'none';
        });

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

            if (bookingCheckbox.checked) {
                const bookerFields = ['booker_first_name', 'booker_last_name', 'booker_number', 'booker_email'];
                bookerFields.forEach(name => {
                    const input = document.getElementsByName(name)[0];
                    const errorEl = document.getElementById(`error_${name}`);
                    if (!input.value.trim()) {
                        errorEl.innerText = 'This field is required.';
                        isValid = false;
                    } else if (name === 'booker_email' && !/^\S+@\S+\.\S+$/.test(input.value)) {
                        errorEl.innerText = 'Enter a valid email address.';
                        isValid = false;
                    }
                });
            }

            if (!isValid) {
                e.preventDefault(); // Stop form submission
            }else{
                $('#loader').show();
            }
        });
    });
</script>
@endsection
