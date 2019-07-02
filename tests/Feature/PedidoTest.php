<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PedidoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testBasicExample()
    {
        $response = $this->withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])
            ->post('/api/pedido', ['produtos' =>[1 => 1] ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'message' => 'Sucesso!',
            ]);
    }
}
