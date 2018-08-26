<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Transfer;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransferSent;

class TransferController extends Controller
{
    public function form()
    {
        $user = Auth::user();
        return view('transfer.form', compact('user'));
    }
    public function confirm(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'email' => 'required|email',
            'money' => 'required|integer',
        ]);

        $transfer = new Transfer($request->all());

        return view('transfer.confirm', compact('transfer', 'user'));
    }
    public function process(Request $request)
    {
        $user = Auth::user();

        $email = $request->email;
        $money = $request->money;


        Mail::to('sharetsukuba@gmail.com')->send(new TransferSent($email, $money));

        return view('transfer.complete', compact('user'));
    }
}
