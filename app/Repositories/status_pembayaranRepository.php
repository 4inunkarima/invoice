<?php

namespace App\Repositories;

use App\Models\status_pembayaran;
use App\Repositories\BaseRepository;

/**
 * Class status_pembayaranRepository
 * @package App\Repositories
 * @version November 19, 2020, 5:13 am UTC
*/

class status_pembayaranRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_status',
        'urutan'
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
        return status_pembayaran::class;
    }
}
