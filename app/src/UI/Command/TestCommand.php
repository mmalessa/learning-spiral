<?php
declare(strict_types=1);

namespace App\UI\Command;

use Spiral\Console\Command;

class TestCommand extends Command
{
    protected const NAME        = 'app:test:basic';
    protected const DESCRIPTION = 'This is test command';

    /**
     * Perform command
     */
    protected function perform()
    {
        echo "Hello, It's me!\n\n";
    }
}