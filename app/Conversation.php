<?php

namespace App;

use App\Conversation;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function index()
    {
        return  Conversation::where('user_id', Auth::id())->get();
    }
}
