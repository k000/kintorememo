<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Memo\Interfaces\MemoRepositoryInterface;


class MemoController extends Controller
{

    /**
     * @var MemoRepositoryInterface
     */
    private $memoRepo;

    
    /**
     * MemoController constructor.
     * @param MemoRepositoryInterface $memoRepository
     */
    public function __construct(MemoRepositoryInterface $memoRepository)
    {
        $this->memoRepo = $memoRepository;
    }


    public function test()
    {
        $this->memoRepo->index();
    }




}
