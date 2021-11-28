<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CountryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_countries()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->get('api/v1/countries');
        $response->assertStatus(200);
    }

    public function test_get_one_country()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->get('api/v1/countries/1');
        $response->assertStatus(200);
    }
}
