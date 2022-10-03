<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('profile.index',[
            'user' => Auth::user(),
        ]);
    }
    

    public function edit(ModelsUser $user)
    {   
        return view("profile.index",[
            "user" => $user,
        ]);
    }

    public function store(ProfileRequest $request)
    {
        ModelsUser::create($request->validated());

        return redirect(route("profile.index"));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(ProfileRequest $request, ModelsUser $user)
    {
        $user->update($request->validated());

        return redirect(route("profile.index"));
    }

    // public function update(ModelsUser $user)
    // { 
    //     $this->validate(request(), [
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|confirmed'
    //     ]);

    //     $user->name = request('name');
    //     $user->email = request('email');
    //     $user->password = bcrypt(request('password'));

    //     $user->save();

    //     return back();
    // }
}