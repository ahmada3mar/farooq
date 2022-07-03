<?php

namespace App\Providers;

use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\ParchusedCourses;
use App\Nova\Metrics\UsersPerDay;
use App\Nova\Metrics\UsersPerSection;
use App\Nova\Role;
use App\Policies\PermissionPolicy;
use App\Policies\RolePolicy;
use Digitalcloud\MultilingualNova\Http\Middleware\InitializeLanguage;
use Digitalcloud\MultilingualNova\NovaLanguageTool;
use Farooq\GenerateCards\GenerateCards;
use Farooq\Storage\Storage;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;


class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return $user->hasPermissionTo('access admin panel');
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new NewUsers(),
            new ParchusedCourses(),
            new UsersPerSection(),
            new UsersPerDay(),
            new Storage(),
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            \Vyuldashev\NovaPermission\NovaPermissionTool::make()
            ->roleResource(Role::class)
            ->rolePolicy(RolePolicy::class)
            ->permissionPolicy(PermissionPolicy::class),
            new NovaLanguageTool(),
            (new GenerateCards())->canSee(function($request){
               $user = $request->user();
                return $user->hasRole('admin');
            })

        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Nova::sortResourcesBy(function ($resource) {
            return $resource::$order ?? 99999;
        });
    }


}
