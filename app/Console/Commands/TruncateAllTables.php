<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TruncateAllTables extends Command
{
    protected $signature = 'db:truncate-all';

    protected $description = 'Truncate all application tables (keeps tables, removes all data)';

    public function handle(): int
    {
        $tables = [
            'users',
            'password_reset_tokens',
            'sessions',
            'cache',
            'cache_locks',
            'jobs',
            'job_batches',
            'failed_jobs',
            'merch',
            'events',
            'messages',
        ];

        Schema::disableForeignKeyConstraints();

        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                DB::table($table)->truncate();
                $this->info("Truncated: {$table}");
            }
        }

        Schema::enableForeignKeyConstraints();

        $this->info('All tables have been truncated.');
        return self::SUCCESS;
    }
}
