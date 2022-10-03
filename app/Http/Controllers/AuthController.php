<?php

namespace App\Http\Controllers;


use App\Jobs\ForgotUserEmailJob;
use App\Mail\ForgotPassword;
use App\Models\User;
use App\Notifications\UsersNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if(auth("web")->attempt($data)) {
            return redirect(route("welcome"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function showForgotForm()
    {
        return view("auth.forgot");
    }

    public function forgot(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "exists:users"],
        ]);

        $user = User::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $user->password = bcrypt($password);
        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route("home"));
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "dignity" => ["required", "string"],
            "name" => ["required", "string"],
            "surname" => ["required", "string"],
            "second_name",
            "orcid_id",
            "institute" => ["required", "string"],
            "kafedra" => ["required", "string"],
            "address" => ["required", "string"],
            "city" => ["required", "string"],
            "country" => ["required"],
            "postcode" => ["required", "string"],
            "number" => ["required"],
            "second_number",
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required","min:8", "confirmed"]
        ]);

        $user = User::create([
            "dignity" => $data["dignity"],
            "name" => $data["name"],
            "surname" => $data["surname"],
            "second_name" => $data['second_name'] ?? 0,
            "orcid_id" => $data["orcid_id"] ?? 0,
            "institute" => $data["institute"],
            "kafedra" => $data["kafedra"],
            "address" => $data["address"],
            "city" => $data["city"],
            "country" => $data["country"],
            "postcode" => $data["postcode"],
            "number" => $data["number"],
            "second_number" => $data['second_number'] ?? 0,
            "email" => $data["email"],
            "password" => bcrypt($data["password"])
        ]);

        $user->notify(new UsersNotification($user));
        if($user) {
            event(new Registered($user));

            auth("web")->login($user);
        }
        session()->flash('success', 'Вы успешно создали аккаунт');

        return redirect(route("welcome"));
    }

}
