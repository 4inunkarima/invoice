<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 * @package App\Models
 * @version November 6, 2020, 7:54 am UTC
 *
 * @property string $kode_invoice
 * @property string $tanggal_invoice
 * @property string $status
 * @property string $due_date
 * @property string $detail_transaksi
 */
class Invoice extends Model
{
    use SoftDeletes;

    public $table = 'invoices';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_invoice',
        'tanggal_invoice',
        'status',
        'due_date',
        'detail_transaksi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_invoice' => 'string',
        'tanggal_invoice' => 'date',
        'status' => 'string',
        'due_date' => 'date',
        'detail_transaksi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
