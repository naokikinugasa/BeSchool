<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SocialAccountsService;

class SocialAccountController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return \Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information
     *
     * @return Response
     */
    public function handleProviderCallback(\App\SocialAccountsService $accountService, $provider)
    {

        try {
            $user = \Socialite::with($provider)->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        if ($user->email == '') {
            $email_error = $provider . 'にメールアドレスが設定されていません';
            return view('auth.login', compact('email_error'));
        }

        $authUser = $accountService->findOrCreate(
            $user,
            $provider
        );

        auth()->login($authUser, true);

        return redirect()->to('/');
    }
}
