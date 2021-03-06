<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Policy
{
    use HandlesAuthorization;

	/**
	 * Determine whether the user can create models.
	 *
	 * @param User $user
	 * @param $model
	 *
	 * @return mixed
	 */
	public function create(User $user)
	{
		return $user->hasPermissionTo('create ' . static::$key );
	}

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
		return $user->hasPermissionTo( 'delete ' . static::$key);
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
		return $user->hasPermissionTo('destroy ' . static::$key);
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
		return $user->hasPermissionTo('update ' . static::$key);
	}

	/**
	 * Determine whether the user can view the model.
	 *
	 * @param User $user
	 * @param $model
	 *
	 * @return mixed
	 */
	public function view(User $user, $model)
	{
		return $user->hasPermissionTo('view ' . static::$key);
	}

	/**
	 * @param User $user
	 *
	 * @param $model
	 *
	 * @return mixed
	 */
	public function viewAny(User $user)
	{
		return $user->hasPermissionTo('view ' . static::$key);
	}
}
