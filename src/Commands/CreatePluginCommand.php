<?php

namespace Nitseditor\Application\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class CreatePluginCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:plugin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for creation of Nitseditor Plugin.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nits:plugin {name}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Create plugins for NitsEditor');
        if(!$this->argument('name'))
            $pluginName = $this->ask('Tell us your plugin name:');
        else
            $pluginName = $this->argument('name');

        if(!File::exists(base_path('/plugins/') . $pluginName))
        {
            if(!File::isDirectory(base_path('plugins')))
                File::makeDirectory(base_path('plugins'));

            if($this->makeFiles($pluginName))
                $this->info('Your plugin is created, and default files has also being created');
            else
                $this->info('There is some error in making plugin, delete your plugin folder and try again');

        }
        else
            $this->info('Error! this plugin already exists');
    }

    public function makeFiles($pluginName)
    {
        File::makeDirectory(base_path('/plugins/') . $pluginName);
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Models');
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Events');
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Exceptions');
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Listeners');
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Requests');
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Resources');

        $this->makeSeeders('Install', $pluginName);
        $this->makeSeeders('Uninstall', $pluginName);
        $this->makeRoutesContent($pluginName);
        $this->makeConfigContents($pluginName);
        $this->makeControllerContents('Home', $pluginName);
        $this->makeComposerContents($pluginName);
        $this->makePackageContents($pluginName);
        $this->frontEndConfigContents($pluginName);
        $this->frontEndRoutesContents($pluginName);
        $this->frontEndPageContents($pluginName);

        return true;
    }

    public function makeRoutesContent($pluginName)
    {
        //Checking if folder exists or not
        if(!File::exists(base_path('plugins/'.$pluginName.'/Routes')))
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Routes'));

        //Creating Routes.
        $routeTemplate = str_replace(
            ['{{pluginName}}'],
            [$pluginName],
            get_plugin_stub('Route')
        );

        file_put_contents(base_path("plugins/{$pluginName}/Routes/api.php"), $routeTemplate);

    }

    public function makeControllerContents($name, $pluginName)
    {
        //Checking if folder exists or not
        if(!File::exists(base_path('plugins/'.$pluginName.'/Controllers')))
        {
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Controllers'));
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Controllers/Middlewares'));
        }

        //Creating Controller.
        $controllerName = ucfirst(strtolower($name)).'Controller';
        $controllerTemplate = str_replace(
            ['{{$controllerName}}', '{{pluginName}}'],
            [$controllerName, $pluginName],
            get_plugin_stub('Controller')
        );

        file_put_contents(base_path("plugins/{$pluginName}/Controllers/{$controllerName}.php"), $controllerTemplate);
    }

    public function makeConfigContents($pluginName)
    {
        //Creating Config file.
        $name = ucfirst($pluginName);
        $configTemplate = str_replace(
            ['{{name}}', '{{namespace}}'],
            [$pluginName, $name],
            get_plugin_stub('config')
        );

        file_put_contents(base_path("plugins/{$pluginName}/config.php"), $configTemplate);
    }

    public function makeSeeders($name, $pluginName)
    {
        //Checking if folder exists or not
        if(!File::exists(base_path('plugins/'.$pluginName.'/Databases')))
        {
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Databases'));
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Databases/Migrations'));
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Databases/Seeds'));
            File::makeDirectory(base_path('plugins/'.$pluginName.'/Databases/Factories'));
        }

        //Creating Controller.
        $seederName = ucfirst(strtolower($name)).'Seeder';
        $seederTemplate = str_replace(
            ['{{seederName}}', '{{pluginName}}'],
            [$seederName, $pluginName],
            get_plugin_stub('Seeder')
        );

        file_put_contents(base_path("/plugins/{$pluginName}/Databases/Seeds/{$seederName}.php"), $seederTemplate);;
    }

    public function makeComposerContents($pluginName)
    {
        //Creating composer.json file.
        $configTemplate = str_replace(
            ['{{name}}'],
            [strtolower($pluginName)],
            get_plugin_stub('composer')
        );

        file_put_contents(base_path("plugins/{$pluginName}/composer.json"), $configTemplate);
    }

    public function makePackageContents($pluginName)
    {
        //Creating Package.json file.
        $configTemplate = str_replace(
            ['{{name}}'],
            [$pluginName],
            get_plugin_stub('package')
        );

        file_put_contents(base_path("plugins/{$pluginName}/package.json"), $configTemplate);
    }

    public function frontEndConfigContents($pluginName)
    {
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Frontend');
        File::makeDirectory(base_path('/plugins/') . $pluginName .'/Frontend/Pages');

        //Creating front end config.js file.
        $configTemplate = str_replace(
            ['{{name}}', '{{title}}'],
            [$pluginName, ucfirst($pluginName)],
            get_plugin_stub('front-config')
        );

        file_put_contents(base_path("plugins/{$pluginName}/Frontend/config.js"), $configTemplate);
    }

    public function frontEndRoutesContents($pluginName)
    {
        //Creating front end routes.js file.
        $configTemplate = str_replace(
            ['{{name}}'],
            [$pluginName],
            get_plugin_stub('front-routes')
        );

        file_put_contents(base_path("plugins/{$pluginName}/Frontend/routes.js"), $configTemplate);
    }

    public function frontEndPageContents($pluginName)
    {
        //Creating front end page file.
        $configTemplate = str_replace(
            ['{{name}}'],
            [$pluginName],
            get_plugin_stub('front-page')
        );

        file_put_contents(base_path("plugins/{$pluginName}/Frontend/Pages/Home.vue"), $configTemplate);
    }
}
