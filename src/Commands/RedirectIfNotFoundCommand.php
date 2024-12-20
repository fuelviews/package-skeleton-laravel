<?php

namespace Fuelviews\RedirectIfNotFound\Commands;

use Illuminate\Console\Command;

class RedirectIfNotFoundCommand extends Command
{
    public $signature = 'app-redirect-if-not-found';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
