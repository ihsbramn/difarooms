<?php

namespace Tests\Unit;

use Tests\TestCase;

class ManageHotelTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_kelola_hotel_pages()
    {
        // login as admin
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // go to manage hotel page
        $response = $this->get('/hotel/admin');

        // dd($response);

        // expected result 200 OK SUCCSESS
        $response->assertStatus(200);
    }
}
