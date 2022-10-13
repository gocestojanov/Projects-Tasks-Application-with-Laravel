<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_route_exists()
    {
        $response = $this->get('/');



        $response->assertViewIs('welcome');


        $data = $response->getOriginalContent()->getData();
        // dd($data);

        $response->assertOk();


        $response->assertViewHas([
            'title' => 'Project Tasks App',
        ]);

    }
}
