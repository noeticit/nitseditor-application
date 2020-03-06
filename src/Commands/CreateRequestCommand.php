<?php

namespace Nitseditor\Application\Commands;


use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateRequestCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:request';

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
    protected $signature = 'nits:request {name} {--plugin=}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $requestName = $this->argument('name');

        if(! $this->option('plugin'))
        {
            if(count(nits_plugins()) > 1)
            {
                $this->info('You have multiple plugins installed');
                $pluginName = $this->ask('Enter the plugin name');
                !File::exists(base_path('/plugins/') . $pluginName) ? $this->info('Plugin does not exists') : $this->makeRequestContent($requestName, nits_get_plugin_config($pluginName.'.namespace'));
            }
            else
            {
                foreach(nits_plugins() as $plugin)
                    $this->makeRequestContent($requestName, nits_get_plugin_config($plugin.'.namespace'));
            }
        }
        else
        {
            if(File::exists(base_path('/plugins/') . $this->option('plugin') .'/Requests'))
                $this->makeRequestContent($requestName, nits_get_plugin_config($this->option('plugin').'.namespace'));
            else
                $this->info('Plugin name mentioned doesn\'t exist');
        }
    }

    /**
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
            $requestName = ucfirst(strtolower($name)).'Request';
            $requestTemplate = str_replace(
                ['{{requestName}}', '{{pluginName}}'],
                [$requestName, $pluginName],
                get_plugin_stub('Request')
            );

            file_put_contents(base_path("plugins/{$pluginName}/Requests/{$requestName}.php"), $requestTemplate);
        }
    }
}
