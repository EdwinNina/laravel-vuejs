<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $userId = Auth::id();
        $contactId = $request->contact_id;

        return Message::select(
            'id',
            DB::raw("IF(`from_id`= $userId, TRUE, FALSE) as written_by_me"),
            'content','created_at'
            )->where(function ($query) use($userId, $contactId){
                $query->where('from_id',$userId)->where('to_id', $contactId);
            })->orWhere(function ($query) use($userId, $contactId){
                $query->where('from_id',$contactId)->where('to_id', $userId);
            })->get();
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
