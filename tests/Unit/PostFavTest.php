<?php
namespace Tests\Unit;
use Tests\TestCase;

class PostFavTest extends TestCase
{
    /**
     * @return void
     */
    public function test_post_favourites()
    {
        $response = $this->post('/login', [
            'email' => 'testing1@gmail.com',
            'password' => 'testing432',
        ]);

        $response = $this->post('/favourites/store',[
            'fv_user_id' => '1',
            'fv_hotel_id' => '100',
            'fv_hotel_name' => 'Hotel_test_edited',
            'fv_count' => '1',
        ]);

        // expected result session has success && redirecting back / 302
        $response
        ->assertSessionHas('success')
        ->assertStatus(302);
    }

    // check fav data is exist in db 
    public function test_check_favourites_data_exist_in_db()
    {
        $this->assertDatabaseHas('favourites', [
            'fv_hotel_name' => 'Hotel_test_edited'
        ]);
    }
}
