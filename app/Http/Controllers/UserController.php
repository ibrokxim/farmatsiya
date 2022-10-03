<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModelsUserFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Models\StatesSend;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request, StatesSend $states, ModelsUser $user){
        // $states = $request->user()->states()->orderBy('created_at', 'desc')->get();

        return view('/submited/index', compact('states'));
    }


    // public function show($id, ModelsUser $user, StatesSend $states){
    //     $user = ModelsUser::findOrFail($id);
    //     $states = $user->states;
    //     return view('/submited/index', compact('states'));
    //    }
    public function showUserProfile(){

        return view("profile.index", [
            "user" => Auth::user(),
        ]);
    }   


    public function editUserProfile(ModelsUser $user, $id,ModelsUserFormRequest $request)
    {   
    //     $user = ModelsUser::findOrFail($id);
    //     return view('profile.edit',[
    //         'user' => $user,
    //     ]);
            return view('/profile/edit')->with('user', auth()->user());    
     }

    public function store(ModelsUserFormRequest $request)
    {
        $data = $request->validated();

        ModelsUser::create($data);

        return redirect(route("profile.index"));
    }

    public function update(ModelsUserFormRequest $request, $id)
    {
        $user = ModelsUser::findOrFail($id);

        $user->update($request->validated());

        return redirect(route("profile.index"));
    }
}
      