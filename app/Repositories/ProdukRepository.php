<?php

namespace App\Repositories;

use App\Models\Produk;
use App\Repositories\BaseRepository;

/**
 * Class ProdukRepository
 * @package App\Repositories
 * @version November 6, 2020, 7:48 am UTC
*/

class ProdukRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_produk',
        'jenis_produk',
        'stok',
        'deskripsi_produk'
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
        return Produk::class;
    }
}
