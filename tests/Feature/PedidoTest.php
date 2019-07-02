<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PedidoTest extends TestCase
{

    public function testStorePedido201()
    {
        $response = $this->withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])
            ->post('/api/pedido', [
                'solicitante' => 'teste1',
                'endereco' => 'endereço1',
                'despachante' => 'despachante1',
                'situacao' => 'd',
                'produtos' => [1 => 1]
            ]
        );

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Sucesso!',
            ])
            ->assertJsonStructure(['message']);
    }

    public function testUpdatePedido200()
    {
        $response = $this->withHeaders(['Content-Type' => 'application/x-www-form-urlencoded'])
            ->put('/api/pedido/1', [
                'solicitante' => 'teste2',
                'endereco' => 'endereço2',
                'despachante' => 'despachante12',
                'situacao' => 'd',
                'produtos' => [1 => 2]
            ]
        );

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Sucesso!',
            ])
            ->assertJsonStructure(['message']);
    }
}
