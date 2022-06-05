<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentCourse extends Model
{
    use HasFactory;

    public function section()
    {

        return $this->belongsTo(Section::class);
    }

    public function documents()
    {

        return $this->hasMany(Document::class);
    }

}


