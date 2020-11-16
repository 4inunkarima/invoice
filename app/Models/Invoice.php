<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 * @package App\Models
 * @version November 6, 2020, 7:54 am UTC
 *
 * @property string $id
 * @property string $customer_id
 * @property string $status
 * @property string $note
 * @property string $total
 */
class Invoice extends Model
{
    use SoftDeletes;

    public $table = 'invoices';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'customer_id',
        'status',
        'note',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'string',
        // 'tanggal_invoice' => 'date',
        'status' => 'string',
        'note' => 'string',
        'total' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
