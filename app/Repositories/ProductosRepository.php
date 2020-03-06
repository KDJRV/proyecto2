<?php

namespace App\Repositories;

use App\Models\Productos;
use App\Repositories\BaseRepository;

/**
 * Class ProductosRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:42 pm UTC
*/

class ProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id-pr',
        'nombre',
        'cantidad'
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
        return Productos::class;
    }
}
