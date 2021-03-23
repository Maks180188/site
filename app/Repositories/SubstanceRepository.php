<?php

namespace App\Repositories;

use App\Models\Substance;
use App\Repositories\BaseRepository;

/**
 * Class SubstanceRepository
 * @package App\Repositories
 * @version March 23, 2021, 3:04 pm UTC
*/

class SubstanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identifier',
        'name'
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
        return Substance::class;
    }
}
