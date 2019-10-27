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

        $shumoku = json_encode($requests->shumoku);
        $weight = json_encode($requests->weight);
        $rep = json_encode($requests->rep);
        $set = json_encode($requests->set);
        $props = array(
            "shumoku" => $shumoku,
            "weight" => $weight,
            "rep" => $rep,
            "set" => $set
        );
        $this->model->data = json_encode($props);
        $this->model->place = $requests->place;
        $this->model->isprivate = false;
        $this->model->memo = $requests->memo;
        $this->model->save();
    }

    
    public function index()
    {
        return $this->model->all();
    }


    public function showMemo()
    {
        $data = $this->model->where('id','=','14')->first();

        $data->data = json_decode($data->data);

        $data->data->shumoku = json_decode($data->data->shumoku);
        $data->data->weight = json_decode($data->data->weight);
        $data->data->rep = json_decode($data->data->rep);
        $data->data->set = json_decode($data->data->set);

        return $data;
    }
    

    public function deleteMemo()
    {

    }

}