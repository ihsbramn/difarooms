<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Testing\File;

class EditForumTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_edit_forum()
    {
        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->get('forum/edit/13');

        $response = $this->put('forum/update/13',[
            'fr_user_id' => '1',
            'fr_author' => 'testing1',
            'fr_title' => 'title edited',
            'fr_body' => 'body edited'
        ]);

        // dd($response);

        // expected result status redirect/302 to 'user/myforum'
        $response
        ->assertStatus(302)
        ->assertRedirect('user/myforum');
    }

    public function test_check_forum_data_after_update_exist_in_db()
    {
        $this->assertDatabaseHas('forums', [
            'fr_title' => 'title edited'
        ]);
    }

    public function test_add_photo(){

        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        // img mockup
        $img = File::image('forum_img.png',400,200);
        $image = file($img);
        
        // // go to edit hotel page
        $response = $this->get('forum/edit/13');

        $response = $this->post('forum_img/store',[
            'ht_id' => 2,
            'images' => $image
        ]);

        // dd($response);
        // expected result success + redirect 'forum/edit/2'
        $response
        ->assertSessionHas('success')      
        ->assertRedirect('forum/edit/13');
    }
}
