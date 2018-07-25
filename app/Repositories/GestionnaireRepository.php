<?php

namespace App\Repositories;

use App\Models\Gestionnaire;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GestionnaireRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:14 pm UTC
 *
 * @method Gestionnaire findWithoutFail($id, $columns = ['*'])
 * @method Gestionnaire find($id, $columns = ['*'])
 * @method Gestionnaire first($columns = ['*'])
*/
class GestionnaireRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'GEST_C_NOM',
        'GEST_C_PRENOM',
        'GEST_C_TEL',
        'D_AGENCE_AGEN_C_ID'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gestionnaire::class;
    }
}
