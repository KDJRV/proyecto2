<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clientes
 * @package App\Models
 * @version March 5, 2020, 10:27 pm UTC
 *
 * @property string nombre
 * @property string telefono
 */
class Clientes extends Model
{

    public $table = 'clientes';
    



    public $fillable = [
        'nombre',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id-c' => 'integer',
        'nombre' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
