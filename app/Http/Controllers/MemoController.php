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


    public function index()
    {
        $data = $this->memoRepo->index();
        return view('Memo.index')->with('datas',$data);
    }

    public function show($id){
        $data = $this->memoRepo->showMemo($id);
        return view('Memo.memo')->with('datas',$data);
    }


    public function create(MemoValiRequest $request)
    {
        $this->memoRepo->createMemo($request);
    }




}
