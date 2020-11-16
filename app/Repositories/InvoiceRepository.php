<?php

namespace App\Repositories;

use App\Models\Invoice;
use App\Repositories\BaseRepository;

/**
 * Class InvoiceRepository
 * @package App\Repositories
 * @version November 6, 2020, 7:54 am UTC
*/

class InvoiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'customer_id',
        'status',
        'total',
        // 'tanggal_invoice',
        // 'due_date',
        // 'detail_transaksi'
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
        return Invoice::class;
    }
}
