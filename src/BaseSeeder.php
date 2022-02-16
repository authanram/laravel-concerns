<?php

declare(strict_types=1);

namespace Authanram\LaravelConcerns;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

abstract class BaseSeeder extends Seeder
{
    abstract public static function table(): string;

    abstract public static function values(): array;

    public function run(): void
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
