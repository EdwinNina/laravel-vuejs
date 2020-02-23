<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        return Message::select('id',
            DB::raw("IF(`from_id`= $userId, TRUE, FALSE) as written_by_me"),'content','created_at')
            ->get();
    }
    public function store(Request $request)
    {
        $mensaje = Message::create([
            'from_id' => Auth::id(),
            'to_id' => $request->to_id,
            'content' => $request->content
        ]);
        $data = [];
        $data['success'] = $mensaje;
        return $data;
    }
}
