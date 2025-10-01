<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote');

Schedule::command('disposable:update')->weekly();
Schedule::command(' app:generate-sitemap')->daily();


Schedule::command('queue:work --tries=3 --max-time=3600 --stop-when-empty')
    ->everyMinute()
    ->withoutOverlapping()
    ->sendOutputTo(storage_path('/logs/queue-jobs.log'));
