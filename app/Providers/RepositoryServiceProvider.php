<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Repositories\Category\CategoryRepositoryInterface;
use App\Services\Repositories\Post\PostRepositoryInterface;
#InterfaceNamespace
use App\Services\Repositories\Category\CategoryEloquentRepository;
use App\Services\Repositories\Post\PostEloquentRepository;
#ClassNamespace

/**
 * Class RepositoryServiceProvider
 *
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryEloquentRepository::class);
		$this->app->singleton(PostRepositoryInterface::class, PostEloquentRepository::class);
		#Singleton
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            CategoryRepositoryInterface::class,
			PostRepositoryInterface::class,
			#InterfaceProvides
        ];
    }
}
