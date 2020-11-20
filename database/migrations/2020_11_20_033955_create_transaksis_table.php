<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_invoice')->unsigned();
            // $table->string('nama_customer');
            // $table->Integer('total_harga');
            $table->integer('kode_pembayaran')->unsigned();
            $table->string('deskripsi_transaksi');
            $table->date('batas_pembayaran');
            $table->timestamps();
            $table->softDeletes();
            
            // $table->primary('id');
            // $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('restrict');
            // $table->foreign('nama_customer')->references('id')->on('customers')->onDelete('restrict');
            // $table->foreign('total_harga')->references('id')->on('invoices')->onDelete('restrict');
            // $table->foreign('status_pembayaran')->references('id')->on('status_pembayaran')->onDelete('restrict');
            // $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}