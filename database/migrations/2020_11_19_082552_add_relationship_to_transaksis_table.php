<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipToTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->foreign('kode_invoice')
                ->references('id')->on('invoices')
                ->onDelete('cascade');
            // $table->foreign('nama_customer')
            //     ->references('id')->on('customer')
            // //     ->onDelete('cascade');
            // $table->foreign('total_harga')
            //     ->references('id')->on('invoice')
            //     ->onDelete('cascade');
            $table->foreign('kode_pembayaran')
                ->references('id')->on('status_pembayarans')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            $table->dropForeign('transaksis_kode_invoice_foreign');
            // $table->dropForeign('transaksis_nama_customer_foreign');
            // $table->dropForeign('transaksis_total_harga_foreign');
            $table->dropForeign('transaksis_status_pembayaran');
        });
    }
}
