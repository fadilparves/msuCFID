<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models
 * @version July 22, 2017, 11:46 am UTC
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'courseName',
        'courseCode',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'courseName' => 'string',
        'courseCode' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
