<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'salary' => '$3,000',
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'salary' => '$3,500',
            ],
            [
                'id' => 3,
                'title' => 'Java Developer',
                'salary' => '$4,000',
            ],
        ];
    }

    public static function find(int $id): ?array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);
        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
