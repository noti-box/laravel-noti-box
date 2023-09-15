<?php

namespace NotiBox\NotiBox\Commands;

use Illuminate\Console\Command;

class NotiBoxCommand extends Command
{
    public $signature = 'laravel-noti-box';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
