<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Produk;
use Faker\Generator as Faker;

$factory->define(Produk::class, function (Faker $faker) {

    return [
        'nama_produk' => $faker->word,
        'jenis_produk' => $faker->word,
        'stok' => $faker->word,
        'deskripsi_produk' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
