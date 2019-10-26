<?php


namespace App\Repositories\Memo;

use App\Repositories\Memo\Interfaces\MemoRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Memo; //モデル


class MemoRepository extends BaseRepository implements MemoRepositoryInterface{

    protected $model;

    public function __cunstruct(Memo $model)
    {
        $this->model = $model;
    }

    public function createMemo()
    {

    }

    public function index()
    {
        dd($this->model->all());
    }

    public function showMemo()
    {

    }

    public function deleteMemo()
    {

    }

}