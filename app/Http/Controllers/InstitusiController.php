<?php

namespace App\Http\Controllers;

use App\Models\Institusi;
use Illuminate\Http\Request;
use App\Models\User;


class InstitutController extends Controller
{
    //
    public function index()
    {
        return view('/SidebarInstitusi/institusi');
    }

    public function kalender()
    {
        return view('/SidebarInstitusi/kalender');
    }
    public function dashboard()
    {
        return view('/institusi/sidebar/dashboard');
    }
}
