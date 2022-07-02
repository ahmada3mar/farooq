<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    use HasFactory;

    protected $fillable  = ['otp' , 'user_id' , 'expire_at'];

    // public static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($otp) {
    //         $otp->user_id = auth()->user()->id;
    //         $otp->otp = random_int(100000 , 999999);
    //         $otp->expire_at = Carbon::now()->addMinutes(30);
    //     });


    // }

    public function user(){

        return $this->belongsTo(User::class , 'user_id');
    }
}
