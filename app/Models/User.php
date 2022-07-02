<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
    ];

    protected $with = ['courses', 'registerdCourses' ,'section' ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'balance'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function courses(){

        return $this->hasMany(Course::class);
    }

    public function devices(){

        return $this->hasOne(Device::class);
    }

    public function otp(){

        return $this->hasOne(UserOtp::class);
    }


    public function registerdCourses(){

        return $this->hasManyThrough(Course::class ,UserCourse::class , 'user_id' , 'id' , null ,'course_id');
    }

    public function userCourses(){

        return $this->hasMany(UserCourse::class);
    }

    public function userAnswers(){

        return $this->hasMany(UserAnswer::class);
    }

    public function section(){

        return $this->belongsTo(Section::class);
    }

    public function isSuperAdmin(){

        return Auth::user()->hasRole('admin');
    }

    public function getActiveAttribute(){

        if($this->devices && $this->devices->expire_at <= Carbon::now()->toDateString()){
            return 0;
        }
        return 1;
    }

}
