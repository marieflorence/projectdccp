<?php

namespace App\Repositories;

use App\Models\Profil;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProfilRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:12 pm UTC
 *
 * @method Profil findWithoutFail($id, $columns = ['*'])
 * @method Profil find($id, $columns = ['*'])
 * @method Profil first($columns = ['*'])
*/
class ProfilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'PRFL_C_LIBELLE',
        'updaded_at'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Profil::class;
    }
}
