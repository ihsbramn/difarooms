<?php
namespace Tests\Unit;
use Tests\TestCase;

class DeleteForumTest extends TestCase
{
    /**
     * @return void
     */
    public function test_delete_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('forum/admin');

        $response = $this->delete('forum/destroy/15');

        // expected result session has success && redirect/302 to 'forum/admin'
        $response
        ->assertSessionHas('success')
        ->assertStatus(302);
    }
}