<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

// criando um modelo para que o seeder possa utilizar e criar registros fake
// onde neste modelo abaixo colocamos dentro do return as colunas que queremos preencher
// e consequentemente os valores fake aplicados para cada coluna
$factory->define(Movie::class, function (Faker $faker) {
    return [
        "title" => $faker->firstName,
        "synopsis" => $faker->sentence,
        "cover_image" => "caminho_da_imagem"
    ];
});