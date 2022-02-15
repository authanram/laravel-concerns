<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns;

abstract class BaseSeeder
{
    abstract public static function table(): string;

    abstract public static function values(): array;
}
