<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    //主キー
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
