<?php

declare(strict_types=1);

namespace Conia\Core;

/** @psalm-api */
interface ConfigInterface
{
    public function set(string $key, mixed $value): void;

    public function has(string $key): bool;

    public function get(string $key, mixed $default = null): mixed;
}
