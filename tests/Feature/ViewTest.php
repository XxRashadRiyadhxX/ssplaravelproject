<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * Test if the homepage view contains specific text.
     *
     * @return void
     */
    public function test_homepage_contains_specific_text()
    {
        $response = $this->get('/');

        $response->assertSeeText('Revel Designs');
    }
}

//SubmitContactFormTest.php