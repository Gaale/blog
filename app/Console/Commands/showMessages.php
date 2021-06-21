<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class showMessages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:showMessages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show messages';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('Common message');
        $this->info('Info message');
        $this->error('Error message');
    }
}
