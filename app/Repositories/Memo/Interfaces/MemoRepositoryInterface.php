<?php

namespace App\Repositories\Memo\Interfaces;
use Illuminate\Http\Request;


interface MemoRepositoryInterface{
    
    public function createMemo(Request $requests);

    public function index();

    public function showMemo($id);

    public function deleteMemo();

}
