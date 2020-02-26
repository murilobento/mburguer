<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Burguer;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Burguer::class, function (Faker $faker) {
    return [
        'nome' => $faker->unique()->word,
        'desc' => $faker->sentence,
        'preco' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 40),
        'imagem' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
