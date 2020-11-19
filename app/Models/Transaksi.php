<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Transaksi;

class Transaksi extends Model
{
    protected $table ='transaksis';
    public $incrementing = false;

    public function kode_invoices()
    {
        return $this->belongsTo('App\Models\Invoice','kode_invoice','id');
    }

    public function kode_pembayarans()
    {
        return $this->belongsTo('App\Models\status_pembayaran','kode_pembayarans','id');
    }
}
