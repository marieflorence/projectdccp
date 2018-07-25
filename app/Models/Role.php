<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version July 24, 2018, 6:13 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string nom
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'ROLE';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
