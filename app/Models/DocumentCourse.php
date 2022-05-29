<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentCourse extends Model
{

    public function section()
    {

        return $this->belongsTo(Section::class);
    }

    use HasFactory;
}


