<?php

namespace Tests\Unit;

use Tests\TestCase;

class DeleteForumTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_delete_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('forum/admin');

        $response = $this->delete('forum/destroy/19');

        // dd($response);


        // expected result status redirect/302 to 'forum/admin'
        $response->assertStatus(302);
    }

}
