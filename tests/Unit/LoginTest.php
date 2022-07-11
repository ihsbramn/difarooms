<?php
namespace Tests\Unit;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * @return void
     */

    public function test_login_admin()
    {
        // post user data
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        //expected result status directed/302 to root as user '/admin'
        $response
        ->assertStatus(302)
        ->assertRedirect('/admin');
    }

    public function test_login_user()
    {
        // post user data
        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        //expected result status directed/302 to root as user '/'

        $response
        ->assertStatus(302)
        ->assertRedirect('/');
    }
}
