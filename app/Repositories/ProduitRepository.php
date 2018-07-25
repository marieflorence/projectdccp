<?php

namespace App\Repositories;

use App\Models\Produit;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProduitRepository
 * @package App\Repositories
 * @version July 24, 2018, 6:11 pm UTC
 *
 * @method Produit findWithoutFail($id, $columns = ['*'])
 * @method Produit find($id, $columns = ['*'])
 * @method Produit first($columns = ['*'])
*/
class ProduitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codeProduit',
        'nomProduit'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produit::class;
    }
}
