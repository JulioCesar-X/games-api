<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Console;
use Faker\Generator as Faker;

$factory->define(Console::class, function (Faker $faker) {
    return [
        
            'name' => $faker->word,
        ];
});
