<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAnswerPolicy extends Policy
{
    static $key = 'user answers' ;

}
