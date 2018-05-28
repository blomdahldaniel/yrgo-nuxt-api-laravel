<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    $hasStarted = rand(1, 10) >= 5;
    return [
        'user_id'           => 1,
        'title'             => rand(1, 10) >= 5 ? $faker->sentence() : $faker->word(),
        'author'            => $faker->name(),
        'image_path'        => $faker->imageUrl(400, 600, 'abstract'),
        'vendor_link'       => rand(1, 10) >= 7 ? 'https://google.com' : null,
        'description'       => $faker->paragraph(),
        'body'              => $faker->text(),
        'rating'            => $hasStarted ? $faker->numberBetween(1,5) : null,
        'rating_read_again' => $hasStarted ? $faker->numberBetween(1,5) : null,
        'wishlist'          => false,
        'wishlist_position' => null,
        'started_at'        => $hasStarted ? $start = $faker->dateTimeBetween('-5 years'. 'now')->format('Y-m-d H:i:s') : $start = null,
        'finished_at'       => rand(1, 10) >= 5 && $start != null ? $faker->dateTimeBetween($start. 'now')->format('Y-m-d H:i:s') : null,
    ];
});
