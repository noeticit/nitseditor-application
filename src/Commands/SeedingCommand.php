<?php

namespace Nitseditor\Application\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class SeedingCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for seeding database of Nitseditor Plugin.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nits:seed {--plugin=}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if(! $this->option('plugin'))
        {
            if(count(nits_plugins()) > 1)
            {
                $this->info('You have multiple plugins installed');
                $pluginName = $this->ask('Enter the plugin name');
                !File::exists(base_path('/plugins/') . $pluginName) ? $this->info('Plugin does not exist') : $this->seedDatabase( nits_get_plugin_config($pluginName.'.namespace'));
            }
            else
            {
                foreach(nits_plugins() as $plugin)
                    $this->seedDatabase(nits_get_plugin_config($plugin.'.namespace'));
            }
        }
        else
        {
            if(File::exists(base_path('/plugins/') . $this->option('plugin')))
                $this->seedDatabase(nits_get_plugin_config($this->option('plugin').'.namespace'));
            else
                $this->info('Plugin name mentioned doesn\'t exist');
        }

    }

    /**
     * @param $name
     * @param $pluginName
     */
    protected function seedDatabase( $pluginName)
    {
        if(!isset($pluginName))
            $this->info('Check your config file or namespace missing in configuration');
        else
        {
            //Checking if folder exists or not
            if(!File::exists(base_path('plugins/'.$pluginName.'/Databases/Seeds/InstallSeeder.php')))
            {
                $this->info('Seeding file missing!');
            }

            $fullClassName = "Nitseditor\\Plugins\\${pluginName}\\Databases\\seeds\\InstallSeeder";

            Artisan::call("db:seed", ['--class' => $fullClassName]);

//            Artisan::queue('db:seed', ['--class' => 'Nitseditor\\Plugins\\'.$pluginName.'\\Databases\\seeds\\InstallSeeder']);

//            Artisan::call("db:seed --class=Nitseditor\Plugins\$pluginName\Databases\seeds\InstallSeeder");

        }
    }

}
