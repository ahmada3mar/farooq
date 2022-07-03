<?php
namespace App\Nova;

use Laravel\Nova\Resource as NovaResource;
use Laravel\Nova\Http\Requests\NovaRequest;

abstract class ResourceForUser extends NovaResource
{
    /**
     * Build a "detail" query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param  \Illuminate\Database\Eloquent\Builder   $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function detailQuery(NovaRequest $request, $query)
    {
        $user = $request->user();

        // Super Admin
        if ($user->isSuperAdmin()) {
            return $query;
        }

        // User Can View all Entries and is not restricted to its own
        if (!$user->hasPermissionTo('view own ' . parent::uriKey()) && $user->hasPermissionTo('view ' . parent::uriKey())) {
            return $query;
        }

        return parent::detailQuery($request, static::relation($query , $request));
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param  \Illuminate\Database\Eloquent\Builder   $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        $user = $request->user();

        // Super Admin
        if ($user->isSuperAdmin()) {
            return $query;
        }

        // If the User has only Permission to view his own Entries, we scope the query.
        if ($user->hasPermissionTo('view own ' . parent::uriKey())) {
            return static::relation($query , $request);
        }

        return $query;
    }

    /**
     * Build a "relatable" query for the given resource.
     *
     * This query determines which instances of the model may be attached to other resources.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param  \Illuminate\Database\Eloquent\Builder   $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function relatableQuery(NovaRequest $request, $query)
    {
        $user = $request->user();

        // Super Admin
        if ($user->isSuperAdmin()) {
            return parent::relatableQuery($request, $query);
        }

        // User Can View all Entries and is not restricted to its own
        if (!$user->hasPermissionTo('view own ' . parent::uriKey()) && $user->hasPermissionTo('view ' . parent::uriKey())) {
            return parent::relatableQuery($request, $query);
        }

        return parent::relatableQuery($request, static::relation($query , $request) );
    }

    /**
     * Build a Scout search query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest $request
     * @param  \Laravel\Scout\Builder                  $query
     * @return \Laravel\Scout\Builder
     */
    public static function scoutQuery(NovaRequest $request, $query)
    {
        $user = $request->user();

        // Super Admin
        if ($user->isSuperAdmin()) {
            return $query;
        }

        // User Can View all Entries and is not restricted to its own
        if (!$user->hasPermissionTo('view own ' . parent::uriKey()) && $user->hasPermissionTo('view ' . parent::uriKey())) {
            return $query;
        }

        return static::relation($query , $request);
    }


    public static function relation($query  , $request){
        $user = $request->user();

        return $query->where('user_id', $user->id);
    }
}
