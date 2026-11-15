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
}
