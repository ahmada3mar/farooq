<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Card extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::creating(function ($card) {
            $card->serial_number = static::random();
            $card->password = Str::random(6);
        });

    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public static function random(){
        return self::genNumber();
    }

    private static function genNumber(){
        $num  = random_int(100000000, 999999999);

        if(Card::where('serial_number' , $num)->exists()){
            return self::genNumber();
        }

        return $num;
    }
}
