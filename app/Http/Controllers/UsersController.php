<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UploaderRequest;

class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view("users.index2", ['user' => $user]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("users.index", ['user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view("users.edit", ['user' => $user]);
    }

    public function update(UploaderRequest $request)
    {
        $user = Auth::user();

        var_dump($request);
        if ($request->hasFile('thum')) {
            var_dump($request->file('thum'));
            $userId = $user->id;
            // ディレクトリを作成
            if (!file_exists(public_path() . "/img/user/" . $userId)) {
                mkdir(public_path() . "/img/user/" . $userId, 0777);
            }
            $thum_name = uniqid("THUM_") . "." . $request->file('thum')->guessExtension(); // TMPファイル名
            $request->file('thum')->move(public_path() . "/img/user/", $thum_name);
        } else {
            var_dump('aaaaaaaa');
        }
        

        $form = $request->all();
        $user->fill($form)->save();
        return view("users.index2", ['user' => $user]);
    }
}
