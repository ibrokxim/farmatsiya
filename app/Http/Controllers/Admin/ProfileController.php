<?php

namespace App\Http\Controllers\Admin;

use App\DTO\PostForm;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.profile.user");
    }
}