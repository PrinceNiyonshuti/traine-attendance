<?php

namespace App\Providers;

use App\Models\Trainee;
use App\Models\User;
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

        // Mentor Guard
        Gate::define('mentor', function (User $user) {
            return $user?->role_id == '1';
        });

        // Trainee Guard
        Gate::define('trainee', function (User $user) {
            return $user?->role_id == '2';
        });
    }

}
