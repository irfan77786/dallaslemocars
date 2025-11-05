@extends('master')

@section('content')
<!-- Floating Phone Button -->
<a href="tel:+1888375547" class="float" target="_blank">
    <img src="{{ asset('images/platinum-cls-phone.webp') }}" width="256" height="41" alt="premierCLS Black Car Service">
</a>

@include('partials.bookig-top_area')
@include('partials.product_section')
@include('partials.proceed_bar')

@endsection

