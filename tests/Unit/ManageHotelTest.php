<?php
namespace Tests\Unit;
use Tests\TestCase;

class ManageHotelTest extends TestCase
{
    /**

     * @return void
     */
    public function test_go_to_kelola_hotel()
    {
        // login as admin
        $response = $this->post('/login', [
            'email' => 'testing2@gmail.com',
            'password' => 'testing432',
        ]);

        // go to manage hotel page
        $response = $this->get('/hotel/admin');

        // expected result 200 OK SUCCSESS
        $response
        ->assertStatus(200);
    }
}
