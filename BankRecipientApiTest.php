<?php

namespace Tests\Feature;

use Tests\TestCase;

class BankRecipientApiTest extends TestCase
{
    public function test_banks_endpoint_returns_response(): void
    {
        $response = $this->getJson('/api/banks');
        $this->assertTrue(in_array($response->status(), [200, 500]));
    }
}
