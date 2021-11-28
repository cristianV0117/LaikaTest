<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_all_users()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->get('api/v1/users');
        $response->assertStatus(200);
    }

    public function test_get_one_user()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->get('api/v1/users/1');
        $response->assertStatus(200);
    }

    public function test_save_user_empty_x_input()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->post('api/v1/users', [
            "user_name" => "test",
            "first_name" => "",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => "nnn@test.com",
            "cellphone" => "1234567890",
            "password" => "test",
            "country_id" => 2
        ]);
        $response->assertStatus(422);
    }

    public function test_save_user_string_max_size()
    {
        $string = "AAAAAAAAAAAAAAAAAAAAAAAAAAA";
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->post('api/v1/users', [
            "user_name" => $string,
            "first_name" => "",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => "nnn@test.com",
            "cellphone" => "1234567890",
            "password" => "test",
            "country_id" => 2
        ]);
        $response->assertStatus(422);
    }

    public function test_save_user_existing_email()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->post('api/v1/users', [
            "user_name" => "test",
            "first_name" => "test",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => "test@gmail.com",
            "cellphone" => "1234567890",
            "password" => "test",
            "country_id" => 2
        ]);
        $response->assertStatus(422);
    }

    public function test_save_user_bad_email()
    {
        $email = "bademail@test";
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->post('api/v1/users', [
            "user_name" => "test",
            "first_name" => "",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => $email,
            "cellphone" => "1234567890",
            "password" => "test",
            "country_id" => 2
        ]);
        $response->assertStatus(422);
    }

    public function test_save_user()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->post('api/v1/users', [
            "user_name" => "test",
            "first_name" => "test",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => rand(10, 100) . "@gmail.com",
            "cellphone" => "1234567890",
            "password" => "test",
            "country_id" => 2
        ]);
        $response->assertStatus(201);
    }

    public function test_update_user_not_existing_user()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->put('api/v1/users/99999', [
            "user_name" => "test",
            "first_name" => "test",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => rand(1, 100) . "@gmail.com",
            "cellphone" => "1234567890",
            "country_id" => 2
        ]);
        $response->assertStatus(404);
    }

    public function test_update_user_cellphone_max_size()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->put('api/v1/users/99999', [
            "user_name" => "test",
            "first_name" => "test",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => rand(1, 100) . "@gmail.com",
            "cellphone" => "123456789023432432",
            "country_id" => 2
        ]);
        $response->assertStatus(422);
    }

    public function test_update_user()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->put('api/v1/users/2', [
            "user_name" => "test",
            "first_name" => "test",
            "second_name" => "test",
            "first_last_name" => "test",
            "second_last_name" => "test",
            "email" => rand(10, 100) . "@gmail.com",
            "cellphone" => "3028621885",
            "country_id" => 2
        ]);
        $response->assertStatus(200);
    }

    public function test_delete_user()
    {
        $response = $this->withHeaders([
            'Authorization' => $_ENV["API_KEY_LAIKA"]
        ])->delete('api/v1/users/1');
        $response->assertStatus(200);
    }
}
