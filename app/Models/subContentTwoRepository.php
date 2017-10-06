<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class subContentTwoRepository
 * @package App\Models
 * @version October 3, 2017, 5:10 am UTC
 *
 * @property string sub_number
 * @property string title
 * @property string body
 * @property integer sub_content_one_id
 */
class subContentTwoRepository extends Model
{
    use SoftDeletes;

    public $table = 'sub_content_two_repositories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sub_number',
        'title',
        'body',
        'sub_content_one_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sub_number' => 'string',
        'title' => 'string',
        'body' => 'string',
        'sub_content_one_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
