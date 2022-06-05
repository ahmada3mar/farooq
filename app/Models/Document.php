<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;


    public function documentCourse()
    {

        return $this->belongsTo(DocumentCourse::class);
    }

     public function section()
     {
 
         return $this->belongsTo(Section::class);
     }
}
