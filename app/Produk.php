<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
    protected $fillable = ['nama_produk', 'jenis_produk', 'stok', 'deskripsi_produk', 'harga_produk', 'catatan', 'created_at'];
}
