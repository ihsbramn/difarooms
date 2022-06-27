<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\Testing\File;

class EditHotelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_edit_hotel()
    {
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // // go to edit hotel page
        $response = $this->get('/hotel/edit/100');
        
        // img mockup
        $img = File::image('hotel_test.jpg',400,200);

        // edit hotel test
        $response = $this->put('hotel/update/100',[
            'ht_name' => 'Hotel_test_edited',
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

        // expected result success +  redirect to '/hotel/admin'
        $response
        ->assertSessionHas('success')
        ->assertRedirect('/hotel/admin');
    }

    // checkin data has been updated on database
    public function test_data_hotel_after_update_exist_in_db()
    {
        $this->assertDatabaseHas('hotels', [
            'ht_name' => 'Hotel_test_edited'
        ]);
    }

    public function test_add_photo(){

        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // img mockup
        $img = File::image('hotel_test.png',400,200);
        $image = file($img);
        
        // // go to edit hotel page
        $response = $this->get('/hotel/edit/100');

        $response = $this->post('hotel_img/store',[
            'ht_id' => 100,
            'images' => $image
        ]);

        // expected result success + redirect to current pages
        $response
        ->assertSessionHas('success')      
        ->assertRedirect('/hotel/edit/100');
    }

    public function test_add_fascilities(){

        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);
        
        // // go to edit hotel page
        $response = $this->get('/hotel/edit/100');

        $response = $this->post('hotel_fascility/store',[
            'ht_id'=> 100,
            'ramp'=> 1,
            'antarjemput'=> 1,
            'akses_kursiroda'=> 1,
            'toilet_pegangan'=> 1,
            'parkir_difabel'=> 1,
            'bantuan_staff'=> 1,
            'pusat_kesehatan'=> 1,
            'wifi'=> 1,
            'kamarmandi_luas'=> 1,
            'jalan_pemandu'=> 1,
            'lift_aksesibel'=> 1,
            'ac'=> 1,
            'restoran'=> 1,
            'laundry'=> 1,
            'ruang_tunggu_tamu'=> 1,
            'cctv'=> 1,
            'resepsionis_24jam'=> 1,
            'kolam_renang'=> 1,
            'pemadam_api'=> 1,
            'pusat_kebugaran'=> 1,
            'mini_bar'=> 1,
            'masjid'=> 1,
            'wastafel_rendah'=> 1,
            'kloset_rendah'=> 1,
        ]);

        // expected result success + redirect to current pages
        $response
        ->assertSessionHas('success')      
        ->assertRedirect('/hotel/edit/100');
    }

    public function test_add_roomtype(){
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // img mockup
        $img = File::image('hotel_test.png',400,200);
        
        // // go to edit hotel page
        $response = $this->get('/hotel/edit/100');

        $response = $this->post('hotel_roomtype/store',[
            'ht_id' => 100,
            'name_roomtype' => 'hotelTest',
            'description' => 'hotelTest',
            'name' => $img
        ]);

        // dd($response->getSession());

        // expected result success + redirect to current pages
        $response
        ->assertSessionHas('success')      
        ->assertRedirect('/hotel/edit/100');
    }


}
