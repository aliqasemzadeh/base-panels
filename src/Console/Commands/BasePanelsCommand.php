<?php

declare(strict_types=1);

namespace BasePanels\BasePanels\Console\Commands;

use Illuminate\Console\Command;

class BasePanelsCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'base-panels:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package base-panels.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('BasePanels placeholder command executed.');

        return self::SUCCESS;
    }
}
