<?php
declare(strict_types=1);

namespace App\UI\Command;

use App\Application\Command\DoSomething;
use Spiral\Console\Command;
use Spiral\Jobs\Options;
use Spiral\Jobs\QueueInterface;

class ProducerTestCommand extends Command
{
    protected const NAME        = 'app:test:producer';
    protected const DESCRIPTION = 'This is test producer command';

    protected function perform(QueueInterface $queue)
    {
        echo "Hello, It's me - producer!\n\n";

        $payload = [
            'parameter1' => 'value1',
            'parameter2' => 'value2',
        ];
        $options = new Options();

        $queue->push(DoSomething::class, $payload, $options);
    }
}