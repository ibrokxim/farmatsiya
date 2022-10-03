<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatesSend;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    public function accept()
    {
        return view("admin.states.accept", [
            "states" => StatesSend::with('user')
                        ->get(),
         
        ]);
    }
    public function reject()
    {
        return view("admin.states.reject", [
            "states" => StatesSend::with('user')
                        ->get(),
         
        ]);
    }
     public function show($id)
     {
         $post = StatesSend::findOrFail($id);
 
         return view('posts.show', [
             "post" => $post,
         ]);
     }
 
}
