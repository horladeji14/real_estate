<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiAuthFlowTest extends TestCase
{
    public function test_register_endpoint_is_reachable(): void
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '08000000000',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertTrue(in_array($response->status(), [200, 201, 302, 422]));
    }

    public function test_login_endpoint_is_reachable(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $this->assertTrue(in_array($response->status(), [200, 401, 422]));
    }
}
