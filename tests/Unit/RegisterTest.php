<?php
namespace Tests\Unit;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    // use RefreshDatabase;
    /**
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

        //expected result status directed/302 to root '/'
        $response
        ->assertStatus(302)
        ->assertRedirect('/');
    }

    // check db has user data 
    public function test_check_user_exist_in_db()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'testing1'
        ]);
    }
}
