<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Productos
 * @package App\Models
 * @version March 5, 2020, 10:42 pm UTC
 *
 * @property integer id-pr
 * @property string nombre
 * @property integer cantidad
 */
class Productos extends Model
{

    public $table = 'productos';
    



    public $fillable = [
        'id-pr',
        'nombre',
        'cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-pr' => 'integer',
        'nombre' => 'string',
        'cantidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
