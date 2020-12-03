<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Transaksi;

class Transaksi extends Model
{
    use SoftDeletes;

    public $table = 'transaksis';

    protected $dates = ['deleted_at'];

    // protected $table ='transaksis';
    protected $guarded=[];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public $fillable = [
        'id',
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

    public function totalins()
    {
        return $this->belongsTo('App\Models\Invoice','kode_invoice','id');
    }

    public function pembayarans()
    {
        return $this->belongsTo('App\Models\status_pembayaran','kode_pembayaran','id');
    }

    public function trans()
    {
        return $this->belongsTo('App\Models\Report','transaksi_id','id');
    }

    public function status()
    {
        return $this->belongsTo(\App\Models\status_pembayaran::class, 'kode_pembayaran');
    }
    

}
