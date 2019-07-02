<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Produto;
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

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'valorUnitario' => 100,
        'quantidadeEstoque' => 50,
        'situacao' => 'd',
    ];
});
