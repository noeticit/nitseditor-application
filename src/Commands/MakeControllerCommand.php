<?php

namespace Nitseditor\Application\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeControllerCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:controller';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for creation of Nitseditor Plugin\'s Controller.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nits:controller {name} {--plugin=}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $controllerName = $this->argument('name');

        if(! $this->option('plugin'))
        {
            if(count(nits_plugins()) > 1)
            {
                $this->info('You have multiple plugins installed');
                $pluginName = $this->ask('Enter the plugin name');
                !File::exists(base_path('/plugins/') . $pluginName) ? $this->info('Plugin does not exist') : $this->makeControllerContent($controllerName, nits_get_plugin_config($pluginName.'.namespace'));
            }
            else
            {
                foreach(nits_plugins() as $plugin)
                    $this->makeControllerContent($controllerName, nits_get_plugin_config($plugin.'.namespace'));
            }
        }
        else
        {
            if(File::exists(base_path('/plugins/') . $this->option('plugin')))
                $this->makeControllerContent($controllerName, nits_get_plugin_config($this->option('plugin').'.namespace'));
            else
                $this->info('Plugin name mentioned doesn\'t exist');
        }

    }


    /**
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
            $controllerTemplate = str_replace(
                ['{{$controllerName}}', '{{pluginName}}'],
                [$controllerName, $pluginName],
                get_plugin_stub('Controller')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Controllers/{$controllerName}.php"), $controllerTemplate);

        }

    }
}
