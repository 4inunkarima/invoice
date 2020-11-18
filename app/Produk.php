<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
    // protected $fillable = ['nama_produk', 'jenis_produk', 'stok', 'deskripsi_produk', 'harga_produk', 'catatan', 'created_at'];

    public $table = 'produks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_produk',
        'jenis_produk',
        'stok',
        'harga_produk',
        'deskripsi_produk',
        'catatan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_produk' => 'string',
        'jenis_produk' => 'string',
        'stok' => 'string',
        'harga_produk' => 'integer',
        'deskripsi_produk' => 'string',
        'catatan' => 'textarea'
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
