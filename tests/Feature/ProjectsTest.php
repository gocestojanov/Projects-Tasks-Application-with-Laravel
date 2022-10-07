<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_user_can_create_project()
    {

        $this->withExceptionHandling();

        # given
        // $user = User::newFactory()->create();
        $this->actingAs(User::factory()->create());
        # when
        $this->post('/projects',[
            'title' => 'First Project'
        ]);
        # then
        $this->assertDatabaseHas('projects',[
            'title' => 'Magic Milk Experiment 4'

        ]);

    }
}
