<?php

namespace SmartDato\SfExpress\Commands;

use Illuminate\Console\Command;

class SfExpressCommand extends Command
{
    public $signature = 'sf-express';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
