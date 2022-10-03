<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Http\Requests\Admin\StatesRequest;
use App\Models\StatesSend;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SendStateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.states.index", [
            "states" => StatesSend::with('user')->orderBy('id','DESC')->get(),
        ]);
    }

 
    public function store(PostFormRequest $request)
    {
        StatesSend::create($request->validated());

        return redirect(route("admin.states.index"));
    }

    public function create()
    {
        return view("admin.states.create", []);
    }

    
    /**
     * To update Status of User
     * 
     * @param Integer states_id
     * @param Integer $status_code   
     * @return Success Response   
     */
   
    public function show($id){
        $state = StatesSend::findOrFail($id);
         return view('admin.states.show', [
             "state" => $state,
             "user" => User::all(),
          
         ]);
    }
    
    public function update(StatesRequest $request, StatesSend $state)
    {

        $state->update($request->all());

        return redirect(route("admin.states.index"))->with('success','Статус изменен успешно!');;
    }
}
