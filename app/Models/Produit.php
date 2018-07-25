<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produit
 * @package App\Models
 * @version July 24, 2018, 6:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string codeProduit
 * @property string nomProduit
 */
class Produit extends Model
{
    use SoftDeletes;

    public $table = 'P_PRODUITS';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codeProduit',
        'nomProduit'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idP_PRODUITS' => 'integer',
        'codeProduit' => 'string',
        'nomProduit' => 'string'
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
    public function cCLIENTS()
    {
        return $this->belongsToMany(\App\Models\CCLIENT::class, 'C_CLIENTS_has_P_PRODUITS');
    }
}
