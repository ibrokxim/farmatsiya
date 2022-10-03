<?php

namespace App\Http\Controllers\Admin;

use App\DTO\PostForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.users.index", [
            "users" => User::all(),
        ]);
    }

    
}