<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\PedidoProduto;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(PedidoProduto::class, function (Faker $faker) {
    return [
        'produto_id' => 1,
        'pedido_id' => 1,
        'quantidade' => 1,
    ];
});
