<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\SiteConfig;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function loginIndex()
    {
        if (Auth::check()) {
            return redirect()->intended('/');
        }
        return Inertia::render('Login');
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if(Auth::user()->hasRole('user')){
                return  $this->validDevice($request);
            }
        }

        return back()->withErrors([
            'email' => 'اسم المستخدم أو كلمة المرور غير متطابقة',
        ]);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'city' => 'required',
            'area' => 'required',
            'section_id' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ], [
            'name.required' => 'يرجى تعبة الأسم',
            'email.required' => 'يرجى تعبة البريد الإلكتروني',
            'email.unique' => 'البريد الإلكتروني مسجل مسبقاً',
            'mobile.required' => 'يرجى تعبة رقم الهاتف',
            'city.required' => 'يرجى تعبة المدينة',
            'area.required' => 'يرجى تعبة المنطقة',
            'section_id.required' => 'يرجى تعبة التخصص',
            'password.min' => 'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->assignRole('user');

        $device_id = Str::uuid();
        $expire_at = Carbon::now()->addYear()->toDateString();
        $user->devices()->create(["uuid" => $device_id, 'expire_at' => $expire_at]);

        auth()->login($user);

        // 525600 = 1 year
        return Redirect::route('home')->withCookie(cookie('device_id', $device_id, 525600));
    }

    public function registerIndex()
    {

        return Inertia::render('Register');
    }

    public function logout(Request $request)
    {
        Auth::logout();;

        $request->session()->invalidate();

        return redirect('/');
    }

    public function validDevice($request)
    {
        $device_id = $request->cookie('device_id');
        $uuid = Auth::user()->devices->uuid ?? null;
        $support_mobile = SiteConfig::where('key', 'support_mobile')->first()->value ?? "0799878452";
        $error_msg = null;

        if (!$uuid) {

            $device_id = Str::uuid();
            $expire_at = Carbon::now()->addYear()->toDateString();
            Auth::user()->devices()->create(["uuid" => $device_id, 'expire_at' => $expire_at]);
            $request->session()->regenerate();
            return Redirect::route('home')->withCookie(cookie('device_id', $device_id, 525600));

        } elseif ($device_id != $uuid) {
            $error_msg = "هذا الجهاز غير مسجل،
            يرجى تسجيل الدخول من جهاز مسجل.
            في حال استمرار المشكلة يرجى الاتصال على
            $support_mobile";
        } elseif (!Auth::user()->active) {
            $error_msg = "تم انتهاء صلاحية الحساب. للمساعدة يرجى الاتصال على
            $support_mobile";
        }

        if ($error_msg) {
            Auth::logout();
            return back()->withErrors(['email' => $error_msg]);
        }

        $request->session()->regenerate();

        return redirect()->intended('/');
    }
}
