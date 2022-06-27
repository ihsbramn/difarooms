<?php

namespace Tests\Unit;

use Tests\TestCase;

class PostForumTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('/forum');


        $response = $this->post('/forum/store',[
            'fr_user_id' => '1',
            'fr_author' => 'testing1',
            'fr_title' => 'title',
            'fr_body' => 'body'
        ]);

        // dd($response);

        // expected result status redirect/302 to '/forum'
        $response
        ->assertStatus(302)
        ->assertRedirect('/forum');
    }

    // check data forums on db
    public function test_check_forum_data_exist_in_db()
    {
        $this->assertDatabaseHas('forums', [
            'fr_user_id' => '1'
        ]);
    }
}
