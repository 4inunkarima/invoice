<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\BaseRepository;

/**
 * Class CustomerRepository
 * @package App\Repositories
 * @version November 6, 2020, 7:44 am UTC
*/

class CustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customer::class;
    }
}
