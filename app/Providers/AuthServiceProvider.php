<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('logged-in', function($users){
            return $users;
        });
        // Gate::define('only-user', function($users){
        //     return $users->hasAnyRole('user');
        // });

        Gate::define('is-admin', function($users){
            return $users->hasAnyRole('admin');
        });

        Gate::define('is-trainer', function($users){
            return $users->hasAnyRole('trainer');
        });
    }
}
