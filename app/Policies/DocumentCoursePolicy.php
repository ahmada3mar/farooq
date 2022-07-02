<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentCoursePolicy extends Policy
{
    static $key = 'document courses' ;

}
