<?php

declare(strict_types=1);

namespace Conia\Core\Tests\Fixtures;

use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;
use Stringable;

class TestLogger implements LoggerInterface
{
    use LoggerTrait;

    public function log(mixed $level, string|Stringable $message, array $context = []): void
    {
    }
}
