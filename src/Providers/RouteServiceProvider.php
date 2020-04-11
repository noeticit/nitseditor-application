<?php

namespace Nitseditor\Application\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Nitseditor\Application\Http\Controllers';

    protected $laravel_namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../Routes/web.php');

        Route::middleware('web')
            ->namespace($this->laravel_namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->laravel_namespace)
            ->group(base_path('routes/api.php'));

        Route::prefix('nits-system-api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(__DIR__ .'/../Routes/api.php');

        //Plugin route loader
        foreach (nits_plugins() as $package){

            $namespace = nits_get_plugin_config($package.'.namespace');

            if($namespace)
            {
                if(File::exists(base_path('/plugins/'). $namespace .'/Routes/api.php', $namespace))
                {
                    Route::prefix('nits-plugins-api/'.nits_get_plugin_config($package.'.name') )
                        ->middleware('api')
                        ->namespace('Nitseditor\Plugins\\'. $namespace .'\Controllers')
                        ->group(base_path('plugins/') . $namespace . '/Routes/api.php');
                }
            }
        }
    }
}
