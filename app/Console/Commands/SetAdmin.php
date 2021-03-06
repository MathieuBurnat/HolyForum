<?php

namespace App\Console\Commands;
use App\Models\User;
use App\Models\Role;

use Illuminate\Console\Command;

class SetAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:setadmin{pseudo}';

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
        //Get variable
        $pseudo = $this->argument('pseudo');

        //Get admin's slug
        $slug = Role::where('slug', "ADMI")->first();

        $this->info('== Grant a user the administrator privileges ==');

        $this->info("Pseudo : " . $pseudo);
        $this->info("Role's SLUG : " . $slug);

        //If the pseudo
        $user = User::where('pseudo', $pseudo)->first();
        if ($user === null) 
            $this->line('<fg=red> Error : The pseudo doesn\'t exist. ');

        $user->role_id = $slug->id;
        
        $user->save();

        $this->info("Done !");

        return 0;
    }
}
