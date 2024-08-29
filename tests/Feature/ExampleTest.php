<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function hello_world_should_return_status_success(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
