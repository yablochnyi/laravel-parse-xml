<?php

namespace App\Console\Commands;

use App\Http\Controllers\SendController;
use Illuminate\Console\Command;

class SendProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return SendController::send();
    }
}
