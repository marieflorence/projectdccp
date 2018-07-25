<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clients
 * @package App\Models
 * @version July 24, 2018, 6:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string NOM
 * @property string PRENOM
 * @property string NUMERO_CLIENT
 * @property string NUMERO_COMPTE
 * @property string ADRESSE_CLIENT
 * @property string TELEPHONE
 */
class Clients extends Model
{
    use SoftDeletes;

    public $table = 'C_CLIENTS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'NOM',
        'PRENOM',
        'NUMERO_CLIENT',
        'NUMERO_COMPTE',
        'ADRESSE_CLIENT',
        'TELEPHONE'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CLIENTS_ID' => 'integer',
        'NOM' => 'string',
        'PRENOM' => 'string',
        'NUMERO_CLIENT' => 'string',
        'NUMERO_COMPTE' => 'string',
        'ADRESSE_CLIENT' => 'string',
        'TELEPHONE' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function pPRODUITS()
    {
        return $this->belongsToMany(\App\Models\PPRODUIT::class, 'C_CLIENTS_has_P_PRODUITS');
    }
}
