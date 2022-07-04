<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAnswerPolicy extends Policy
{
    static $key = 'user answers' ;
	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param User $user
	 * @param $model
	 *
	 * @return mixed
	 */
	public function delete(User $user, $model)
	{
		return false;
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param User $user
	 * @param $model
	 *
	 * @return mixed
	 */
	public function forceDelete(User $user, $model)
	{
		return \false;
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param User $user
	 * @param $model
	 *
	 * @return mixed
	 */
	public function restore(User $user, $model)
	{
		return $user->hasPermissionTo('restore ' . static::$key);
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param User $user
	 * @param $model
	 *
	 * @return mixed
	 */
	public function update(User $user, $model)
	{
		return false;
	}



}
