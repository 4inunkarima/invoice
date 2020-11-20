<?php

namespace App\Repositories;

use App\Models\Transaksi;
use App\Repositories\BaseRepository;

/**
 * Class TransaksiRepository
 * @package App\Repositories
 * @version November 6, 2020, 7:57 am UTC
*/

class TransaksiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_invoice',
        'kode_pembayaran',
        'deskripsi_transaksi',
        'batas_pembayaran'
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
        return Transaksi::class;
    }
}
