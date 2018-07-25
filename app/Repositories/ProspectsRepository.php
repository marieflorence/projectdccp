<?php

namespace App\Repositories;

use App\Models\Prospects;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProspectsRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:11 pm UTC
 *
 * @method Prospects findWithoutFail($id, $columns = ['*'])
 * @method Prospects find($id, $columns = ['*'])
 * @method Prospects first($columns = ['*'])
*/
class ProspectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'POSP_Date',
        'POSP_Nom',
        'POSP_Prenom',
        'POSP_Numero_Compte',
        'POSP_Employeur',
        'POSP_Niveau_Revenu',
        'POSP_Banque',
        'POSP_Agence_de_Depot',
        'D_GESTIONNAIRE_GEST_C_CODE_GEST',
        'TypeContrat_idTypeContrat',
        'P_PROFIL_PRFL_N_CODE',
        'POSP_Telephone',
        'POSP_CAV',
        'POSP_Disponibilite',
        'POSP_Agence',
        'POSP_ObsColombe',
        'POSP_ObsSGBS'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Prospects::class;
    }
}
