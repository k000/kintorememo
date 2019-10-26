<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Memo\Interfaces\MemoRepositoryInterface;
use App\Memo;
use App\Http\Requests\MemoValiRequest;


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

    public function create(MemoValiRequest $request)
    {
        \Log::debug($request);
        $this->memoRepo->createMemo($request);
    }




}
