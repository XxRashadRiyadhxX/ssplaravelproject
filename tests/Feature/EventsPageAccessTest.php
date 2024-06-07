<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventsPageAccessTest extends TestCase
{
    /** @test */
    public function it_loads_the_events_page_without_errors()
    {
        // Make a GET request to the events page
        $response = $this->get('/events'); // Assuming '/events' is the route for the events page

        // Assert that the request was successful
        $response->assertStatus(200);
    }
}
