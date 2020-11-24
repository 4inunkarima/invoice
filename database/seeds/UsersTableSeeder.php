<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$dv2xVZD0ziRw1Qt5Y3nlVeJTQzSdw24whpuFq5dCAZwK8WmCUrdh6'
        ]);
    }
}
