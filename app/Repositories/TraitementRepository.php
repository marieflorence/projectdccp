<?php

namespace App\Repositories;

use App\Models\Traitement;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TraitementRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:14 pm UTC
 *
 * @method Traitement findWithoutFail($id, $columns = ['*'])
 * @method Traitement find($id, $columns = ['*'])
 * @method Traitement first($columns = ['*'])
*/
class TraitementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TRT_N_Num_Appel',
        'TRT_N_Date_Appel',
        'TRT_CompteRendu',
        'TRT_C_Flag',
        'P_PROSPECTS_PROSPECTS_ID',
        'Statut_idStatut'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Traitement::class;
    }
}
