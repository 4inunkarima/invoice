<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table ='produks';
    protected $fillable = ['nama_produk', 'jenis_produk', 'stok', 'deskripsi_produk', 'harga_produk', 'catatan', 'created_at'];
}
