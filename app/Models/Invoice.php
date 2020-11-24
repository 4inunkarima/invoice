<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Invoice;

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

    public function getTaxAttribute()
    {
        return ($this->total*2)/100;
    }

    public function getTotalHargaAttribute()
    {
        return($this->total+(($this->total*2)/100));
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function detail()
    {
        return $this->hasMany(Invoice_detail::class);
    }

    public function totalin()
    {
        return $this->belongsTo(Transaksi::class);
    }
    
}
