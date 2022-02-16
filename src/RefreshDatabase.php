<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns;

trait RefreshDatabase
{
    public function migrateFresh(): void
    {
        $this->artisan('migrate:fresh');
    }

    public function migrateFreshAndSeed(): void
    {
        $this->artisan('migrate:fresh', ['--seed' => true]);
    }
}
