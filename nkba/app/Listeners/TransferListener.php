<?php

namespace App\Listeners;

use App\Events\TransferEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TransferListener implements ShouldQueue 
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
     * @param  TransferEvent  $event
     * @return void
     */
    public function handle(TransferEvent $event)
    {
        //
    }
}
