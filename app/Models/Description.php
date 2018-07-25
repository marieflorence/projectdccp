<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Description
 * @package App\Models
 * @version July 24, 2018, 6:15 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cCLIENTSHasPPRODUITS
 * @property \Illuminate\Database\Eloquent\Collection statut
 * @property string libDescription
 */
class Description extends Model
{
    use SoftDeletes;

    public $table = 'Description';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'libDescription'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idDescription' => 'integer',
        'libDescription' => 'string'
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
    public function promesses()
    {
        return $this->belongsToMany(\App\Models\Promesse::class, 'Statut');
    }
}
