<?php

namespace App\Repositories;

use App\Models\subContentOne;
use InfyOm\Generator\Common\BaseRepository;

class subContentOneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sub_number',
        'title',
        'body'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return subContentOne::class;
    }
}
