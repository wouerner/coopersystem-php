<?php

use Illuminate\Database\Seeder;
use App\PedidoProduto;

class PedidoProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedidosProdutos = factory(PedidoProduto::class, 1)->create();
    }
}
