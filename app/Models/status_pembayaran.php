<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    protected $guarded = [];
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
