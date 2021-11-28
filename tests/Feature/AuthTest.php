<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_unauthorized_empty_api_key_with_users()
    {
        $response = $this->get('api/v1/users');

        $response->assertStatus(400);
    }

    public function test_unauthorized_bad_api_key_with_users()
    {
        $response = $this->withHeaders([
            'Authorization' => "bad"
        ])->get('api/v1/users');
        $response->assertStatus(401);
    }

    public function test_unauthorized_empty_api_key_with_countries()
    {
        $response = $this->get('api/v1/users');

        $response->assertStatus(400);
    }

    public function test_unauthorized_bad_api_key_with_countries()
    {
        $response = $this->withHeaders([
            'Authorization' => "bad"
        ])->get('api/v1/users');
        $response->assertStatus(401);
    }
}
