<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Message implements shouldBroadcast // Delete implements shouldBroadcast for default code
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // variables for chat
    public $username;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($username, $message)
    {
        $this->username = $username;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */

    /** OLD CODE
     * / public function broadcastOn()
     * {
     *     return new PrivateChannel('channel-name');
     * }
     */

     // NEW CODE
    public function broadcastOn()
    {
        return new Channel('chat');
    }

    // Alias for broadcastOn
    public function broadcastAs()
    {
        return 'message';
    }
}
