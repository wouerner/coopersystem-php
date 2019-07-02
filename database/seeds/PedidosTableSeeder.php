<?php

use Illuminate\Database\Seeder;
use App\Pedido;
use App\PedidoProduto;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(Pedido::class, 3)->create();
    }
}
