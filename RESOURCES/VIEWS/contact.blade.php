@extends('layouts.app')

@section('title', 'Contact Us | Gray Brew Coffee Shop')

@section('content')
    <section class="contact-hero" aria-labelledby="contact-heading">
        <div>
            <p class="section-label">LET'S CONNECT</p>
            <h1 id="contact-heading">We'd Love to Hear From You.</h1>
            <p>Have a question or simply want to say hello? We'd be happy to hear from you.</p>
        </div>
    </section>

    <section class="contact-section" aria-labelledby="contact-details-heading">
        <div class="contact-details">
            <p class="section-label">GET IN TOUCH</p>
            <h2 id="contact-details-heading">Let's Start a Conversation.</h2>
            <p class="contact-intro">
                Feel free to reach out to us. We're always happy to assist with your questions and inquiries.
            </p>

            <address class="contact-information">
                <div class="detail-item">
                    <h3>Our Location</h3>
                    <p>123 Coffee Street, Davao City, Philippines</p>
                </div>

                <div class="detail-item">
                    <h3>Phone Number</h3>
                    <p><a href="tel:+639000000000">+63 900 000 0000 (Sample Number)</a></p>
                </div>

                <div class="detail-item">
                    <h3>Email Address</h3>
                    <p><a href="mailto:hello@graybrew.example">hello@graybrew.example</a></p>
                </div>

                <div class="detail-item">
                    <h3>Business Hours</h3>
                    <p>Monday - Saturday: 8:00 AM - 9:00 PM</p>
                    <p>Sunday: 9:00 AM - 6:00 PM</p>
                </div>
            </address>
        </div>
    </section>
@endsection
