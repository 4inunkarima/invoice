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
        'email',
        'telepon',
        'gender',
        'organisasi',
        'alamat',
        'kode_pos',
        'provinsi',
        'alamat_tambahan',
        'kota',
        'negara',
        'username',
        'fax_number',
        'note',
        'password',
        'konfirmasi_password'
        
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
        'telepon' => 'integer',
        'gender' => 'enum',
        'organisasi' => 'string',
        'alamat' => 'string',
        'kode_pos' => 'integer',
        'provinsi' => 'string',
        'alamat_tambahan' => 'string',
        'kota' => 'string',
        'negara' => 'string',
        'username' => 'string',
        'fax_number' => 'string',
        'note' => 'text',
        'password' => 'string',
        'konfirmasi_password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
