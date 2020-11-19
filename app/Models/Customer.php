<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Customer;

/**
 * Class Customer
 * @package App\Models
 * @version November 6, 2020, 7:44 am UTC
 *
 * @property string $nama
 * @property string $organisasi
 * @property string $mata_uang
 * @property string $email
 * @property string $telepon
 * @property string $fax_number
 * @property string $note
 * @property string $konfirmasi_password
 * @property string $alamat
 * @property string $kode_pos
 * @property string $state
 * @property string $alamat_tambahan
 * @property string $kota
 * @property string $negara
 * @property string $gender
 * @property string $username
 * @property string $bahasa
 * @property string $password
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'organisasi',
        'mata_uang',
        'email',
        'telepon',
        'fax_number',
        'note',
        'konfirmasi_password',
        'alamat',
        'kode_pos',
        'state',
        'alamat_tambahan',
        'kota',
        'negara',
        'gender',
        'username',
        'bahasa',
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
        'organisasi' => 'string',
        'mata_uang' => 'string',
        'email' => 'string',
        'telepon' => 'string',
        'fax_number' => 'integer',
        'note' => 'string',
        'konfirmasi_password' => 'string',
        'alamat' => 'string',
        'kode_pos' => 'integer',
        'state' => 'string',
        'alamat_tambahan' => 'string',
        'kota' => 'string',
        'negara' => 'string',
        'gender' => 'string',
        'username' => 'string',
        'bahasa' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
