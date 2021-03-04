<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:setAdmin{test}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give the admin privileges to a user';

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
        $this->info('Display this on the screen');
        $this->info($this->argument('test'));

        return 0;
    }
}
