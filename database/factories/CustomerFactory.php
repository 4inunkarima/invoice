<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {

    return [
        'nama' => $faker->word,
        'email' => $faker->word,
        'telepon' => $faker->word,
        'alamat' => $faker->word,
        'gender' => $faker->word,
        'username' => $faker->word,
        'password' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
