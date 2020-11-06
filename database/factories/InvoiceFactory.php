<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Invoice;
use Faker\Generator as Faker;

$factory->define(Invoice::class, function (Faker $faker) {

    return [
        'kode_invoice' => $faker->word,
        'tanggal_invoice' => $faker->word,
        'status' => $faker->word,
        'due_date' => $faker->word,
        'detail_transaksi' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
