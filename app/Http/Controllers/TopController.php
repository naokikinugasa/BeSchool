<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    //
    public function index()
    {
        $user = Auth::guard('company')->user()??Auth::guard('user')->user()??false;
        return view('home', compact("user"));
    }

    // public function howto()
    // {
    //     $user = Auth::user();
    //     return view('howto', compact("user"));
    // }

    // public function terms()
    // {
    //     $user = Auth::user();
    //     return view('terms', compact("user"));
    // }
}
