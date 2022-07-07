<?php

namespace App\Http\Controllers;

use App\Mail\Customers;
use App\Models\Section;
use App\Models\SiteConfig;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    public function index()
    {
        //
        return User::all();
    }

    public function sendEmail()
    {
        $user = Auth::user();
        $otp = random_int(100000, 999999);

        $user_otp = $user->otp()->updateOrCreate([], ['otp' => $otp, 'expire_at' => Carbon::now()->addMinutes(30)]);

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'OTP' => $user_otp->otp,
            'link' => base64_encode($user_otp->otp)
        ];

        Mail::to($user->email)->send(new Customers($data));
    }

    public function verification(Request $request, $data)
    {
        $data = base64_decode($data);
        $user = Auth::user();
        $otp = $user->otp;


        if (Carbon::now() < $otp->expire_at && $data == $otp->otp && !$user->email_verified_at) {
            $user->update(['email_verified_at' => Carbon::now()]);
            return redirect(\route('profile', $user->id));
        }

        return $request->expectsJson() ? response('الرمز المدخل غير صالح', 403) : redirect(route('verification_failed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile(User $user)
    {
        $settings = SiteConfig::where('key', 'LIKE', 'user%')->get();
        return Inertia::render('Profile2', compact('user' , 'settings' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return User::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
