<?php

namespace App\Repositories;

use App\Models\Report;
use App\Repositories\BaseRepository;

/**
 * Class ReportRepository
 * @package App\Repositories
 * @version November 6, 2020, 8:02 am UTC
*/

class ReportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Report::class;
    }
}
