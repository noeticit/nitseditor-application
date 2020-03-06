<?php

namespace Nitseditor\Application\Commands;


use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateCrudCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:crud';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for creation of Nitseditor Plugin\'s Request.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nits:crud {name} {--plugin=}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $crudName = $this->argument('name');
        if(! $this->option('plugin')) {
            if(count(nits_plugins()) > 1)
            {
                $this->info('You have multiple plugins installed');
                $pluginName = $this->ask('Enter the plugin name');
                if(!File::exists(base_path('/plugins/') . $pluginName))
                    $this->info('Plugin does not exists');
                else
                    $this->makeFiles($crudName, nits_get_plugin_config($pluginName.'.namespace'));
            }
            else
            {
                foreach(nits_plugins() as $plugin)
                    $this->makeFiles($crudName, nits_get_plugin_config($plugin.'.namespace'));
            }
        }
        else {
            if(File::exists(base_path('/plugins/') . $this->option('plugin')))
                $this->makeFiles($crudName, nits_get_plugin_config($this->option('plugin').'.namespace'));
            else
                $this->info('Plugin name mentioned doesn\'t exist');
        }
    }

    protected function makeFiles($name, $pluginName)
    {
        $this->makeModelContent($name, $pluginName);
        $this->makeDatabaseContent($name , $pluginName);
        $this->makeControllerContent($name, $pluginName);
        $this->makeRequestContent($name, $pluginName);
        $this->makeResourcesContent($name, $pluginName);
        $this->makeRouteContent($name, $pluginName);
    }

    /**
     * Make Model function
     * @param $name
     * @param $pluginName
     */
    protected function makeModelContent($name, $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else
        {
            //Checking if folder exists or not
            if(!File::exists(base_path('plugins/'.$pluginName.'/Models')))
            {
                File::makeDirectory(base_path('plugins/'.$pluginName.'/Models'));
            }

            //Creating Models.
            $modelTemplate = str_replace(
                ['{{modelName}}', '{{pluginName}}'],
                [ucfirst(strtolower($name)), $pluginName],
                get_plugin_stub('Model')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Models/{$name}.php"), $modelTemplate);

        }
    }

    /**
     * Make database/Migration function
     * @param $migrationName
     * @param $pluginName
     */
    public function makeDatabaseContent($migrationName, $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else
        {
            //Checking if folder exists or not
            if(!File::exists(base_path('plugins/'.$pluginName.'/Databases/Migrations')))
            {
                File::makeDirectory(base_path('plugins/'.$pluginName.'/Databases/Migrations'));
            }

            //Creating Databases.
            $migrationClass = ucfirst(Str::plural(strtolower($migrationName)));
            $fileName = Carbon::now()->format('Y_m_d_His'). '_create_'. Str::plural(strtolower($migrationName)). '_table';
            $databaseTemplate = str_replace(
                ['{{MigrationClass}}', '{{tableName}}'],
                [$migrationClass, Str::plural(strtolower($migrationName))],
                get_plugin_stub('Database')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Databases/Migrations/{$fileName}.php"), $databaseTemplate);
        }

    }

    /**
     * Make Controller function
     * @param $name
     * @param $pluginName
     */
    public function makeControllerContent($name, $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else
        {
            //Checking if folder exists or not
            if(!File::exists(base_path('plugins/'.$pluginName.'/Controllers')))
            {
                File::makeDirectory(base_path('plugins/'.$pluginName.'/Controllers'));
            }

            //Creating Controller.
            $controllerName = ucfirst(strtolower($name)).'Controller';
            $resourceName = ucfirst(strtolower($name)).'Resource';
            $modelName = ucfirst(strtolower($name));
            $variableName = strtolower($name);
            $storeRequestName = ucfirst(strtolower($name)).'StoreRequest';
            $updateRequestName = ucfirst(strtolower($name)).'UpdateRequest';
            $controllerTemplate = str_replace(
                ['{{pluginName}}', '{{model}}', '{{variable}}', '{{resource}}', '{{$controllerName}}', '{{storeRequestName}}', '{{updateRequestName}}' ],
                [$pluginName, $modelName, $variableName, $resourceName, $controllerName, $storeRequestName, $updateRequestName],
                get_plugin_stub('CrudController')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Controllers/{$controllerName}.php"), $controllerTemplate);

        }

    }

    /**
     * Make Request function
     * @param $name
     * @param $pluginName
     */
    public function makeRequestContent($name, $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else
        {
            //Checking if folder exists or not
            if(!File::exists(base_path('plugins/'.$pluginName.'/Requests')))
            {
                File::makeDirectory(base_path('plugins/'.$pluginName.'/Requests'));
            }

            //Creating Requests.
            $storeRequestName = ucfirst(strtolower($name)).'StoreRequest';
            $storeRequestTemplate = str_replace(
                ['{{requestName}}', '{{pluginName}}'],
                [$storeRequestName, $pluginName],
                get_plugin_stub('Request')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Requests/{$storeRequestName}.php"), $storeRequestTemplate);

            $updateRequestName = ucfirst(strtolower($name)).'UpdateRequest';
            $updateRequestTemplate = str_replace(
                ['{{requestName}}', '{{pluginName}}'],
                [$updateRequestName, $pluginName],
                get_plugin_stub('Request')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Requests/{$updateRequestName}.php"), $updateRequestTemplate);
        }
    }

    /**
     * Make Resources function
     * @param $name
     * @param $pluginName
     */
    public function makeResourcesContent($name, $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else
        {
            //Checking if folder exists or not
            if(!File::exists(base_path('plugins/'.$pluginName.'/Resources')))
            {
                File::makeDirectory(base_path('plugins/'.$pluginName.'/Resources'));
            }

            //Creating Requests.
            $resourceName = ucfirst(strtolower($name)).'Resource';
            $resourceTemplate = str_replace(
                ['{{resourceName}}', '{{pluginName}}'],
                [$resourceName, $pluginName],
                get_plugin_stub('Resource')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Resources/{$resourceName}.php"), $resourceTemplate);
        }
    }

    /**
     * Add Route function
     * @param $name
     * @param $pluginName
     */
    public function makeRouteContent($name, $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else {
            //Checking if folder exists or not
            if (!File::exists(base_path('plugins/' . $pluginName . '/Routes/api.php'))) {
                File::makeDirectory(base_path('plugins/' . $pluginName . '/Routes'));

                //Creating Routes.
                $routeTemplate = str_replace(
                    ['{{pluginName}}'],
                    [$pluginName],
                    get_plugin_stub('Route')
                );

                file_put_contents(base_path("plugins/{$pluginName}/Routes/api.php"), $routeTemplate);
            }

            //Appending route resource.
            File::append(base_path("plugins/{$pluginName}/Routes/api.php"), "\n".'Route::apiResource(\'' . Str::plural(strtolower($name)) . '\', \''.ucfirst(strtolower($name)).'Controller'.'\');');
        }
    }
}
