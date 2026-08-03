<?php

namespace App\Database;

/**
 * Laravel-style timestamp helpers for Forge migrations.
 */
trait MigrationTimestamps
{
    /**
     * created_at + updated_at (+ optional deleted_at)
     *
     * @return array<string, array<string, mixed>>
     */
    protected function timestamps(bool $softDeletes = false): array
    {
        $fields = [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ];

        if ($softDeletes) {
            $fields['deleted_at'] = [
                'type' => 'DATETIME',
                'null' => true,
            ];
        }

        return $fields;
    }
}
