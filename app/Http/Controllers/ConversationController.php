<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index()
    {
        return  Conversation::where('user_id', Auth::id())
        ->get([
            'id',
            'contact_id',
            'last_message',
            'last_time',
            'listen_notifications',
            'has_blocked'
        ]);
    }

}
