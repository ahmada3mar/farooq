<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use App\Nova\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    use HasFactory;

    protected $fillable  = ['course_id' , 'user_id'];

    public function user(){

        return $this->belongsTo(ModelsUser::class , 'user_id');
    }

    public function course(){

        return $this->belongsTo(Course::class);
    }

}
