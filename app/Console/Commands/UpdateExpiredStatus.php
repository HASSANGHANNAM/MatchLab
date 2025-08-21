<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UpdateExpiredStatus extends Command
{
    protected $signature = 'update:expired-status';
    protected $description = 'Update status to false for expired records in lab table daily at midnight';

    public function handle()
    {
        $now = Carbon::now();
        $updated = DB::table('labS')
            ->where('expiry_time', '<', $now)
            ->where('subscriptions_status', true)
            ->update(['subscriptions_status' => false]);
        $this->info("Updated $updated expired records at $now");

        return 0;
    }
}
