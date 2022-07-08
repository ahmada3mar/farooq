<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


   protected $with = ['section'];


    protected static $class_names = [
        1 => 'الأول',
        2 => 'الثاني',
        3 => 'الثالث',
        4 => 'الرابع',
        5 => 'الخامس',
        6 => 'السادس',
        7 => 'السابع',
        8 => 'الثامن',
        19 => 'التاسع',
        10 => 'العاشر',
        11 => 'الأول ثانوي',
        12 => 'الثاني ثانوي',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($course) {
            $course->user_id = $course->user_id ?? auth()->user()->id;
        });


    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function section()
    {

        return $this->belongsTo(Section::class);
    }


    public function lectures()
    {
        return $this->hasMany(Lecture::class);
    }

    public function units()
    {

        return $this->hasMany(Unit::class);
    }
}
