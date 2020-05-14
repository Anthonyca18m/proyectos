<?php

namespace proyect_one\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'proyect_one\Model' => 'proyect_one\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function ($user) {
            return $user->type === 'Admin';
        });

        Gate::define('isUser', function ($user) {
            return $user->type === 'User';
        });
        
        Gate::define('isAutor', function ($user) {
            return $user->type === 'Autor';
        });

        //
        Passport::routes();
    }
}
