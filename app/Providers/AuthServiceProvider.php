<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /*Gate::define('realestate', function (User $user) {
            return ($user->role === 'realestate');
        });

        Gate::define('general', function (User $user) {
            return ($user->role === 'designer');
        });
        
        Gate::define('customer', function (User $user) {
            return ($user->role === 'customer');
        });*/
    }
}
