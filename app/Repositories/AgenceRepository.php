<?php

namespace App\Repositories;

use App\Models\Agence;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgenceRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:15 pm UTC
 *
 * @method Agence findWithoutFail($id, $columns = ['*'])
 * @method Agence find($id, $columns = ['*'])
 * @method Agence first($columns = ['*'])
*/
class AgenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'AGEN_C_AGE',
        'AGEN_C_AGENCE',
        'AGEN_C_ADRESSE',
        'AGEN_C_TEL',
        'AGEN_C_CODE_RESPO',
        'AGEN_C_NOM_RESPO',
        'AGEN_C_PRENOM_RESPO',
        'AGEN_C_TEL RESPO',
        'AGEN_C_EMAIL_RESPO',
        'UC_idUC'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agence::class;
    }
}
