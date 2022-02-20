<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    use HasFactory;



    public function course() : BelongsTo{

        return $this->belongsTo(Course::class);
     }

    public function question(){

    return $this->hasMany(Question::class);
    }
}
