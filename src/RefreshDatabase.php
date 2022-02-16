<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns;

trait RefreshDatabase
{
    use \Illuminate\Foundation\Testing\RefreshDatabase;

    public function refreshAndSeedDatabase(): void
    {
        $this->artisan('migrate:fresh', ['--seed' => true]);
    }
}
