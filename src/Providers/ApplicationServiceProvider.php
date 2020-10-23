<?php

namespace Nitseditor\Application\Providers;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Nitseditor\Application\Commands\CreateCrudCommand;
use Nitseditor\Application\Commands\CreateDatabaseCommand;
use Nitseditor\Application\Commands\CreatePluginCommand;
use Nitseditor\Application\Commands\CreateRequestCommand;
use Nitseditor\Application\Commands\InstallNitsCommand;
use Nitseditor\Application\Commands\MakeControllerCommand;
use Nitseditor\Application\Commands\MakeModelCommand;
use Nitseditor\Application\Commands\SeedingCommand;

class ApplicationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function register()
    {

        //Register migrations and commands.
        if ($this->app->runningInConsole()) {

            $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

            $this->registerCommands();

//            $this->app->make(Factory::class)->load(__DIR__.'/../Database/factories');

            if(File::exists(base_path().'/vendor/nitseditor/framework/src/Database/Factories'))
            {
//                $this->app->singleton(Factory::class, function (){
//                    $faker = $this->app->make(Faker::class);
//                    return Factory::construct($faker,base_path().'/vendor/nitseditor/framework/src/Database/factories');
//                });
                $this->app->singleton(Factory::class, function (){
                    $faker = $this->app->make(Faker::class);
                    return Factory::construct($faker,__DIR__.'/../Database/Factories');
                });
            }
        }

        // Load the helpers in NitsEditor
        require __DIR__ .'/../Helpers/helpers.php';

        //Plugins migrations, factories and seeder.
        foreach (nits_plugins() as $package) {
            $providers = collect(nits_get_plugin_config($package.'.providers'));

            if($providers->count() > 0)
                $providers->map(function ($item) {
                    $this->app->register($item);
                });

            $namespace = nits_get_plugin_config($package.'.namespace');
            if($namespace)
            {
                $this->loadViewsFrom(base_path().'/plugins/'. $namespace .'/Views', $namespace);

                if ($this->app->runningInConsole()) {
                    if(File::exists(base_path().'/plugins/'. $namespace .'/Databases/Migrations'))
                        $this->loadMigrationsFrom(base_path().'/plugins/'. $namespace .'/Databases/Migrations');

                    if(File::exists(base_path().'/plugins/'. $namespace . '/Databases/Factories'))
                    {
                        $this->app->singleton(Factory::class, function () use($namespace){
                            $faker = $this->app->make(Faker::class);
                            return Factory::construct($faker,base_path().'/plugins/'. $namespace . '/Databases/Factories');
                        });
                    }
                }
            }

        }
    }

    /**
     * Register Commands.
     *
     * @return void
     */
    public function registerCommands()
    {

        $this->commands([
            CreatePluginCommand::class,
            MakeModelCommand::class,
            MakeControllerCommand::class,
            CreateDatabaseCommand::class,
            CreateRequestCommand::class,
            CreateCrudCommand::class,
            SeedingCommand::class,
            InstallNitsCommand::class,
        ]);
    }
}
