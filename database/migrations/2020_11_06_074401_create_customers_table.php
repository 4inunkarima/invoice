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
            $table->string('nama');
            $table->string('organisasi');
            $table->string('mata_uang');
            $table->string('email');
            $table->string('telepon');
            $table->integer('fax_number');
            $table->string('note');
            $table->string('konfirmasi_password');
            $table->string('alamat');
            $table->integer('kode_pos');
            $table->string('state');
            $table->string('alamat_tambahan');
            $table->string('kota');
            $table->string('negara');
            $table->string('gender');
            $table->string('username');
            $table->string('bahasa');
            $table->string('password');
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
