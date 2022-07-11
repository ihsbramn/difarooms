<?php
namespace Tests\Unit;
use Tests\TestCase;

class DeleteHotel extends TestCase
{
    /**
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

        $response = $this->delete('hotel/destroy/117');

        $response
        ->assertSessionHas('success')
        ->assertRedirect('/hotel/admin');

    }
}
