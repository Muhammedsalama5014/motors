<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Events\SendEmailEvents;
use Illuminate\Console\Command;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

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
        $users = User::all();
        foreach($users as $user){
                if(!empty($user->orders))
                {
                    event(new SendEmailEvents($user));

                }

        }
    }
}
