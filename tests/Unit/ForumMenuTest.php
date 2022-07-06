<?php

namespace Tests\Unit;

use Tests\TestCase;

class ForumMenuTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_forum_menu()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('/forum');



        // expected result status OK/200
        $response->assertStatus(200);
    }
}
