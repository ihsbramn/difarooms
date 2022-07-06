<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class DeleteHotel extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_delete_data_hotel()
    {
         // login as admin
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // go to manage hotel page
        $response = $this->get('/hotel/admin');

        // dd($response->getContent());

        $last_id_db = DB::table('hotels')->latest()->first();

        $id = json_decode($last_id_db->id);

        // dd($id);

        // $url = 'hotel/destroy' + $id ;

        // dd($url);

        // dd($id);
        // delete hotel record
        $response = $this->delete('hotel/destroy/114');

        // dd($response);

        // expected result succsess with OK / 200 Status 
        // $response
        // ->assertStatus(200);

        // expected result session success and redirect to '/hotel/admin'
        $response
        ->assertSessionHas('success')
        ->assertRedirect('/hotel/admin');

    }
}
