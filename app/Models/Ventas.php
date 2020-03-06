<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ventas
 * @package App\Models
 * @version March 5, 2020, 11:06 pm UTC
 *
 * @property integer id-c
 * @property integer id-pr
 * @property integer id-se
 */
class Ventas extends Model
{

    public $table = 'ventas';
    



    public $fillable = [
        'id-c',
        'id-pr',
        'id-se'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-ven' => 'integer',
        'id-c' => 'integer',
        'id-pr' => 'integer',
        'id-se' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
