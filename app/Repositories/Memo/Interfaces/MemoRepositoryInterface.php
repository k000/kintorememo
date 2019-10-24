<?php

namespace App\Repositories\Memo\Interfaces;

interface MemoRepositoryInterface{
    
    public function createMemo();

    public function index();

    public function showMemo();

    public function deleteMemo();

}
