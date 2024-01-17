<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test successful user create.
     */
    public function testSuccessCreate(): void
    {
        $user = [
            'name' => 'Gabriel Nascimento',
            'email' => 'test_api_user_success@gmail.com',
            'password' => '123456',
            'password_confirmation' => '123456'
        ];

        $response = $this->postJson('/api/users', $user);

        unset($user["password"], $user["password_confirmation"]);

        $response->assertStatus(Response::HTTP_OK)
            ->assertJson($user);
    }

    /**
     * Test required user name.
     */
    public function testRequiredName(): void
    {
        $user = [
            'email' => 'test_api_user_fail@gmail.com',
            'password' => '123456',
            'password_confirmation' => '123456'
        ];

        $response = $this->postJson('/api/users', $user);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->assertJsonValidationErrors('name');
    }

}
