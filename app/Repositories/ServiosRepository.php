<?php

namespace App\Repositories;

use App\Models\Servios;
use App\Repositories\BaseRepository;

/**
 * Class ServiosRepository
 * @package App\Repositories
 * @version March 5, 2020, 10:46 pm UTC
*/

class ServiosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id-se',
        'productos',
        'nombre'
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
        return Servios::class;
    }
}
