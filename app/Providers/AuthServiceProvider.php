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

        //Recibre nombre de regla y una function
        //Gate::define('create-projects','App\Policies\ProjectPolicy@create');

        //Politica para mostrar li.
        Gate::define('view-deleted-projects',function ($user){
            return $user->role === 'admin';
        });
    }
}
