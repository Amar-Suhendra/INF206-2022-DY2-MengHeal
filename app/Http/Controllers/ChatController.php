<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\MessageSent;
use App\Message;
use Auth;

class ChatController extends Controller
{
    // index function
    public function index()
    {
        return view('konsul');
    }

    // get messages
    public function getMessages()
    {
        // get all messages
        // return as a resource
        return Message::with('user')->get();;
    }

    // broadcast message
    public function broadcastMessage(Request $request){
        broadcast(new MessageSent($request->user, $request->message))->toOthers();
        return response()->json(['status' => 'Message Sent!']);
    }
}
