<?php

namespace Tests\Unit;

use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_admin()
    {
        // post user data
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        //expected result directed to root as admin '/admin'
        $response->assertRedirect('/admin');

    }

    public function test_login_user()
    {
        // post user data
        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        //expected result directed to root as user '/'
        $response->assertRedirect('/');

    }
}
