<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Transaksi;
use Faker\Generator as Faker;

$factory->define(Transaksi::class, function (Faker $faker) {

    return [
        'kode_transaksi' => $faker->word,
        'nama_customer' => $faker->word,
        'jumlah_transaksi' => $faker->word,
        'kode_invoice' => $faker->word,
        'tanggal_transaksi' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
