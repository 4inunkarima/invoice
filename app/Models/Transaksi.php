<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Transaksi;

class Transaksi extends Model
{
    protected $table ='transaksis';
    protected $guarded=[];
    public $incrementing = false;

    public $fillable = [
        'kode_invoice',
        'kode_pembayaran',
        'deskripsi_transaksi',
        'batas_pembayaran'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_invoice' => 'integer',
        'kode_pembayaran' => 'integer',
        'batas_pembayaran' => 'date',
        'deskripsi_transaksi' => 'string'
    ];

    public function tampil()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function pembayarans()
    {
        return $this->belongsTo(status_pembayaran::class);
    }

    // public function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }

    // public function detail()
    // {
    //     return $this->hasMany(Invoice_detail::class);
    // }
}
