<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSent;

class ContactController extends Controller
{
    public function form()
    {
        $user = Auth::user();
        return view('contact.form', compact('user'));
    }
    public function confirm(Request $request)
    {
        $user = Auth::user();

        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email',
            'content' => 'present',
        ]);

        $contact = new Contact($request->all());

        return view('contact.confirm', compact('contact', 'user'));
    }
    public function process(Request $request)
    {
        $user = Auth::user();
        // お問い合わせフォームへの入力内容を保持したモデルオブジェクトを用意
        $title = $request->title;
        $text = $request->message;
        $email = $request->email;


        Mail::to('sharetsukuba@gmail.com')->send(new ContactSent($title, $text, $email));

        return view('contact.complete', compact('user'));
    }
}
