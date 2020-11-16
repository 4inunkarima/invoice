<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice_detail extends Model
{
    protected $guarded =[];
    // protected $fillable = ['invoice_id','produk_id','harga','qty'];

    public function getSubtotalAttribute()
    {
        return number_format($this->qty * $this->harga_produk);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
