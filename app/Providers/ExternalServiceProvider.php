<?php

namespace App\Providers;

use App\Services\Externals\Images\ImageService;
use App\Services\Externals\Images\ImageServiceInterface;
use Illuminate\Support\ServiceProvider;

/**
 * Class ExternalServiceProvider
 *
 * @package App\Providers
 */
class ExternalServiceProvider extends ServiceProvider
{
    /**
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
     */
    public function register()
    {
        $this->app->singleton(ImageServiceInterface::class, ImageService::class);
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [
            ImageServiceInterface::class
        ];
    }
}
