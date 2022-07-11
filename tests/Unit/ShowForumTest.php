<?php
namespace Tests\Unit;
use Tests\TestCase;

class ShowForumTest extends TestCase
{
    /**
     * @return void
     */
    public function test_show_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('forum/show/13');

        $response->assertStatus(200);

    }
}