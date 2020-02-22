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
        $this->app->bind(\App\Repositories\Category\CategoryInterface::class, \App\Repositories\Category\CategoryRepository::class);
        $this->app->bind(\App\Repositories\Tag\TagInterface::class, \App\Repositories\Tag\TagRepository::class);
        $this->app->bind(\App\Repositories\Comment\CommentInterface::class, \App\Repositories\Comment\CommentRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
