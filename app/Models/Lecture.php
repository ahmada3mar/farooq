<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    use HasFactory;


    protected  $with = ['attachment'];


    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('order');
        });
    }

    public function course() {

        return $this->belongsTo(Course::class);
     }
    public function unit() {

        return $this->belongsTo(Unit::class);
     }

    public function question(){

        return $this->hasOne(Question::class);
    }

    public function attachment(){

        return $this->hasMany(Attachment::class);
    }

    public function getUrlAttribute($value){

        if($value){
            $parts = parse_url($value);
            $array = explode("/" ,$parts['path'] ?? "/");
            $value = $array[3] ?? '';
        }

        return  $value;
    }
}
