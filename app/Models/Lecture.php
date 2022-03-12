<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    use HasFactory;



    public function course() {

        return $this->belongsTo(Course::class);
     }
    public function unit() {

        return $this->belongsTo(unit::class);
     }

    public function question(){

        return $this->hasMany(Question::class);
    }

    public function url(){
        $parts = parse_url($this->url);
        parse_str($parts['query'], $query);

        return  $query['v'];
    }
}
