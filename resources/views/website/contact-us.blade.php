@extends('master')
@section('content')
@include('partials.search_form')
<section class="bg-gray py-50 py-sm-60 py-md-70 py-lg-80">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="mb-20 text-center col-12 col-lg-11 col-xl-10 mb-md-30 mb-lg-40">
                <h2 class="h2 fw-bold mb-15 mb-sm-20 mb-lg-30">Contact us</h2>
                <p class="font-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11 col-xl-10">
                @if ($message = session('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-20" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if ($message = session('error'))
                    <div class="alert alert-danger alert-dismissible fade show mb-20" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('contact_us_post') }}" method="post" class="px-20 bg-white contact-us-form px-sm-30 py-30">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-15">
                            <label for="full_name" class="mb-1 form-label fw-medium">Full Name</label>
                            <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" placeholder="Full Name" required>
                            @error('full_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-15">
                            <label for="email" class="mb-1 form-label fw-medium">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                placeholder="Your email address" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mb-15">
                            <label for="phone" class="mb-1 form-label fw-medium">Phone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Your phone number" required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="message" class="mb-1 form-label fw-medium">Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required></textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-15">
                            <p class="mb-2 font-sm">
                                Do you agree to receive texts from Dallas Black Cars Limo
                                Service (+1 214-897-8056)? Messages may include reservation
                                reminders/updates. Msg &amp; data rates may apply. Reply STOP
                                to unsubscribe or HELP for support.</p>
                            <div class="pl-0 mt-2 form-check d-flex">
                                <input class="flex-shrink-0 ml-0 form-check-input @error('sms_consent') is-invalid @enderror" 
                                    type="checkbox" id="sms_consent"
                                    name="sms_consent" value="1" style="margin-left: 0;" required>
                                <label class="form-check-label small d-inline-block ms-2" for="sms_consent"
                                    style="margin-top: -2px;">
                                    Yes, I agree to receive text messages from Dallas Black
                                    Cars Service sent from (+1 214-897-8056).
                                </label>
                            </div>
                            @error('sms_consent')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary fw-bold" id="submitBtn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="pt-50 pb-25 pt-sm-60 pb-sm-35 pt-md-70 pb-md-40">
    <div class="ah-container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/phone.svg') }}" alt="Driver" class="img-fluid">
                    </span>
                    <h3 class="h3 fw-semibold">Call or Text Us</h3>
                    <p>Have an urgent question or need to confirm a pickup? <br>
                        <strong class="fw-semibold">Phone: </strong>
                        <a class="fw-bold font-lg theme-color" style="word-break: break-all;"
                            href="tel:+12148978056">+1
                            214-897-8056</a>
                    </p>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/email.svg') }}" alt="Confirmation" class="img-fluid">
                    </span>
                    <h3 class="h3 fw-semibold">Email Us</h3>
                    <p>
                        For special requests, corporate account setup, wedding/event quotes, or Sprinter/Mini
                        Bus bookings: <br>
                        <strong>Email:</strong>
                        <span class="single-line-ellipses w-100 d-inline-block"
                            style="max-width: 296px;vertical-align: middle;">
                            <a class="fw-bold font-lg"
                                href="mailto:info@dallaslimoandblackcars.com">info@dallaslimoandblackcars.com
                            </a>
                        </span>
                    </p>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/24-hours.svg') }}" alt="Booking" class="img-fluid">
                    </span>
                    <h3 class="h4 fw-semibold">Operating Hours</h3>
                    <p>We operate 24/7 including all major holidays. <br> You can count on us
                        for early-morning airport pickups or late-night returns. </p>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/pointer.svg') }}" alt="Booking" class="img-fluid">
                    </span>
                    <h3 class="h4 fw-semibold">Business Address</h3>
                    <address>
                        <p>Dallas Black Cars Service 200 Crescent Court Dallas, Texas 75201
                        </p>
                    </address>
                </article>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-25 mb-md-30 d-flex">
                <article class="custom-card d-flex flex-column w-100">
                    <span class="mb-20 icon-holder">
                        <img src="{{ asset('new_assets/assets/document.svg') }}" alt="Booking" class="img-fluid">
                    </span>
                    <h3 class="h4 fw-semibold">Booking Options</h3>
                    <address>
                        <p class="font-base">
                            You can also book online instantly: <br>
                            <a class="font-base" href="#">Book Online Now</a>,
                            <a class="font-base" href="#">Get a Custom Quote</a>,
                            <a class="font-base" href="#">Explore Our Fleet</a>
                            </ul>
                        </p>
                    </address>
                </article>
            </div>
        </div>
    </div>
</section>
@include('partials.testimonials')
@include('partials.faq')

@section('scripts')
<script>
// Show success/error alerts if messages exist
@if (session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector('.contact-us-form').reset();
        }
    });
@endif

@if (session('error'))
    Swal.fire({
        title: 'Error!',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonColor: '#d33',
        confirmButtonText: 'OK'
    });
@endif
</script>
@endsection

@endsection
