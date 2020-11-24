<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\status_pembayaran;

/**
 * Class status_pembayaran
 * @package App\Models
 * @version November 19, 2020, 5:13 am UTC
 *
 * @property string $nama_status
 */
class status_pembayaran extends Model
{
    use SoftDeletes;

    public $table = 'status_pembayarans';

    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_status',
        'urutan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_status' => 'string',
        'urutan'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
    
}
