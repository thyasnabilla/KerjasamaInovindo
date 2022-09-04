<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function verify()
    {
        return view('auth.verify');
    }
}
