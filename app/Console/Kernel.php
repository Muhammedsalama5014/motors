<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
       
        $users = User::all();
        foreach($users as $user){
            if(!empty($user->orders)){
                foreach($user->orders as $order){
                     $time = $order->exp_date;
                     $time2=strtotime($time);
                     $day = date('d',$time2) ; //to get day in date
                  
                     
                     $send_time = Carbon::parse( $time)->subHours(2)->format('H:i'); //time befor exorire b 2 hours

                   
                   $schedule->command('send:email')->monthlyOn($day,  $send_time);//1, 16, '13:00'
                       
                     
                    

      

                  
                }
            
            }
           
         }

        
      
    
       
          
        
        
      
       
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
