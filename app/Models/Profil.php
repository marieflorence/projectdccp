<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Profil
 * @package App\Models
 * @version July 24, 2018, 6:12 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string PRFL_C_LIBELLE
 * @property string|\Carbon\Carbon updaded_at
 */
class Profil extends Model
{
    use SoftDeletes;

    public $table = 'P_PROFIL';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'PRFL_C_LIBELLE',
        'updaded_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'PRFL_N_CODE' => 'integer',
        'PRFL_C_LIBELLE' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
