<?php
namespace Tests\Unit;
use Tests\TestCase;

class HotelMenuTest extends TestCase
{
    /**
     * @return void
     */
    public function test_menu_hotel()
    {
        // go to hotel menu
        $response = $this->get('/hotel');

        // expected result status OK / 200
        $response->assertStatus(200);
    }
}
