<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Content
 * @package App\Models
 * @version July 25, 2017, 8:18 am UTC
 */
class Content extends Model
{
    use SoftDeletes;

    public $table = 'contents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'chap_num',
        'course_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'chap_num' => 'integer',
        'course_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'chap_num' => 'required'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function subContentOne()
    {
        return $this->hasMany('App\Models\subContentOne');
    }
}
