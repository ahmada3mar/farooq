<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function documentCourses(){
        return $this->hasMany(DocumentCourse::class , 'section_id' , 'id' );
    }
    public function documents(){
        return $this->hasMany(Document::class);
    }

}
