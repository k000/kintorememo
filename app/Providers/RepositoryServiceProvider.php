<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Memo\Interfaces\MemoRepositoryInterface::class,
            \App\Repositories\Memo\MemoRepository::class
        );
    }

}
