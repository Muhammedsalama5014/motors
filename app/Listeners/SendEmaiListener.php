<?php

namespace App\Listeners;

use App\Mail\OrderShipped;
use App\Events\SendEmailEvents;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmaiListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendEmailEvents  $event
     * @return void
     */
    public function handle(SendEmailEvents $event)
    {
      Mail::to($event->user->email)->send(new OrderShipped());
        
    }
}
