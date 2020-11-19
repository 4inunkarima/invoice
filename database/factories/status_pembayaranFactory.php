<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\status_pembayaran;
use Faker\Generator as Faker;

$factory->define(status_pembayaran::class, function (Faker $faker) {

    return [
        'nama_status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
