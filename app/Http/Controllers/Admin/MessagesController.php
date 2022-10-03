<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\Message;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{
    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()
    {
        return view('admin.message.index',[
            'users' => User::all(),
        ]);
    }


    public function sendMessageTo($recipient, $message, $subject)
    {
        return $this->sent()->create([
            'body'       => $message,
            'subject'    => $subject,
            'sent_to_id' => $recipient,
        ]);   
    }
    
    public function SendMessage(Request $request){
        AdminUser::user()->sendMessageTo(1, $request->subject, $request->body);
}
    // public function index()
    // {
    //     return view('admin.message.index',[
    //         'users' => AdminUser::all(),
    //         ]);
    // }
    public function store(Request $request)
    {
        $message = Message::create([
            'subject' => $request->subject,
            'body' => $request->subject,
        ]);

        // Message
        Message::create([
            'sent_to_id' => $message->id,
            'sender_id' => Auth::id(),
            'body' => $request->message,
        ]);

        // Recipients
        $message->addParticipant($request->recipient);

        return redirect()->route('admin.message.index')->with('success', 'Message sent successfully.');
    }
 

    public function show(){
        return view('/message/send',[
            'admins' => AdminUser::all(),
        ]); 
    }
public function composeMessage()
{
    // ...

    // Get a collection of `[id => name]` probable recipients,
    // so that the logged-in user can choose from. Note that 
    // you probably want to exclude the current user herself
    // from the list.
    return view('admin.message.index',[
    'users' => AdminUser::all(),
    ]);
// AdminUser::where('id', '!=', Auth::id())->pluck('name', 'id')]);    
}
 
 
 
     // public function index()
    // {
    //     $threads = Thread::forUser(Auth::id())
    //         ->withCount('messages')
    //         ->latest()
    //         ->get()
    //         ->reject(function ($value) {
    //             return $value->messages_count == 1 && $value->creator() == Auth::user();
    //         });

    //     return view('messenger.index', compact('threads'));
    // }

    // /**
    //  * Shows a message thread.
    //  *
    //  * @param $id
    //  * @return mixed
    //  */
    // public function show(Thread $thread)
    // {
    //     $thread->markAsRead(Auth::id());

    //     return view('messenger.show', compact('thread'));
    // }

    // /**
    //  * Creates a new message thread.
    //  *
    //  * @return mixed
    //  */
    // public function create()
    // {
    //     $users = User::where('id', '!=', Auth::id())->get();

    //     return view('messenger.create', compact('users'));
    // }

    // /**
    //  * Stores a new message thread.
    //  *
    //  * @return mixed
    //  */
    // public function store(Request $request)
    // {
    //     $thread = Thread::create([
    //         'subject' => $request->subject,
    //     ]);

    //     // Message
    //     Message::create([
    //         'thread_id' => $thread->id,
    //         'user_id' => Auth::id(),
    //         'body' => $request->message,
    //     ]);

    //     // Sender
    //     Participant::create([
    //         'thread_id' => $thread->id,
    //         'user_id' => Auth::id(),
    //         'last_read' => new Carbon,
    //     ]);

    //     // Recipients
    //     $thread->addParticipant($request->recipient);

    //     return redirect()->route('messages')->with('success', 'Message sent successfully.');
    // }

    // /**
    //  * Adds a new message to a current thread.
    //  *
    //  * @param $id
    //  * @return mixed
    //  */
    // public function update(Request $request, Thread $thread)
    // {
    //     $thread->activateAllParticipants();

    //     Message::create([
    //         'thread_id' => $thread->id,
    //         'user_id' => Auth::id(),
    //         'body' => $request->message,
    //     ]);

    //     $participant = Participant::firstOrCreate([
    //         'thread_id' => $thread->id,
    //         'user_id' => Auth::id(),
    //     ]);

    //     $participant->last_read = new Carbon;
    //     $participant->save();

    //     return redirect()->route('messages')->with('success', 'Reply sent successfully.');
    // }

    // public function destroy(Thread $thread)
    // {
    //     $thread->removeParticipant(Auth::id());

    //     return redirect()->route('messages')->with('success', 'Thread deleted successfully.');
    // }
}
