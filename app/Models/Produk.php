<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produk
 * @package App\Models
 * @version November 6, 2020, 7:48 am UTC
 *
 * @property string $nama_produk
 * @property string $jenis_produk
 * @property string $stok
 * @property string $deskripsi_produk
 */
class Produk extends Model
{
    use SoftDeletes;

    public $table = 'produks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_produk',
        'jenis_produk',
        'stok',
        'deskripsi_produk'
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
        'deskripsi_produk' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
