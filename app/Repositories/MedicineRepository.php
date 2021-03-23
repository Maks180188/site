<?php

namespace App\Repositories;

use App\Models\Medicine;
use App\Repositories\BaseRepository;

/**
 * Class MedicineRepository
 * @package App\Repositories
 * @version March 23, 2021, 2:58 pm UTC
*/

class MedicineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'identifier',
        'name',
        'main_active_ingredient_identifier',
        'manufacturer_identifier',
        'price'
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
        return Medicine::class;
    }
}
