<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
   

    public function send(){
        return view('message.send',[
            'admins' => AdminUser::all(),
        ]);
    }
    public function show(){
        return view('message.index',[
            'admins' => AdminUser::all(),
        ]);
    }
    public function sended(){
        return view('message.sended',[
            'messages' => Message::all(),
        ]);
    }
    public function showid($id)
    {
        $post = Message::findOrFail($id);

        return view('message.sended', [
            "messages" => Message::all(),
        ]);
    }

    public function sendMsg(Request $request){
        $validatedData = $request->validate([
        'recipient'=> 'required', 
        'subject' => 'required', 
        'message' => 'required',
       ]);
       $msg = Message::create([
        "recipient" => $validatedData["recipient"],
        "subject" => $validatedData["subject"],
        "message" => $validatedData["message"],
       ]);
       redirect('/message/index');
    }
}
