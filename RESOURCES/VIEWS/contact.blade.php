@extends('layouts.app')

@section('title', 'Contact Us | Gray Brew Coffee Shop')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

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

        <div class="contact-form-container">
            <h2 id="contact-form-heading">Send Us a Message</h2>
            <p>Fill out the form below and let us know how we can help.</p>

            <div id="successMessage" class="success-message" role="status" aria-live="polite">
                Your form has been validated successfully! This is a demonstration only; no message was sent.
            </div>

            <form id="contactForm" aria-labelledby="contact-form-heading" novalidate>
                <div class="form-group">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="name" autocomplete="name" aria-describedby="nameError" aria-invalid="false" placeholder="Enter your full name">
                    <small class="error-message" id="nameError" aria-live="polite"></small>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" autocomplete="email" aria-describedby="emailError" aria-invalid="false" placeholder="Enter your email address">
                    <small class="error-message" id="emailError" aria-live="polite"></small>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" aria-describedby="subjectError" aria-invalid="false" placeholder="Enter your subject">
                    <small class="error-message" id="subjectError" aria-live="polite"></small>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" aria-describedby="messageError" aria-invalid="false" placeholder="Write your message here..."></textarea>
                    <small class="error-message" id="messageError" aria-live="polite"></small>
                </div>

                <button type="submit" class="submit-btn">Submit Message</button>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush
