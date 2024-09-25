<?php

namespace Infamoustrey\Cobalt\Commands;

use Illuminate\Console\Command;

class CobaltCommand extends Command
{
    public $signature = 'cobalt';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
