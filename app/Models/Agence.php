<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agence
 * @package App\Models
 * @version July 24, 2018, 6:15 pm UTC
 *
 * @property \App\Models\UC uC
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection DGESTIONNAIRE
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string AGEN_C_AGE
 * @property string AGEN_C_AGENCE
 * @property string AGEN_C_ADRESSE
 * @property string AGEN_C_TEL
 * @property string AGEN_C_CODE_RESPO
 * @property string AGEN_C_NOM_RESPO
 * @property string AGEN_C_PRENOM_RESPO
 * @property string AGEN_C_TEL RESPO
 * @property string AGEN_C_EMAIL_RESPO
 * @property integer UC_idUC
 */
class Agence extends Model
{
    use SoftDeletes;

    public $table = 'D_AGENCE';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'AGEN_C_ID' => 'integer',
        'AGEN_C_AGE' => 'string',
        'AGEN_C_AGENCE' => 'string',
        'AGEN_C_ADRESSE' => 'string',
        'AGEN_C_TEL' => 'string',
        'AGEN_C_CODE_RESPO' => 'string',
        'AGEN_C_NOM_RESPO' => 'string',
        'AGEN_C_PRENOM_RESPO' => 'string',
        'AGEN_C_TEL RESPO' => 'string',
        'AGEN_C_EMAIL_RESPO' => 'string',
        'UC_idUC' => 'integer'
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
    public function uC()
    {
        return $this->belongsTo(\App\Models\UC::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dGESTIONNAIRES()
    {
        return $this->hasMany(\App\Models\DGESTIONNAIRE::class);
    }
}
