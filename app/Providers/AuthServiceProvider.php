<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        $this->registerGates();

        //
    }
    private function registerGates()
    {
        Gate::define('is_admin', fn (User $user) => $user->role_id == 3);
        Gate::define('is_staff', fn (User $user) => $user->role_id == 2 || $user->role_id == 3);
        Gate::define('is_user', fn (User $user) => $user->role_id == 1);
    }
}
