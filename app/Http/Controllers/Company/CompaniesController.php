<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:company');
    }
    
    public function edit()
    {
        $user = Auth::user();
        return view("company.edit", ['user' => $user]);//TODO:comapnyかuserどちらかに統一
    }

    public function update(Request $request)
    {
        $company = Auth::user();
        $form = $request->all();
        $company->fill($form)->save();
        return view("company.home", ['company' => $company]);
    }
}
