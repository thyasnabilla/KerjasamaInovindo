<?php

namespace App\Http\Controllers;

use App\Models\jenis;
use App\Models\JenisKerjasama;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $post['jenis']  = jenis::all();
        return view('/institusi/sidebar/dashboard')->with($post);
    }
}
