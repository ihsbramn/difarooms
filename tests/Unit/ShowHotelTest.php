<?php
namespace Tests\Unit;
use Tests\TestCase;

class ShowHotelTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * @return void
     */
    public function test_show_hotel()
    {

        // go to specific hotel id
        $response = $this->get('hotel/show/100');

        // expected result status OK / 200
        $response->assertStatus(200);
    }
}