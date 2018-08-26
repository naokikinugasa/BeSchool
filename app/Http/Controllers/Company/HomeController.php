<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = $user = Auth::user();
        return view('company.home', ['company' => $company]);
//        return view('home', compact("user"));
    }

    public function howto()
    {
        $user = Auth::user();
        return view('howto', compact("user"));
    }
}
