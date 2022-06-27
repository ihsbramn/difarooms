<?php

namespace Tests\Unit;

use Tests\TestCase;

class PostCommentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_comment()
    {
        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('forum/show/13');

        $response = $this->post('comment/store',[
            'cm_user_id' => '1',
            'cm_forum_id' => '13',
            'cm_author' => 'testing1',
            'cm_body' => 'body comment testing 1'
        ]);

        // dd($response, $response->getStatusCode());

        // expected result status redirect/302 to 'forum/show/2'
        $response
        ->assertStatus(302)
        ->assertRedirect('forum/show/13');
    }

    public function test_check_comment_exist_in_db()
    {
        $this->assertDatabaseHas('comments', [
            'cm_body' => 'body comment testing 1'
        ]);
    }
}
