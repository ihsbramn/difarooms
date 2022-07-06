<?php

namespace Tests\Unit;

use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowHotelTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_show_hotel()
    {
        // $response = $this->get('hotel/show/100');

        // go to specific hotel id
        $response = $this->get('hotel/show/100');

        // dd($response->getStatusCode());

        // expected result status OK / 200
        $response->assertStatus(200);
    }
}
