<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * Class AuthenticateUserTest
 * @package Tests\Feature
 */
class AuthenticateUserTest extends TestCase
{
    use RefreshDatabase;
    use DatabaseMigrations;
    use WithFaker;
    protected $password = "secret";

    /**
     * A user registration test.
     *
     * @return void
     */
//    public function test_user_registration()
//    {
//        $name = $this->faker->name();
//        $email = $this->faker->email;
//
//        $this->postJson('api/v1/auth/register', [
//            'name' => $name,
//            'email' => $email,
//            'password' => $this->password,
//            'password_confirmation' => $this->password
//        ],
//            ['Accept' => 'application/json']
//        )
//            ->assertStatus(201)
//            ->assertExactJson([
//            'message' => "Successfully created user!",
//        ]);
//
//    }
}
