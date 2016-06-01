<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TransferEvent extends Event
{
    use SerializesModels;
    public $data; //property to pass information to socket.io

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($data)
    {
         $this->data = compact('data');
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['event-tansfer'];
    }
}
