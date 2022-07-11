<?php
namespace Tests\Unit;
use Tests\TestCase;

class ManageForumTest extends TestCase
{
    /**
     * @return void
     */
    public function test_manage_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('forum/admin');
        
        // expected result status code OK/200 
        $response->assertStatus(200);
    }
}