<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->realText(10),
        'author'=> $faker->name,
        'comment'=> $faker->realText(50),

    ];
});
