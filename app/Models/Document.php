<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected static $class_names = [
        1=> 'الأول',
        2=> 'الثاني',
        3=> 'الثالث',
        4=> 'الرابع',
        5=> 'الخامس',
        6=> 'السادس',
        7=> 'السابع',
        8=> 'الثامن',
        19=> 'التاسع',
        10=> 'العاشر',
        11=> 'الأول ثانوي',
        12=> 'الثاني ثانوي',
    ];
    protected static $course_names = [
        1 => 'التربية الإسلامية',
        2 => 'اللغة العربية',
        3 => 'تاريخ الأردن',
        4 => 'علوم الحاسوب',
        5 => 'اللغة الانجليزية',
        6 => 'الرياضيات العلمي',
        7 => 'الرياضيات الادبي',
        8 => 'العلوم الحياتية',
        19 => 'الفيزياء',
        10 => 'الكيمياء',
        11 => 'علوم الارض والبيئة',
        12 => 'الثقافة المالية',
        13 => 'العلوم الإسلامية',
        14 => 'تاريخ العرب والعالم',
        15 => 'البلاغة والنقد',
        16 => 'قضايا أدبية',
        17 => 'النحو والصرف',
        18 => 'الجغرافيا',
    ];

    public function course() {

        return $this->belongsTo(Course::class);
     }

     public function section()
     {
 
         return $this->belongsTo(Section::class);
     }
}
