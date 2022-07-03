<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Inertia\Inertia;
use Illuminate\Support\Str;


class PasswordController extends Controller
{


    public function forgot()
    {
        Inertia::render('ForgetPassword');
    }



    public function reset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->withErrors(['status' => __($status, [], "ar")])
            : back()->withErrors(['email' => __($status, [], 'ar')]);
    }

    public function token(Request $request, $token)
    {
        $email = $request->get('email') ?? "";
        return Inertia::render('ResetPassword', compact('token', 'email'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->withErrors(['status' => __($status, [], "ar")])
            : back()->withErrors(['email' => [__($status, [], "ar")]]);
    }
}
