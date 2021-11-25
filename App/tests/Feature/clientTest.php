<?php

namespace Tests\Feature;

use App\Models\Client;
use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

class clientTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_insert_row()
    {
        Client::create([
            'first_name' => 'Aaron',
            'last_name' => 'Foster'
        ]);

        $this->assertTrue(true);
    }
}
