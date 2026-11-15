<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactPageTest extends TestCase
{
    public function test_home_page_renders_contact_heading_and_details(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee("We'd Love to Hear From You.", false)
            ->assertSee('123 Coffee Street, Davao City, Philippines')
            ->assertSee('hello@graybrew.example');
    }

    public function test_contact_route_renders_contact_heading_and_details(): void
    {
        $response = $this->get('/contact');

        $response->assertOk()
            ->assertSee("We'd Love to Hear From You.", false)
            ->assertSee('Our Location')
            ->assertSee('Business Hours');
    }

    public function test_contact_page_renders_labeled_message_fields(): void
    {
        $response = $this->get('/contact');

        $response->assertOk()
            ->assertSee('<label for="fullName">Full Name</label>', false)
            ->assertSee('<label for="email">Email Address</label>', false)
            ->assertSee('<label for="subject">Subject</label>', false)
            ->assertSee('<label for="message">Message</label>', false)
            ->assertSee('name="name"', false)
            ->assertSee('name="email"', false)
            ->assertSee('name="subject"', false)
            ->assertSee('type="email"', false)
            ->assertSee('name="message"', false)
            ->assertSee('id="emailError"', false)
            ->assertSee('class="submit-btn"', false)
            ->assertSee('js/contact.js', false);
    }

    public function test_contact_page_loads_its_stylesheet(): void
    {
        $response = $this->get('/contact');

        $response->assertOk()
            ->assertSee('href="'.asset('css/contact.css').'"', false);
    }
}
