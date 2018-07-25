<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gestionnaire
 * @package App\Models
 * @version July 24, 2018, 6:14 pm UTC
 *
 * @property \App\Models\DAGENCE dAGENCE
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string GEST_C_NOM
 * @property string GEST_C_PRENOM
 * @property string GEST_C_TEL
 * @property integer D_AGENCE_AGEN_C_ID
 */
class Gestionnaire extends Model
{
    use SoftDeletes;

    public $table = 'D_GESTIONNAIRE';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'GEST_C_NOM',
        'GEST_C_PRENOM',
        'GEST_C_TEL',
        'D_AGENCE_AGEN_C_ID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'GEST_C_CODE_GEST' => 'integer',
        'GEST_C_NOM' => 'string',
        'GEST_C_PRENOM' => 'string',
        'GEST_C_TEL' => 'string',
        'D_AGENCE_AGEN_C_ID' => 'integer'
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
    public function dAGENCE()
    {
        return $this->belongsTo(\App\Models\DAGENCE::class);
    }
}
