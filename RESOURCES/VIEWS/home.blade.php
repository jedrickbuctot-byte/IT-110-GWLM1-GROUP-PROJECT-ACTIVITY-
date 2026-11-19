
@extends('layouts.app')

@section('title', 'Home | Gray Brew Coffee Shop')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- HERO CAROUSEL -->
<section class="hero">

    <div class="hero-slide active"
         style="background-image: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)), url('https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1800');">
    </div>

    <div class="hero-slide"
         style="background-image: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)), url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1800');">
    </div>

    <div class="hero-slide"
         style="background-image: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)), url('https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=1800');">
    </div>

    <div class="hero-content">

        <span class="hero-label">WELCOME TO GRAY BREW</span>

        <h1>A Better Day Begins With <span>Coffee.</span></h1>

        <p>
            Discover the perfect blend of rich flavors,
            freshly brewed coffee, and relaxing moments.
        </p>

        <div class="hero-buttons">
            <a href="#featured" class="btn btn-primary">Explore Our Coffee</a>
            <a href="{{ route('contact') }}" class="btn btn-outline">Contact Us</a>
        </div>

    </div>

    <button class="slider-btn prev" id="prevSlide" aria-label="Previous slide">❮</button>
    <button class="slider-btn next" id="nextSlide" aria-label="Next slide">❯</button>

    <div class="slider-dots" id="sliderDots">
        <button class="dot active" data-slide="0" aria-label="Slide 1"></button>
        <button class="dot" data-slide="1" aria-label="Slide 2"></button>
        <button class="dot" data-slide="2" aria-label="Slide 3"></button>
    </div>

</section>

<!-- INTRODUCTION -->
<section class="intro section-padding">

    <span class="section-label">THE GRAY BREW EXPERIENCE</span>

    <h2>Good Coffee. <span>Good Moments.</span></h2>

    <p>
        At Gray Brew, every cup tells a story. We believe coffee is
        more than a daily routine. It is an experience worth enjoying.
        From carefully selected beans to every freshly prepared cup,
        we make every moment special.
    </p>

</section>

<!-- FEATURED COFFEE -->
<section class="featured section-padding" id="featured">

    <div class="section-heading">
        <div>
            <span class="section-label">OUR SELECTION</span>
            <h2>Featured <span>Coffee</span></h2>
        </div>

        <p>Made with passion. Served with perfection.</p>
    </div>

    <div class="coffee-grid">

        <div class="coffee-card">
            <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=700" alt="Cappuccino coffee">

            <div class="coffee-info">
                <h3>Cappuccino</h3>
                <p>Rich espresso topped with steamed milk and a smooth layer of foam.</p>
                <div class="coffee-price">
                    <span>₱120</span>
                    <a href="{{ route('contact') }}">Inquire Now →</a>
                </div>
            </div>
        </div>

        <div class="coffee-card">
            <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=700" alt="Caramel latte">

            <div class="coffee-info">
                <h3>Caramel Latte</h3>
                <p>A creamy espresso drink with smooth milk and sweet caramel flavor.</p>
                <div class="coffee-price">
                    <span>₱145</span>
                    <a href="{{ route('contact') }}">Inquire Now →</a>
                </div>
            </div>
        </div>

        <div class="coffee-card">
            <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=700" alt="Americano coffee">

            <div class="coffee-info">
                <h3>Americano</h3>
                <p>A classic espresso blended with hot water for a bold taste.</p>
                <div class="coffee-price">
                    <span>₱100</span>
                    <a href="{{ route('contact') }}">Inquire Now →</a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- WHY CHOOSE US -->
<section class="why-section section-padding">

    <div class="why-image">
        <img src="https://images.unsplash.com/photo-1445116572660-236099ec97a0?w=1000" alt="Gray Brew coffee shop interior">
    </div>

    <div class="why-content">

        <span class="section-label">WHY GRAY BREW?</span>

        <h2>Crafted With Care, <span>Served With Love.</span></h2>

        <p>
            We bring together quality ingredients, skilled preparation,
            and a welcoming environment to create a coffee experience
            you'll want to return to.
        </p>

        <div class="why-item">
            <div class="why-icon">01</div>
            <div>
                <h3>Quality Coffee Beans</h3>
                <p>Carefully selected beans for rich and satisfying flavors.</p>
            </div>
        </div>

        <div class="why-item">
            <div class="why-icon">02</div>
            <div>
                <h3>Freshly Prepared</h3>
                <p>Every beverage is prepared fresh for every customer.</p>
            </div>
        </div>

        <div class="why-item">
            <div class="why-icon">03</div>
            <div>
                <h3>Comfortable Atmosphere</h3>
                <p>A relaxing space where great coffee meets great moments.</p>
            </div>
        </div>

    </div>

</section>

<!-- PROMOTION -->
<section class="promo">

    <div>
        <span class="section-label">YOUR NEXT COFFEE MOMENT</span>
        <h2>Take a Break. Make It a Coffee Break.</h2>
        <p>Visit Gray Brew and discover your new favorite cup.</p>

        <a href="{{ route('contact') }}" class="btn btn-primary">
            Get In Touch
        </a>
    </div>

</section>

@endsection

@push('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endpush
