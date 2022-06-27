<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Testing\File;

class PostHotelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_hotel()
    {
        // login as admin
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // // go to create hotel page
        $response = $this->get('/hotel/create');

        // img mockup
        $img = File::image('hotel_test.jpg',400,200);

        // store data hotel
        $response = $this->post('/hotel/admin',[
            'ht_name' => 'Hotel_test',
            'ht_key' => 'Hotel_test',
            'ht_address' => 'Hotel_test',
            'ht_description' => 'Hotel_test',
            'ht_thumbnail' => $img,
            'ht_path' => 'Hotel_test',
            'ht_urlvideo' => 'Hotel_test',
            'ht_accesible' => 'Hotel_test',
            'ht_contact' => 'Hotel_test',
            'ht_embedmaps' => 'link_embedmaps',
            'ht_latitude' => '1234',
            'ht_longitude' => '1234',
            'ht_author' => 'Hotel_test',
        ]);

        // dd($response);

        // expected result is redirecting to '/hotel/admin'
        $response->assertRedirect('/hotel/admin');
    }

    // testing data exist in db
    public function test_data_hotel_exist_in_db()
    {
        $this->assertDatabaseHas('hotels', [
            'ht_name' => 'Hotel_test'
        ]);
    }
}
