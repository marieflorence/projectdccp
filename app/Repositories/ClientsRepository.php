<?php

namespace App\Repositories;

use App\Models\Clients;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientsRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:09 pm UTC
 *
 * @method Clients findWithoutFail($id, $columns = ['*'])
 * @method Clients find($id, $columns = ['*'])
 * @method Clients first($columns = ['*'])
*/
class ClientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'NOM',
        'PRENOM',
        'NUMERO_CLIENT',
        'NUMERO_COMPTE',
        'ADRESSE_CLIENT',
        'TELEPHONE'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clients::class;
    }
}
