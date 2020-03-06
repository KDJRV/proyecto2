<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Servios
 * @package App\Models
 * @version March 5, 2020, 10:46 pm UTC
 *
 * @property integer id-se
 * @property string productos
 * @property string nombre
 */
class Servios extends Model
{

    public $table = 'servicios';
    



    public $fillable = [
        'id-se',
        'productos',
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-se' => 'integer',
        'productos' => 'string',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
