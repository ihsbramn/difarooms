<?php

namespace Tests\Unit;

use Illuminate\Testing\Assert;
use Tests\TestCase;

class HotelMenuTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_menu_hotel()
    {

        // go to hotel menu
        $response = $this->get('/hotel');

        // dd($response);

        // expected result status OK / 200
        $response->assertStatus(200);
    }
}
