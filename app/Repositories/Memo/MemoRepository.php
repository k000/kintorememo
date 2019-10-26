<?php


namespace App\Repositories\Memo;

use App\Repositories\Memo\Interfaces\MemoRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Memo; //モデル
use Illuminate\Http\Request;

class MemoRepository extends BaseRepository implements MemoRepositoryInterface{

    protected $model;

    public function __cunstruct(Memo $model)
    {
        $this->model = $model;
    }


    public function createMemo(Request $requests)
    {

        $this->model->event = $requests->event;
        $this->model->day = $requests->day;
        $this->model->data = $requests->data;
        $this->model->place = $requests->place;
        $this->model->isprivate = $requests->isprivate;
        $this->model->memo = $requests->memo;
        $this->model->save();
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