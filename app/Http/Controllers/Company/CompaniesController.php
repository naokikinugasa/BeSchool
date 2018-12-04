<?php

namespace App\Http\Controllers\Company;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UploaderRequest;
use App\Product;

class CompaniesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:company');
    // }
    
    public function edit()
    {
        $user = Auth::user();
        return view("company.edit", ['user' => $user]);//TODO:comapnyかuserどちらかに統一
    }

    public function update(UploaderRequest $request)
    {
        $company = Auth::user();
        $userId = $company->id;
        if ($request->hasFile('thum')) {
            var_dump($userId);
            // ディレクトリを作成
            if (!file_exists(public_path() . "/movie/company/" . $userId)) {
                mkdir(public_path() . "/movie/company/" . $userId, 0777);
            }
            $thum_name = "thum" . "." . $request->file('thum')->guessExtension(); // TMPファイル名
            $request->file('thum')->move(public_path() . "/movie/company/" . $userId, $thum_name);
        }

        if ($request->hasFile('avatar')) {
            // ディレクトリを作成
            if (!file_exists(public_path() . "/img/company/" . $userId)) {
                mkdir(public_path() . "/img/company/" . $userId, 0777);
            }
            $thum_name = "thum" . $request->file('avatar')->guessExtension(); // TMPファイル名
            $request->file('avatar')->move(public_path() . "/img/company/" . $userId, $thum_name);
        }

        $form = $request->all();
        $company->fill($form)->save();
        return view("company.home", ['company' => $company]);
    }

    public function show(Request $request, $id)
    {

        $user = Auth::user();
        $company = Company::findOrFail($id);

        return view('company.show', ['company' => $company, 'user' => $user]);
    }
}
