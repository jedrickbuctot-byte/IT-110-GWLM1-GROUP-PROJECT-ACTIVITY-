
@extends('layouts.app')

@section('title', 'About Us | Gray Brew Coffee Shop')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<!-- ABOUT HERO -->
<section class="about-hero">

    <div>
        <span>GET TO KNOW US</span>
        <h1>Our Story, Our Passion.</h1>
        <p>
            Every cup has a story. Discover the passion behind
            every brew at Gray Brew Coffee Shop.
        </p>
    </div>

</section>

@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}" defer></script>
@endpush
