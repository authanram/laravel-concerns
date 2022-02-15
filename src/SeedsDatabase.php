<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns;

use Illuminate\Support\Facades\DB;

trait SeedsDatabase
{
    public static function handle(): void
    {
        $rows = static::values();

        foreach ($rows as $row) {
            DB::insert(self::query($row), array_values($row));
        }
    }

    private static function query(array $row): string
    {
        $fields = array_keys($row);

        return sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            static::table(),
            implode(', ', $fields),
            rtrim(str_repeat('?, ', count($fields)), ', '),
        );
    }
}
