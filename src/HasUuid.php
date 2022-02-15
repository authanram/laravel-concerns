<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns;

use Illuminate\Support\Str;

trait HasUuid
{
    public function initializeHasUuid(): self
    {
        $this->setIncrementing(false);

        $this->setKeyType('string');

        $keyName = $this->getKeyName() === 'uuid' ? 'uuid' : 'id';

        $this->attributes[$keyName] = empty($this->attributes[$keyName]) === false
            ? $this->attributes[$keyName]
            : Str::uuid()->toString();

        return $this;
    }
}
