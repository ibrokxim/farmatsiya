<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function set_lang($id)
    {
        $response = new \Illuminate\Http\Response('Set Lang');
        return $response->withCookie(cookie()->forever('lang', $id));
    }
}
