<?php
namespace Tests\Unit;
use Tests\TestCase;

class MapHotelTest extends TestCase 
{
    /**
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