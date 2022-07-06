<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class RegisterTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_register()
    {
        // insert data user
        $response = $this->post('/register', [
            'name' => 'testing1',
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
            'password_confirmation' => 'testing432'
        ]);

        //expected result got directed to root '/'
        $response->assertRedirect('/');
    }

    public function test_check_user_exist_in_db()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'testing1'
        ]);
    }
}
