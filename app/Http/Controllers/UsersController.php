<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UploaderRequest;
use Illuminate\Support\Facades\DB;

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
        $userId = $user->id;
        if ($request->hasFile('thum')) {
            var_dump($request->file('thum'));
            // ディレクトリを作成
            if (!file_exists(public_path() . "/movie/user/" . $userId)) {
                mkdir(public_path() . "/movie/user/" . $userId, 0777);
            }
            $thum_name = "thum" . "." . $request->file('thum')->guessExtension(); // TMPファイル名
            $request->file('thum')->move(public_path() . "/movie/user/" . $userId, $thum_name);
        }

        if ($request->hasFile('avatar')) {
            var_dump($request->file('avatar'));
            // ディレクトリを作成
            if (!file_exists(public_path() . "/img/user/" . $userId)) {
                mkdir(public_path() . "/img/user/" . $userId, 0777);
            }
            $thum_name = "thum" . "." . $request->file('avatar')->guessExtension(); // TMPファイル名
            $request->file('avatar')->move(public_path() . "/img/user/" . $userId, $thum_name);
            //TODO:画像完了時古い画像が表示される。更新で更新される。
        }
        
        $form = $request->all();
        $user->fill($form)->save();
        return view("users.index2", ['user' => $user]);
    }

    public function list(Request $request)
    {
        $user = Auth::user();

        $keyword = $request->input('site_search');
        #クエリ生成
        $query = User::query();
        // if (!empty($keyword)) {
        //     $query->where('title', 'like', '%' . $keyword . '%');
        // }
        //TODO:画像動画ファイル構成変更
        $users = $query->paginate(16);

        return view('users.list', ['users' => $users, 'user' => $user, 'keyword' => $keyword]);
    }
}
