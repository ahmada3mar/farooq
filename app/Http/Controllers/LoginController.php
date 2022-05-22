<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function loginIndex(){
        if (Auth::check()) {
            return redirect()->intended('/');
        }
        return Inertia::render('Login');
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register(){
       $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ], [
            'name.required' =>'يرجى تعبة الأسم',
            'email.required' =>'يرجى تعبة البريد الإلكتروني',
            'email.unique' =>'البريد الإلكتروني مسجل مسبقاً',
            'password.required' =>'يرجى اختيار كلمة المرور',
        ]);

        // dd($ee);
        $user = User::create(request(['name', 'email', 'password']));
        $user->assignRole('user');

        auth()->login($user);

        return redirect()->to('/');
    }

    public function registerIndex(){
        return Inertia::render('Register');
    }

    public function logout(Request $request){
        Auth::logout();;

        $request->session()->invalidate();

        return redirect('/');
    }
}
