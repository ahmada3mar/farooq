<?php

namespace App\Http\Controllers;

use App\Models\Section;
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
            'email' => 'اسم المستخدم أو كلمة المرور غير متطابقة',
        ]);
    }

    public function register(){
       $this->validate(request(), [
            'name' => 'required',
            'mobile' => 'required',
            'city' => 'required',
            'area' => 'required',
            'title' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ], [
            'name.required' =>'يرجى تعبة الأسم',
            'email.required' =>'يرجى تعبة البريد الإلكتروني',
            'email.unique' =>'البريد الإلكتروني مسجل مسبقاً',
            'mobile.required' =>'يرجى تعبة رقم الهاتف',
            'city.required' =>'يرجى تعبة المدينة',
            'area.required' =>'يرجى تعبة المنطقة',
            'title.required' =>'يرجى تعبة التخصص',
            'password.min' =>'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل',
        ]);

        // dd($ee);
        $user = User::create(request(['name', 'email', 'password', 'mobile', 'city', 'area', 'title']));
        $user->assignRole('user');

        auth()->login($user);

        return redirect()->to('/');
    }

    public function registerIndex(){
        $sections = Section::orderBy('Order')->get();

        return Inertia::render('Register' , compact('sections'));
    }

    public function logout(Request $request){
        Auth::logout();;

        $request->session()->invalidate();

        return redirect('/');
    }
}
