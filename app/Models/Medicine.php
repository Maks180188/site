<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Medicine
 * @package App\Models
 * @version March 23, 2021, 2:58 pm UTC
 *
 * @property integer $identifier
 * @property string $name
 * @property integer $main_active_ingredient_identifier
 * @property integer $manufacturer_identifier
 * @property number $price
 */
class Medicine extends Model
{

    public $table = 'medecine';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'identifier',
        'name',
        'main_active_ingredient_identifier',
        'manufacturer_identifier',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'integer',
        'name' => 'string',
        'main_active_ingredient_identifier' => 'integer',
        'manufacturer_identifier' => 'integer',
        'price' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'identifier' => 'required|integer',
        'name' => 'required|string|max:255',
        'main_active_ingredient_identifier' => 'required|integer',
        'manufacturer_identifier' => 'required|integer',
        'price' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
