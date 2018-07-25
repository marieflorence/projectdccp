<?php

namespace App\Repositories;

use App\Models\Description;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DescriptionRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:15 pm UTC
 *
 * @method Description findWithoutFail($id, $columns = ['*'])
 * @method Description find($id, $columns = ['*'])
 * @method Description first($columns = ['*'])
*/
class DescriptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libDescription'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Description::class;
    }
}
