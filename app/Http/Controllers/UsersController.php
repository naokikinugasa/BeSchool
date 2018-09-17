<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function update(Request $request)
    {
        $user = Auth::user();
        $form = $request->all();
        $user->fill($form)->save();
        return view("users.index2", ['user' => $user]);
    }
}
