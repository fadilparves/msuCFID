<?php

namespace App\Repositories;

use App\Models\subContentTwoRepository;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class subContentTwoRepositoryRepository
 * @package App\Repositories
 * @version October 3, 2017, 5:10 am UTC
 *
 * @method subContentTwoRepository findWithoutFail($id, $columns = ['*'])
 * @method subContentTwoRepository find($id, $columns = ['*'])
 * @method subContentTwoRepository first($columns = ['*'])
*/
class subContentTwoRepositoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sub_number',
        'title',
        'body',
        'sub_content_one_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return subContentTwoRepository::class;
    }
}
