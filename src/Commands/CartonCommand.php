<?php

namespace Brandonjjon\Carton\Commands;

use Illuminate\Console\Command;

class CartonCommand extends Command
{
    public $signature = 'carton:install';

    public $description = 'Publishes the config';

    public function handle()
    {
        $this->callSilent('vendor:publish', ['--tag' => 'carton-config', '--tag' => 'carton-views']);
        $this->info('[Carton] was installed successfully.');

        // $this->comment('All done');

        // return self::SUCCESS;
    }
}
