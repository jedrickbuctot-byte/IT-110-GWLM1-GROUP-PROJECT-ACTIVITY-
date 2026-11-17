
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

<!-- OUR STORY -->
<section class="story-section">

    <div class="story-image">
        <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?w=1000"
             alt="Coffee shop interior">
    </div>

    <div class="story-content">

        <span class="section-label">OUR BACKGROUND</span>

        <h2>A Little Coffee Shop With A <span>Big Passion.</span></h2>

        <p>
            Gray Brew was created from a simple idea: to make every
            coffee moment meaningful. What started as a shared love
            for coffee grew into a welcoming space where people
            can connect, relax, and enjoy quality beverages.
        </p>

        <div id="moreStory" class="more-story">

            <p>
                Our concept combines modern simplicity with a warm
                coffee shop atmosphere. We focus on carefully selected
                ingredients, thoughtful preparation, and friendly service.
            </p>

            <p>
                At Gray Brew, we believe that a good cup of coffee
                can make an ordinary day feel special. Whether you
                are meeting friends, working, or simply taking a break,
                we want every visit to be worth remembering.
            </p>

        </div>

        <button id="readMoreBtn" class="read-btn"
                aria-expanded="false" aria-controls="moreStory">
            Read More +
        </button>

    </div>

</section>

<!-- MISSION AND VISION -->
<section class="mission-section">

    <div class="mission-heading">
        <span class="section-label">WHAT WE BELIEVE</span>
        <h2>Our Mission & <span>Vision</span></h2>
    </div>

    <div class="mission-grid">

        <div class="mission-card">
            <div class="mission-icon">✦</div>
            <h3>Our Mission</h3>
            <p>
                To serve quality coffee and create a welcoming
                environment where every customer feels valued,
                comfortable, and inspired.
            </p>
        </div>

        <div class="mission-card">
            <div class="mission-icon">◈</div>
            <h3>Our Vision</h3>
            <p>
                To become a trusted coffee destination known for
                excellent beverages, memorable experiences,
                and genuine customer connections.
            </p>
        </div>

    </div>

</section>

@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}" defer></script>
@endpush
