<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('list-permissions', fn (User $user) => $user->isAdmin());
        Gate::define('update-permissions', fn (User $user) => $user->isAdmin());
        
        Gate::define('list-categories', fn (User $user) => $user->permissions()->where(['permissions.name' => 'list-categories'])->exists());
        Gate::define('list-products', fn (User $user) => $user->permissions()->where(['permissions.name' => 'list-products'])->exists());
        Gate::define('list-brands', fn (User $user) => $user->permissions()->where(['permissions.name' => 'list-brands'])->exists());
    }
}
