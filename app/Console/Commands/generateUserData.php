<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Facades\Logs;
class generateUserData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:generate-users{count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates the Test User Data and insert into the datadase';

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
        $userData=$this->argument('count');
        for($i=0;$i<$userData;$i++){
            User::factory()->create();
        }
        // Log::info("hello");
    }
}
