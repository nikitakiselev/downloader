<?php

namespace App\Console;

use App\Console\Commands\DownloadYoutubeCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        DownloadYoutubeCommand::class,
    ];

    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
