<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserDeleteForumTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_user_delete_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('user/myforum');

        $response = $this->delete('forum/destroy/20');

        // dd($response);


        // expected result status redirect/302 to 'forum/admin'
        $response
        ->assertStatus(302)
        ->assertRedirect('user/myforum');
    }
}
