<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unit extends Model
{
    use HasFactory;

    public function lectures(){

        return $this->hasMany(Lecture::class);
    }
    public function course() {

        return $this->belongsTo(Course::class);
     }
}
