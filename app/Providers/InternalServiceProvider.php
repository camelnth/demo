<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\Internals\Category\CategoryServiceInterface;
use App\Services\Internals\Post\PostServiceInterface;
#InterfaceNamespace
use App\Services\Internals\Category\CategoryService;
use App\Services\Internals\Post\PostService;
#ClassNamespace

/**
 * Class InternalServiceProvider
 *
 * @package App\Providers
 */
class InternalServiceProvider extends ServiceProvider
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
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);
		$this->app->singleton(PostServiceInterface::class, PostService::class);
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
            CategoryServiceInterface::class,
			PostServiceInterface::class,
			#InterfaceProvides
        ];
    }
}
