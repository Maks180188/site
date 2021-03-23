<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Substance
 * @package App\Models
 * @version March 23, 2021, 3:04 pm UTC
 *
 * @property integer $identifier
 * @property string $name
 */
class Substance extends Model
{

    public $table = 'active_substance';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'identifier',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'identifier' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'identifier' => 'required|integer',
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
