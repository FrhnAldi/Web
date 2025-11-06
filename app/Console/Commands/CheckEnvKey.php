<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckEnvKey extends Command
{
    protected $signature = 'check:envkey';
    protected $description = 'Check if env key is loaded correctly';

    public function handle()
    {
        $this->info('RECAPTCHA_SITE_KEY = ' . env('RECAPTCHA_SITE_KEY'));
        $this->info('RECAPTCHA_SECRET_KEY = ' . env('RECAPTCHA_SECRET_KEY'));
    }
}
