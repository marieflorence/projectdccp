<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prospects
 * @package App\Models
 * @version July 24, 2018, 6:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string POSP_Date
 * @property string POSP_Nom
 * @property string POSP_Prenom
 * @property integer POSP_Numero_Compte
 * @property string POSP_Employeur
 * @property string POSP_Niveau_Revenu
 * @property string POSP_Banque
 * @property string POSP_Agence_de_Depot
 * @property string D_GESTIONNAIRE_GEST_C_CODE_GEST
 * @property string TypeContrat_idTypeContrat
 * @property string P_PROFIL_PRFL_N_CODE
 * @property string POSP_Telephone
 * @property string POSP_CAV
 * @property string POSP_Disponibilite
 * @property string POSP_Agence
 * @property string POSP_ObsColombe
 * @property string POSP_ObsSGBS
 */
class Prospects extends Model
{
    use SoftDeletes;

    public $table = 'P_PROSPECTS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'POSP_Date' => 'string',
        'POSP_Nom' => 'string',
        'POSP_Prenom' => 'string',
        'POSP_Numero_Compte' => 'integer',
        'POSP_Employeur' => 'string',
        'POSP_Niveau_Revenu' => 'string',
        'POSP_Banque' => 'string',
        'POSP_Agence_de_Depot' => 'string',
        'D_GESTIONNAIRE_GEST_C_CODE_GEST' => 'string',
        'TypeContrat_idTypeContrat' => 'string',
        'P_PROFIL_PRFL_N_CODE' => 'string',
        'POSP_Telephone' => 'string',
        'POSP_CAV' => 'string',
        'POSP_Disponibilite' => 'string',
        'POSP_Agence' => 'string',
        'POSP_ObsColombe' => 'string',
        'POSP_ObsSGBS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
