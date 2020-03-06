<?php

namespace Nitseditor\Application\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallNitsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'nits:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for installation of Nitseditor.';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nits:install';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Copying .env.example file to .env file

        if(!file_exists(base_path('.env')))
            copy('.env.example', '.env');

        if(!env('APP_KEY'))
            Artisan::call('key:generate --ansi');

        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
        Artisan::call('nits:seed');
        Artisan::call('passport:install');
    }


}
