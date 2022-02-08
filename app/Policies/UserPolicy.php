<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Policies\Policy;

class UserPolicy extends Policy
{
    static $key = 'users' ;

}
