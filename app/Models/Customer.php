<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version November 6, 2020, 7:44 am UTC
 *
 * @property string $nama
 * @property string $email
 * @property string $telepon
 * @property string $alamat
 * @property string $gender
 * @property string $username
 * @property string $password
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
        'gender',
        'username',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'email' => 'string',
        'telepon' => 'string',
        'alamat' => 'string',
        'gender' => 'string',
        'username' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'email string text'
    ];

    
}
