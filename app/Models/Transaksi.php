<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaksi
 * @package App\Models
 * @version November 6, 2020, 7:57 am UTC
 *
 * @property string $kode_transaksi
 * @property string $nama_customer
 * @property string $jumlah_transaksi
 * @property string $kode_invoice
 * @property string $tanggal_transaksi
 */
class Transaksi extends Model
{
    use SoftDeletes;

    public $table = 'transaksis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_transaksi',
        'nama_customer',
        'jumlah_transaksi',
        'kode_invoice',
        'tanggal_transaksi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_transaksi' => 'string',
        'nama_customer' => 'string',
        'jumlah_transaksi' => 'string',
        'kode_invoice' => 'string',
        'tanggal_transaksi' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
