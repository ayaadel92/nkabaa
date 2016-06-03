<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
// use Illuminate\Contracts\Queue\ShouldBroadcast; //To make an event broadcastable

class TransferEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $transfer; //property to pass information to socket.io

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($transfer)
    {
         $this->transfer = compact('transfer');
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     * returns an array of channels the event should broadcast on
     */

    public function broadcastOn()
    {
        return ['event-tansfer'];
    }
}
