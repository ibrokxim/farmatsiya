<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Mail\ContactMail;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Utilities\Notification\MessengerNotificatorInterface;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Notifications\UsersNotification;
class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $posts = Post::query()
            ->orderBy("created_at", "DESC")->limit(3)->get();

        return view('first', [
            "posts" => $posts,
        ]);
    }
    
    public function welcome(){
        return view('/welcome');
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
     {
        Mail::to("journal@ftti.uz")->send(new ContactMail($request->validated()));
        
        return redirect(route("welcome"));
     }
     
    public function setLocale($locale){
        session(['user_locale' => $locale]);
        return redirect()->back();
        } 

    public function getEmail(){
        return view('/emails/email',[
            'user' => Auth::user(),
        ]);
    }
    public function store(){
        $user = User::first();
        $user->notify(new UsersNotification($user));
    }
}