<?php

namespace Tests\Unit;

use Tests\TestCase;
use PHPUnit\Framework\DOMTestCase;


class MapHotelTest extends TestCase 
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_map_hotel()
    {
        // go to specific hotel id
        $response = $this->get('hotel/show/100');

        // expected result status OK/200 && see iframe data 'link_embedmaps'
        $response
        ->assertStatus(200)
        ->assertSee('link_embedmaps');
    }
}
