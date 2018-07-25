<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Traitement
 * @package App\Models
 * @version July 24, 2018, 6:14 pm UTC
 *
 * @property \App\Models\Statut statut
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string TRT_N_Num_Appel
 * @property string|\Carbon\Carbon TRT_N_Date_Appel
 * @property string TRT_CompteRendu
 * @property string TRT_C_Flag
 * @property integer P_PROSPECTS_PROSPECTS_ID
 * @property integer Statut_idStatut
 */
class Traitement extends Model
{
    use SoftDeletes;

    public $table = 'D_TRAITEMENT';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'TRT_N_Num_Appel',
        'TRT_N_Date_Appel',
        'TRT_CompteRendu',
        'TRT_C_Flag',
        'P_PROSPECTS_PROSPECTS_ID',
        'Statut_idStatut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'TRT_N_ID' => 'integer',
        'TRT_N_Num_Appel' => 'string',
        'TRT_CompteRendu' => 'string',
        'TRT_C_Flag' => 'string',
        'P_PROSPECTS_PROSPECTS_ID' => 'integer',
        'Statut_idStatut' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function statut()
    {
        return $this->belongsTo(\App\Models\Statut::class);
    }
}
