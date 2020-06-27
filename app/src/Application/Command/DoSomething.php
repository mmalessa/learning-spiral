<?php
declare(strict_types=1);

namespace App\Application\Command;

use Spiral\Jobs\JobHandler;

class DoSomething extends JobHandler
{
    public function invoke(array $payload)
    {
        dumprr($payload);
    }
}