<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Services;

class HomeController extends Controller
{
    public function index()
    {
        $data=services::all();
        return view("home", compact("data"));
    }

    public function redirects()
    {
        $data=services::all();
        
       $usertype= Auth::user()->usertype;

       if($usertype=='1')
       {
           return view('admin.adminhome');
       }
       else
       {
           return view('home', compact('data'));
       }
    }
}


