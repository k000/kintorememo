<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class BaseRepository{

    protected $model;

    /**
     * BaseRepository constructor
     * @param Model $model
     */

    public function __construct(Model $model)
    {
        var_dump("called!");
        $this->model = $model;      
    }

}