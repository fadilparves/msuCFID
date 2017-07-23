<?php

namespace App\Repositories;

use App\Models\Course;
use InfyOm\Generator\Common\BaseRepository;

class CourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'courseName',
        'courseCode',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Course::class;
    }
}
