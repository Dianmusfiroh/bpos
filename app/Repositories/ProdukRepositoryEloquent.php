<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\produkRepository;
use App\Entities\Produk;
use App\Validators\ProdukValidator;

/**
 * Class ProdukRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProdukRepositoryEloquent extends BaseRepository implements ProdukRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Produk::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return ProdukValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
