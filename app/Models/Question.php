<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    use HasFactory;

    public function lecture() : BelongsTo{

        return $this->belongsTo(Lecture::class);
    }

    public  function getCourse() : BelongsTo {

        return $this->lecture->course();

    }

    public function answer(){

        return $this->hasMany(Answer::class);
    }
}
