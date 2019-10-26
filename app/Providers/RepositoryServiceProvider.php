<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Memo;
use App\Repositories\Memo\MemoRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*
        $this->app->bind(
            \App\Repositories\Memo\Interfaces\MemoRepositoryInterface::class,
            \App\Repositories\Memo\MemoRepository::class
        );
        */

        //注入時にMemoRepositoryにMemoを注入したものを返却させる
        $this->app->bind(\App\Repositories\Memo\Interfaces\MemoRepositoryInterface::class,function(){
            return new MemoRepository(new Memo());
        });
    }

}
