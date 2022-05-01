<?php

namespace App\Listeners;

use App\Events\PersonDataSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetSession
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
     * @param  \App\Events\PersonDataSaved  $event
     * @return void
     */
    public function handle(PersonDataSaved $event)
    {
         session(['person_id'=>$event->person_id]);
    }
}
