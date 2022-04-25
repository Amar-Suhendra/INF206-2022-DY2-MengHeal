<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    // index function
    public function index()
    {
        return view('konsul');
    }
}
