<?php

namespace App\Repositories;

use App\Models\Users;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsersRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:13 pm UTC
 *
 * @method Users findWithoutFail($id, $columns = ['*'])
 * @method Users find($id, $columns = ['*'])
 * @method Users first($columns = ['*'])
*/
class UsersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'idrole',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Users::class;
    }
}
