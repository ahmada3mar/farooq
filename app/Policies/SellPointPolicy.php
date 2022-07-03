<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SellPointPolicy extends Policy
{
    static $key = 'sell points' ;

}
