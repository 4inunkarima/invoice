<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('telepon', 13);
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->string('organisasi', 100);
            $table->string('alamat', 100);
            $table->string('kode_pos', 7);
            $table->string('provinsi', 100);
            $table->string('alamat_tambahan')->nullable();
            $table->string('kota', 100);
            $table->string('negara', 100);
            $table->string('username', 100);
            $table->string('fax_number', 10);
            $table->text('note')->nullable();
            $table->string('password');
            $table->string('konfirmasi_password');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
