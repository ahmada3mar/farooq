<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;



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
