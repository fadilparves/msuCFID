<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class subContentOne
 * @package App\Models
 * @version August 5, 2017, 11:45 am UTC
 */
class subContentOne extends Model
{
    use SoftDeletes;

    public $table = 'sub_content_ones';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'sub_number',
        'title',
        'body',
        'content_id'
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
        'content_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sub_number' => 'required',
        'title' => 'required',
        'body' => 'required'
    ];

    public function Content()
    {
        return $this->belongsTo('App\Models\Content');
    }
    
}
