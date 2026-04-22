<?php

namespace Tests\Feature;

use Tests\TestCase;

class PropertyApiTest extends TestCase
{
    public function test_public_properties_endpoint_returns_response(): void
    {
        $response = $this->getJson('/api/properties');
        $response->assertStatus(200);
    }

    public function test_nearby_properties_endpoint_returns_response(): void
    {
        $response = $this->getJson('/api/properties-nearby?lat=8.5&lng=4.55&radius_km=25');
        $this->assertTrue(in_array($response->status(), [200, 422]));
    }
}
