<?php

namespace Nitseditor\Application\Commands;


use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateDatabaseCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for creation of Nitseditor Plugin\'s Table.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nits:table {name} {--plugin=}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $migrationName = $this->argument('name');

        if(! $this->option('plugin'))
        {
            if(count(nits_plugins()) > 1)
            {
                $this->info('You have multiple plugins installed');
                $pluginName = $this->ask('Enter the plugin name');
                !File::exists(base_path('/plugins/') . $pluginName) ? $this->info('Plugin does not exists') : $this->makeDatabaseContent($migrationName, nits_get_plugin_config($pluginName.'.namespace'));
            }
            else
            {
                foreach(nits_plugins() as $plugin)
                    $this->makeDatabaseContent($migrationName , nits_get_plugin_config($plugin.'.namespace'));
            }
        }
        else
        {
            if(File::exists(base_path('/plugins/') . $this->option('plugin')))
                $this->makeDatabaseContent($migrationName, nits_get_plugin_config($this->option('plugin').'.namespace'));
            else
                $this->info('Plugin name mentioned doesn\'t exist');
        }

    }

    /**
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
}
