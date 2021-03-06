<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\GenreRepository;
use App\models\Genre;
use App\Validators\GenreValidator;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

/**
 * Class GenreRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class GenreRepositoryEloquent extends BaseRepository implements GenreRepository, CacheableInterface
{
    use CacheableRepository;

    protected $cacheOnly = ['all'];

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Genre::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return GenreValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
