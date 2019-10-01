<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function test_it_loads_about_page()
    {
        $this->get('/about')->assertSee('About');
    }
}
