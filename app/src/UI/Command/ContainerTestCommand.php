<?php
declare(strict_types=1);

namespace App\UI\Command;

use Spiral\Console\Command;
use Spiral\Core\Container;

class ContainerTestCommand extends Command
{
    protected const NAME = "app:test:container";

    protected function perform(Container $container)
    {
        print_r($container->getInjectors());
    }
}