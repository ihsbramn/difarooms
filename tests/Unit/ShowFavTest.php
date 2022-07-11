<?php
namespace Tests\Unit;
use Tests\TestCase;

class ShowFavTest extends TestCase
{
    /**
     * @return void
     */
    public function test_show_fav()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('user/myfavourites');

        // expected result status OK/200
        $response->assertStatus(200);
    }
}